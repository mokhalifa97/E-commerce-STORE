<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/shop','ShopController@index')->name('shop');
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/blog/detail','BlogController@detail')->name('blog.detail');
Route::get('/contact','ContactController@index')->name('contact');
