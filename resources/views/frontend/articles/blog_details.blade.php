@extends('layouts.master')
@section('content')
    <!-- Content -->
    <style>
        a{
            color:blue;
        }
    </style>
    <div >
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
                        <div class="container" style="margin-top: 95px;">
                            <div class="row">
                                <!-- Latest Post Area End -->
                                <div class="row">
                                    <div class="blog-details-thum">
                                        <img src="{{ asset('dashboard/img/' . $bookdetails->photo) }}" style="border-radius: 4%;height:400px" alt=""
                                            style="border-radius: 4%;">
                                    </div>
                                    <div class="blog-details-post-content">
                                        <div class="blog-details-meta-box">
                                            <div class="post-meta-left-side mb-2">
                                                <div class="trending-blog-post-category">
                                                    <a href="#">{{ $bookdetails->category->{app()->getLocale().'_name'} }}</a>
                                                </div>
                                                <div class="following-blog-post-author">
                                                    By <a href="">{{ $bookdetails->{app()->getLocale().'_author_name'} }}</a>
                                                </div>
                                            </div>
                                            <div class="post-mid-side mb-2">
                                                <span class="post-meta-left-side">
                                                    <span class="post-date">
                                                        <i class="icofont-ui-calendar"></i>
                                                        <a href="" style="color:red">{{ $bookdetails->publication_date }}</a>
                                                    </span>
                                                </span>
                                                {{-- <span>10 min read</span> --}}
                                            </div>
                                            {{-- <div class="post-meta-right-side mb-2">
                                                    <a href="#"><img src="{{ asset('home_assets/small-bookmark.png') }}"
                                                            alt="" /></a>
                                                    <a href="#"><img src="{{ asset('home_assets/heart.png') }}"
                                                            alt="" /></a>
                                                </div> --}}
                                        </div>
                                        <h3 class="following-blog-post-title text-center">
                                            <a href="#">{{ $bookdetails->{app()->getLocale().'_name'} }}</a>
                                        </h3>
                                        <div class="post-details-text text-center">
                                            <p>{!! $bookdetails->{app()->getLocale().'_content'} !!}</p>
                                            {{-- <div class="video-banner-area video-popup mb-4"> --}}
                                            <a href="{{ asset('dashboard/img/' . $bookdetails->video) }}"
                                                class="video-link mt-30">
                                                <div class="single-popup-wrap">
                                                    {{-- <img class="img-fluid"
                                                                src="{{ asset('dashboard/img/'. $bookdetails->photo) }}"
                                                                alt=""> --}}
                                                    <video controls class="img-fluid rounded shadow"
                                                        style="width: 100%; max-height: 500px;">
                                                        <source src="{{ asset('dashboard/img/' . $bookdetails->video) }}"
                                                            type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                {{-- <span class="video-play-icon"></span> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </div>
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
                                                @foreach ($category as $cat)
                                                    <div class="swiper-slide">
                                                        <!-- Single Following Post Start -->
                                                        <div class="single-related-post">
                                                            <div class="related-post-thum">
                                                                <a href="{{ route('Autism&Me.bookDetails', $cat->id) }}">
                                                                    <img src="{{ asset('dashboard/img/' . $cat->photo) }}"
                                                                    class="fixed-size-img" style="height: 200px;width:400px">
                                                                </a>
                                                            </div>
                                                            <div class="following-post-content">
                                                                <div class="following-blog-post-top">
                                                                    <div class="trending-blog-post-category">
                                                                        <a>{{ $cat->category->{app()->getLocale().'_name'} }}</a>
                                                                    </div>
                                                                    <div class="following-blog-post-author">
                                                                        By <a
                                                                            href="{{ route('Autism&Me.bookDetails', $cat->id) }}">{{ $cat->{app()->getLocale().'_author_name'} }}</a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="following-blog-post-title">
                                                                    <a
                                                                        href="{{ route('Autism&Me.bookDetails', $cat->id) }}">{{ $cat->{app()->getLocale().'_name'} }}</a>
                                                                </h5>
                                                                <div class="following-blog-post-meta">
                                                                    <div class="post-meta-left-side">
                                                                        <span class="post-date">
                                                                            <i class="icofont-ui-calendar"></i>
                                                                            <a style="color:red"
                                                                                href="{{ route('Autism&Me.bookDetails', $cat->id) }}">{{ $cat->publication_date }}</a>
                                                                        </span>
                                                                        {{-- <span>10 min read</span> --}}
                                                                    </div>
                                                                    {{-- <div class="post-meta-right-side mb-2">
                                                                    <a href="#"><img
                                                                            src="{{ asset('home_assets/small-bookmark.png') }}"
                                                                            alt="" /></a>
                                                                    <a href="#"><img
                                                                            src="{{ asset('home_assets/heart.png') }}"
                                                                            alt="" /></a>
                                                                </div> --}}
                                                                </div>
                                                            </div>
                                                        </div><!-- Single Following Post End -->
                                                    </div>
                                                @endforeach
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
                                            @foreach ($bookQuestions as $question)
                                                <div class="accordion-item" data-aos="fade-up">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button faq-qustion" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <span
                                                                class="number-of-accordion">0{{ $loop->iteration }}</span>{{ $question->{app()->getLocale().'_question'} }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body faq-ans">
                                                            <p>{!! $question->{app()->getLocale().'_answer'} !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
