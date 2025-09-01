<?php

namespace App\Services\Categorie;

use App\Contracts\Categorie\ICategorieRepository;
use App\Services\BaseService;

class CategorieService extends BaseService
{
    public function __construct(
        ICategorieRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function getCategorieList(): array{
        return $this->repository->getCategoriesForSelect();
    }
}
