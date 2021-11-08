@extends("layouts.main")

@section("content")

<div class="elipse video-xl">
    <video autoplay muted>
        <source src="{{ url('assets/img/loader.mp4') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>
<div class="elipse video-xs">
    <video autoplay muted>
        <source src="{{ url('assets/img/vresponsive.m4v') }}" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>



@include("partials.navbar")

<div id="white-board" style="position: fixed; top:0; left: 0; bottom: 0; width: 100%; background-color: #fff; z-index: 99999;"></div>

<section class="bannerHome">
    <div class="bannercontainer">
        <div class="banner" data-version="5.3.1.6">
            <ul>
                <!--  SLOT Zoom Horizontal-->


                @foreach(DB::table("home_images")->get() as $banner)
                    <li data-index="1" data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="1000" data-fsmasterspeed="1000">
                        <img src="{{ $banner->image }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg banner-img" data-bgparallax="10" data-no-retina="" />
                        <div class="slider_text_box">
                            <div class="tp-loop-wrap">
                                <div class="tp-mask-wrap">
                                    <div class=" tp-caption tp-resizeme count" style="z-index: 9999;">
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="bg_caption"></div>
                        <div class="bg_caption_footer"></div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

    @include("partials.footer")

</section>

@push("scripts")
<script>
    $(document).ready(function(){

        setTimeout(function(){
            $('.elipse').fadeOut(2000);
            $("#white-board").css("display", "none")
            $('.elipse').css("display", "none").fadeOut(2000);
        }, 6000)

    })
    $(".tes").hover(function() {
        $('#popup').modal({
            show: true,
            backdrop: false
        })
    });
    $(".banner").revolution({
        sliderType: "standard",
        sliderLayout: "fullscreen",
        dottedOverlay: "none",
        delay: 4300,
        autoHeight: "on",
        minHeight: 480,
        onHoverStop: 'off',

        navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            onHoverStop: "off",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false,
            },
            bullets: {
                enable: true,
                hide_onmobile: true,
                direction: "vertical",
                h_align: "right",
                v_align: "center",
                h_offset: 80,
                v_offset: 0,
                space: 27,
            },
        },
        responsiveLevels: [1920, 1199, 991, 768, 480],
        visibilityLevels: [1920, 960, 991, 768, 480],
        gridwidth: [1170, 1024, 991, 768, 480],
        gridheight: [950, 768, 600, 600, 480],
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        //  asi es sin autoplay, para autoplay cambiar a off, -1 , -1
       /* stopLoop: "on",
        stopAfterLoops: 0,
        stopAtSlide: 1,*/
         stopLoop: "off",
         stopAfterLoops: -1,
         stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        fullScreenAutoWidth: "off",
        fullScreenAlignForce: "off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: false,
        fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
        },
        parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
        },
    });



    $(".main-menu-btn").on("click", function() {
        if (!$('.logo-wrapper').hasClass("is-active")) {
            $('.logo-wrapper').addClass("filter")
            $('.main-menu-btn').addClass("filter")
        } else {
            $('.logo-wrapper').removeClass("filter")
            $('.main-menu-btn').removeClass("filter")
        }
    });
</script>

@endpush





@endsection
