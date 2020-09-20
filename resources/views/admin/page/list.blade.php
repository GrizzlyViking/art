@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ml-auto mr-auto">
            <div class="col-4">
                <div class="card">
                    <div class="card-header"><h4>Pages</h4></div>
                    <div class="card-text">
                        <div class="list-group">
                            @foreach($pages as $page)
                                <a href="{{ route('page.edit', $page->slug) }}"
                                   class="list-group-item list-group-item-action">{{ $page->slug }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button onclick="window.location.href='{{ route('page.create') }}'" type="button" class="btn btn-outline-success">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
