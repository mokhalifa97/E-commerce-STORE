<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    
    public function show($id){
        $product= Product::findOrFail($id);
        $Rproduct= Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $Nproduct= Product::latest()->take(4)->get();
        return view('SubPages.details',['product' =>$product,'rproducts'=>$Rproduct,'nproducts'=>$Nproduct]);
    }
}
