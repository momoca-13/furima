<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ItemController extends Controller
{
    public function index()
    {   
        $products = Product::all();   
        $perPage = 3;
        $page = Paginator::resolveCurrentPage('page');
        $pageData = $products->slice(($page - 1) * $perPage, $perPage);
        $options = [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page'
        ];

        $products = new LengthAwarePaginator($pageData, $products->count(), $perPage, $page, $options);

        return view('index', compact('products'));
    }

    public function getdetail()
    {
        $products = Product::all(); 
        return view('detail', compact('products'));
    }

    public function getlogin()
    {
        return view('login');
    }
}

