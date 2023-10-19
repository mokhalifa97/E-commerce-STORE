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
        // dd($this->cartItems = Cart::content());
    }

    public function decreaseQuantity($rowId){
        $product= Cart::get($rowId);
        $qty=-1;
        Cart::update($rowId,$qty);
    }

    public function increaseQuantity($rowId){
        $product= Cart::get($rowId);
        $qty =+1;
        Cart::update($rowId,$qty);
    }

    public function remove($rowId){
        Cart::remove($rowId);
        session()->flash('success', 'item deleted successfully');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
