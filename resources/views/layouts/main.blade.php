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
  <!-----
 <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/flat-font/flaticon.css">--->
  <link rel="stylesheet" href="{{ url('assets/font/stylesheet.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css  " />

  <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}" />


  <link rel="stylesheet" href="{{ url('assets/flat-font/flaticon.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/ticker.min.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}" />

  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/fonts/font-awesome/css/font-awesome.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/sliders/slider-1/css/rs6.css') }}" />
  <!--<link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/logo.png') }}" />-->
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
    .footer {
      text-align: center;
      font-size: .8rem;
      position: absolute;
      bottom: 0;
      z-index: 111;
      text-align: center;
      width: 100%;
    }

    .footer a,
    .footer p {
      color: #ffffffbd;
      font-size: 1rem;
    }

    ::-webkit-scrollbar-thumb,
    ::-webkit-scrollbar {
      display: none;
    }
  </style>

    @stack('styles')
</head>

<body>

    @yield("content")

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
<script>
      setTimeout(function () {
            $('#pre-loader').fadeOut(300);
        }, 1500)
</script>
    @stack('scripts')

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
              <form id="cf" method="POST">
                <div class="form-group mcfg">
                  <input type="text" class="form-control m-input" name="name" id="name" placeholder="Nombre*"
                    onfocus="this.placeholder = ''" onblur="this.placeholder ='Nombre*'">
                </div>
                <div class="form-group mcfg">
                  <input type="text" class="form-control m-input" name="email" id="email" placeholder="Correo electronico  *"
                    onfocus="this.placeholder = ''" onblur="this.placeholder ='Correo electronico *'">
                </div>
                <div class="form-group mcfg">
                  <textarea rows="4" class="form-control m-input" name="msg" id="msg" placeholder="Mensaje *"
                    onfocus="this.placeholder =''" onblur="this.placeholder ='Mensaje *'"></textarea>
                </div>
                <button type="submit" id="submit" class="m-submit btn-enviar">enviar</button>
                <div class="col-md-12 text-center">
                  <div class="cf-msg"></div>
                </div>
              </form>
            </div>

            <div>

              <div class="contact-details pl-5" data-aos="fade-up" data-aos-duration="3000">

                <div class="single-info">
                  <h5>Dirección:</h5>
                  <p>Cra. 4 # 13 –14 Piso 4 Ed. Davivienda</p>

                </div>
                <div class="single-info">
                  <h5>Teléfono:</h5>
                  <p> (+57) 322 223 99 33 </p>

                </div>
                <div class="single-info">
                  <h5>Email:</h5>
                  <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                     > info@celesteypiedra.com</a></p>

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>
