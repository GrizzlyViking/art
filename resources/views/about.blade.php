@extends('layouts.clarity')

<!-- Navigation -->
@include('layouts.navigation')
<!-- /Navigation -->


<!-- Main Container -->
@section('content')
    <main class="main-container" id="app">

        <!-- Header -->
        <header id="header" class="header pb-0 text-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8">

                        <!-- Header Title -->
                        <h1 class="title">{{ $page->title }}</h1>
                        <!-- /Header Title -->

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                        <!-- Header Subtitle -->
                        <p class="subtitle">{{ $page->subtitle }}</p>
                        <!-- /Header Subtitle -->

                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Section: About -->
        <section id="about" class="section section-about">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title z-5" data-stellar-ratio=".9">
                    <span>About</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Content Row -->
                <div class="row section-content">

                    <!-- Column -->
                    <div class="col-12 bg-white owl-no-overflow-column-spacer">

                        {!! $page->content !!}

                    </div>
                    <!-- /Column -->

                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: About -->

@include('layouts.footer')

    </main>
@endsection
<!-- /Main Container -->
