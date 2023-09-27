<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    
    public function show($id){
        $product= Product::findOrFail($id);
        return view('SubPages.details',['product' =>$product]);
    }
}
