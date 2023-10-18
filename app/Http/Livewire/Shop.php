<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Darryldecode\Cart\Cart;




class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function addToCart($productId)
    {
        $Product = Product::find($productId);
        \Cart::add([
            'id' => $Product->id,
            'name' => $Product->name,
            'price' => $Product->regular_price,
            'qty' => $Product->quantity,
            
        ]);
        return redirect()->route('cart');
    }

    public function render()
    {
        // $this->products= Product::paginate(6);
        $products= Product::all();
        return view('livewire.shop', ['products'=>$products]);
    }
}
