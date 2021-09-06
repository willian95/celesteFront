@extends("layouts.main")

@section("content")

@include("partials.navbar")
@include("partials.loader")
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


<section class="team bg-fixed container mt-10" >

    <div class="row">
      <div class="col-md-6">
        <img src="{{ url('assets/img/team.png') }}" alt="">
      </div>
      <div class="col-md-6">
        <h3>ALEJANDRO ARIZMENDI</h3>

        <p> <strong>Arquitecto fundador</strong>, egresado de la Universidad de Los Andes de Bogotá. Licenciado en Ciencias en la Universidad de Westminster de Londres
          (Inglaterra), con una Maestría en Artes, diseño urbano arquitectónico y estudios
          sostenibles en la Architectural Association, escuela de arquitectura en Londres
          (Inglaterra). También culminó una Maestría en Filosofía en Comprensión
          espacio-temporal en procesos creativos. Participó en el concurso internacional de
          arquitectura para el desarrollo de viviendas sostenibles en Australia, donde obtuvo
          el segundo lugar.
      </div>
    </div>
  </section>
  <!---<main class="main-content">
    <section class="article">
      <figure class="article-image">
          <img src='assets/img/ofic.png' alt=''>
      </figure>
    </section>

  </main>--->
  <div class="container pt-3 about-fix mt-4 mb-5">
    <div class="row">

        @foreach(DB::table("staff")->get() as $staff)
            <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="single-blog mb-4">
                    <img src="{{ $staff->image }}" alt="">
                    <div class="sb-content">
                        <span href="#">
                            <h4 class="team-title">{{ $staff->name }}
                        </h4>
                            <span>{{ $staff->job }}</span>
                        </span>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

  </div>



  @include("partials.footer")

  @push("scripts")
    <script>


    </script>
  @endpush

@endsection
