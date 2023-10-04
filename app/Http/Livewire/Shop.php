<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\WithPagination;



class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function store(){
        // $product=Product::find($product_id);
        // CartFacade::add([
        //     'id' => $product->id,
        //     'name' => $product->name,
        //     'price' => $product->price,
        // ]);
        // session()->flash('success', 'Item added to cart successfully!');
        // return redirect()->route('cart');
        dd('whats');

    }

    public function render()
    {
        $product= Product::paginate(6);
        return view('livewire.shop',['products'=>$product]);
    }
}
