@extends('layouts.master')
@section('content')
<style></style>
    <!-- Masthead -->
    @if (!$homeTitle)
        <main id="home" class="masthead jarallax"
            style="background-image:url('{{ asset('home_assets/autism1.jpg') }}');" role="main">
            <div class="lines">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4"></div>
                        <div class="col-md-6 hidden-sm col-lg-4"></div>
                        <div class="col-md-6 col-lg-4 hidden-md"></div>
                    </div>
                </div>
            </div>
            <div class="opener blur-scroll">
                <div class="container">
                    <div class="row mx-0">
                        <div class="col-md-4 px-0">
                            <h1 class="my-0"><span class="text-primary">Autism&ME, Training to transform children’s lives
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @else
        <main id="home" class="masthead jarallax"
            style="background-image:url('{{ asset('dashboard/img/' . $homeTitle->photo) }}');" role="main">
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
                            <h1 class="my-0"><span class="text-primary">{{ $homeTitle->title }}</h1>
                            <h5 class="my-0"><span >{!! $homeTitle->description !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
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
        @if (!$myStory)
            <section id="mystory" class="section pb-0">
                <section class="container">
                    <div class="row mx-0 align-items-center">
                        <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                            <div
                                class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                                <img alt="" class="w-100" style="border-radius: 10px;"
                                    src="{{ asset('home_assets/about1.jpg') }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 px-0">
                            {{-- <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">In Argentina, <span
                                class="text-primary">WHO and partner</span>Training (CST) programme.<br> <span
                                class="text-primary">around</span></h2> --}}
                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                In Argentina, WHO and partnerTraining (CST) programme.around</h2>
                        </div>
                        <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                            <img alt="" class="w-100" style="border-radius: 10px;"
                                src="{{ asset('home_assets/about2.jpg') }}">
                        </div>
                    </div>
                </section>
            </section>
            <!-- Specialization -->
            <section id="specialization" class="section py-0">
                <div class="container">
                    <div class="row mx-0 align-items-center">
                        <div class="col-md-6 order-md-2 order-lg-1 col-lg-4 px-0">
                            {{-- <h2 class="my-0 wide-lg float-md-right float-lg-none offset-lg-5 mb-5 mb-md-0"
                            data-aos="fade-right">I <span class="text-primary">use</span> is a long established fact
                            that a reader</h2> --}}
                            <h2 class="my-0 wide-lg float-md-right float-lg-none offset-lg-5 mb-5 mb-md-0"
                                data-aos="fade-right">I use is a long established fact that a reader</h2>
                        </div>
                        <div class="col-md-6 order-md-1 order-lg-2 col-lg-4 px-0" data-aos="blur">
                            <img alt="" class="w-100" style="border-radius: 10px;"
                                src="{{ asset('home_assets/about3.jpg') }}">
                        </div>
                        <div class="col-md-6 offset-md-6 offset-lg-0 order-md-3 order-lg-3 col-lg-4 mt-5 pl-0 pl-md-30 mt-md-0"
                            data-aos="fade-up">
                            <p class="mb-0 pl-md-30px">We have experience in implementing projects for many large domestic
                                and
                                foreign corporations, enterprises in many elds such as nance, banking, F&B, education,
                                communication.</p>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="mystory" class="section pb-0">
                <section class="container">
                    <div class="row mx-0 align-items-center">
                        <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0" data-aos="fade-right">
                            <div
                                class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                                <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:400px"
                                    src="{{ asset('dashboard/img/' . $myStory->photo1) }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 px-0">
                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                @php
                                    $title1_words = explode(' ', $myStory->title1);
                                @endphp
                                <span style="color: red;">{{ $title1_words[0] }}</span>
                                @for($i = 1; $i < count($title1_words); $i++)
                                @if($i== 2)
                                <span style="color: red;">{{ $title1_words[$i] }}</span>
                                @else
                                {{ $title1_words[$i] }}
                                @endif
                                @endfor
                            </h2>
                        </div>                     
                        <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                            <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:400px"
                                src="{{ asset('dashboard/img/' . $myStory->photo2) }}">
                        </div>
                    </div>
                </section>
            </section>
            <!-- Specialization -->
            <section id="specialization" class="section py-0">
                <div class="container">
                    <div class="row mx-0 align-items-center">
                        <div class="col-md-6 col-lg-4 px-0">
                            <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                @php
                                    $title2_words = explode(' ', $myStory->title2);
                                @endphp
                                <span style="color: red;">{{ $title2_words[0] }}</span>
                                @for($i = 1; $i < count($title2_words); $i++)
                                @if($i== 2)
                                <span style="color: red;">{{ $title2_words[$i] }}</span>
                                @else
                                {{ $title2_words[$i] }}
                                @endif
                                @endfor
                            </h2>
                        </div> 
                        <div class="col-md-6 order-md-1 order-lg-2 col-lg-4 px-0" data-aos="blur">
                            <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:400px"
                                src="{{ asset('dashboard/img/' . $myStory->photo3) }}">
                        </div>
                        <div class="col-md-6 offset-md-6 offset-lg-0 order-md-3 order-lg-3 col-lg-4 mt-5 pl-0 pl-md-30 mt-md-0"
                            data-aos="fade-up">
                            <p class="mb-0 pl-md-30px">{!! $myStory->content !!}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
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
                                        class="text-primary">mission</span> is develope the best websites<br><span
                                        class="text-primary">around</span></h2>
                            </div>
                            <a href= "{{ route('frontend.aboutUs.index') }}" target="_blank"><button type="submit"
                                    class="btn" style="border-radius: 10%; margin: 100px;">take a look</button></a>
                        </div>
                    </div>
                </section>
            </section>
        @else
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
                                <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">{{ $aboutUs->dr_name }}</h2>
                                <h5 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                    {{ $aboutUs->job_specialization }}
                                </h5>
                            </div>
                            <a href= "{{ route('frontend.aboutUs.index') }}" target="_blank"><button type="submit"
                                    class="btn" style="border-radius: 10%; margin: 100px;">take a look</button></a>
                        </div>
                    </div>
                </section>
            </section>
        @endif
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
                    @foreach ($ourServices as $ourService)
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="feature-panel">
                                <div class="feature-img">
                                    <img src="{{ asset('dashboard/img/' . $ourService->photo) }}" alt="target">
                                </div>
                                <div class="feature-content">
                                    <h3>{{ $ourService->title }}</h3>
                                    <p>{!! $ourService->description !!}</p>
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
                                    @foreach ($peopleStories as $peopleStory)
                                        <div class="swiper-slide">
                                            <div class="single-testimonial-item" data-aos="fade-up">
                                                <div class="testimonial-post-author">
                                                    <div class="testimonial-author-image" >
                                                        <img class="rounded-circle" style="width: 75px; height: 75px;" src="{{ asset('dashboard/img/' . $peopleStory->photo) }}" alt="">
                                                    </div>
                                                    <div class="testimonial-author-info">
                                                        <h4>{{ $peopleStory->name }}</h4>
                                                        <p>{{ $peopleStory->job }}</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-post-content">
                                                    <h5 class="testimonial-post-title">{{ $peopleStory->title }}</h5>
                                                    <p>{!! $peopleStory->content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                    @foreach ($preferredBooks as $preferredBook)
                        <div class="row mx-0 align-items-center" data-aos="fade-up">
                            <div class="col-md-6 col-lg-4 px-0" data-aos="blur">
                                <a href="{{ route('Autism&Me.bookDetails', $preferredBook->id) }}">
                                    <figure class="hover"><img alt="" class="fixed-size-img" style="height: 200px;width:400px"
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
        </section>
    </div>
@endsection
