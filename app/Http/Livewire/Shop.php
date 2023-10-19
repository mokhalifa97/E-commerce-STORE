<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Livewire\Component;
use Livewire\WithPagination;
// use Darryldecode\Cart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;





class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function addToCart($productId)
    {
        $Product = Product::find($productId);
        Cart::add([
            'id' => $Product->id,
            'name' => $Product->name,
            'price' => $Product->regular_price,
            'qty' => '1',
            
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
