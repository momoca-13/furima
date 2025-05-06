<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function index()
    {   
        $products = Product::all();   
        
        return view('index', compact('products'));
    }

    public function detail($id)
    {   
        $products = Product::findOrFail($id);  
        
        return view('detail', compact('products'));
    }
}

