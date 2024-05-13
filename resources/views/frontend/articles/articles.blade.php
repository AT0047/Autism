@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="content">
        <div class="lines">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4"></div>
                    <div class="col-md-6 hidden-sm col-lg-4"></div>
                    <div class="col-md-6 col-lg-4 hidden-md"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Hero Area Start -->
                <div class="hero-area-five">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="hero-five-text text-left">
                                    <h1 class="title">
                                        <span class="hero-five-title">{{ $title->title }}
                                    </h1>
                                    <p class="hero-text-dec">{!! $title->description !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="hero-five-category" data-aos="fade-up">
                                    @foreach ($libraries as $library)
                                        <a href="#Category" class="btn-large woocommerce">{{ $library->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Hero Area End -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="recent-article-header">
                                <div class="section-title" data-aos="fade-up">
                                    <h2>Recent Article</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row--30">
                        <div class="col-lg-6 col-md-6">
                            <!-- Single Most Populer Item Start -->
                            @foreach ($books as $book)
                                <div class="single-most-populer-item" data-aos="fade-up">
                                    <a href="{{route('Autism&Me.bookDetails', $book->id)}}" class="most-populer-thum">
                                        <img src="{{ asset('dashboard/img/' . $book->photo) }}" alt="" />
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="{{route('Autism&Me.bookDetails', $book->id)}}">{{ $book->author_name }}</a>
                                        </div>
                                        <h3 class="title"><a href="{{route('Autism&Me.bookDetails', $book->id)}}">{{ $book->name }}</a>
                                        </h3>
                                        <p class="dec mt-2">{!! Str::limit($book->content, 15)  !!}</p>
                                        <div class="most-populer-post-meta">
                                            <span class="post-date">
                                                <a href="{{route('Autism&Me.bookDetails', $book->id)}}">{{ $book->publication_date }}</a>
                                            </span>
                                            {{-- <span>10 min read</span> --}}
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            @endforeach
                        </div>
                        <livewire:show_books>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="button-box text-center mt-5" data-aos="fade-up">
                                <button id="show-more-btn" class="btn-large btn-bg-5-primary  btn-primary"
                                    style="background-color: red;"> Show More <i class="icofont-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Latest Post Area Start -->
                    <div class="archive-post-inner-wrap">
                        <div class="archive-search-wrap">
                            <div class="section-title" data-aos="fade-up">
                                <h4>Search Here</h4>
                            </div>
                            <div class="archive-search-box" data-aos="fade-up">
                                <input class="search-input" type="text" placeholder="Search Here">
                                <button class="search-button" type="submit"><i class="icofont-search-1"></i></button>
                            </div>
                        </div>
                        <div class="archive-post-wrap mt-5" id="Category">
                            <div class="section-title" data-aos="fade-up">
                                <h4>Category</h4>
                            </div>
                            <!-- Single Archive Post Start -->
                            <div class="single-archive-post" data-aos="fade-up">
                                @foreach ($categories as $category)
                                    <div class="archive-post-thum">
                                        <a href="Articles.html">
                                            <img src="{{ asset('dashboard/img/' . $category->photo) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="archive-post-content">
                                        <h6 class="title"><a
                                                wire:click='loadBooks({{ $category->id }})'>{{ $category->name }}</a>
                                        </h6>
                                        <div class="archive-post-meta">
                                            <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="Articles.html">{{ $category->created_at }}</a>
                                            </span>
                                            {{-- <span>10 min read</span> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div><!-- Single Archive Post End -->
                        </div>
                        <!-- Add Banner Area Start -->
                        <div class="add-banner-area mt-5" data-aos="fade-up">
                            <a href="Articles.html">
                                <img src="assets/images/archive-post/add-banner-01.jpg" alt="">
                            </a>
                        </div>
                        <!-- Add Banner Area End -->
                    </div> <!-- Latest Post Area End -->
                </div>
                <!-- Special For Beginner Area Start -->
                <div style="margin-top: 30px;" class="special-for-beginner-area section-space--pb_120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-three text-center" data-aos="fade-up">
                                    <h2 class="title">Category</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row row--30">
                            <div class="col-lg-4">
                                <!-- Single Most Populer Item Start -->
                                <div class="single-most-populer-item" data-aos="fade-up">
                                    <a href="blog-details.html" class="most-populer-thum">
                                        <img src="assets/images/banners/02-special-banner.jpg" alt="" />
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="blog-details.html">Andrew Hoffman</a>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">All of these amazing features
                                                come at an affordable price!</a>
                                        </h3>
                                        <div class="most-populer-post-meta">
                                            <span class="post-date">
                                                <a href="blog-details.html">03 April, 2023</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Single Most Populer Item Start -->
                                <div class="single-most-populer-item" data-aos="fade-up">
                                    <a href="blog-details.html" class="most-populer-thum">
                                        <img src="assets/images/banners/03-special-banner.jpg" alt="" />
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="blog-details.html">Andrew Hoffman</a>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">WooCommerce comes with an
                                                intuitive drag-and-drop...</a>
                                        </h3>
                                        <div class="most-populer-post-meta">
                                            <span class="post-date">
                                                <a href="blog-details.html">03 April, 2023</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Single Most Populer Item Start -->
                                <div class="single-most-populer-item" data-aos="fade-up">
                                    <a href="blog-details.html" class="most-populer-thum">
                                        <img src="assets/images/banners/04-special-banner.jpg" alt="" />
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="blog-details.html">Andrew Hoffman</a>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Create beautiful designs that
                                                will help convert more...</a>
                                        </h3>
                                        <div class="most-populer-post-meta">
                                            <span class="post-date">
                                                <a href="blog-details.html">03 April, 2023</a>
                                            </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Special For Beginner Area End -->
                <div class="row" style=" box-shadow:15px 15px 15px 18px whitesmoke; margin-bottom:20px;">
                    <div class="col content-div" id="content1">
                        <section id="about" class="section pb-0">
                            <section class="container">
                                <div class="row mx-0 align-items-center">
                                    <div class="col-md-6 col-lg-4 px-0" style="margin: 20px;" data-aos="blur">
                                        <img alt="" class="w-100" style="border-radius: 10px; "
                                            src="img/doctor.jpg">
                                    </div>
                                    <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                                        <div
                                            class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">My <span
                                                    class="text-primary">mission</span> is develope the best
                                                websites<br> <span class="text-primary">around</span></h2>
                                        </div>
                                        <a href= "about me/index.html"><button type="submit" class="btn"
                                                style="border-radius: 10%; margin: 100px;">take a look</button></a>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col content-div" id="content2">
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
                                                <p>Physicians provide comprehensive medical evaluations and primary care
                                                    for patients of all ages.</p>
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
                                                <p>Our team personalizes each athlete’s treatment based on his/her sport
                                                    and age growing bodies.</p>
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
                                                <p>Our clinic is always ready for urgent care such as Fractures,
                                                    Infections, Bites, Minor Burns, Ear Aches, etc..</p>
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
                                                <p>Our cardiologists are skilled at diagnosing and treating diseases of
                                                    the cardiovascular system.</p>
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
                                                <p>New surgical latest technology allows us to provide minimally
                                                    invasive options when possible.</p>
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
                                                <p>We have extra training in the diagnosis of illnesses and infections
                                                    caused by bacteria, viruses and fungi.</p>
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
                    </div>
                    <div class="col content-div" id="content3">
                        <section class="section pb-0">
                            <div class="row mx-0 align-items-center" data-aos="fade-up">
                                <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                                    <a href="#">
                                        <figure class="hover"><img alt="" class="w-100"
                                                style="border-radius: 10px;" src="img/news/news.jpg"></figure>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-5 mt-md-0 px-sm-0 pl-md-30px pr-lg-30px">
                                    <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a>
                                    </h4>
                                    <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June
                                        06, 2020</p>
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
                                    <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a>
                                    </h4>
                                    <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June
                                        06, 2020</p>
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
                                    <h4 class="my-0 mb-2"><a href="#">Top 20 Illustrations Winners: Academy</a>
                                    </h4>
                                    <p><a href="#" class="text-dark font-weight-bold">Illustration</a> / June
                                        06, 2020</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
@endsection
