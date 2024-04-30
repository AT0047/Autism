@extends('layouts.master')
@section('content')
    <!-- Masthead -->
    <main id="home" class="masthead jarallax" style="background-image:url('{{asset('home_assets/autism1.jpg')}}');" role="main">
        <!-- Lines -->
        <div class="lines">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4"></div>
                    <div class="col-md-6 hidden-sm col-lg-4"></div>
                    <div class="col-md-6 col-lg-4 hidden-md"></div>
                </div>
            </div>
        </div>
        <!-- Opener -->
        <div class="opener blur-scroll">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-md-4 px-0">
                        <h1 class="my-0"><span class="text-primary">Autism&ME,</span> Training to transform
                            children’s lives</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Content -->
    <div class="content">
        <!-- Lines -->
        <div class="lines">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4"></div>
                    <div class="col-md-6 hidden-sm col-lg-4"></div>
                    <div class="col-md-6 col-lg-4 hidden-md"></div>
                </div>
            </div>
        </div>
        <!-- About -->
        <section id="mystory" class="section pb-0">
            <section class="container">
                <div class="row mx-0 align-items-center">
                    <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                        <div
                            class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                            <img alt="" class="w-100" style="border-radius: 10px;" src="{{asset('home_assets/about2.jpg')}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-0">
                        <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">In Argentina, <span
                                class="text-primary">WHO and partner</span>Training (CST) programme.<br> <span
                                class="text-primary">around</span></h2>
                    </div>
                    <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                        <img alt="" class="w-100" style="border-radius: 10px;" src="{{asset('home_assets/about1.jpg')}}">
                    </div>
                </div>
            </section>
        </section>
        <!-- Specialization -->
        <section id="specialization" class="section py-0">
            <div class="container">
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 order-md-2 order-lg-1 col-lg-4 px-0">
                        <h2 class="my-0 wide-lg float-md-right float-lg-none offset-lg-5 mb-5 mb-md-0"
                            data-aos="fade-right">I <span class="text-primary">use</span> is a long established fact
                            that a reader</h2>
                    </div>
                    <div class="col-md-6 order-md-1 order-lg-2 col-lg-4 px-0" data-aos="blur">
                        <img alt="" class="w-100" style="border-radius: 10px;" src="{{asset('home_assets/about3.jpg')}}">
                    </div>
                    <div class="col-md-6 offset-md-6 offset-lg-0 order-md-3 order-lg-3 col-lg-4 mt-5 pl-0 pl-md-30 mt-md-0"
                        data-aos="fade-up">
                        <p class="mb-0 pl-md-30px">We have experience in implementing projects for many large domestic
                            and foreign corporations, enterprises in many elds such as nance, banking, F&B, education,
                            communication.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section pb-0">
            <section class="container">
                <div class="row mx-0 align-items-center">
                    <div class="col-md-6 col-lg-4 px-0" style="margin: 20px;" data-aos="blur">
                        <img alt="" class="w-100" style="border-radius: 10px; " src="{{asset('home_assets/doctor.jpg')}}">
                    </div>
                    <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                        <div
                            class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">My <span
                                    class="text-primary">mission</span> is develope the best websites<br> <span
                                    class="text-primary">around</span></h2>
                        </div>
                        <a href= "about me/index.html"><button type="submit" class="btn"
                                style="border-radius: 10%; margin: 100px;">take a look</button></a>
                    </div>
                </div>
            </section>
        </section>
        <!-- Latest Works -->
        <section id="services" class="section feature feature-3 bg-white pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="heading heading-1 text-center">
                            <h2 class="heading-title">Our services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Panel #1 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/1.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Primary Care</h3>
                                <p>Physicians provide comprehensive medical evaluations and primary care for patients of
                                    all ages.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Panel #2 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/2.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Sport Medicine</h3>
                                <p>Our team personalizes each athlete’s treatment based on his/her sport and age growing
                                    bodies.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Panel #3 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/3.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Emergency Medicine</h3>
                                <p>Our clinic is always ready for urgent care such as Fractures, Infections, Bites,
                                    Minor Burns, Ear Aches, etc..</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Panel #4 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/4.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Cardiology</h3>
                                <p>Our cardiologists are skilled at diagnosing and treating diseases of the
                                    cardiovascular system.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Panel #5 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/5.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>General Surgery</h3>
                                <p>New surgical latest technology allows us to provide minimally invasive options when
                                    possible.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Panel #6 -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="feature-panel">
                            <div class="feature-img">
                                <img src="ourserveses/images/icons/6.svg" alt="target">
                            </div>
                            <div class="feature-content">
                                <h3>Infectious Disease</h3>
                                <p>We have extra training in the diagnosis of illnesses and infections caused by
                                    bacteria, viruses and fungi.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <section id="experience" class="section pb-0" data-aos="fade-up">
            <section class="section-sm pb-0">
                <div class="testimonial-area bg-gray section-space--ptb_120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center" data-aos="fade-up">
                                    <h6 class="sub-title-four mb-20">Some Testimonial</h6>
                                    <h2 class="title">What People Say About Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slider-area">
                            <div class="swiper-container testimonial-slider-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item" data-aos="fade-up">
                                            <div class="testimonial-post-author">
                                                <div class="testimonial-author-image">
                                                    <img src="assets/images/author/testimonial-1.png" alt="">
                                                </div>
                                                <div class="testimonial-author-info">
                                                    <h4>Bansten Smith</h4>
                                                    <p>WEB DEVELOPER</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-post-content">
                                                <h5 class="testimonial-post-title">Printer took a galley of type and
                                                    scrambled to make book.</h5>
                                                <p>Lorem has been them indust standard
                                                    unknown printer took galley text printing
                                                    and typesetting industry been industry
                                                    standard dummy ever.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item" data-aos="fade-up">
                                            <div class="testimonial-post-author">
                                                <div class="testimonial-author-image">
                                                    <img src="assets/images/author/testimonial-2.png" alt="">
                                                </div>
                                                <div class="testimonial-author-info">
                                                    <h4>Rosario Ferraro</h4>
                                                    <p>MARKETER</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-post-content">
                                                <h5 class="testimonial-post-title">Printer took a galley of type and
                                                    scrambled to make book.</h5>
                                                <p>Lorem has been them indust standard
                                                    unknown printer took galley text printing
                                                    and typesetting industry been industry
                                                    standard dummy ever.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item" data-aos="fade-up">
                                            <div class="testimonial-post-author">
                                                <div class="testimonial-author-image">
                                                    <img src="assets/images/author/testimonial-3.png" alt="">
                                                </div>
                                                <div class="testimonial-author-info">
                                                    <h4>Bansten Smith</h4>
                                                    <p>UI/UX DESIGNER</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-post-content">
                                                <h5 class="testimonial-post-title">Printer took a galley of type and
                                                    scrambled to make book.</h5>
                                                <p>Lorem has been them indust standard
                                                    unknown printer took galley text printing
                                                    and typesetting industry been industry
                                                    standard dummy ever.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-testimonial-item" data-aos="fade-up">
                                            <div class="testimonial-post-author">
                                                <div class="testimonial-author-image">
                                                    <img src="assets/images/author/testimonial-1.png" alt="">
                                                </div>
                                                <div class="testimonial-author-info">
                                                    <h4>Bansten Smith</h4>
                                                    <p>UI/UX DESIGNER</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-post-content">
                                                <h5 class="testimonial-post-title">Printer took a galley of type and
                                                    scrambled to make book.</h5>
                                                <p>Lorem has been them indust standard
                                                    unknown printer took galley text printing
                                                    and typesetting industry been industry
                                                    standard dummy ever.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slider-navigation">
                                <div class="testimonial-button-next navigation-button"><i
                                        class="icofont-long-arrow-left"></i></div>
                                <div class="testimonial-button-prev navigation-button"><i
                                        class="icofont-long-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Area End -->
            </section>
        </section>
        <section id="news" class="section ">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-4 px-0" data-aos="fade-right">
                        <h2 class="my-0">News</h2>
                    </div>
                </div>
                <section class="section pb-0">
                    <div class="row mx-0 align-items-center" data-aos="fade-up">
                        <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                            <a href="#">
                                <figure class="hover"><img alt="" class="w-100"
                                        style="border-radius: 10px;" src="img/news/news.jpg"></figure>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-5 mt-md-0 px-sm-0 pl-md-30px pr-lg-30px">
                            <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a></h4>
                            <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June 06, 2020
                            </p>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center" style="margin-top: 30px; " data-aos="fade-up">
                        <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                            <a href="#">
                                <figure class="hover"><img alt="" style="border-radius: 10px;"
                                        class="w-100" src="img/news/news.jpg"></figure>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-5 mt-md-0 px-sm-0 pl-md-30px pr-lg-30px">
                            <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a></h4>
                            <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June 06, 2020
                            </p>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center" style="margin-top: 30px; " data-aos="fade-up">
                        <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                            <a href="#">
                                <figure class="hover"><img alt="" style="border-radius: 10px;"
                                        class="w-100" src="img/news/news.jpg"></figure>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mt-5 mt-md-0 px-sm-0 pl-md-30px pr-lg-30px">
                            <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a></h4>
                            <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June 06, 2020
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
