<?php

namespace App\Http\Controllers\Web\Basket;

use App\Http\Controllers\Dashboard\BaseController;
use App\Models\Basket\Basket;
use App\Models\BasketItem\BasketItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends BaseController
{
    public function show()
    {
        $basket = Basket::with('items.product')->firstOrCreate(['user_id' => Auth::id()]);

        return view('web.cart', [
            'basket' => $basket,
            'items' => $basket->items,
            'total' => $basket->items->sum(fn($item) => $item->quantity * $item->product->price)
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $basket = Basket::firstOrCreate(['user_id' => Auth::id()]);

        $basketItem = BasketItem::where('basket_id', $basket->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($basketItem) {
            $basketItem->quantity += $request->quantity ?? 1;
            $basketItem->save();
        } else {
            BasketItem::create([
                'basket_id' => $basket->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity ?? 1
            ]);
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Товар добавлен в корзину']);
        }

        return redirect()->back()->with('success', 'Товар добавлен в корзину');
    }

    // Обновить количество товара
    public function updateQuantity(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:basket_items,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $basketItem = BasketItem::findOrFail($request->item_id);
        $basketItem->quantity = $request->quantity;
        $basketItem->save();

        return redirect()->back()->with('success', 'Количество обновлено');
    }

    // Удалить товар из корзины
    public function remove($id)
    {
        $basketItem = BasketItem::findOrFail($id);
        $basketItem->delete();

        return redirect()->back()->with('success', 'Товар удален из корзины');
    }

    public function getData()
    {
        $user = Auth::user();

        // Получаем товары корзины (пример)
        $basketItems = $user->basket?->items()->with('product')->get() ?? collect();

        $total = $basketItems->sum(fn($item) => $item->product->price * $item->quantity);

        return response()->json([
            'count' => $basketItems->count(),
            'total' => $total,
            'items' => $basketItems->map(fn($item) => [
                'id' => $item->id,
                'name' => $item->product->name,
                'price' => $item->product->price,
                'quantity' => $item->quantity,
                'image' => $item->product->photo1,
            ]),
        ]);
    }
}
