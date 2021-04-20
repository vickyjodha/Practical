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
        $products = Product::all();
        $categories =  Categorie::all();
        return view('product.addProducts')->with('categories', Categorie::all());
    }
    public function addProduct(addProductRequest $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->Price = $request->price;
        $product->categorie_id = json_encode($request->categorie);
        $product->save();

        return back()->with('message', 'Add product');
    }
}
