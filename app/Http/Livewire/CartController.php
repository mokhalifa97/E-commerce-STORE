<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Livewire\Component;
// use Darryldecode\Cart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;




class CartController extends Component
{

    public $cartItems;
    public $cartItem=[];

    public function mount()
    {
        $this->cartItems = Cart::content();
    }

    public function render()
    {
        
        return view('livewire.cart');
    }
}
