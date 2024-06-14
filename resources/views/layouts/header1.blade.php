

<nav id="scrollspy" class="navbar navbar-desctop" style="background-color: #000;height: 50px;">

    <div class="d-flex p-0 align-items-center position-relative w-100">
        <!-- Brand-->
        <div>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">


            @php
            $logo = \App\Models\AboutPhoto::first()->logo ?? '';
            $font= \App\Models\FontSetting::first();
            @endphp
            @if ($logo)
            <a href="{{ url('Autism&Me/home') }}">
            <img src="{{ asset('storage/' . $logo) }}" class="position-absolute navbarIcon" style="width: 60px; margin: 10px;" alt="">
            </a>
            @else
            <a href="{{ url('Autism&Me/home') }}">
            <img src="{{ asset('home_assets/favicon.png') }}" class="position-absolute navbarIcon" style="width: 60px; margin: 10px;" alt="">
           </a>
            @endif
        </div>
        <div class="w-25"></div>



        <div class="container">
            <ul class="navbar-nav navbar-nav-desctop text-center w-50 m-auto fw-bold d-none d-lg-block">
                <!-- <li><a class="nav-link text-white" href="home-personal.html">Home</a></li> -->

                <li><a class="nav-link text-white" style="font-family:{{ $font->{app()->getLocale().'_font_family'} }}; font-size:{{ $font->{app()->getLocale().'_font_size'} }} px;" href="#mystory">{{ __('my story') }}</a></li>

                <li><a class="nav-link text-white" style="font-family:{{ $font->{app()->getLocale().'_font_family'} }}; font-size:{{ $font->{app()->getLocale().'_font_size'} }} px;" href="{{ route('Autism&Me.articles') }}">{{ __('Articles') }}</a></li>
                <li><a class="nav-link text-white" style="font-family:{{ $font->{app()->getLocale().'_font_family'} }}; font-size:{{ $font->{app()->getLocale().'_font_size'} }} px;" href="#services">{{ __('Our service') }}</a></li>
                <!-- <li><a class="nav-link text-white" href="about me/index.html">About us</a></li> -->

            </ul>

            <!-- Social -->
            <ul class="social-icons d-none align-items-center d-lg-block">
                @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                <li><a href="{{ $facebook }}" target="_blank">
                        <ion-icon class="text-white" name="logo-facebook"></ion-icon>
                    </a></li>
                    @php($instagram = App\Models\SocialLinks::where('platform', 'instagram')->pluck('link')->first())
                <li><a href="{{ $instagram }}" target="_blank">
                        <ion-icon class="text-white" name="logo-instagram"></ion-icon>
                    </a></li>
                    @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                <li><a href="{{ $linkedin }}" target="_blank">
                        <ion-icon class="text-white" name="logo-linkedin"></ion-icon>
                    </a></li>
                <li>
                    @if (app()->getLocale()!='ar')
                    <a href="{{ route('localeChange', 'ar') }}"><span class="text-white fw-bold lang" style="font-family:{{ $font->{app()->getLocale().'_font_family'} }}; font-size:{{ $font->{app()->getLocale().'_font_size'} }} px;">ض</span></a>
                    @else
                    <a href="{{ route('localeChange', 'en') }}"><span class="text-white fw-bold lang" style="font-family:{{ $font->{app()->getLocale().'_font_family'} }}; font-size:{{ $font->{app()->getLocale().'_font_size'} }} px;">en</span></a>
                    @endif
                </li>

            </ul>
        </div>

        <!-- Toggler -->
        <div class="toggler text-light d-block d-lg-none">
            <!-- <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span> -->
            <i class="fa-solid fa-bars" style="font-size:25px ;"></i>
        </div>
    </div>
</nav>
<!-- Navbar Mobile -->
<nav class="navbar navbar-mobile d-lg-none">
    <ion-icon class="close" name="close-outline"></ion-icon>
    <ul class="navbar-nav navbar-nav-mobile">
        <li><a class="nav-link" href="{{ route('Autism&Me.home') }}">{{ __('Home') }}</a></li>
        <li><a class="nav-link" href="#mystory">my story</a></li>
        <li><a class="nav-link" href="about me/index.html">About us</a></li>
        <li><a class="nav-link" href="{{ route('Autism&Me.articles') }}">Articles</a></li>
        <li><a class="nav-link" href="#services">Our service</a></li>
    </ul>
</nav>