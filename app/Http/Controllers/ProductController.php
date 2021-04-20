<?php

namespace App\Http\Controllers;

use App\Http\Requests\addProductRequest;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  Product()
    {
        return view('product.addProducts')->with('categories', Categorie::all());
    }
    public function addProduct(addProductRequest $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->categorie = $request->categorie->implode(',');
        dd($product);
        $product->save();

        return;
    }
}
