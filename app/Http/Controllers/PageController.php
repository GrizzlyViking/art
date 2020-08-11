<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        /** @var Product[] $products */
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contact()
    {
        return view('contact');
    }
}
