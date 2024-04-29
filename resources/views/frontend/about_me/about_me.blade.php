@extends('layouts.master2')
@section('content')
    <div class="pagepiling">
        <div data-anchor="page1" class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about3.jpg') }});"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-6">
                                                <h1 class="display-2 text-white  wow fadeIn" data-wow-delay="0.1s"><span class="text-primary">Howdy,</span> I'm Ramsay</h1>
                                                <a class="popup-youtube" href="images/bg/vabout4.mp4"><span class="icon ion-ios-play"></span>Watch video </a>
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
                <div class="section-bg mask" style="background-image:url({{ asset('about_me_assets/about6.jpg') }});"></div>
                <div class="scrollable-content">
                    <div class="vertical-title d-none d-lg-block"><span>resume</span></div>
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
                                                            <div class="resume-row">
                                                                <h6 class="resume-type">Specialization course</h6>
                                                                <i class="resume-study">University of studies, Poland,
                                                                    Cracow<br>Jan 2004 - Dec 2006</i>
                                                                <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                    consectetur adipisicing elit. Minus nobis animi
                                                                    assumenda sint recusandae! Dolor placeat debitis animi
                                                                    illum quo repellendus pariatur, enim</p>
                                                            </div>
                                                            <div class="resume-row">
                                                                <h6 class="resume-type">Academy course</h6>
                                                                <i class="resume-study">University of studies, Poland,
                                                                    Cracow<br>Jan 2004 - Dec 2006</i>
                                                                <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                    consectetur adipisicing elit. Minus nobis animi
                                                                    assumenda sint recusandae! Dolor placeat debitis animi
                                                                    illum quo repellendus pariatur, enim </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-md-5 mt-md-5 fadeY fadeY-2">
                                                <h2 class="resume-header title">Experience</h2>
                                                <div class="col-resume">
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            <div class="resume-row">
                                                                <h6 class="resume-type">WEBDESIGNER & FRONT-END</h6>
                                                                <i class="resume-study">University of studies, Poland,
                                                                    Cracow<br>Jan 2004 - Dec 2006</i>
                                                                <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                    consectetur adipisicing elit. Minus nobis animi
                                                                    assumenda sint recusandae! Dolor placeat debitis animi
                                                                    illum quo repellendus pariatur, enim</p>
                                                            </div>
                                                            <div class="resume-row">
                                                                <h6 class="resume-type">WORDPRESS DEVELOPER</h6>
                                                                <i class="resume-study">University of studies, Poland,
                                                                    Cracow<br>Jan 2004 - Dec 2006</i>
                                                                <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                    consectetur adipisicing elit. Minus nobis animi
                                                                    assumenda sint recusandae! Dolor placeat debitis animi
                                                                    illum quo repellendus pariatur, enim</p>
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
        </div>
        <div data-anchor="page5" class="pp-scrollable text-white section section-5">
            <div class="scroll-wrap">
                <div class="bg-changer">
                    <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about2.jpg') }});"></div>
                    <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about3.jpg') }});"></div>
                    <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about5.jpg') }});"></div>
                    <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about6.jpg') }});"></div>
                </div>
                <div class="scrollable-content">
                    <div class="vertical-title  d-none d-lg-block"><span>my works</span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="project-row">
                                                    <a class="active" href="#">
                                                        <span class="project-number">01</span>
                                                        <h2 class="project-title">Abstract Skat</h2>
                                                        <div class="project-category">Illustration</div>
                                                    </a>
                                                </div>
                                                <div class="project-row">
                                                    <a href="#">
                                                        <span class="project-number">02</span>
                                                        <h2 class="project-title">Borato Prism</h2>
                                                        <div class="project-category">Branding</div>
                                                    </a>
                                                </div>
                                                <div class="project-row">
                                                    <a href="#">
                                                        <span class="project-number">03</span>
                                                        <h2 class="project-title">Brole Mobile App</h2>
                                                        <div class="project-category">Mobile Design</div>
                                                    </a>
                                                </div>
                                                <div class="project-row">
                                                    <a href="#">
                                                        <span class="project-number">04</span>
                                                        <h2 class="project-title">Bauhaus Studio</h2>
                                                        <div class="project-category">House Design</div>
                                                    </a>
                                                </div>
                                                <div class="view-all view-all-projects">
                                                    <a href="#">
                                                        View all projects
                                                    </a>
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
        <div data-anchor="page7" class="pp-scrollable text-white section section-7">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url({{ asset('about_me_assets/about1.jpg') }});"></div>
                <div class="bg-quote"></div>
                <div class="scrollable-content">
                    <div class="vertical-title  d-none d-lg-block"><span>testimonials</span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="review-carousel owl-carousel">
                                            <div class="review-carousel-item">
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">David & Elisa</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>If you are seeking an Interior designer that will understand
                                                                exactly your needs, and someone who will utilise their
                                                                creative and technical skills in parity with your taste,
                                                                then Suzanne at The Ramsay Studio is perfect.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">Amanda</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Odio dolorem reiciendis doloremque veniam perspiciatis quam
                                                                velit pariatur eius, repellendus dolores eveniet maiores
                                                                sed. Quod quam minus dolore sed cumque aliquid.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-carousel-item">
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">David & Elisa</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>If you are seeking an Interior designer that will understand
                                                                exactly your needs, and someone who will utilise their
                                                                creative and technical skills in parity with your taste,
                                                                then Suzanne at The Ramsay Studio is perfect.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">Amanda</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Odio dolorem reiciendis doloremque veniam perspiciatis quam
                                                                velit pariatur eius, repellendus dolores eveniet maiores
                                                                sed. Quod quam minus dolore sed cumque aliquid.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-carousel-item">
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">David & Elisa</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>If you are seeking an Interior designer that will understand
                                                                exactly your needs, and someone who will utilise their
                                                                creative and technical skills in parity with your taste,
                                                                then Suzanne at The Ramsay Studio is perfect.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-row">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="review-author">
                                                                <div class="author-name">Amanda</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Odio dolorem reiciendis doloremque veniam perspiciatis quam
                                                                velit pariatur eius, repellendus dolores eveniet maiores
                                                                sed. Quod quam minus dolore sed cumque aliquid.</p>
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
    </div>
    </div>
@endsection
