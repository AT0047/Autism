<!-- Navbar -->
<header class="navbar navbar-fullpage boxed">
    <div class="navbar-bg"></div>
    <a class="brand" href="#">
        @if (isset($media->logo))
        <img alt="" style="width: 50px;" src="{{asset('storage/'.$media->logo)}}">
        @else
        <img alt="" style="width: 50px;" src="{{asset('about_me_assets/favicon.png')}}">
        @endif
        <div class="brand-info">
        </div>
    </a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
        aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="contacts d-none d-md-block">
        <div class="contact-item">
            {{$aboutUs->phone_number ?? ''}}
        </div>
        <div class="contact-item spacer">
            /
        </div>
        <div class="contact-item">
            <a href="mailto:contact@Ramsay.com">{{$aboutUs->email ?? ''}}</a>
        </div>
    </div>
</header>

