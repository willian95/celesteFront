<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Celeste & Piedra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-core-css.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-mint.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/sm-style.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/slick.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/slick-theme.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-----
       <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/flat-font/flaticon.css">--->
  <link rel="stylesheet" href="{{ url('assets/font/stylesheet.css') }}" />


  <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css  " />

  <link rel="stylesheet" href="{{ url('assets/flat-font/flaticon.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/ticker.min.css') }}" />
  <!-----
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />--->
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


    }
  </style>
</head>

<body>

  <div id="preloader"></div>


  <button class="scroll-top scroll-to-target" data-target="html">
    <img src="{{ url('assets/img/up-arrow.png') }}" class="flaticon-up scrollup-icon"></img>
  </button>


  @include("partials.navbar")
  @include("partials.loader")
  <style>

    .dropdown-menu  {
    background: #ffffff70!important;
    }
  </style>
  <div class="main position-relative">
    <div class="slider slider-for">


        <a data-fancybox="gallery" href="{{ $project->main_image }}">
          <img src="{{ $project->main_image }}" alt="">
          <div class="mask"></div>
          <div class="icon-expand" >
            <img class="" src="{{ url('assets/img/ecpand.svg') }}" alt="">

          </div>
        </a>

      @foreach(DB::table("secondary_images")->where("project_id", $project->id)->get() as $image)
      <a data-fancybox="gallery" href="{{ $image->image  }}">
        <img src="{{$image->image}}" alt="">
        <div class="mask"></div>
        <div class="icon-expand">
          <img class="" src="{{ url('assets/img/ecpand.svg') }}" alt="">

        </div>
      </a>
      @endforeach

    </div>

  </div>

  <section class="">
    <div class="containe">
      <div class="row">
        <div class="col-md-5">
          <div class="hero-content ">

            <h2 >{{ $project->name }}</h2>
            <p  class="icons-detail_content"> <img class="icon-detail"
                src="{{ url('assets/img/pin.svg') }}" alt=""> {{ $project->location }}</p>
            <ul class="items-details">
              <li class="mb-3"> <img class="icon-detail " src="{{ url('assets/img/home.svg') }}" alt=""> {{ $project->project_type }}</li>
              <li> <img class="icon-detail" src="{{ url('assets/img/rule.svg') }}" alt=""> {{ $project->square_meter }}m<sup>2</sup></li>
            </ul>
            <p >{!! $project->description !!}</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="slider slider-nav">
            <div><img src="{{ $project->main_image }}" alt=""></div>
            @foreach(DB::table("secondary_images")->where("project_id", $project->id)->get() as $image)
            <div><img src="{{ $image->image }}" alt=""></div>
            @endforeach


          </div>




        </div>
      </div>
    </div>
  </section>




   <!-- Modal contacto -->
   <div class="modal fade contact-popup" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Contáctanos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="grid-contact">
            <div>

                <div class="form-group mcfg">
                  <input type="text" class="form-control m-input" name="name" id="name-message" placeholder="Nombre*"
                    onfocus="this.placeholder = ''" onblur="this.placeholder ='Nombre*'">
                </div>
                <div class="form-group mcfg">
                  <input type="text" class="form-control m-input" name="email" id="email-message" placeholder="Correo electronico  *"
                    onfocus="this.placeholder = ''" onblur="this.placeholder ='Correo electronico *'">
                </div>
                <div class="form-group mcfg">
                  <textarea rows="4" class="form-control m-input" name="msg" id="message-message" placeholder="Mensaje *"
                    onfocus="this.placeholder =''" onblur="this.placeholder ='Mensaje *'"></textarea>
                </div>
                <button type="button" id="buttonSendMessage" class="m-submit btn-enviar" onclick="sendMessage()">enviar</button>
                <div id="spinner" style="display:none">
                   Enviando...
                </div>
                <div class="col-md-12 text-center">
                  <div class="cf-msg"></div>
                </div>

            </div>

            <div>

              <div class="contact-details pl-5" >

                <div class="single-info">
                  <h5>Dirección:</h5>
                  <p>Cra. 4 # 13 –14 Piso 4 Ed. Davivienda</p>
                  <p>Santa Marta</p>
                </div>
                <div class="single-info">
                  <h5>Teléfono:</h5>
                  <p> <a href="tel:(+57) 322 223 99 33" class="__cf_email__">(+57) 322 223 99 33</a> </p>

                </div>
                <div class="single-info">
                  <h5>Email:</h5>
                  <p><a href="mailto:contacto@celesteypiedra.com" class="__cf_email__"
                     > contacto@celesteypiedra.com</a></p>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  @include("partials.footer")
  <a class="ws" target="_blank" href="https://api.whatsapp.com/send?phone=+573222239933&text=Hola!%20Quiero%20m%C3%A1s%20informaci%C3%B3n.%20C&P"> <img src="{{ url('assets/img/whatsapp.svg') }}" alt=""> </a>

  <script src="{{ url('assets/js/jquery-3.4.1.min.js') }}"></script>

  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

  <script src="{{ url('assets/js/aos.js') }}"></script>

  <script src="{{ url('assets/js/jquery-ui.js') }}"></script>

  <script src="{{ url('assets/js/jquery.smartmenus.js') }}"></script>

  <script src="{{ url('assets/sliders/slider-1/js/revolution.tools.min.js') }}"></script>
  <script src="{{ url('assets/sliders/slider-1/js/rs6.min.js') }}"></script>
  <script src="{{ url('assets/sliders/slider-1/js/slideractivation.js') }}"></script>

  <!---<script src="assets/js/owl.carousel.min.js"></script>--->

  <script src="{{ url('assets/js/countdown.js') }}"></script>

  <script src="{{ url('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

  <script src="assets/js/theme.js"></script>

  <!-- REVOLUTION BANNER JS FILES  -->
  <script type="text/javascript" src="{{ url('assets/js/plugin.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/js/revslider.min.js') }}"></script>
  <script src="{{ url('assets/js/slick.min.js') }}"></script>
  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 70 && $(window).width() >= 0) {
        $(".stick-area").addClass("stick");
        //  $("#iso").addClass('img-size').attr('src', 'assets/img/logo.png').removeClass('scroll-up');
      } else {
        $(".stick-area").removeClass(" stick");

      }
    });


    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
    infinite:false,
      arrows: false,
      focusOnSelect: true
    });

  </script>
<script>
      setTimeout(function () {
            $('#pre-loader').fadeOut(300);
        }, 1500)
</script>
</body>

</html>
