<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        $cartItems = CartFacade::getContent();
        return view('livewire.cart', [
            'cartItems' => $cartItems,
        ]);
    }
}
