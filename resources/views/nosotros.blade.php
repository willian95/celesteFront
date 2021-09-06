@extends("layouts.main")

@section("content")

    @include("partials.navbar")
    @include("partials.loader")
  <section class="about bg-fixed bg-img  " style="background-image: url(assets/img/about.jpeg);">
    <div class="banner-img"></div>

  </section>
  <!---<main class="main-content">
    <section class="article">
      <figure class="article-image">
          <img src='assets/img/ofic.png' alt=''>
      </figure>
    </section>

  </main>--->
  <div class="container pt-3 about-fix mt-4">

    <div id="somos" class="about-grid mb-4">
      <h3>somos</h3>
      <p>Un estudio que se dedica al diseño arquitectónico y urbanístico, adaptándonos a la naturaleza con la
        conceptualización de diseños, basa <br> dos en principios de sostenibilidad, adaptabilidad y resiliencia. Un
        estudio compuesto por un grupo de personas que día a día aportan <br> con
        sus experiencias revelando la esencia de los lugares para convertirlos en destinos.</p>
    </div>

    <div id="hacemos" class="about-grid  mb-5">
      <h3>LO QUE HACEMOS </h3>

      <div>
        <div class="row">
          <div class="col-md-9">
            <p> Estructuración y diseño de proyectos</p>
      <p> Diseño arquitectónico y gestión para licencia de construcción de edificaciones.
      </p>
      <p> Diseño urbano y gestión para licencias de urbanismo.
      </p>
      <p>Diseño y gestión de planes parciales.
      </p>
      <p>Diseño para proyectos de espacio público + paisajismo.
      </p>
      <p>Diseño urbano para planes maestros en zonas rurales.
      </p>
      <p>Coordinación e integración de ingenierías + presupuestos + especificaciones.
      </p>
      <p>Visualización 360 inmersiva e interactiva. </p>
          </div>
          <div class="col-md-3">
            <img src="assets/img/iso.png" alt="">
          </div>
        </div>

     </div>


    </div>

    <div id="manidesto" class="about-grid mb-4">
      <h3>MANIFESTO</h3>
      <p>
        Hoy necesitamos reconectarnos con la tierra, con una relación emocional, sustentando la vida, convirtiéndola y
        sosteniéndola. <br>
        Nuestro desafío es entender el lenguaje de la naturaleza y convertirlo en arquitectura.<br>
        Traemos vida a la tierra, estando al principio y al final de los ciclos, estando en todos lados transformando,
        incluso dentro de cada ser.<br>
        No somos un individuo, somos la interconexión del ser, forjándonos a hacer comunidad.<br>
        No respondemos simplemente al presente, pensamos a largo plazo, buscando ser los ancestros que merecen las
        generaciones futuras.<br>
      </p>
    </div>

    <!--<div class="row pt-5 mt-5 text-lg-right mb-5">

      <div class="col-md-6">
        <h3 data-aos="fade-up"  data-aos-duration="1500">Nuestro Manifesto</h3>
        <p data-aos="fade-up" data-aos-duration="2500">Hoy necesitamos reconectarnos con la tierra, con una conexión
          emocional, sustentando la vida, convirtiéndola y sosteniéndola. </p>
          <p data-aos="fade-up" data-aos-duration="2500">Nuestro desafío es entender el lenguaje de la naturaleza y
            transformarlo en arquitectura.</p>

            <p data-aos="fade-up" data-aos-duration="2500">raemos vida a la tierra, estando al principio y al final de los ciclos,
              estando en todos lados transformando, incluso dentro de cada ser.</p>
              <p data-aos="fade-up" data-aos-duration="2500">No somos un individuo, somos la interconexión del ser, forjándonos a
                hacer comunidad.</p>
                <p data-aos="fade-up" data-aos-duration="2500">No respondemos simplemente al presente, pensamos a largo plazo,
                  buscando ser los ancestros que merecen las generaciones futuras.</p>
      </div>
      <div class="col-md-6 center-flex">
        <img data-aos="fade-left" data-aos-duration="3000" src="assets/img/iso.png" alt="">
      </div>
    </div>--->
  </div>
  <style>
    footer {
      position: relative!important;
    }

    .footer a,
    .footer p {
      color: #000000bd;
      font-size: 1rem;
    }
  </style>

    @include("partials.footer")


@endsection
