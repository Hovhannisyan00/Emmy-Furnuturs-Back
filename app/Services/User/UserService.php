<?php

namespace App\Services\User;

use App\Contracts\Role\IRoleRepository;
use App\Contracts\User\IUserRepository;
use App\Services\BaseService;
use App\Services\File\FileTempService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{
    public function __construct(
        IUserRepository $repository,
        FileTempService $fileService,
        protected IRoleRepository $roleRepository
    ) {
        $this->repository = $repository;
        $this->fileService = $fileService;
    }

    public function getViewData(?int $id = null): array
    {
        if ($id) {
            $user = $this->repository->find($id);
            $user->load('coupons', 'roles'); // Добавьте эту строку

            $userRoleIds = $user->roles->pluck('id')->all();
        }

        return [
            'roles' => $this->roleRepository->getForSelect(),
            'user' => $user ?? $this->repository->getInstance(),
            'userRoleIds' => $userRoleIds ?? null,
        ];
    }

    public function createOrUpdate(array $data, ?int $id = null): Model
    {
        $data = array_filter($data);
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        return DB::transaction(function () use ($id, $data) {
            $user = $id
                ? $this->repository->update($id, $data)
                : $this->repository->create($data);

            // Roles
            $user->syncRolesData($data['role_ids']);

            // File
            $this->fileService->storeFile($user, $data);

            // Coupon
            $this->handleCoupon($user, $data);

            return $user;
        });
    }

    private function handleCoupon(Model $user, array $data): void
    {
        $hasCoupon = !empty($data['coupon']) && !empty($data['coupon_discount']);

        // If no coupon data provided — do nothing
        if (!$hasCoupon) {
            return;
        }

        // Delete old coupon (only 1 coupon allowed per user)
        $user->coupons()->delete();

        // Create new coupon
        $user->coupons()->create([
            'coupon' => $data['coupon'],
            'discount' => $data['coupon_discount'],
            'is_expired' => false,
        ]);
    }
}
