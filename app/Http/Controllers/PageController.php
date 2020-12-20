<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Model\Page;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function list()
    {
        return view('admin.page.list');
    }

    public function index()
    {
        /** @var Product[] $products */
        $products = Product::all()->filter(function(Product $product) {
            return !empty($product->getMedia());
        });

        return view('index', compact('products'));
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->first();
        return view('about', compact('page'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function portfolio()
    {
        $page = Page::where('slug', 'portfolio')->first();
        $products = Product::all()->filter(function(Product $product) {
            return !empty($product->getMedia());
        });
        return view('portfolio', compact('products', 'page'));
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

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:pages,slug',
            'subtitle' => 'required',
            'content' => 'nullable'
        ]);

        Page::create($validated);

        return redirect(route('page.list'));
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    public function update(Page $page, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required',
            'content' => 'nullable'
        ]);

        $page->update($validated);

        return redirect(route('page.list'));
    }
}
