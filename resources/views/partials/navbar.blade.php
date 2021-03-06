<header class="mextreo-header-area">
  <div class="container c-fulid-max">
    <div class="row">
      <div class=" col-md-4 d-flex">
        <div class="logo-wrapper">
          <a href="{{ url('/') }}">

            @if(url()->current() == url('/') )
            <img src="{{ url('assets/img/logo-white.svg') }}" alt="" />


            @else
            <img src="{{ url('assets/img/logo.svg') }}" alt="" />

            @endif

          </a>

        </div>
      </div>
      <div class="col-8 col-md-8 menu-xs">
        <div class="mextreo-menu">
          <div class="mxm-wrspper">
            <nav class="main-nav" role="navigation">
              <input id="main-menu-state" type="checkbox" />
              <label class="main-menu-btn" for="main-menu-state">
                @if(url()->current() == url('/'))
                <span class="main-menu-btn-icon"></span>
                @else
                <span class="main-menu-btn-icon main-menu-btn-icon--black "></span>
                @endif

              </label>

              <ul id="main-menu" class="sm sm-mint">
                <li>
                  <div class="dropdown">
                    <button class="btn btn-drop dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Nosotros
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ url('/nosotros') }}">SOMOS</a>
                      <a class="dropdown-item" href="{{ url('/equipo') }}">EQUIPO</a>

                    </div>
                  </div>
                </li>

                <li>
                  <div class="dropdown">
                    <button class="btn btn-drop dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Proyectos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ url('proyectos') }}">TODOS</a>

                      @foreach(DB::table("projects")->where("section", "project")->take(4)->orderBy("sort", "desc")->orderBy("id", "desc")->get() as $project)
                      <a class="dropdown-item" href="{{ url('proyecto/'.$project->slug) }}">{{ $project->name }}</a>
                      @endforeach
                    </div>
                  </div>
                </li>

                <li>
                  <div class="dropdown">
                    <button class="btn btn-drop dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Grupo TESA
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ url('grupo-tesa') }}">TODOS</a>

                      @foreach(DB::table("projects")->where("section", "group")->take(4)->orderBy("sort", "desc")->orderBy("id", "desc")->get() as $project)
                      <a class="dropdown-item" href="{{ url('proyecto/'.$project->slug) }}">{{ $project->name }}</a>
                      @endforeach
                    </div>
                  </div>
                </li>

                <li><a href="{{ url('/blogs') }}">Noticias</a></li>

                <li>
                  <a data-toggle="modal" data-target=".contact-popup" class="tes" href="#">Contacto</a>
                </li>
              </ul>
            </nav>
          </div>
          <!---<div class="side-ber">
              <button class="sidebar-btn">
                <i class="fas fa-bars" aria-hidden="true"></i>
              </button>
            </div>--->
        </div>
      </div>
    </div>
  </div>
</header>