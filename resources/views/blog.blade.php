@extends("layouts.main")

@section("content")

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
