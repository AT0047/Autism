
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--======  footer area =======-->
    <footer class="bg-light mt-0 p-4">
        <div class="">
            <div  class="container">
              <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                <div class="footer-widget">
                  <div class="footer-logo">
                      <a href="">
                          
                          @php
                          $logo = \App\Models\AboutPhoto::first()->logo ?? '';
                          @endphp
                          @if ($logo)
                          <img src="{{ asset('storage/' . $logo) }}" style="width: 200px;" alt="">
                          @else
                          <img src="{{ asset('home_assets/favicon.png') }}" style="width: 200px;" alt="">
                          @endif
              
                      </a>
                  </div>
                </div>
                <div class="text-end mb-0 pb-0">
                  <p style="color: black;" class="m-0">{{ App\Models\AboutUs::first()->{app()->getLocale().'_address'} ?? '' }}</p>
                  <p style="color: black;" class="m-0">{{ App\Models\AboutUs::first()->email ?? ''}}</p>
                  <p style="color: black;" class="m-0">{{ App\Models\AboutUs::first()->phone_number ?? '' }}</p>
                  <ul class="footer-socail-share text-end d-none d-lg-block">
                    @php($facebook = App\Models\SocialLinks::where('platform','facebook')->pluck('link')->first())
                    <li><a href="{{ $facebook }}" style="background-color: black;" target="_blank"><i style="color: white; " class="icofont-facebook"></i></a></li>
                    @php($instagram = App\Models\SocialLinks::where('platform','instagram')->pluck('link')->first())
                    <li><a href="{{ $instagram }}" style="background-color: black;" target="_blank"><i style="color: white; "  class="icofont-instagram"></i></a></li>
                    @php($tiktok = App\Models\SocialLinks::where('platform','tiktok')->pluck('link')->first())
                    <li><a href="{{ $tiktok }}" style="background-color: black;" target="_blank"><i style="color: white; "  class="fa-brands fa-tiktok"></i></a></li>
                    @php($youtube = App\Models\SocialLinks::where('platform','youtube')->pluck('link')->first())
                    <li><a href="{{ $youtube }}" style="background-color: black;" target="_blank"><i style="color: white; "  class="icofont-youtube"></i></a></li>
                    @php($whatsapp = App\Models\SocialLinks::where('platform','whatsapp')->pluck('link')->first())
                    <li><a href="https://api.whatsapp.com/send?phone={{ $whatsapp }}" style="background-color: black;" target="_blank"><i style="color: white; "  class="icofont-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
              <ul class="footer-socail-share mt-0 pt-0 text-end d-block d-lg-none">
                <li><a href="#" style="background-color: black;"><i style="color: white; " class="icofont-facebook"></i></a></li>
                <li><a href="#" style="background-color: black;"><i style="color: white; "  class="icofont-instagram"></i></a></li>
                <li><a href="#" style="background-color: black;"><i style="color: white; "  class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="#" style="background-color: black;"><i style="color: white; "  class="icofont-youtube"></i></a></li>
                <li><a href="#" style="background-color: black;"><i style="color: white; "  class="icofont-whatsapp"></i></a></li>
              </ul>
              <p class="mt-3 text-center">{!! $footer_description ?? '' !!}</p>
            </div>
        </div>
      
    </footer>
    <!--=====  End of footer area ========-->
  