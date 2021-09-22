// -----------------------------

//   JS INDEX
/* =================== */
/*

    ## Animation Js
    ## Preloder
    ## Stiky menu
    ## Scrool Menu
    ## Scrool Up
    ## smart menu
    ## smoothscroll
    ## Sidepanel JS
    ## Owl Carousel
    ## Timer Js
    ## Googel Map
    ## Ajax
    ## RTL Switch

*/
/*Animation js*/
AOS.init({
    offset:     120,
    delay:      0,
    easing:     'ease',
    duration:   5000,
    disable:    false,
    once:       false,
    mirror:     false,

    startEvent: 'DOMContentLoaded'

  });

(function($) {
  "use strict";

//**================== Preloder========================*//

//**================= End of Preloder =====================**//


//**================= Sticky =====================**//

$(window).on('scroll', function() {
  if ($(window).scrollTop() > 50) {
      $('.mextreo-header-area').addClass('nav-fixed');
      $('.mextreo-header-area').addClass('nav-fixed');
      $('.scroll-to-target').addClass('open');
  } else {
      $('.mextreo-header-area').removeClass('nav-fixed');
      $('.scroll-to-target').removeClass('open');
  }
});



//**===================Scroll UP ===================**//

if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}

//**===================Scroll UP ===================**//

//**================= Smart Menu =====================**//


// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
});

//**================= End Smart Menu =====================**//


    /*---------------------
    smooth scroll
    --------------------- */
    $('.smoothscroll').on('click', function(e) {
      e.preventDefault();
      var target = this.hash;

      $('html, body').stop().animate({
          'scrollTop': $(target).offset().top - 80
      }, 1200);
  });


  /*---------------------



  /*---------------------
    Sidepanel JS
    --------------------- */
    $('.sidebar-btn').on('click', function() {
      $('.side-panel').removeClass('hide');
  });
  $('.close-sp').on('click', function() {
      $('.side-panel').addClass('hide');
  });



//**================== Owl Carousl========================*//

if ($('.project').length > 0) {

  $('.project').owlCarousel({

    loop:true,
    margin:30,
    center:true,
    dots:false,
    nav:true,
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed :3000,
    responsive:{
        0:{
            items:1
        },
        450:{
            items:2
            },
        600:{
            items:3
            },
        1000:{
            items:3
        }
    }
  })
  }

//**================== Owl Carousl========================*//

//Timer Js//

 if ($('body').find('#clockdiv').length !== 0) {

    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }
    var deadline = new Date("Sep5, 2020 19:37:25");
    initializeClock('clockdiv', deadline);
  }

  //**=================End Timer=====================**//

    // RTL Switcher

    $('.psg-icon').on('click', function(){

      $(this).parent().toggleClass('active');

  });


}(jQuery));



//**=================== Google Map ==========================**//

if ($('#googleMap').length > 0) {
  var user_lat, user_lng;
      var map;

      function initMap() {
          map = new google.maps.Map(document.getElementById('googleMap'), {
              center: {
                  lat: 23.782062,
                  lng: 90.416053
              },
              zoom: 15,
              scrollwheel: false
          });

        var marker = new google.maps.Marker({
          position:  {  lat: 23.782062, lng: 90.416053},
          map: map,
       /*    icon: "assets/img/locator.png" */
        });

            }
          }

  //*================ End Google Map ============*//

/*---------------------
    // Ajax Contact Form
    --------------------- */
   $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }

        name = $.trim(name);
        email = $.trim(email);
        msg = $.trim(msg);

        if (name != '' && email != '' && msg != '') {
            var values = "name=" + name + "&email=" + email + "&msg=" + msg;
            $.ajax({
                type: "POST",
                url: "assets/mail-sender/contact.php",
                data: values,
                success: function() {
                    $('#name').val('');
                    $('#email').val('');
                    $('#msg').val('');

                   $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
            $('.cf-msg').fadeOut(2000)
        }
        return false;
    });

// Ajax Contact Form JS END


$(document).ready(function() {
  var o1 = $('#c1'), o2 = $('#c2'), o3 = $('#c3');

  //Sync o2 by o1
  o1.on('click', '.owl-next', function () {
    o2.trigger('next.owl.carousel')
  });
  o1.on('click', '.owl-prev', function () {
    o2.trigger('prev.owl.carousel')
  });
  //Sync o1 by o2
  o2.on('click', '.owl-next', function () {
    o1.trigger('next.owl.carousel')
  });
  o2.on('click', '.owl-prev', function () {
    o1.trigger('prev.owl.carousel')
  });
  //Sync o1 by o3
  o2.on('click', '.owl-next', function () {
    o3.trigger('next.owl.carousel')
  });
  o2.on('click', '.owl-prev', function () {
    o3.trigger('prev.owl.carousel')
  });

  //Carousel settings
  o1.owlCarousel({
    center : true,
   loop : true,
   items : 1,
   margin:0,
   dots:false,
   nav : false,
   smartSpeed :3000,
  });
  o2.owlCarousel({
    center : true,
   loop : true,
   items : 1,
   margin:0,
   navText : ["","<i class='flaticon-right-arrow'></i>"],
   nav : true,
   smartSpeed :1500,
  });
  o3.owlCarousel({
    center : true,
   loop : true,
   items : 1,
   margin:0,
   dots:false,
   nav : false,
   smartSpeed :3000,
  });
 });


 $(function (){
  $(window).scroll(function(){
     if ($(this).scrollTop() >= 100) {
      $('.dropdown-menu').addClass("bg-whithe");
     } else {
     $('.dropdown-menu').removeClass("bg-whithe");
     }


  });





});
