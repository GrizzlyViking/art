@extends('layout.standard')


<!-- Main Container -->
@section('content')
    <main class="main-container">

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

                <!-- Information Row -->
                <div class="row">

                    <!-- Column -->
                    <div class="col-12 col-md-4">
                        <!-- Feature box -->
                        <div class="feature-box feature-box-sm text-center mb-8">
                            <i class="icon icon-map-pin"></i>
                            <div class="title">Address</div>
                            <p class="text">
                                <a href="#" class="link">1355 Market Street, Suite 900</a>
                            </p>
                        </div>
                        <!-- /Feature box -->
                    </div>
                    <!-- /Column -->

                    <!-- Column -->
                    <div class="col-12 col-md-4">
                        <!-- Feature box -->
                        <div class="feature-box feature-box-sm text-center mb-8">
                            <i class="icon icon-envelope"></i>
                            <div class="title">Email</div>
                            <p class="text"><a href="mailto:#" class="link">clients@example.com</a></p>
                        </div>
                        <!-- /Feature box -->
                    </div>
                    <!-- /Column -->

                    <!-- Column -->
                    <div class="col-12 col-md-4">
                        <!-- Feature box -->
                        <div class="feature-box feature-box-sm text-center mb-8">
                            <i class="icon icon-tablet"></i>
                            <div class="title">Phone</div>
                            <p class="text"><a href="tel:#" class="link">+1 (123) 456-7890</a></p>
                        </div>
                        <!-- /Feature box -->
                    </div>
                    <!-- /Column -->

                </div>
                <!-- /Information Row -->

                <!-- Section Content Row -->
                <div class="row section-content">
                    <div class="col-12">

                        <!-- Form Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-12 pt-5">

                                <!-- Form -->
                                <form class="form-ajax">

                                    <!-- Form Hidden Fields -->
                                    <input type="hidden" name="form" value="Contact">
                                    <!-- /Form Hidden Fields -->

                                    <!-- Row -->
                                    <div class="row">

                                        <!-- Form Group -->
                                        <div class="form-group col-md-6">
                                            <label for="frm-contact-name">Your Name</label>
                                            <input id="frm-contact-name" type="text" name="name" class="form-control bg-transparent" placeholder="Your Name... *" required>
                                        </div>
                                        <!-- /Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group col-md-6">
                                            <label for="frm-contact-email">E-mail Address</label>
                                            <input id="frm-contact-email" type="email" name="email" class="form-control bg-transparent" placeholder="E-mail address... *" required>
                                        </div>
                                        <!-- /Form Group -->

                                    </div>
                                    <!-- /Row -->

                                    <!-- Form Group -->
                                    <div class="form-group mb-4">
                                        <label for="frm-contact-message">Message</label>
                                        <textarea id="frm-contact-message" name="message" class="form-control bg-transparent" placeholder="Message... " rows="9"></textarea>
                                    </div>
                                    <!-- /Form Group -->

                                    <!-- Send Message Button -->
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                    <!-- /Send Message Button -->

                                </form>
                                <!-- Form -->

                            </div>
                            <!-- /Column -->
                        </div>
                        <!-- /Form Row -->

                    </div>
                </div>
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
