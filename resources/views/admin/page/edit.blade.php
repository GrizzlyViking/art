@extends('layouts.app')

@section('content')
    <main id="app" class="container">
        <div class="card">
            <form method="post" action="{{ route('page.update', [$page->slug]) }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="card-header">
                        <div class="h2">{{ $page->title }}</div>
                    </div>
                    <div class="card-text">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="helpTitle"
                                   value="{{ old('title', $page->title) }}">
                            @error('title')
                                <small id="helpTitle" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Sub Title</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" aria-describedby="helpSubTitle"
                                   value="{{ old('subtitle', $page->subtitle) }}">
                            @error('subtitle')
                            <small id="helpSubTitle" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" class="form-control" name="content">{{ old('content') }}</textarea>
                            @error('content')
                                <small id="helpTitle" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-outline-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
