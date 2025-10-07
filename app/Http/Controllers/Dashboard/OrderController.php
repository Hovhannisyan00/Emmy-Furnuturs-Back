<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Order\IOrderRepository;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Requests\Order\OrderSearchRequest;
use App\Models\Order\Order;
use App\Models\Order\OrderSearch;
use App\Services\Order\OrderService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class OrderController extends BaseController
{
    public function __construct(
        OrderService $service,
        IOrderRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('order.index');
    }

    public function getListData(OrderSearchRequest $request): array
    {
        $searcher = new OrderSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'order.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(OrderRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.orders.index')
        ]);
    }

    public function show(Order $order): View
    {
        /* return $this->dashboardView(
            view: 'order.form',
            vars: $this->service->getViewData($order->id),
            viewMode: 'show'
        );*/
    }

    public function edit(Order $order): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'order.form',
            vars: $this->service->getViewData($order->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'order.form',
            vars: ['order' => $order],
            viewMode: 'edit'
        );
    }

    public function update(OrderRequest $request, Order $order): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $order->id);
        $this->repository->update($order->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.orders.index')
        ]);
    }

    public function destroy(Order $order): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($order->id);
        $this->repository->destroy($order->id);

        return $this->sendOkDeleted();
    }
}
