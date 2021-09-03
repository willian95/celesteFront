@extends("layouts.main")

@section("content")

@include("partials.navbar")

<div id="pre-loader">
    <div class=" text-center preload-logo ">
        <div class="content-loader">
            <div class="logo-loader">
                <svg class="icon-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166.66 145.83"><defs><style>.cls-1{fill:#13110c;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><path stroke="#000" fill="none" class="is-active" d="M166.15,78.69a12.78,12.78,0,0,0-2.21,0,29.47,29.47,0,0,0-4.29.62,44.54,44.54,0,0,1-7.89.63c-3.5,0-7.07,0-10.73-.24l-12.89-.86-.25-.16a17.09,17.09,0,0,1-4.17-.72c-.62,0-1.2-.12-1.75-.21a22.12,22.12,0,0,1-3.69-.37,3.43,3.43,0,0,0-.56-.07A125.74,125.74,0,0,1,101,75.81l-.54,0a23.44,23.44,0,0,1-4.34-.24c-1.48,0-3.61-.12-6.41-.29-3.87-.19-6.92-.42-9.18-.66-.32,0-.64-.06-1-.12-.51-.06-1-.13-1.39-.2a.56.56,0,0,1-.31-.14.56.56,0,0,1-.11-.13,12,12,0,0,1-2.13-1C66.91,67.87,65,59.36,61.82,51c-3.62-9.53-10-31.93-9.76-48.39C52.09,1.4,48.22,0,46.81,0c-8.8.29-4.2,2.19-5.26,2.63-3.79,1.44-2,9.69-2.63,10.51S42,46.68,42.44,49.45q.18,5.56,4.14,15.29l2.63,5.78c.84,1.84-.49,3.9-2.75,4.24l-6.91,1.07q-11.29,1.74-16.44,2.09a40.78,40.78,0,0,0-12,3.57q-6.09,2.82-8.56,6a12.71,12.71,0,0,0-2.35,6,18.23,18.23,0,0,0,.1,6.5c.41,1.94,1.19,3.17,2.33,3.71a4.71,4.71,0,0,1,1.81,1q.61.58.33,1c-.2.26,0,.84.44,1.76a13.61,13.61,0,0,0,2.37,3c1.08,1.07,2,1.91,2.63,2.51a3.86,3.86,0,0,0,1.37,1q.38.08,10.47,7.89,9.07,7.22,24.34,14.77t23.15,8.88a29.76,29.76,0,0,0,16.27-1.6,17.19,17.19,0,0,0,7.36-5.16q1.88-2.44,2.77-7.74a4.66,4.66,0,0,0-.67-3.82,11.81,11.81,0,0,1-1.15-2.36,5.26,5.26,0,0,0-.42-2.48c-1-2.54-2.16-3.9-3.41-4.11L90,118q-.75-.12-.33-.66A7.18,7.18,0,0,1,91.3,116l.89-.89c.7-.91.55-1.46-.45-1.62s-1.32-.94-1-2.32c.78-1,.45-2.81-1-5.35a10.09,10.09,0,0,1-2.9-5.32c.12-.9-.56-1.48-2.07-1.73a6.72,6.72,0,0,0-1.46,0,5.92,5.92,0,0,1-1.27,0c-.25,0-.36-.09-.32-.14a2.49,2.49,0,0,1,1-.52,2.57,2.57,0,0,0,1.26-.82c.4-.51.27-1.14-.36-1.88a1.47,1.47,0,0,1-.24-2,1.71,1.71,0,0,1,.91-.5,1.77,1.77,0,0,0,.85-.42c.16-.2-.26-.39-1.27-.56l-1.37-.14a1.3,1.3,0,0,1-1-.51c-.16-.26-.1-.56.18-.92l.83-.81a2.79,2.79,0,0,0,.1-3.44,2.46,2.46,0,0,1,.09-2.32,1.48,1.48,0,0,1,1-.38c.53-.06,4.06.09,10.58.43q29.86,1.36,42.77,2.23a22.91,22.91,0,0,0,4.38,0,12.27,12.27,0,0,0,3.47-.8,11.92,11.92,0,0,1,4.15-.43l.88.23q1.88.31,9.4-2.31,6.12-2.17,7.06-3.4C166.79,79,166.65,78.77,166.15,78.69ZM80.09,139.94a1.36,1.36,0,0,1-1.41.46l-.82-.31c-1-.69-1.25-1.41-.68-2.15s.41-1.18-.46-1.33H74.61c-.88-.15-1.12-.48-.73-1s-.48-.94-2.6-1.3a13.61,13.61,0,0,0-1.69-.15,15,15,0,0,1-1.87-.18c-1.75-.29-2.65-1-2.69-2a1.4,1.4,0,0,0-.26-1.46,2.39,2.39,0,0,0-1.45-.72l-3.06-.43a16.68,16.68,0,0,1-2.68-.66c-.77-.27-1.07-.54-.87-.79a.92.92,0,0,1,.52-.26,1,1,0,0,0,.51-.26c.12-.15-.2-.29-1-.42l-3.12-.36-.36-.05a19.17,19.17,0,0,1-3.51-1.1A17.7,17.7,0,0,1,45.63,123c-1.33-1-2.78-2-4.36-3s-2.9-1.73-4-2.26A5.34,5.34,0,0,1,35,115.91a1.53,1.53,0,0,1,0-1.9c.78-1,.48-1.65-.89-1.88l-2.37-.22a10.13,10.13,0,0,1-5.34-2.71c-1.16-1.06-1.68-1.66-1.57-1.81s.12-.07.25,0a7.52,7.52,0,0,1,1.52.64,8.36,8.36,0,0,0,1.33.61l.19,0c.07-.1-.36-.5-1.3-1.2a6.92,6.92,0,0,1-2-2.2,3.09,3.09,0,0,1-.43-2.06,1.82,1.82,0,0,0-.45-1.63,2.81,2.81,0,0,0-1.74-.89,11.27,11.27,0,0,1-2.26-.64,5.12,5.12,0,0,1-1.63-.92c-.32-.31-.47-.5-.43-.55l.19,0a11.84,11.84,0,0,1,1.46.58,9.83,9.83,0,0,0,1.82.66c.25,0,.42,0,.5-.09l-.14-.37a17.34,17.34,0,0,1-.82-4.46c-.64-2.47-1.4-3.77-2.28-3.92s-.7-1,.51-2.59a18.16,18.16,0,0,1,5.45-4.56,3.54,3.54,0,0,1,.62-.3,31.81,31.81,0,0,1,5.91-1.21,107.76,107.76,0,0,1,11-.89c9.23-.25,10.48,1.4,10.86,1.46.12,0,4.47-1.21,5.37,0s1.62,3.64,2.69,5.38c7,11.65,17.7,22.06,21.72,34.31C85.67,132.05,81.35,138.31,80.09,139.94Zm3.73-37.36A7.56,7.56,0,0,1,85.45,105c.3.8.32,1.37,0,1.73s-.27.63,0,.82a1.89,1.89,0,0,0,.79.35l1.86,0c.5.09.69.21.58.36a4.39,4.39,0,0,1-1.37.81,8.33,8.33,0,0,1-2.61.64,9.53,9.53,0,0,1-2.42,0q-1.32-.21-.9-.75l.11-.15a8.28,8.28,0,0,0,1.61-1.55,2.42,2.42,0,0,0,.57-1.29,1.27,1.27,0,0,0-1.23-1.15l-1.62-.1c-1-.17-1.22-.62-.65-1.36s.22-1.22-1-1.42a12.91,12.91,0,0,0-2.24-.12,13,13,0,0,1-2.24-.12c-.25,0-.33-.11-.25-.21a8.26,8.26,0,0,1,2.63-.68,8.07,8.07,0,0,1,3.53-.45l.75.13A7.94,7.94,0,0,1,83.82,102.58Z"/></g></g></svg>
    
            </div>
        </div>
    </div>
</div>

<section class="team bg-fixed container mt-10" >
    
    <div class="row">
      <div class="col-md-6">
        <img src="{{ url('assets/img/team.png') }}" alt="">
      </div>
      <div class="col-md-6">
        <h3>ALEJANDRO ARIZMENDI</h3>
        <span>Arquitecto fundador</span>
        <p>Arquitecto de profesión, egresado de la Universidad de Los Andes de Bogotá
          (Colombia). Licenciado en Ciencias en la Universidad de Westminster de Londres
          (Inglaterra), con una Maestría en Artes, diseño urbano arquitectónico y estudios
          sostenibles en la Architectural Association, escuela de arquitectura en Londres
          (Inglaterra). También culminó una Maestría en Filosofía en Comprensión
          espacio-temporal en procesos creativos. Participó en el concurso internacional de
          arquitectura para el desarrollo de viviendas sostenibles en Australia, donde obtuvo
          el segundo lugar. Trabajó en Nueva Delhi, en consultoría de diseño arquitectónico y
          urbano para proyectos de bajo presupuesto en vivienda e infraestructura.
          Durante los últimos años ha trabajado como arquitecto principal de Lattitude,
          empresa que fundó hace 12 años para dinamizar y renovar espacios en la región
          del Caribe en áreas de alto impacto social. De esta forma, ha liderado
          aproximadamente 75 proyectos que se desarrollan dentro de la compañía, para
          toda la región del Caribe. Ha sido consultor de la Fundación Centro Histórico de
          Cartagena en el proyecto del Banco Interamericano de desarrollo (BID) para
          desarrolla la peatonalización del centro histórico de Cartagena. Alejandro ha
          participado en el desarrollo urbanístico de la Ciudad de Santa Marta, con diseños
          arquitectónicos sostenibles que buscan mejorar el entorno social del distrito con
          propuestas innovadoras que apoyan a las comunidades más vulnerables.</p>
        
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
        setTimeout(function () {
            $('#pre-loader').fadeOut(300);
        }, 1500)

    </script>
  @endpush

@endsection