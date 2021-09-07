<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Celest & Piedra | Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-core-css.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-mint.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-style.css') }}" />
  <!-----
       <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/flat-font/flaticon.css">--->
  <link rel="stylesheet" href="{{ url('assets/font/stylesheet.css') }}" />


  <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css  " />

  <link rel="stylesheet" href="{{ url('assets/flat-font/flaticon.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/ticker.min.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/fonts/font-awesome/css/font-awesome.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/css/rs6.css') }}" />
  <link rel="icon" type="image/png" href="{{ url('assets/img/iso.png') }}" />
  <!--------------------------------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <!-- REVOLUTION BANNER CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/revslider.css') }}" media="screen" />
  <link rel="stylesheet" href="{{ url('assets/css/custom-slider.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
  <style>
    footer {
      position: relative;
    }

    .footer a,
    .footer p {
      color: #000000bd;
      font-size: 1rem;
    }

    .sm-mint a,
    .sm-mint a:hover,
    .sm-mint a:focus,
    .sm-mint a:active,
    .sm-mint a.highlighted {
      padding: 14px 20px;
      color: #000000;
    }

    header.mextreo-header-area {
      position: relative;
      margin-bottom: 3rem;
    }
    .btn-drop {

    color: black;

}
  </style>
</head>

<body>
  <button class="scroll-top scroll-to-target" data-target="html">
    <img src="assets/img/up-arrow.png" class="flaticon-up scrollup-icon"></img>
  </button>

  @include("partials.navbar")
  @include("partials.loader")


  <section class="mextreo-blog pt-0">
    <div class="container">

      <div class="row">

        @foreach(DB::table("blogs")->get() as $blog)
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
              <a href="{{ url('/blog/'.$blog->slug) }}">
                  <div class="single-blog">
                      <img src="{{ $blog->image }}" alt="">
                      <div class="sb-content">
                          <span href="{{ url('/blog/'.$blog->slug) }}">
                              <h3>{{ $blog->title }}</h3>
                          </span>

                      </div>
                  </div>
              </a>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>

  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

  <script src="{{ url('assets/js/aos.js') }}"></script>

  <script src="{{ url('assets/js/jquery-ui.js') }}"></script>

  <script src="{{ url('assets/js/jquery.smartmenus.js') }}"></script>

  <script src="{{ url('assets/sliders/slider-1/js/revolution.tools.min.js') }}"></script>
  <script src="{{ url('assets/sliders/slider-1/js/rs6.min.js') }}"></script>
  <script src="{{ url('assets/sliders/slider-1/js/slideractivation.js') }}"></script>

  <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>

  <script src="{{ url('assets/js/countdown.js') }}"></script>

  <script src="{{ url('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

  <script src="{{ url('assets/js/theme.js') }}"></script>

  <!----- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
  <!-- REVOLUTION BANNER JS FILES  -->
  <script type="text/javascript" src="{{ url('assets/js/plugin.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/js/revslider.min.js') }}"></script>

   @include("partials.footer")
</body>

</html>
