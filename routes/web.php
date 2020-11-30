<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/logout', function () {
    Auth::logout();
    return view('home');
});

// shoping cart routes //
Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('addToCart');
Route::get('/shoping-cart', [ProductController::class, 'getCart'])->name('shoppingCart');
Route::get('/reduce/{id}', [ProductController::class, 'getReduceByOne'])->name('reduce');
Route::get('/remove/{id}', [ProductController::class, 'getRemoveItem'])->name('remove');
Route::get('/shopping-cart', function(){return view('shopping-cart');})->name('shopping-cart');