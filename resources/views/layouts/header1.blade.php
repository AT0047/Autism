<!-- Navbar -->
<nav id="scrollspy" class="navbar navbar-desctop">
    <div class="d-flex align-items-center position-relative overflow: hidden; w-100">
        <!-- Brand-->
        <div><img src="{{asset('home_assets/favicon.png')}}" style="width: 60px; margin: 10px;" alt=""></div>
        <div class="container">
            <ul class="navbar-nav navbar-nav-desctop  d-none d-lg-block">
                <li><a class="nav-link" href="{{route('Autism&Me.home')}}">Home</a></li>
                <li><a class="nav-link" href="about me/index.html">About Us</a></li>
                <li><a class="nav-link" href="{{route('Autism&Me.home', '#mystory')}}">My Story</a></li>
                <li><a class="nav-link" href="{{route('Autism&Me.articles')}}">Articles</a></li>
                <li><a class="nav-link" href="{{route('Autism&Me.home', '#services')}}">Our Service</a></li>
            </ul>
            <!-- Social -->
            <ul class="social-icons d-none d-lg-block">
                @php($facebook = App\Models\SocialLinks::where('platform', 'facebook')->pluck('link')->first())
                <li><a href="{{$facebook}}" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                @php($twitter = App\Models\SocialLinks::where('platform', 'twitter')->pluck('link')->first())
                <li><a href="{{$twitter}}" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>
                @php($linkedin = App\Models\SocialLinks::where('platform', 'linkedin')->pluck('link')->first())
                <li><a href="{{$linkedin}}" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href="#">
                    <img src="{{asset('home_assets/eng.png')}}" style="width: 20px;border-radius: 5px;" alt="الوضع الفاتح"></a>
                </li>
            </ul>
        </div>
        <!-- Toggler -->
        <button class="toggler d-block d-lg-none">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Navbar Mobile -->
<nav class="navbar navbar-mobile d-lg-none">
    <ion-icon class="close" name="close-outline"></ion-icon>
    <ul class="navbar-nav navbar-nav-mobile">
        <li><a class="nav-link" href="{{route('Autism&Me.home')}}">Home</a></li>
        <li><a class="nav-link" href="#mystory">my story</a></li>
        <li><a class="nav-link" href="about me/index.html">About us</a></li>
        <li><a class="nav-link" href="{{route('Autism&Me.articles')}}">Articles</a></li>
        <li><a class="nav-link" href="#services">Our service</a></li>
    </ul>
</nav>
