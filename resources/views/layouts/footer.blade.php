    <!--======  footer area =======-->
    {{-- <footer class="footer-area footer-five">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="favicon.png" style="width: 50px;" alt="">
                                </a>
                            </div>
                            <p style="color: black;" class="footer-dec-text">{{ App\Models\AboutUs::first()->description }}</p>
                            <ul class="footer-socail-share">
                                @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                                <li><a href="{{$facebook}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-facebook"></i></a></li>
                                @php($youtube = App\Models\SocialLinks::where('platform', 'youtube')->pluck('link')->first())
                                <li><a href="{{$youtube}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-youtube"></i></a></li>
                                @php($twitter = App\Models\SocialLinks::where('platform', 'twitter')->pluck('link')->first())
                                <li><a href="{{$twitter}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-twitter"></i></a></li>
                                @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                                <li><a href="{{$linkedin}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="margin-left: 70px;" class="col-lg-5">
                        <div class="footer-menu-widget">
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 style="color: black;" class="title">Company</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    <li><a style="color: black;" target="_blank" href="{{ route('frontend.aboutUs.index') }}">About Us</a></li>
                                    <li><a style="color: black;" href="#!">Contact Us:</a></li>
                                    <li><a style="color: black;" href="#!">Local Print Ads</a></li>
                                    <li><a style="color: black;" href="#!">FAQ’s</a></li>
                                    <li><a style="color: black;" href="#!">Careers</a></li>
                                </ul>
                            </div>
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 style="color: black;" class="title">Libraries</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    @php($libraries = App\Models\Library::take(3)->get())
                                    @foreach($libraries as $library)
                                    <li><a style="color: black;" target="_blank" href="{{ route('Autism&Me.articles') }}">{{$library->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 style="color: black;" class="title">Categories</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    @php($categories = App\Models\Category::take(3)->get())
                                    @foreach($categories as $category)
                                    <li><a style="color: black;" target="_blank" href="{{ route('Autism&Me.articles') }}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 style="color: black;" class="title">Contact Us</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    <li><a style="color: black;" href="#!">{{ App\Models\AboutUs::first()->phone_number }}</a></li>
                                    <li><a style="color: black;" href="#!">{{ App\Models\AboutUs::first()->email }}</a></li>
                                    <li><a style="color: black;" href="#!">Terms & Conditions</a></li>
                                    <li><a style="color: black;" href="#!">Customer Support</a></li>
                                    <li><a style="color: black;" href="#!">Course FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!--=====  End of footer area ========-->

    <footer class="footer-area footer-five">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- Logo and About Section -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route('Autism&Me.home')}}">
                                    <img src="{{asset('home_assets/favicon.png')}}" style="width: 50px;" alt="">
                                    {{-- <img src="favicon.png" style="width: 50px;" alt=""> --}}
                                </a>
                            </div>
                            @if(! App\Models\AboutUs::first())
                                <p style="color: black;" class="footer-dec-text">dgdfgdfgdfg</p>
                            @else
                                <p style="color: black;" class="footer-dec-text">{{ App\Models\AboutUs::first()->description }}</p>
                            @endif
                            <ul class="footer-socail-share">
                                @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                                <li><a href="{{$facebook}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-facebook"></i></a></li>
                                @php($youtube = App\Models\SocialLinks::where('platform', 'youtube')->pluck('link')->first())
                                <li><a href="{{$youtube}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-youtube"></i></a></li>
                                @php($twitter = App\Models\SocialLinks::where('platform', 'twitter')->pluck('link')->first())
                                <li><a href="{{$twitter}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-twitter"></i></a></li>
                                @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                                <li><a href="{{$linkedin}}" target="_blank" style="background-color: black;"><i style="color: white; " class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Library and Category Section -->
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title text-dark">Libraries</h4>
                                    <ul class="footer-widget-menu-list">
                                        @php($libraries = App\Models\Library::take(3)->get())
                                        @foreach($libraries as $library)
                                            <li><a href="{{ route('Autism&Me.articles') }}" class="text-dark">{{$library->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title text-dark">Categories</h4>
                                    <ul class="footer-widget-menu-list">
                                        @php($categories = App\Models\Category::take(3)->get())
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('Autism&Me.articles') }}" class="text-dark">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Section -->
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title text-dark">Contact Us</h4>
                            <ul class="footer-widget-menu-list">
                                @if(! App\Models\AboutUs::first())
                                    <li><a href="#!" class="text-dark">0147852369</a></li>
                                    <li><a href="#!" class="text-dark">email@email.com</a></li>
                                @else
                                    <li><a href="#!" class="text-dark">{{ App\Models\AboutUs::first()->phone_number }}</a></li>
                                    <li><a href="#!" class="text-dark">{{ App\Models\AboutUs::first()->email }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
