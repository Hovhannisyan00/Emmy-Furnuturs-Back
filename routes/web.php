<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Web\Product\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false, 'reset' => false]);

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('auth/logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// Route::get('/', function () {
//    return redirect(route('login'));
// });

// Route::get('/my', function () {
//    return view('web.home');
// });

// Redirect root to home
Route::get('/', function () {
    return redirect()->route('web.home');
});

// Public pages
Route::view('/home', 'web.home')->name('web.home');
Route::view('/about', 'web.about-us')->name('web.about');
Route::view('/team', 'web.team')->name('web.team');
Route::view('/what-we-offer', 'web.shop')->name('web.what-we-offer');
Route::view('/shop', 'web.shop')->name('web.shop');
Route::view('/product', 'web.single-product')->name('web.single-product');
Route::view('/faq', 'web.faq')->name('web.faq');
Route::view('/contact', 'web.contact')->name('web.contact');
Route::view('/blog', 'web.blog')->name('web.blog');
Route::view('/gallery', 'web.gallery')->name('web.gallery');
Route::view('/contact-us', 'web.contact-us')->name('web.contact-us');

Route::view('/wedding-furnitures', 'web.wedding-furnitures')->name('wedding.furnitures');
Route::view('/birthday-furnitures', 'web.birthday-furnitures')->name('birthday.furnitures');
Route::view('/macarons', 'web.macarons')->name('macarons');
Route::view('/cup-furnitures', 'web.cup-furnitures')->name('cup.furnitures');
Route::view('/biscuits', 'web.biscuits')->name('biscuits');

// Legal pages
Route::view('/privacy-policy', 'web.privacy-policy')->name('web.privacy.policy');
Route::view('/terms-and-conditions', 'web.terms')->name('web.terms');

// Auth user pages
Route::view('/cart', 'web.cart')->name('web.cart');
// Route::get('/cart/{id}', [CartController::class, 'index'])->name('web.cart');
Route::view('/checkout', 'web.checkout')->name('web.checkout');

// Product
Route::get('/products', [ProductController::class, 'index'])->name('web.products');
Route::get('/products/get-eight', [ProductController::class, 'getEightProducts'])->name('web.getEightProducts');
Route::get('/product/{id}', [ProductController::class, 'getProduct'])->name('web.get.product');

// Example for a catch-all page if needed
Route::fallback(function () {
    return view('web.404');
});
