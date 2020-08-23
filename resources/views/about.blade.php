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
                        <h1 class="title">A Rolling Stone and A Fiery Latin Artist</h1>
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
                        <p class="subtitle">
                            I’m an Argentinean visual artist who’s lived in Italy, Spain, Ireland, Malta, England and have finally settled down in Copenhagen with my husband Sebastian, our daughter Livia, and our labrador ‘Chocolate Muffin’.
                        </p>
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

                        <h3 class="mb-4">A few Words About the Artist</h3>

                        <p>
                            I feel paintings are like puzzles, in which the final result is an exercise to balance
                            composition, colours and moods.
                            I mainly work with acrylics on canvas to reflect life experiences, both urban and natural
                            landscapes that have shaped my identity. My palettes usually change drastically while
                            working on a piece, where acrylics flow freely through the canvas and every stroke is guided
                            by an impulse. Layer after layer, the work is transformed and reshaped, where the final
                            result achieves a balanced expression of colours, moods, temperatures and lights.
                        </p>

                        <p>
                            My paintings reflect on the Mediterranean scenery, with its vibrant colours, citrus trees,
                            sandstone buildings, turquoise waters, gentle hills populated by olive trees and scorching
                            summers. These, enter in constant dialogue with the Dublin’s coastline’s grey skies and its
                            endless hues of greens. The bucolic images of the Hampshire countryside merge with the
                            Copenhagen’s Nordic lights, casting extraordinary shadows and lights where colours intensify
                            in unexpected ways.
                        </p>
                        <p>
                            I am also fascinated by the complexities of modernity and how architecture and design played
                            a pivotal role in the twentieth century societies, permeating in every single aspect of
                            people’s lives throughout the Twentieth century. expressing through artwork. The final work
                            is an introspective journey into my inner identity, shaped by a strong sense of belonging to
                            my native Buenos Aires, and weaved by years of living in different European countries.
                        </p>
                        <p>
                            Recently, I earned a Masters degree in the History of Design from the University of Oxford
                            and I have a BA (Hons) in Interior Design from Staffordshire University.
                        </p>

                        <!-- OwlCarousel Navigation -->
                        <div class="about-carousel-navigation owl-navigation-custom">

                            <!-- Previous Slide -->
                            <button class="btn btn-circle btn-outline-light-custom mr-2" data-action="owl-prev" data-target="#about-carousel">
                                <i class="icon fa ti-angle-left"></i>
                            </button>
                            <!-- /Previous Slide -->

                            <!-- Next Slide -->
                            <button class="btn btn-circle btn-outline-light-custom" data-action="owl-next" data-target="#about-carousel">
                                <i class="icon fa ti-angle-right"></i>
                            </button>
                            <!-- /Next Slide -->

                        </div>
                        <!-- /OwlCarousel Navigation -->

                    </div>
                    <!-- /Column -->

                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: About -->

        <!-- Section: Promo -->
        <section id="promo" class="section section-sm section-promo">
            <div class="container">

                <!-- Section Content Row -->
                <div class="row section-content">
                    <div class="col-12">

                        <!-- Promo Link -->
                        <a href="#" class="thumb thumb-video">

                            <!-- Thumb Image -->
                            <img src="images/about-promo.jpg" alt="" title="" class="img-fluid">
                            <!-- /Thumb Image -->

                            <!-- Thumb Overlay Container -->
                            <div class="thumb-container d-flex align-items-center">
                                <div class="row w-100 d-flex justify-content-end">
                                    <div class="col-12 col-lg-5">
                                        <div class="h1 text-white">See our Company <br> Promo Video</div>
                                        <div class="font-weight-bold text-white">about two minutes</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Thumb Overlay Container -->

                        </a>
                        <!-- /Promo Link -->

                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Promo -->

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
<!-- /Main Container -->
