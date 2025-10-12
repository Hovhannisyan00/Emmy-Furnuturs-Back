<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Order\IOrderRepository;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Requests\Order\OrderSearchRequest;
use App\Models\Basket\Basket;
use App\Models\Order\Order;
use App\Models\Order\OrderSearch;
use App\Services\Order\OrderService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function checkout(): RedirectResponse
    {
        dd(111111);
        $user = Auth::user();
        $basket = Basket::with('items.product')->where('user_id', $user->id)->first();

        if (!$basket || $basket->items->isEmpty()) {
            return redirect()->back()->with('error', 'Ваша корзина пуста.');
        }

        DB::beginTransaction();
        try {
            // Создаем заказ
            $order = Order::create([
                'user_id' => $user->id,
                'total' => $basket->items->sum(fn($item) => $item->quantity * $item->product->price),
                'items' => $basket->items->map(fn($item) => [
                    'product_id' => $item->product_id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity
                ])->toArray(),
                'status' => 'pending',
            ]);

            // Очищаем корзину
            $basket->items()->delete();

            DB::commit();

            return redirect()->route('order.show', $order->id)->with('success', 'Заказ успешно оформлен!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Ошибка при оформлении заказа: ' . $e->getMessage());
        }
    }

    // История заказов
    public function indexes(): View
    {
        $orders = Order::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('web.orders.index', compact('orders'));
    }

    // Детали заказа
    public function shows($id): View
    {
        $order = Order::where('user_id', Auth::id())->findOrFail($id);
        $items = json_decode($order->items, true);

        return view('web.orders.show', compact('order', 'items'));
    }

    public function checkoutPage(): RedirectResponse|View
    {
        $basket = Basket::with('items.product')->where('user_id', Auth::id())->first();

        if (!$basket || $basket->items->isEmpty()) {
            return redirect()->route('web.cart')->with('error', 'Ваша корзина пуста.');
        }

        $total = $basket->items->sum(fn($item) => $item->quantity * $item->product->price);

        return view('web.checkout', [
            'basket' => $basket,
            'items' => $basket->items,
            'total' => $total,
            'user' => Auth::user(),
        ]);
    }
}
