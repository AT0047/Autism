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
            <div id="main-wrapper">
                <div class="site-wrapper-reveal">
                    <!-- Blog Details Wrapper Start -->
                    <div class="blog-details-wrapper section-space--ptb_80">
                        <div class="container">
                            <div class="row">
                                @foreach($books as $book)
                                    <!-- Latest Post Area End -->
                                    <div class="row">
                                        <div class="blog-details-thum">
                                            <img src="{{ asset('dashboard/img/'. $book->photo) }}" alt="">
                                        </div>
                                        <div class="blog-details-post-content">
                                            <div class="blog-details-meta-box">
                                                <div class="post-meta-left-side mb-2">
                                                    <div class="trending-blog-post-category">
                                                        <a href="#">{{$book->category->name}}</a>
                                                    </div>
                                                    <div class="following-blog-post-author">
                                                        By <a href="#">{{ $book->author_name }}</a>
                                                    </div>
                                                </div>
                                                <div class="post-mid-side mb-2">
                                                    <span class="post-meta-left-side">
                                                        <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="#">{{ $book->publication_date }}</a>
                                                        </span>
                                                    </span>
                                                    {{-- <span>10 min read</span> --}}
                                                </div>
                                                <div class="post-meta-right-side mb-2">
                                                    <a href="#"><img src="{{ asset('home_assets/small-bookmark.png') }}"
                                                            alt="" /></a>
                                                    <a href="#"><img src="{{ asset('home_assets/heart.png') }}"
                                                            alt="" /></a>
                                                </div>
                                            </div>
                                            <h3 class="following-blog-post-title">
                                                <a href="#">{{ $book->name }}</a>
                                            </h3>
                                            <div class="post-details-text">
                                                <p>{!! $book->content !!}</p>
                                                <div class="video-banner-area video-popup mb-4">
                                                    <a href="{{asset('dashboard/img/'. $book->video)}}"
                                                        class="video-link mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img class="img-fluid"
                                                                src="{{ asset('home_assets/blog-details-video.jpg') }}"
                                                                alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-mark">
                                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                                </div>
                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row">
                                    <div class="related-post-area section-space--pt_60">
                                        <div class="row">
                                            <div class="col-lg-8 col-7">
                                                <div class="section-title mb-30">
                                                    <h3 class="title">Related Post</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-5">
                                                <div class="related-post-slider-navigation text-end">
                                                    <div class="related-post-button-prev navigation-button"><i
                                                            class="icofont-long-arrow-left"></i></div>
                                                    <div class="related-post-button-next navigation-button"><i
                                                            class="icofont-long-arrow-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Swiper -->
                                        <div class="swiper-container related-post-slider-active">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <!-- Single Following Post Start -->
                                                    <div class="single-related-post">
                                                        <div class="related-post-thum">
                                                            <img src="{{ asset('home_assets/01.jpg') }}" alt="">
                                                        </div>
                                                        <div class="following-post-content">
                                                            <div class="following-blog-post-top">
                                                                <div class="trending-blog-post-category">
                                                                    <a href="#">Business</a>
                                                                </div>
                                                                <div class="following-blog-post-author">
                                                                    By <a href="#">Kathy Ramirez</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="following-blog-post-title">
                                                                <a href="#">Customize your WooCommerce
                                                                    store with countless design
                                                                </a>
                                                            </h5>
                                                            <div class="following-blog-post-meta">
                                                                <div class="post-meta-left-side">
                                                                    <span class="post-date">
                                                                        <i class="icofont-ui-calendar"></i>
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                    <span>10 min read</span>
                                                                </div>
                                                                <div class="post-meta-right-side mb-2">
                                                                    <a href="#"><img
                                                                            src="{{ asset('home_assets/small-bookmark.png') }}"
                                                                            alt="" /></a>
                                                                    <a href="#"><img
                                                                            src="{{ asset('home_assets/heart.png') }}"
                                                                            alt="" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- Single Following Post End -->
                                                </div>
                                                <div class="swiper-slide">
                                                    <!-- Single Following Post Start -->
                                                    <div class="single-related-post">
                                                        <div class="related-post-thum">
                                                            <img src="{{ asset('home_assets/02.jpg') }}" alt="">
                                                        </div>
                                                        <div class="following-post-content">
                                                            <div class="following-blog-post-top">
                                                                <div class="trending-blog-post-category">
                                                                    <a href="#">Business</a>
                                                                </div>
                                                                <div class="following-blog-post-author">
                                                                    By <a href="#">Kathy Ramirez</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="following-blog-post-title">
                                                                <a href="#">Customize your WooCommerce
                                                                    store with countless design
                                                                </a>
                                                            </h5>
                                                            <div class="following-blog-post-meta">
                                                                <div class="post-meta-left-side">
                                                                    <span class="post-date">
                                                                        <i class="icofont-ui-calendar"></i>
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                    <span>10 min read</span>
                                                                </div>
                                                                <div class="post-meta-right-side mb-2">
                                                                    <a href="#"><img src="{{ asset('home_assets/small-bookmark.png') }}" alt="" /></a>
                                                                    <a href="#"><img src="{{ asset('home_assets/heart.png') }}" alt="" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- Single Following Post End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Banner Area End -->
                                </div>
                            </div> <!-- Latest Post Area End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="faq-area">
                <div class="container">
                    <div class="row ">
                        <div class="col">
                            <div class="row g-0 align-items-center faq-box-wrap">
                                <div class="col-lg-6">
                                    <div class="faq-content-wrap">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button faq-qustion" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <span class="number-of-accordion">01</span> How do the
                                                        different types of drawings work?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button faq-qustion collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="number-of-accordion">02</span> How long do the
                                                        records of drawings persist?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button faq-qustion collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="number-of-accordion">03</span> Why do I need to be
                                                        careful public drawings?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button faq-qustion collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="number-of-accordion">04</span> Can I use
                                                        RANDOM.ORG to draw straws?
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingfive">
                                                    <button class="accordion-button faq-qustion collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="number-of-accordion">05</span> Do the numbers
                                                        exhibit Benford's Law?
                                                    </button>
                                                </h2>
                                                <div id="collapsefive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-aos="fade-up">
                                                <h2 class="accordion-header" id="headingsix">
                                                    <button class="accordion-button faq-qustion collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="number-of-accordion">06</span> Are the numbers
                                                        suitable for experiments?
                                                    </button>
                                                </h2>
                                                <div id="collapsesix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body faq-ans">
                                                        <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                            industry. Lorem psum has been the dustry standard dummy text
                                                            since the printer into electronic.</p>
                                                        <p>Lorem Ipsum is simply dummy text offer printing and
                                                            typeseting
                                                            industry since the printer into electronic.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
