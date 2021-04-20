<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardConroller extends Controller
{
    public function  index()
    {
        return view('dashboard')->with('products', Product::all());
    }
}
