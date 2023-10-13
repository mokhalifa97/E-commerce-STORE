<?php

namespace App\Http\Livewire;
use App\Model\Product;


use Livewire\Component;

class ProductPage extends Component
{

    public $productId;
    public function mount($id)
    {
        $this->productId=$id;
    }

    public function render()
    {
        $product= Product::find($this->productId);
        $Rproduct= Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $Nproduct= Product::latest()->take(4)->get();
        
        return view('livewire.product-page',['product' =>$product,'rproducts'=>$Rproduct,'nproducts'=>$Nproduct]);
    }
}
