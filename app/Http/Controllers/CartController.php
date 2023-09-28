<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(){
        $cartItems= Cart::getContent();
        return view('SubPages.cart', compact('cartItems'));
    }



}
