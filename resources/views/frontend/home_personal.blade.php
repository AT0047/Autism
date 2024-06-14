@extends('layouts.master')
@section('content')
<style>
.single-testimonial-item::after,
.single-testimonial-item-two::after {
  position: absolute;
  right: 35px;
  bottom: 20px;
  content: "";
  background: url("{{ asset('home_assets/quote.png') }}");
  background-repeat: no-repeat;
  height: 40px;
  width: 52px;
}
</style>
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
                            {{-- <h1 class="my-0"><span class="text-primary">Autism&ME, Training to transform children’s lives --}}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @else
        <main id="home" class="masthead jarallax"
            style="background-image:url('{{ asset('dashboard/img/' . $homeTitle->home_photo) }}');" role="main">
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
                            {{-- <h1 class="my-0"><span class="text-primary">{{ $homeTitle->title }}</h1> --}}
                            {{-- <h5 class="my-0"><span >{!! $homeTitle->description !!}</h5> --}}
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
        <section id="mystory" class="section pb-0">
            <section class="container">
              <div class="row mx-0 align-items-center">
                <div class="ocol-md-6 col-lg-4 px-0 mt-5 mt-lg-0  px-0" data-aos="fade-right">
                  <div class="experience-number font-weight-bold text-dark d-inline-block d-lg-block align-middle">
                    @if (isset($myStory->photo1))
                    <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:400px" src="{{ asset('dashboard/img/' . $myStory->photo1) }}">
                    @else
                    <img alt="" class="w-100" style="border-radius: 10px;" src="{{ asset('home_assets/about1.jpg') }}">
                    @endif
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 px-0">
                  <p class="mb-0 pl-md-30px" data-aos="fade-up">{{ $myStory->{app()->getLocale().'_title1'} ?? '' }}</p>
                </div>
                <div class="col-md-6 col-lg-4 px-0"  data-aos="blur">
                    @if (isset($myStory->photo2))
                    <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:400px" src="{{ asset('dashboard/img/' . $myStory->photo1) }}">
                    @else
                    <img alt="" class="w-100" style="border-radius: 10px;" src="{{ asset('home_assets/about2.jpg') }}">
                    @endif
                </div>
              </div>
          
            </section>
          </section>
          
          <!-- Specialization -->
          <section id="specialization" class="section py-0">
            <div class="container">
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 order-md-2 order-lg-1 col-lg-4 px-0">
                  <p class="mb-0 pl-md-30px" data-aos="fade-right">{{ $myStory->{app()->getLocale().'_title2'} ?? '' }}</p>
                </div>
                <div class="col-md-6 order-md-1 order-lg-2 col-lg-4 px-0"  data-aos="blur">
                    @if (isset($myStory->photo3))
                    <img alt="" class="w-100" style="border-radius: 10px; width:300px; height:500px" src="{{ asset('dashboard/img/' . $myStory->photo2) }}">
                    @else
                    <img alt="" class="w-100" style="border-radius: 10px;" src="{{ asset('home_assets/about3.jpg') }}">
                    @endif
                </div>
                <div class="col-md-6 offset-md-6 offset-lg-0 order-md-3 order-lg-3 col-lg-4 mt-5 pl-4 pl-md-30 mt-md-0" data-aos="fade-up">
                  <p class="mb-0 pl-md-30px" >{!! $myStory->{app()->getLocale().'_content'} ?? '' !!}</p>
                </div>
              </div>
          
            </div>
          </section>

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
                            
                          <a href= "{{ route('frontend.aboutUs.index') }}" target="__blank">
                            <button type="button" class="btn btn-danger mt-4" style="border-radius: 10px;">{{ __('Take a look') }}</button>
                          </a>

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
                                <h2 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">{{ $aboutUs->{app()->getLocale().'_drName'} ?? '' }}</h2>
                                <h5 class="mt-0 wide-lg mb-5 mb-md-0" data-aos="fade-up">
                                    {{ $aboutUs->{app()->getLocale().'_job_specialization'} ?? '' }}
                                </h5>
                            </div>
                            <a href= "{{ route('frontend.aboutUs.index') }}" target="__blank">
                                <button type="button" class="btn btn-danger mt-4" style="border-radius: 10px;">{{ __('Take a look') }}</button>
                              </a>
                            </div>
                    </div>
                </section>
            </section>
        @endif

        <!-- Latest Works -->
        <section id="experience" class="section pb-0 pt-0" data-aos="fade-up">
            <section class="section-sm pb-0 pt-0 mt-0">
              <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-aos="fade-up">
                                    {{-- <h6 class="sub-title-four mb-20">Some Testimonial</h6> --}}
                                    <h2 class="title">{{ __('What People Say About Us') }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slider-area position-relative">
                            <div class="swiper-container testimonial-slider-active">
                                <div class="swiper-wrapper">
                                    @foreach ($peopleStories as $peopleStory)
                                    <div class="swiper-slide testimonial-shadow">
                                        <div class="single-testimonial-item" data-aos="fade-up">
                                            <div class="testimonial-post-author">
                                                <div class="testimonial-author-image">
                                                              <img class="rounded-circle" style="width: 75px; height: 75px;" src="{{ asset('dashboard/img/' . $peopleStory->photo) }}" alt="">
                                                    </div>
                                                    <div class="testimonial-author-info">
                                                        <h4>{{ $peopleStory->{app()->getLocale().'_name'} ?? '' }}</h4>
                                                        <p>{{ $peopleStory->{app()->getLocale().'_job'} ?? '' }}</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-post-content">
                                                    <h5 class="testimonial-post-title">{{ $peopleStory->{app()->getLocale().'_title'} ?? '' }}</h5>
                                                    <p>{!! $peopleStory->{app()->getLocale().'_content'} ?? '' !!}</p>
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
        <!-- Latest Works -->
        <section id="services" class="section feature feature-3 bg-white pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="heading heading-1 text-center">
                            <h2 class="heading-title">{{ __('Our services') }}</h2>
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
                                <br>
                                <div class="feature-content">
                                    <h3>{{ $ourService->{app()->getLocale().'_title'} ?? '' }}</h3>
                                    <p>{!! $ourService->{app()->getLocale().'_description'} ?? '' !!}</p>
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

        {{-- <section id="news" class="section ">
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
        </section> --}}
    </div>
@endsection
