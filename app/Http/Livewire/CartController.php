<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Livewire\Component;
// use Darryldecode\Cart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;




class CartController extends Component
{

    public $cartItems;

    public function mount()
    {
        $this->cartItems = Cart::content();
    }

    public function delete(){
        dd('win today');
    }

    public function render()
    {
        $subTotal = Cart::subtotal();

        return view('livewire.cart',["sub" => $subTotal]);
    }
}
