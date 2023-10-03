<?php

use Http\Livewire\Shop;
use Http\Livewire\About;
use Http\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/test',Home::class);
Route::get('/about',About::class)->name('about');
Route::get('/shop',Shop::class)->name('shop');


Route::get('/checkout', function () {
    return view('SubPages.checkOut');
});

Route::get('/privacy', function () {
    return view('SubPages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('SubPages.terms');
})->name('terms');



Auth::routes();

Route::get('/', 'Http\Controllers\HomeController@index')->name('home');
// Route::get('/about','Http\Controllers\AboutController@index')->name('about');
// Route::get('/shop','Http\Controllers\ShopController@index')->name('shop');
Route::get('/product/{id}','Http\Controllers\DetailsController@show')->name('details.product');
Route::get('/blog','Http\Controllers\BlogController@index')->name('blog');
Route::get('/blog/detail','Http\Controllers\BlogController@detail')->name('blog.detail');
Route::get('/contact','Http\Controllers\ContactController@index')->name('contact');
Route::get('/account','Http\Controllers\AccountController@index')->name('account');

Route::get('/cart', 'Http\Controllers\CartController@index')->name('cart');

Route::get('/admin/home', 'Http\Controllers\HomeController@adminHome')->name('admin.home')->middleware('is_admin');