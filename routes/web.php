<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GategoryController;
use App\Http\Controllers\InvoiceinController;
use App\Http\Controllers\InvoiceoutController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductinController;
use App\Http\Controllers\ProductoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mp');
});
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/show',[ProductController::class,'show'])->name('product.show');
Route::get('product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('product/destroyall',[ProductController::class,'destroy'])->name('product.destroyall');

Route::get('category/create',[GategoryController::class,'create'])->name('category.create');
Route::post('category/store',[GategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[GategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[GategoryController::class,'update'])->name('category.update');
Route::get('category/show',[GategoryController::class,'show'])->name('category.show');
Route::get('category/destroy/{id}',[GategoryController::class,'destroy'])->name('category.destroy');
Route::get('category/destroyall',[GategoryController::class,'destroy'])->name('category.destroyall');


Route::get('customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::get('customer/show',[CustomerController::class,'show'])->name('customer.show');
Route::get('customer/destroy/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
Route::get('customer/destroyall',[CustomerController::class,'destroy'])->name('customer.destroyall');


Route::get('cart/create',[CartController::class,'create'])->name('cart.create');
Route::post('cart/store',[CartController::class,'store'])->name('cart.store');
Route::get('cart/edit/{id}',[CartController::class,'edit'])->name('cart.edit');
Route::post('cart/update/{id}',[CartController::class,'update'])->name('cart.update');
Route::get('cart/show',[CartController::class,'show'])->name('cart.show');
Route::get('cart/destroy/{id}',[CartController::class,'destroy'])->name('cart.destroy');
Route::get('cart/destroyall',[CartController::class,'destroy'])->name('cart.destroyall');


Route::get('invoicein/create',[InvoiceinController::class,'create'])->name('invoicein.create');
Route::post('invoicein/store',[InvoiceinController::class,'store'])->name('invoicein.store');
Route::get('invoicein/edit/{id}',[InvoiceinController::class,'edit'])->name('invoicein.edit');
Route::post('invoicein/update/{id}',[InvoiceinController::class,'update'])->name('invoicein.update');
Route::get('invoicein/show',[InvoiceinController::class,'show'])->name('invoicein.show');
Route::get('invoicein/destroy/{id}',[InvoiceinController::class,'destroy'])->name('invoicein.destroy');
Route::get('invoicein/destroyall',[InvoiceinController::class,'destroy'])->name('invoicein.destroyall');


Route::get('invoiceout/create',[InvoiceoutController::class,'create'])->name('invoiceout.create');
Route::post('invoiceout/store',[InvoiceoutController::class,'store'])->name('invoiceout.store');
Route::get('invoiceout/edit/{id}',[InvoiceoutController::class,'edit'])->name('invoiceout.edit');
Route::post('invoiceout/update/{id}',[InvoiceoutController::class,'update'])->name('invoiceout.update');
Route::get('invoiceout/show',[InvoiceoutController::class,'show'])->name('invoiceout.show');
Route::get('invoiceout/destroy/{id}',[InvoiceoutController::class,'destroy'])->name('invoiceout.destroy');
Route::get('invoiceout/destroyall',[InvoiceoutController::class,'destroy'])->name('invoiceout.destroyall');


Route::get('productin/create',[ProductinController::class,'create'])->name('productin.create');
Route::post('productin/store',[ProductinController::class,'store'])->name('productin.store');
Route::get('productin/edit/{id}',[ProductinController::class,'edit'])->name('productin.edit');
Route::post('productin/update/{id}',[ProductinController::class,'update'])->name('productin.update');
Route::get('productin/show',[ProductinController::class,'show'])->name('productin.show');
Route::get('productin/destroy/{id}',[ProductinController::class,'destroy'])->name('productin.destroy');
Route::get('productin/destroyall',[ProductinController::class,'destroy'])->name('productin.destroyall');


Route::get('productout/create',[ProductoutController::class,'create'])->name('productout.create');
Route::post('productout/store',[ProductoutController::class,'store'])->name('productout.store');
Route::get('productout/edit/{id}',[ProductoutController::class,'edit'])->name('productout.edit');
Route::post('productout/update/{id}',[ProductoutController::class,'update'])->name('productout.update');
Route::get('productout/show',[ProductoutController::class,'show'])->name('productout.show');
Route::get('productout/destroy/{id}',[ProductoutController::class,'destroy'])->name('productout.destroy');
Route::get('productout/destroyall',[ProductoutController::class,'destroy'])->name('productout.destroyall');



Route::get('pc/create',[ProductCartController::class,'create'])->name('pc.create');
Route::post('pc/store',[ProductCartController::class,'store'])->name('pc.store');
Route::get('pc/edit/{id}',[ProductCartController::class,'edit'])->name('pc.edit');
Route::post('pc/update/{id}',[ProductCartController::class,'update'])->name('pc.update');
Route::get('pc/show',[ProductCartController::class,'show'])->name('pc.show');
Route::get('pc/destroy/{id}',[ProductCartController::class,'destroy'])->name('pc.destroy');
Route::get('pc/destroyall',[ProductCartController::class,'destroy'])->name('pc.destroyall');
