@extends("layouts.main")

@section("content")
<style>
    footer {
      position: relative!important;
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

    color: black!important;

}
  </style>

    @include("partials.navbar")
    @include("partials.loader")
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-details-wrapper">
                        <a href="">
                            <div class="blog-img" data-aos="fade-up" data-aos-duration="2000">
                                <img src="{{ $blog->image }}" alt="">
                            </div>
                        </a>

                        <div class="blog-text" data-aos="fade-up" data-aos-duration="3000">
                            <a href="">
                                <h3>{{ $blog->title }}</h3>
                            </a>
                            {!! $blog->description !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include("partials.footer")

@endsection
