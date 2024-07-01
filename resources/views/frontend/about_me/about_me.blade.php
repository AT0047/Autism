@extends('layouts.master2')
@section('content')
    <div class="pagepiling">
        <div data-anchor="page1" class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
                @if(isset($media->sec1_photo))
                <div class="section-bg" style="background-image:url({{ asset('storage/' . $media->sec1_photo ) }});"></div>
                @else
                <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about3.jpg') }});"></div>
                @endif                
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-6">
                                                <h1 class="display-2 text-white  wow fadeIn" data-wow-delay="0.1s"><span
                                                        class="text-primary">Hi,</span> I'm {{ $aboutUs->dr_name ?? '' }}
                                                </h1>
                                                <a class="popup-youtube"
                                                    href="{{ asset('storage/' . ($media->sec1_video ?? '')) }}"><span
                                                        class="icon ion-ios-play"></span>Watch video </a>
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
        <div data-anchor="page3" class="pp-scrollable text-white section section-3">
            <div class="scroll-wrap">
                @if(isset($media->sec2_photo))
                <div class="section-bg mask" style="background-image:url({{ asset('storage/' . ($media->sec2_photo ?? '')) }});"></div>
                @else
                <div class="section-bg mask" style="background-image:url({{ asset('about_me_assets/about6.jpg') }});"></div>
                @endif                
                <div class="scrollable-content">
                    <div class="vertical-title d-none d-lg-block"><span></span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row row-resume">
                                            <div class="col-md-6 fadeY fadeY-1">
                                                <h2 class="resume-header title">Education</h2>
                                                <div class="col-resume">
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            @foreach ($all_education as $education)
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">{{ $education->{app()->getLocale().'_title'} }}</h6>
                                                                    <i
                                                                        class="resume-study">{{ $education->{app()->getLocale().'_place'} }}<br>{{ $education->date }}</i>
                                                                    <p class="resume-text">{{ $education->{app()->getLocale().'_description'} }}</p>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 pt-md-5 mt-md-5 fadeY fadeY-2">
                                                <h2 class="resume-header title">Experience</h2>
                                                <div class="col-resume">
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            <!-- Iterate over experience data and display each experience item -->
                                                            @foreach ($all_experience as $experience)
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">{{ $experience->{app()->getLocale().'_title'} }}</h6>
                                                                    <i
                                                                        class="resume-study">{{ $experience->{app()->getLocale().'_place'} }}<br>{{ $experience->date }}</i>
                                                                    <p class="resume-text">{{ $experience->{app()->getLocale().'_description'} }}
                                                                    </p>
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
                </div>
            </div>
        </div>
        <div data-anchor="page5" class="pp-scrollable text-white section section-5">
            <div class="scroll-wrap">
                <div class="bg-changer">
                    @foreach ($aboutSec3 as $photo)
                        <div class="section-bg" style="background-image:url({{ asset('storage/' . $photo->photo) }});"></div>
                    @endforeach
                </div>
                <div class="scrollable-content">
                    <div class="vertical-title  d-none d-lg-block"><span></span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach ($aboutSec3 as $key => $value)
                                                    <div class="project-row">
                                                        <a class="{{ $key == 0 ? 'active' : '' }}" href="#">
                                                            <span class="project-number">{{ $key + 1 }}</span>
                                                            <h2 class="project-title">{{ $value->{app()->getLocale().'_title'} }}</h2>
                                                            <div class="project-category">{{ $value->{app()->getLocale().'_description'} }}</div>
                                                        </a>
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
        <div data-anchor="page7" class="pp-scrollable text-white section section-7">
            <div class="scroll-wrap">
                @if(isset($media->sec4_photo))
                <div class="section-bg" style="background-image:url({{ asset('storage/' . ($media->sec4_photo ?? '')) }});"></div>
                @else
                <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about1.jpg') }});"></div>
                @endif
                <div class="bg-quote"></div>
                <div class="scrollable-content">
                    <div class="vertical-title  d-none d-lg-block"><span></span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="review-carousel owl-carousel">
                                            @php
                                                $i = 0;
                                                $y = 1;
                                            @endphp
                                            @foreach ($aboutSec4 as $key => $item)
                                                @if ($i < $aboutSec4->count())
                                                    <div class="review-carousel-item">
                                                        <div class="review-row">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="review-author">

                                                                        <div class="author-name">
                                                                            {{ $aboutSec4[$i]->{app()->getLocale().'_name'} ?? '' }}</div>
                                                                        <i>{{ $aboutSec4[$i]->{app()->getLocale().'_title'} ?? ''}}</i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 text">
                                                                    <p>{{ $aboutSec4[$i]->{app()->getLocale().'_description'} ?? ''}}</p>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $i = $i + 2;
                                                            @endphp
                                                        </div>
                                                        <div class="review-row">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="review-author">
                                                                        <div class="author-name">{{ $aboutSec4[$y]->{app()->getLocale().'_name'} ?? ''}}
                                                                        </div>
                                                                        <i>{{ $aboutSec4[$y]->{app()->getLocale().'_title'} ?? ''}}</i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 text">
                                                                    <p>{{ $aboutSec4[$y]->{app()->getLocale().'_description'} ?? ''}}</p>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $y = $y + 2;
                                                            @endphp
                                                        </div>
                                                @endif
                                                {{-- <div class="review-row">
                                                    </div> --}}
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
    </div>
@endsection
