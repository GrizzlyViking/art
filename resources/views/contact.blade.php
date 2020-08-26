@extends('layouts.clarity')


<!-- Main Container -->
@section('content')
    <main id="app" class="main-container">

        <!-- Header -->
        <header id="header" class="header pb-0 text-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8">

                        <!-- Header Title -->
                        <h1 class="title">Contact Us</h1>
                        <!-- /Header Title -->

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Section: Contact -->
        <section id="contact" class="section section-contact section-right">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Contact</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Content Row -->
                <contact-form></contact-form>
                <!-- /Section Content Row -->


            </div>
        </section>
        <!-- /Section: Contact -->

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
