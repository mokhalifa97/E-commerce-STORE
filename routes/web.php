<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// Route::get('/cart', function () {
//     return view('SubPages.cart');
// })->name('cart');

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/shop','ShopController@index')->name('shop');
Route::get('/product/{id}','DetailsController@show')->name('details.product');
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/blog/detail','BlogController@detail')->name('blog.detail');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/account','AccountController@index')->name('account');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');