@extends('layouts.clarity')

@section('content')
    <main class="main-container">

        <!-- Header -->
        <header id="header" class="header pb-0 text-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8">

                        <!-- Header Title -->
                        <h1 class="title">Our Company Portfolio</h1>
                        <!-- /Header Title -->

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                        <!-- Header Subtitle -->
                        <p class="subtitle">
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English.
                        </p>
                        <!-- /Header Subtitle -->

                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Section: Projects -->
        <section id="portfolio" class="section section-portfolio">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Projects</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Content Row -->
                <div class="row">
                    <div class="col-12">

                        <!-- Filter Row -->
                        <div class="row">
                            <div class="col-12 text-center mb-5">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-light-custom text-uppercase active">
                                        <input type="radio" name="options" id="option1" checked> All
                                    </label>
                                    <label class="btn btn-outline-light-custom text-uppercase">
                                        <input type="radio" name="options" id="option2"> Photography
                                    </label>
                                    <label class="btn btn-outline-light-custom text-uppercase">
                                        <input type="radio" name="options" id="option3"> Design
                                    </label>
                                    <label class="btn btn-outline-light-custom text-uppercase">
                                        <input type="radio" name="options" id="option4"> Creative
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /Filter Row -->

                        <!-- Projects Row -->
                        <div class="row">

                            @foreach($products as $product)
                                <!-- Column -->
                                    <div class="col-12 col-lg-4">
                                        <!-- Gallery Item -->
                                        <a href="{{ $product->getFirstMedia('painting')->getUrl() }}" class="gallery-image mb-4 popup-image">
                                            <img src="{{ $product->getFirstMedia('painting')->getUrl() }}" alt="{{ $product->title }}" title="{{ $product->title }}" class="img-fluid">
                                        </a>
                                        <!-- /Gallery Item -->
                                    </div>
                                    <!-- /Column -->
                            @endforeach

                        </div>
                        <!-- /Projects Row -->

                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Projects -->

        <!-- Footer -->
        <footer class="footer">

            <div class="row">
                <div class="col-12 text-center">

                    <div class="text-muted mb-2">
                        &copy; 2016-2020 <a href="https://1.envato.market/rWBad" target="_blank">viui18.com</a>
                    </div>

                    <div>
                        <a href="https://www.facebook.com/viui18com/" target="_blank" class="btn">
                            <i class="fa fa-facebook fs-1"></i>
                        </a>
                        <a href="https://www.facebook.com/viui18com/" target="_blank" class="btn">
                            <i class="fa fa-instagram fs-1"></i>
                        </a>
                        <a href="https://www.pinterest.ru/viui18/" target="_blank" class="btn">
                            <i class="fa fa-pinterest-p fs-1"></i>
                        </a>
                    </div>

                </div>
            </div>

        </footer>
        <!-- /Footer -->

    </main>
@endsection
