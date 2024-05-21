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
                                @if (!$title)
                                    <div class="hero-five-text text-left">
                                        <h1 class="title">
                                            <span class="hero-five-title">Unlimited Advice & Resource
                                        </h1>
                                        <p class="hero-text-dec">That necessitates a robust ecommerce platform that
                                            optimizes your store & products</p>
                                    </div>
                                @else
                                    <div class="hero-five-text text-left">
                                        <h1 class="title">
                                            <span class="hero-five-title">{{ $title->title }}
                                        </h1>
                                        <p class="hero-text-dec">{!! $title->description !!}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-5">
                                <div class="hero-five-category" data-aos="fade-up">
                                    @foreach ($categories as $category)
                                        {{-- <a href="{{ route('Autism&Me.libraryDetails', $category->id) }}"
                                            class="btn-large woocommerce">{{ $category->name }}</a> --}}
                                        <a href="#category1" class="btn-large woocommerce">{{ $category->name }}</a>
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
                    <livewire:load-books>
                </div>
                <div class="col-lg-4">
                    <!-- Latest Post Area Start -->
                    <div class="archive-post-inner-wrap">
                        <livewire:library-view>
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
                            <livewire:show-books />
                <!-- Special For Beginner Area End -->
                <div class="row" style=" box-shadow:15px 15px 15px 18px whitesmoke; margin-bottom:20px;">
                    @if (!$aboutUs)
                        <section id="about" class="section pb-0">
                            <section class="container">
                                <div class="row mx-0 align-items-center">
                                    <div class="col-md-6 col-lg-4 px-0" style="margin: 20px;" data-aos="blur">
                                        <img alt="" class="w-100" style="border-radius: 10px; "
                                            src="{{ asset('home_assets/doctor.jpg') }}">
                                    </div>
                                    <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                                        <div
                                            class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">My <span
                                                    class="text-primary">mission</span> is develope the best
                                                websites<br><span class="text-primary">around</span></h2>
                                        </div>
                                        <a href= "{{ route('frontend.aboutUs.index') }}" target="_blank"><button
                                                type="submit" class="btn"
                                                style="border-radius: 10%; margin: 100px;">take a look</button></a>
                                    </div>
                                </div>
                            </section>
                        </section>
                    @else
                        <div class="col content-div" id="content1">
                            <section id="about" class="section pb-0">
                                <section class="container">
                                    <div class="row mx-0 align-items-center">
                                        <div class="col-md-6 col-lg-4 px-0" style="margin: 20px;" data-aos="blur">
                                            <img alt="" class="w-100" style="border-radius: 10px; "
                                                src="{{ asset('storage/' . $aboutUs->dr_photo) }}">
                                        </div>
                                        <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                                            <div
                                                class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                                                <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                                    {{ $aboutUs->dr_name }}
                                                </h2>
                                                <h5 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                                    {{ $aboutUs->job_specialization }}</h5>
                                            </div>
                                            <a href="{{ route('frontend.aboutUs.index') }}"><button type="submit"
                                                    class="btn" style="border-radius: 10%; margin: 100px;">take a look</button></a>
                                        </div>
                                    </div>
                                </section>
                            </section>
                        </div>
                    @endif
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
                                    @foreach ($ourServices as $ourService)
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="feature-panel">
                                                <div class="feature-img">
                                                    <img src="{{ asset('dashboard/img/' . $ourService->photo) }}"
                                                        alt="target">
                                                </div>
                                                <div class="feature-content">
                                                    <h3>{{ $ourService->title }}</h3>
                                                    <p>{!! $ourService->description !!}.</p>
                                                </div>
                                            </div>
                                            <!-- .feature-panel end -->
                                        </div>
                                    @endforeach
                                    <!-- .col-md-4 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .container end -->
                        </section>
                    </div>
                    <div class="col content-div" id="content3">
                        <section class="section pb-0">
                            @foreach ($preferredBooks as $preferredBook)
                                <div class="row mx-0 align-items-center" data-aos="fade-up">
                                    <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                                        <a href="{{ route('Autism&Me.bookDetails', $preferredBook->id) }}">
                                            <figure class="hover"><img alt="" class="w-100"
                                                    style="border-radius: 10px;"
                                                    src="{{ asset('dashboard/img/' . $preferredBook->photo) }}"></figure>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mt-5 mt-md-0 px-sm-0 pl-md-30px pr-lg-30px">
                                        <h4 class="my-0 mb-2"><a
                                                href="{{ route('Autism&Me.bookDetails', $preferredBook->id) }}">{{ $preferredBook->name }}</a>
                                        </h4>
                                        <p><a href="{{ route('Autism&Me.bookDetails', $preferredBook->id) }}"
                                                class="text-dark font-weight-bold">{{ $preferredBook->author_name }}</a> /
                                            {{ $preferredBook->publication_date }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
@endsection
