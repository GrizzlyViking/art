@extends('layouts.clarity')

@section('content')
    <!-- Main Container -->
    <main id="app" class="main-container">

        <!-- Hero -->
        <header id="home" class="hero" style="background-image: url({{ $art->getFirstMedia('painting')->getUrl() }});" data-stellar-background-ratio=".5">

            <!-- Hero Middle Parallax Wrapper -->
            <div class="hero-content-wrapper" data-stellar-ratio=".75">
                <div class="hero-content">

                    <!-- Content Container -->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">

                                <!-- Hero Title -->
                                <h1 class="hero-title fw-light">{{ $art->title }}</h1>
                                <!-- /Hero Title -->

                            </div>
                        </div>
                    </div>
                    <!-- /Content Container -->

                </div>
            </div>
            <!-- /Hero Middle Parallax Wrapper -->
        </header>
        <!-- /Hero -->

        <!-- Section: Description -->
        <section id="about" class="section section-about">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Painting</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#home" class="smooth-scroll">01 <span>Section</span></a>
                                <a href="#projects" class="smooth-scroll">{{ str_replace('cm', '', $art->meta['size']) }} <span>cm</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <p class="section-subtitle">{{ $art->subtitle }}</p>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row section-content">
                    <div class="col-12 col-lg-10">
                        <div class="row">

                            <!-- Column -->
                            <div class="col-12 col-lg-3">
                                <!-- Feature Box -->
                                <div class="feature-box mb-8 mb-lg-0">
                                    <div class="title">Price {{ $art->price->amount }} kr</div>
                                    <p class="text">
                                        @foreach($art->meta as $key => $value)
                                            {{ ucwords($key) }}: {{ $value }}<br>
                                        @endforeach
                                    </p>
                                </div>
                                <!-- /Feature Box -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-9">
                                <!-- Feature Box -->
                                <div class="feature-box">
                                    <div class="title">Description</div>
                                    <p class="text">
                                        {{ $art->description }}
                                    </p>
                                </div>
                                <!-- /Feature Box -->
                            </div>
                            <!-- /Column -->

                        </div>
                    </div>
                </div>
                <!-- /Section Content Row -->

                <div class="row section-content">
                    <div class="row"><buy-button art-id="{{$art->id}}">Buy</buy-button></div>
                </div>

            </div>
        </section>
        <!-- /Section: Description -->
    </main>
@endsection
