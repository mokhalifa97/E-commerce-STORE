<?php

namespace App\Http\Livewire;

use App\Model\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;

    public function render()
    {
        $product= Product::paginate(6);
        return view('livewire.shop',['products'=>$product]);
    }
}
