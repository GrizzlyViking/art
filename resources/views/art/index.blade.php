@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        <art-list :art="{{ $products }}"></art-list>
    </div>
@endsection
