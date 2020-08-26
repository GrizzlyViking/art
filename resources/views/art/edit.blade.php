@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('art.update', $art->id) }}" method="post" class="col-sm-offset-3 col-6" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $art->title ?? '') }}" aria-describedby="titleHlp">
                    <small id="titleHlp" class="form-text text-muted">Title help text.</small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="amount" value="{{ old('price', $art->price->amount ?? 0) }}" aria-describedby="priceHlp">
                    <small id="priceHlp" class="form-text text-muted">Price in Danish Kr.</small>
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" id="size" name="size" value="{{ old('size', $art->meta['size'] ?? '') }}" aria-describedby="sizeHlp" placeholder="70cm x 70cm">
                    <small id="sizeHlp" class="form-text text-muted">This is free text, so you can add what you want.</small>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"
                              aria-describedby="descriptionHlp">{{ old('description', $art->description ?? '') }}</textarea>
                    <small id="descriptionHlp" class="form-text text-muted">Description.</small>
                </div>
                <upload-file>Upload photos of the art</upload-file>
                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
