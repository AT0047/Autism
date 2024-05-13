<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Simone - Creative Personal CV/Resume HTML Template">
        <meta name="author" content="Paul">
        <link rel="shortcut icon" href="{{ asset('about_me_assets/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{ asset('about_me_assets/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('about_me_assets/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('about_me_assets/apple-touch-icon-114x114.png')}}">
        <title>{{ env('APP_NAME', 'Autism&ME') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="{{ asset('about_me_assets/css/style.css') }}">
    </head>
    <body>
        <div class="animsition">
            <div class="loader">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
            <!-- Content CLick Capture-->
            <div class="click-capture"></div>
            @include('layouts.header2')
            <!-- Sidebar Menu-->
            <div class="menu">
                <span class="close-menu icon-cross2 right-boxed"></span>
                <ul class="menu-list right-boxed">
                    <li data-menuanchor="page1">
                        <a href="{{ route('Autism&Me.home') }}">Home</a>
                    </li>
                    <li data-menuanchor="page1">
                        <a href="{{ route('Autism&Me.articles') }}">Articles</a>
                    </li>
                </ul>
                <div class="menu-footer right-boxed">
                    <div class="social-list">
                        @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                        <a href="{{ $facebook }}" target="_blank" class="icon ion-social-facebook"></a>
                        @php($twitter = App\Models\SocialLinks::where('platform', 'twitter')->pluck('link')->first())
                        <a href="{{ $twitter }}" target="_blank" class="icon ion-social-twitter"></a>
                        @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                        <a href="{{ $linkedin }}" target="_blank" class="icon ion-social-linkedin"></a>
                        @php($youtube = App\Models\SocialLinks::where('platform', 'youtube')->pluck('link')->first())
                        <a href="{{ $youtube }}" target="_blank" class="icon ion-social-youtube"></a>
                        @php($instagram = App\Models\SocialLinks::where('platform', 'instagram')->pluck('link')->first())
                        <a href="{{ $instagram }}" target="_blank" class="icon ion-social-instagram"></a>
                            </div>
                    <div class="copy">© Autism {{ now()->year }}. All Rights Reserved</div>
                </div>
            </div>
            <div class="copy-bottom white boxed">© Autism {{ now()->year }}.</div>
            <div class="social-list social-list-bottom boxed">
                @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                <a href="{{ $facebook }}" target="_blank" class="icon ion-social-facebook"></a>
                @php($twitter = App\Models\SocialLinks::where('platform', 'twitter')->pluck('link')->first())
                <a href="{{ $twitter }}" target="_blank" class="icon ion-social-twitter"></a>
                @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                <a href="{{ $linkedin }}" target="_blank" class="icon ion-social-linkedin"></a>
                @php($youtube = App\Models\SocialLinks::where('platform', 'youtube')->pluck('link')->first())
                <a href="{{ $youtube }}" target="_blank" class="icon ion-social-youtube"></a>
                @php($instagram = App\Models\SocialLinks::where('platform', 'instagram')->pluck('link')->first())
                <a href="{{ $instagram }}" target="_blank" class="icon ion-social-instagram"></a>
    </div>
            @yield('content')
        </div>
        <script src="{{ asset('about_me_assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/smoothscroll.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/animsition.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('about_me_assets/js/jquery.pagepiling.min.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('about_me_assets/js/scripts.js') }}"></script>
    </body>
</html
