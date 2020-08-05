@extends('layout.standard')


<!-- Navigation -->
@include('layout.navigation')
<!-- /Navigation -->


<!-- Main Container -->
@section('content')
    <main class="main-container">

        <!-- Header -->
        <header id="header" class="header pb-0 text-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8">

                        <!-- Header Title -->
                        <h1 class="title">Company Blog</h1>
                        <!-- /Header Title -->

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="link">Clarity</a></li>
                                <li class="breadcrumb-item"><a href="#" class="link">Company Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                        <!-- /Breadcrumb -->

                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Section: Blog -->
        <section id="blog" class="section section-right section-blog">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Blog</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Content Row -->
                <div class="row">

                    <!-- Column -->
                    <div class="col-12 col-lg-9">

                        <!-- Blog Post -->
                        <article class="blog-post">

                            <!-- Header -->
                            <header class="blog-post-header">

                                <!-- Media -->
                                <div class="blog-post-media">
                                    <!-- Image -->
                                    <a href="blog-details.html" class="">
                                        <img src="images/16x9/image-01.jpg" alt="" title="" class="img-fluid">
                                    </a>
                                    <!-- /Image -->
                                </div>
                                <!-- /Media -->

                                <!-- Title -->
                                <a href="blog-details.html" class="blog-post-title">Gallery Image Post Example</a>
                                <!-- /Title -->

                                <!-- Meta Information -->
                                <div class="blog-post-meta">
                                    <a href="#" class="link">Feb 01, 2020</a>
                                    <span class="separator ml-2 mr-2"></span>
                                    <a href="#" class="link">Valery</a>
                                </div>
                                <!-- /Meta Information -->

                            </header>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="blog-post-body">
                                <!-- Intro Text -->
                                <p class="blog-post-intro">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has a more-or-less normal distribution of letters.
                                </p>
                                <!-- /Intro Text -->
                            </div>
                            <!-- /Body -->

                            <!-- Footer -->
                            <footer class="blog-post-footer d-flex align-items-center justify-content-between">
                                <!-- Read More Button -->
                                <a href="blog-details.html" class="btn btn-primary">Read More</a>
                                <!-- /Read More Button -->
                            </footer>
                            <!-- /Footer -->

                        </article>
                        <!-- /Blog Post -->

                        <!-- Blog Post -->
                        <article class="blog-post">

                            <!-- Header -->
                            <header class="blog-post-header">

                                <!-- Media -->
                                <div class="blog-post-media">
                                    <!-- OwlCarousel2 -->
                                    <div class="owl-carousel owl-theme owl-navigation owl-navigation-inner owl-pagination mb-0">

                                        <!-- Image -->
                                        <a href="#" class="">
                                            <img src="images/16x9/image-02.jpg" alt="" title="" class="img-fluid">
                                        </a>
                                        <!-- /Image -->

                                        <!-- Image -->
                                        <a href="#" class="">
                                            <img src="images/16x9/image-03.jpg" alt="" title="" class="img-fluid">
                                        </a>
                                        <!-- /Image -->

                                        <!-- Image -->
                                        <a href="#" class="">
                                            <img src="images/16x9/image-04.jpg" alt="" title="" class="img-fluid">
                                        </a>
                                        <!-- /Image -->

                                    </div>
                                    <!-- /OwlCarousel2 -->
                                </div>
                                <!-- /Media -->

                                <!-- Title -->
                                <a href="blog-details.html" class="blog-post-title">Carousel Post Example</a>
                                <!-- /Title -->

                                <!-- Meta Information -->
                                <div class="blog-post-meta">
                                    <a href="#" class="link">Feb 01, 2020</a>
                                    <span class="separator ml-2 mr-2"></span>
                                    <a href="#" class="link">Valery</a>
                                </div>
                                <!-- /Meta Information -->

                            </header>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="blog-post-body">

                                <!-- Intro Text -->
                                <p class="blog-post-intro">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has a more-or-less normal distribution of letters.
                                </p>
                                <!-- /Intro Text -->

                            </div>
                            <!-- /Body -->

                            <!-- Footer -->
                            <footer class="blog-post-footer d-flex align-items-center justify-content-between">
                                <!-- Read More Button -->
                                <a href="#" class="btn btn-primary">Read More</a>
                                <!-- /Read More Button -->
                            </footer>
                            <!-- /Footer -->

                        </article>
                        <!-- /Blog Post -->

                        <!-- Blog Post -->
                        <article class="blog-post">

                            <!-- Header -->
                            <header class="blog-post-header">

                                <!-- Media -->
                                <div class="blog-post-media">
                                    <!-- Responsive Video Wrapper -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l-epKcOA7RQ" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <!-- /Responsive Video Wrapper -->
                                </div>
                                <!-- /Media -->

                                <!-- Title -->
                                <a href="blog-details.html" class="blog-post-title">Video: The Story of Envato</a>
                                <!-- /Title -->

                                <!-- Meta Information -->
                                <div class="blog-post-meta">
                                    <a href="#" class="link">Feb 01, 2020</a>
                                    <span class="separator ml-2 mr-2"></span>
                                    <a href="#" class="link">Valery</a>
                                </div>
                                <!-- /Meta Information -->

                            </header>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="blog-post-body">

                                <!-- Intro Text -->
                                <p class="blog-post-intro">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is
                                    that it has a more-or-less normal distribution of letters.
                                </p>
                                <!-- /Intro Text -->

                            </div>
                            <!-- /Body -->

                            <!-- Footer -->
                            <footer class="blog-post-footer d-flex align-items-center justify-content-between">
                                <!-- Read More Button -->
                                <a href="#" class="btn btn-primary">Read More</a>
                                <!-- /Read More Button -->
                            </footer>
                            <!-- /Footer -->

                        </article>
                        <!-- /Blog Post -->

                    </div>
                    <!-- /Column -->

                    <!-- Column -->
                    <div class="col-12 col-lg-3">

                        <!-- Widget: Categories -->
                        <div class="widget widget-blog-categories">

                            <!-- Header -->
                            <div class="widget-header">
                                <div class="h5 widget-title">Blog Categories</div>
                            </div>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="widget-body">

                                <!-- Menu -->
                                <div class="blog-menu">
                                    <a href="#" class="blog-menu-link">Photography <span class="float-right text-muted">(18)</span></a>
                                    <a href="#" class="blog-menu-link">Illustration <span class="float-right text-muted">(6)</span></a>
                                    <a href="#" class="blog-menu-link">Web-Design <span class="float-right text-muted">(19)</span></a>
                                    <a href="#" class="blog-menu-link">Art <span class="float-right text-muted">(9)</span></a>
                                    <a href="#" class="blog-menu-link">Coding <span class="float-right text-muted">(3)</span></a>
                                </div>
                                <!-- Menu -->

                            </div>
                            <!-- /Body -->

                        </div>
                        <!-- /Widget: Categories -->

                        <!-- Widget: Recent Posts -->
                        <div class="widget widget-blog-recent-posts">

                            <!-- Header -->
                            <div class="widget-header">
                                <div class="h5 widget-title">Recent Posts</div>
                            </div>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="widget-body">

                                <!-- Blog Post Small -->
                                <a href="blog-details.html" class="media align-items-center blog-post-small">
                                    <div class="responsive responsive-4by3 blog-post-thumb">
                                        <div class="responsive-content d-flex justify-content-center align-items-center">
                                            <img src="images/4x3/image-05.jpg" class="img-fluid" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="blog-post-title">Gallery Image Post Example</h6>
                                        <div class="text-muted fw-base">Mar 17, 2019</div>
                                    </div>
                                </a>
                                <!-- /Blog Post Small -->

                                <!-- Blog Post Small -->
                                <a href="blog-details.html" class="media align-items-center blog-post-small">
                                    <div class="responsive responsive-4by3 blog-post-thumb">
                                        <div class="responsive-content d-flex justify-content-center align-items-center">
                                            <img src="images/4x3/image-06.jpg" class="img-fluid" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="blog-post-title">Simple Carousel Post Example</h6>
                                        <div class="text-muted fw-base">Mar 14, 2019</div>
                                    </div>
                                </a>
                                <!-- /Blog Post Small -->

                                <!-- Blog Post Small -->
                                <a href="blog-details.html" class="media align-items-center blog-post-small">
                                    <div class="responsive responsive-4by3 blog-post-thumb">
                                        <div class="responsive-content d-flex justify-content-center align-items-center">
                                            <img src="images/4x3/image-07.jpg" class="img-fluid" alt="" title="">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="blog-post-title">Video: The Story of Envato</h6>
                                        <div class="text-muted fw-base">Mar 14, 2019</div>
                                    </div>
                                </a>
                                <!-- /Blog Post Small -->

                            </div>
                            <!-- /Body -->

                        </div>
                        <!-- /Widget: Recent Posts -->

                        <!-- Widget: Tag Cloud -->
                        <div class="widget widget-tag-cloud">

                            <!-- Header -->
                            <div class="widget-header">
                                <div class="h5 widget-title">Tag Cloud</div>
                            </div>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="widget-body">
                                <a href="#" class="badge badge-outline-primary tag">Clean</a>
                                <a href="#" class="badge badge-outline-primary tag">Minimal</a>
                                <a href="#" class="badge badge-outline-primary tag">Design</a>
                                <a href="#" class="badge badge-outline-primary tag">Pixel Perfect</a>
                                <a href="#" class="badge badge-outline-primary tag">Responsive</a>
                                <a href="#" class="badge badge-outline-primary tag">Blog</a>
                                <a href="#" class="badge badge-outline-primary tag">Portfolio</a>
                                <a href="#" class="badge badge-outline-primary tag">Working Forms</a>
                                <a href="#" class="badge badge-outline-primary tag">Clarity Theme</a>
                                <a href="#" class="badge badge-outline-primary tag">Web</a>
                                <a href="#" class="badge badge-outline-primary tag">Responsive</a>
                                <a href="#" class="badge badge-outline-primary tag">UI Kit</a>
                                <a href="#" class="badge badge-outline-primary tag">Lifestyle</a>
                                <a href="#" class="badge badge-outline-primary tag">Simple</a>
                            </div>
                            <!-- /Body -->

                        </div>
                        <!-- /Widget: Tag Cloud -->

                        <!-- Widget: Meta -->
                        <div class="widget widget-blog-meta">

                            <!-- Header -->
                            <div class="widget-header">
                                <div class="h5 widget-title">Meta</div>
                            </div>
                            <!-- /Header -->

                            <!-- Body -->
                            <div class="widget-body">

                                <!-- Menu -->
                                <div class="blog-menu">
                                    <a href="#" class="blog-menu-link">Login</a>
                                    <a href="#" class="blog-menu-link">RSS Entries</a>
                                    <a href="#" class="blog-menu-link">RSS Comments</a>
                                </div>
                                <!-- Menu -->

                            </div>
                            <!-- /Body -->

                        </div>
                        <!-- /Widget: Meta -->

                    </div>
                    <!-- /Column -->

                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Blog -->

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
