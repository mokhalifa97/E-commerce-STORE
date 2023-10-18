<?php

use Http\Livewire\CartController;
use Http\Livewire\BlogDetail;
use Http\Livewire\ProductPage;
use Http\Livewire\Account;
use Http\Livewire\Contact;
use Http\Livewire\Blog;
use Http\Livewire\Shop;
use Http\Livewire\About;
use Http\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/about',About::class)->name('about');
Route::get('/shop',Shop::class)->name('shop');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/account',Account::class)->name('account');
Route::get('/cart',CartController::class)->name('cart');
Route::get('/product/{id}',ProductPage::class)->name('product');
Route::get('/blog-detail',BlogDetail::class)->name('blog.detail');


Route::get('/checkout', function () {
    return view('SubPages.checkOut');
})->name('checkOut');;

Route::get('/privacy', function () {
    return view('SubPages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('SubPages.terms');
})->name('terms');



Auth::routes();

Route::get('/admin/home', 'Http\Controllers\HomeController@adminHome')->name('admin.home')->middleware('is_admin');