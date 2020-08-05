@extends('layout.standard')

@section('content')
    <main class="main-container">

        <!-- Hero -->
        <header id="home" class="hero" style="background-image: url(images/home.png);" data-stellar-background-ratio=".5">

            <!-- Hero Middle Parallax Wrapper -->
            <div class="hero-content-wrapper" data-stellar-ratio=".75">
                <div class="hero-content">

                    <!-- Content Container -->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">

                                <!-- Hero Title -->
                                <h1 class="hero-title fw-light">{{ env('APP_NAME') }}</h1>
                                <!-- /Hero Title -->

                            </div>
                        </div>
                    </div>
                    <!-- /Content Container -->

                </div>
            </div>
            <!-- /Hero Middle Parallax Wrapper -->

            <!-- Scroll Button -->
            <a href="#about" class="hero-scroll smooth-scroll"></a>
            <!-- /Scroll Button -->

            <!-- Copyright Button -->
            <a href="https://www.freepik.com/free-photos-vectors/mockup" target="_blank" class="hero-copyright">Plant created by qeaql-studio</a>
            <!-- /Copyright Button -->

        </header>
        <!-- /Hero -->

        <!-- Section: About -->
        <section id="about" class="section section-about">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>About</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#home" class="smooth-scroll">00 <span>Home</span></a>
                                <a href="#projects" class="smooth-scroll">02 <span>Works</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">About Company</div>
                                <p class="section-subtitle">Just a few words will give you an idea of our company</p>
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
                            <div class="col-12 col-lg-4">
                                <!-- Feature Box -->
                                <div class="feature-box mb-8 mb-lg-0">
                                    <div class="title">Web-Design</div>
                                    <p class="text">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking.
                                    </p>
                                    <a href="#" class="link">Read More</a>
                                </div>
                                <!-- /Feature Box -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Feature Box -->
                                <div class="feature-box mb-8 mb-lg-0">
                                    <div class="title">Photography</div>
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical.
                                    </p>
                                    <a href="#" class="link">Read More</a>
                                </div>
                                <!-- /Feature Box -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Feature Box -->
                                <div class="feature-box">
                                    <div class="title">Software Development</div>
                                    <p class="text">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration.
                                    </p>
                                    <a href="#" class="link">Read More</a>
                                </div>
                                <!-- /Feature Box -->
                            </div>
                            <!-- /Column -->

                        </div>
                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: About -->

        <!-- Section: Projects -->
        <section id="projects" class="section section-right section-projects">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Projects</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#about" class="smooth-scroll">01 <span>About</span></a>
                                <a href="#features" class="smooth-scroll">03 <span>Bests</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">Our Best Works</div>
                                <p class="section-subtitle">Here are our latest projects in which we have invested our love</p>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="row">

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-01.jpg" class="gallery-image popup-image mb-4">
                                    <img src="images/3x4/image-01.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-02.jpg" class="gallery-image popup-image mb-4">
                                    <img src="images/3x4/image-02.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-03.jpg" class="gallery-image popup-image mb-4">
                                    <img src="images/3x4/image-03.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-04.jpg" class="gallery-image popup-image mb-4">
                                    <img src="images/3x4/image-04.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-05.jpg" class="gallery-image popup-image mb-4">
                                    <img src="images/3x4/image-05.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- Gallery Item -->
                                <a href="images/3x4/image-06.jpg" class="gallery-image popup-image">
                                    <img src="images/3x4/image-06.jpg" alt="" title="" class="img-fluid">
                                </a>
                                <!-- /Gallery Item -->
                            </div>
                            <!-- /Column -->

                        </div>
                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Projects -->

        <!-- Section: Features -->
        <section id="features" class="section section-features">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Best</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#projects" class="smooth-scroll">02 <span>Works</span></a>
                                <a href="#testimonials" class="smooth-scroll">04 <span>Clients</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">Nice Features</div>
                                <p class="section-subtitle">We provide you with a wide range of services. Here are some features</p>
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
                            <div class="col-lg-4">
                                <!-- Feature box -->
                                <div class="feature-box mb-8 mb-lg-0 text-center">
                                    <i class="icon icon-paintbrush"></i>
                                    <div class="title">Clean Design</div>
                                    <p class="text">
                                        We try to maintain a very clean minimalistic design for this template.
                                    </p>
                                </div>
                                <!-- /Feature box -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-lg-4">
                                <!-- Feature box -->
                                <div class="feature-box mb-8 mb-lg-0 text-center">
                                    <i class="icon icon-mobile"></i>
                                    <div class="title">Mobile Friendly</div>
                                    <p class="text">
                                        This template is equally well displayed on all possible devices.
                                    </p>
                                </div>
                                <!-- /Feature box -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-lg-4">
                                <!-- Feature box -->
                                <div class="feature-box text-center">
                                    <i class="icon icon-heart"></i>
                                    <div class="title">Made with <span class="text-danger">Love</span></div>
                                    <p class="text">
                                        We invest a lot of energy and love to develop our products to make you like.
                                    </p>
                                </div>
                                <!-- /Feature box -->
                            </div>
                            <!-- /Column -->

                        </div>
                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Features -->

        <!-- Section: Testimonials -->
        <section id="testimonials" class="section section-right section-testimonials">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Clients</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#features" class="smooth-scroll">03 <span>Bests</span></a>
                                <a href="#price" class="smooth-scroll">05 <span>Price</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">Clients Says</div>
                                <p class="section-subtitle">We really appreciate our customers and this is what they say about us</p>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="row">

                            <!-- Column -->
                            <div class="col-12">

                                <!-- OwlCarousel -->
                                <div class="owl-carousel owl-theme owl-navigation" data-items="1">

                                    <!-- OwlSlide Item -->
                                    <div class="owl-slide">
                                        <!-- Testimonial Item -->
                                        <div class="testimonial-item">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="images/avatar-01.jpg" alt="" title="">
                                            </div>
                                            <!-- /Avatar -->

                                            <!-- Information -->
                                            <div class="body">

                                                <!-- Text -->
                                                <div class="text">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                </div>
                                                <!-- /Text -->

                                                <!-- Name -->
                                                <div class="name">Anna Estrada</div>
                                                <!-- /Name -->

                                                <!-- Additional -->
                                                <div class="additional">Company Founder & CEO</div>
                                                <!-- /Additional -->

                                            </div>
                                            <!-- /Information -->

                                        </div>
                                        <!-- /Testimonial Item -->
                                    </div>
                                    <!-- /OwlSlide Item -->

                                    <!-- OwlSlide Item -->
                                    <div class="owl-slide">
                                        <!-- Testimonial Item -->
                                        <div class="testimonial-item">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="images/avatar-02.jpg" alt="" title="">
                                            </div>
                                            <!-- /Avatar -->

                                            <!-- Information -->
                                            <div class="body">

                                                <!-- Text -->
                                                <div class="text">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                </div>
                                                <!-- /Text -->

                                                <!-- Name -->
                                                <div class="name">Julie Warren</div>
                                                <!-- /Name -->

                                                <!-- Additional -->
                                                <div class="additional">SEO Specialist</div>
                                                <!-- /Additional -->

                                            </div>
                                            <!-- /Information -->

                                        </div>
                                        <!-- /Testimonial Item -->
                                    </div>
                                    <!-- /OwlSlide Item -->

                                    <!-- OwlSlide Item -->
                                    <div class="owl-slide">
                                        <!-- Testimonial Item -->
                                        <div class="testimonial-item">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="images/avatar-03.jpg" alt="" title="">
                                            </div>
                                            <!-- /Avatar -->

                                            <!-- Information -->
                                            <div class="body">

                                                <!-- Text -->
                                                <div class="text">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                </div>
                                                <!-- /Text -->

                                                <!-- Name -->
                                                <div class="name">Samantha Evans</div>
                                                <!-- /Name -->

                                                <!-- Additional -->
                                                <div class="additional">Account Manager</div>
                                                <!-- /Additional -->

                                            </div>
                                            <!-- /Information -->

                                        </div>
                                        <!-- /Testimonial Item -->
                                    </div>
                                    <!-- /OwlSlide Item -->

                                </div>
                                <!-- /OwlCarousel -->

                            </div>
                            <!-- /Column -->

                        </div>
                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Testimonials -->

        <!-- Section: Price -->
        <section id="price" class="section section-price">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Price</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#testimonials" class="smooth-scroll">04 <span>Clients</span></a>
                                <a href="#contact" class="smooth-scroll">06 <span>Contact</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">Special Offers</div>
                                <p class="section-subtitle">We offer you the best solutions at the best prices</p>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row section-content">
                    <div class="col-12 col-lg-10">

                        <!-- Content Row -->
                        <div class="row justify-content-end">

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- PriceBox -->
                                <div class="price-box mb-8 mb-lg-0">
                                    <div class="title">Basic</div>
                                    <div class="value">
                                        $
                                        <span class="int">9</span>
                                        <span class="real">99</span>
                                        <span class="divider">/ month</span>
                                    </div>
                                    <div class="content text-center">
                                        <div class="feature"><span data-toggle="tooltip" data-title="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.">3GB</span> Disk Storage</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="As opposed to using 'Content here, content here', making it look like readable English.">512MB</span> RAM</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.">3</span> Sites</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).">10</span> Databases</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="There are many variations of passages of Lorem Ipsum available, but the majority.">3</span> Mail</div>
                                    </div>
                                    <button class="btn btn-outline-primary">Select Plan</button>
                                </div>
                                <!-- /PriceBox -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- PriceBox -->
                                <div class="price-box mb-8 mb-lg-0 featured">
                                    <div class="title">Extended</div>
                                    <div class="value">
                                        $
                                        <span class="int">19</span>
                                        <span class="real">99</span>
                                        <span class="divider">/ month</span>
                                    </div>
                                    <div class="content text-center">
                                        <div class="feature"><span data-toggle="tooltip" data-title="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.">10GB</span> Disk Storage</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="As opposed to using 'Content here, content here', making it look like readable English.">2048MB</span> RAM</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.">10</span> Sites</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).">Unlimited</span> Databases</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="There are many variations of passages of Lorem Ipsum available, but the majority.">Unlimited</span> Mail</div>
                                    </div>
                                    <button class="btn btn-primary">Select Plan</button>
                                </div>
                                <!-- /PriceBox -->
                            </div>
                            <!-- /Column -->

                            <!-- Column -->
                            <div class="col-12 col-lg-4">
                                <!-- PriceBox -->
                                <div class="price-box">
                                    <div class="title">Ultra</div>
                                    <div class="value">
                                        $
                                        <span class="int">59</span>
                                        <span class="real">99</span>
                                        <span class="divider">/ month</span>
                                    </div>
                                    <div class="content text-center">
                                        <div class="feature"><span data-toggle="tooltip" data-title="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.">100GB</span> Disk Storage</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="As opposed to using 'Content here, content here', making it look like readable English.">4048MB</span> RAM</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.">Unlimited</span> Sites</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).">Unlimited</span> Databases</div>
                                        <div class="feature"><span data-toggle="tooltip" data-title="There are many variations of passages of Lorem Ipsum available, but the majority.">Unlimited</span> Mail</div>
                                    </div>
                                    <button class="btn btn-outline-primary">Select Plan</button>
                                </div>
                                <!-- /PriceBox -->
                            </div>
                            <!-- /Column -->

                        </div>
                        <!-- /Content Row -->

                    </div>
                </div>
                <!-- /Section Content Row -->

            </div>
        </section>
        <!-- /Section: Price -->

        <!-- Section: Contact -->
        <section id="contact" class="section section-right section-contact">
            <div class="container">

                <!-- Section Muted Title -->
                <div class="section-muted-title" data-stellar-ratio=".9">
                    <span>Contact</span>
                </div>
                <!-- /Section Muted Title -->

                <!-- Section Header Row -->
                <div class="row">
                    <div class="col-12">
                        <header class="section-header">

                            <!-- Section Navigation -->
                            <div class="section-navigation">
                                <a href="#price" class="smooth-scroll">05 <span>Price</span></a>
                                <a href="#home" class="smooth-scroll">00 <span>Home</span></a>
                            </div>
                            <!-- /Section Navigation -->

                            <!-- Section Heading -->
                            <div class="section-heading">
                                <div class="section-title">Contact Us</div>
                                <p class="section-subtitle">Contact us in any convenient way and we will reply to you</p>
                            </div>
                            <!-- /Section Heading -->

                        </header>
                    </div>
                </div>
                <!-- /Section Header Row -->

                <!-- Section Content Row -->
                <div class="row">
                    <div class="col-12 col-lg-10">

                        <!-- Information Row -->
                        <div class="row">

                            <!-- Column -->
                            <div class="col-12 col-md-4">
                                <!-- Feature box -->
                                <div class="feature-box feature-box-sm mb-8 text-center">
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
                                <div class="feature-box feature-box-sm mb-8 text-center">
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
                                <div class="feature-box feature-box-sm mb-8 text-center">
                                    <i class="icon icon-tablet"></i>
                                    <div class="title">Phone</div>
                                    <p class="text"><a href="tel:#" class="link">+1 (123) 456-7890</a></p>
                                </div>
                                <!-- /Feature box -->
                            </div>
                            <!-- /Column -->

                        </div>
                        <!-- /Information Row -->

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
                                            <div class="md-input">
                                                <label for="frm-contact-name" class="md-label">Your Name</label>
                                                <input id="frm-contact-name" type="text" name="name" class="form-control md-form-control" placeholder="Your Name... *" required>
                                            </div>
                                        </div>
                                        <!-- /Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group col-md-6">
                                            <div class="md-input">
                                                <label for="frm-contact-email" class="md-label">E-mail Address</label>
                                                <input id="frm-contact-email" type="email" name="email" class="md-form-control form-control" placeholder="E-mail address... *" required>
                                            </div>
                                        </div>
                                        <!-- /Form Group -->

                                    </div>
                                    <!-- /Row -->

                                    <!-- Form Group -->
                                    <div class="form-group mb-4">
                                        <div class="md-input">
                                            <label for="frm-contact-message" class="md-label">Message</label>
                                            <textarea id="frm-contact-message" name="message" class="md-form-control form-control" placeholder="Message... " rows="6"></textarea>
                                        </div>
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
