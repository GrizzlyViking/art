<?php

namespace App\Http\Controllers;

use App\Model\Price;
use App\Model\Product;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ArtController extends Controller
{
    public function index(): Renderable
    {
        $products = Product::all();

        return view('art.index', compact('products'));
    }

    public function create(): Renderable
    {
        return view('art.create');
    }

    /**
     * @param Request $request
     * @return Response|null
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function store(Request $request): ?Response
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'string',
            'size' => 'string'
        ]);

        /** @var Price $price */
        $price = Price::create([
            'currency_code' => 'DKK',
            'amount' => $validated['amount']
        ]);

        /** @var Product $art */
        $art = Product::updateOrCreate(
            [
                'title' => $validated['title']
            ],
            [
                'title' => $validated['title'],
                'description'=> $validated['description'],
                'meta' => ['size' => $validated['size']],
                'price_id' => $price->id
            ]
        );

        if ($request->hasFile('uploaded_file') && $request->file('uploaded_file')->isValid()) {
            /** @var UploadedFile $artwork */
            $artwork = $request->file('uploaded_file');
            $art->addMedia($artwork)->toMediaCollection('painting');
        }

        return response('this worked');
    }

    public function show(Product $art): Renderable
    {
        return view('art.show', compact('art'));
    }

    public function edit(Product $art): Renderable
    {
        return view('art.edit', compact('art'));
    }

    public function update(Request $request, Product $art): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'string',
            'size' => 'string'
        ]);

        $art->update($validated);
        $art->price->update(['amount' => $validated['amount']]);

        return redirect()->route('art.index');
    }

    /**
     * @param Product $art
     * @return Response|null
     * @throws Exception
     */
    public function destroy(Product $art): ?Response
    {
        $art->media()->delete();
        $art->delete();

        return response(['deleted' => 'success']);
    }
}
