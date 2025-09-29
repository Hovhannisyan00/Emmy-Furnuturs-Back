<?php

namespace App\Http\Controllers\Web\Cart;

use Illuminate\View\View;

class CartController extends Controller
{
    public function index(int $id): View
    {
        //$cart = Cart::with('items.product')->findOrFail($id);
        return view('cart.show');
    }
}
