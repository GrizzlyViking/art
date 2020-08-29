@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('art.store') }}" method="post" class="col-sm-offset-3 col-6" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHlp" value="{{ old('title') }}">
                    @error('title')
                    <small id="titleHlp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="amount" value="{{ old('amount') }}" aria-describedby="priceHlp">
                    @error('amount')
                    <small id="priceHlp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="size">Size</label>
                  <input type="text" class="form-control" id="size" name="size" value="{{ old('size') }}" aria-describedby="sizeHlp" placeholder="70cm x 70cm">
                    @error('size')
                  <small id="sizeHlp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"
                              aria-describedby="descriptionHlp">{{ old('description') }}</textarea>
                    @error('description')
                    <small id="descriptionHlp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <upload-file placeholder="Upload photos of the art"></upload-file>
                @error('uploaded_file')
                <small id="descriptionHlp" class="form-text text-danger mt-4">{{$message}}</small>
                @enderror
                <div class="text-right mt-4">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
