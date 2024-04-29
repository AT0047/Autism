<!-- Navbar -->
<nav id="scrollspy" class="navbar navbar-desctop">
    <div class="d-flex align-items-center position-relative overflow: hidden; w-100">
        <!-- Brand-->
        <div><img src="{{asset('home_assets/favicon.png')}}" style="width: 60px; margin: 10px;" alt=""></div>
        <div class="container">
            <ul class="navbar-nav navbar-nav-desctop  d-none d-lg-block">
                <li><a class="nav-link" href="home-personal.html">Home</a></li>
                <li><a class="nav-link" href="about me/index.html">About us</a></li>
                <li><a class="nav-link" href="#mystory">my story</a></li>
                <li><a class="nav-link" href="Articles.html">Articles</a></li>
                <li><a class="nav-link" href="#services">Our service</a></li>
            </ul>
            <!-- Social -->
            <ul class="social-icons d-none d-lg-block">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
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
        <li><a class="nav-link" href="home-personal.html">Home</a></li>
        <li><a class="nav-link" href="#mystory">my story</a></li>
        <li><a class="nav-link" href="about me/index.html">About us</a></li>
        <li><a class="nav-link" href="Articles.html">Articles</a></li>
        <li><a class="nav-link" href="#services">Our service</a></li>
    </ul>
</nav>
