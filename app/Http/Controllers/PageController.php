<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $products = Product::all();
        return view('portfolio', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function mail(Request $request)
    {
        if (is_null($request->get('honey_trap'))) {
            $validated = $request->validate([
                'email' => 'required|email',
                'name' => 'required|string',
                'text' => 'required'
            ]);

            Mail::to('info@nataliaschlossberg.com')->send(new ContactForm($validated));
        }

        return response()->json(['outcome' => 'success']);
    }
}
