<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Titulo') }} - @yield('titulo')</title>    
    <link href="{{ asset('lib/tabler/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('lib/tabler/css/tabler-vendors.min.css') }}" rel="stylesheet"/>    
    <link href="{{ asset('css/admin.css?v='.config('app.version')) }}" rel="stylesheet"/>
    @yield('css')
</head>
<body>
    @php 
      $user = Auth::user();
    @endphp
    <div class="wrapper">
        <!--HEADER SUPERIOR-->
        <header class="navbar navbar-expand-md navbar-light d-print-none">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".menu-navegacion">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!--LOGO-->
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">     
              <a href="{{ url('/') }}">          
                <img src="{{ asset('img/logo_horizontal.png') }}" height="36" alt="Tabler" class="navbar-brand-image">   
              </a>              
            </h1>
            <!--MENU DERECHA-->
            <div class="navbar-nav flex-row order-md-last"> 
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon avatar-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                  </span>
                  <div class="d-none d-xl-block ps-2">
                    <div style="font-weight: 600;">{{ $user->nombre.' '.$user->apaterno }}</div>
                    <div class="mt-1 small text-muted">{{ $user->tipo == 1 ? 'ADMINISTRADOR' : 'COLABORADOR' }}</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <!--<a href="{{ url('admin/perfil') }}" class="dropdown-item">Perfil</a>              
                  <div class="dropdown-divider"></div>-->
                  <a href="{{ url('logout') }}" class="dropdown-item"                          
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 6a7.75 7.75 0 1 0 10 0" /><line x1="12" y1="4" x2="12" y2="12" /></svg>
                    Salir
                  </a>
                  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </div>
            </div>            
          </div>
        </header>
        <!--HEADER SECUNDARIO-->        
        <div class="navbar-expand-md">
          <div class="collapse navbar-collapse menu-navegacion" id="navbar-menu">
            <div class="navbar navbar-light">
              <div class="container-xl">
                <!-- SUBMODULOS -->
                <ul class="navbar-nav">
                  <!-- Inicio -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="5 12 3 12 12 3 21 12 19 12"></polyline><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                      </span>
                      <span class="nav-link-title">
                        Inicio
                      </span>
                    </a>
                  </li>
                  @if($user->tipo == 1)
                  <!-- Administración de usuario -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/usuarios') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Usuarios
                      </span>
                    </a>
                  </li>
                  @endif

                  <!-- Administración de páginas -->
                  <li class="nav-item dropdown {{ (request()->is('admin/paginas*')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#paginas" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-browser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <rect x="4" y="4" width="16" height="16" rx="1"></rect>
                          <line x1="4" y1="8" x2="20" y2="8"></line>
                          <line x1="8" y1="4" x2="8" y2="8"></line>
                        </svg>                      
                      </span>
                      <span class="nav-link-title">
                        Páginas
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      @if($user->tipo == 1)
                      <a class="dropdown-item {{ (request()->is('admin/paginas/menus')) ? 'active' : '' }}" href="{{ url('admin/paginas/menus') }}">
                        Menus
                      </a>
                      <a class="dropdown-item {{ (request()->is('admin/paginas/categorias')) ? 'active' : '' }}" href="{{ url('admin/paginas/categorias') }}">
                        Categorias
                      </a>
                      @endif                    
                      <a class="dropdown-item {{ (request()->is('admin/paginas')) ? 'active' : '' }}" href="{{ url('admin/paginas') }}">
                        Páginas
                      </a>                        
                    </div>
                  </li>

                  <!-- Administración de comunicados -->
                  <li class="nav-item dropdown {{ (request()->is('admin/comunicados*')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#comunicados" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-speakerphone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M18 8a3 3 0 0 1 0 6"></path>
                          <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path>
                          <path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Comunicados
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      @if($user->tipo == 1)
                      <a class="dropdown-item {{ (request()->is('admin/comunicados/categorias')) ? 'active' : '' }}" href="{{ url('admin/comunicados/categorias') }}">
                        Categorias
                      </a>  
                      @endif                       
                      <a class="dropdown-item {{ (request()->is('admin/comunicados')) ? 'active' : '' }}" href="{{ url('admin/comunicados') }}">
                        Comunicados
                      </a>                        
                    </div>
                  </li>

                  <!-- Administración de publicaciones -->
                  <li class="nav-item dropdown {{ (request()->is('admin/publicaciones*')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#publicaciones" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                          <line x1="8" y1="8" x2="12" y2="8"></line>
                          <line x1="8" y1="12" x2="12" y2="12"></line>
                          <line x1="8" y1="16" x2="12" y2="16"></line>
                       </svg>
                      </span>
                      <span class="nav-link-title">
                        Publicaciones
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      @if($user->tipo == 1)
                      <a class="dropdown-item {{ (request()->is('admin/publicaciones/categorias')) ? 'active' : '' }}" href="{{ url('admin/publicaciones/categorias') }}">
                        Categorias
                      </a>   
                      @endif                      
                      <a class="dropdown-item {{ (request()->is('admin/publicaciones')) ? 'active' : '' }}" href="{{ url('admin/publicaciones') }}">
                        Publicaciones
                      </a>                        
                    </div>
                  </li>

                  @if($user->tipo == 1)
                  <!-- Documentos -->
                  <li class="nav-item {{ (request()->is('admin/documentos*')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/documentos') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                          <path d="M9 17h6"></path>
                          <path d="M9 13h6"></path>
                       </svg>
                      </span>
                      <span class="nav-link-title">
                        Documentos
                      </span>
                    </a>
                  </li>
                  @endif
                  
                  <!-- Administración de carreras profesionales -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/carreras') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Carreras
                      </span>
                    </a>
                  </li>    
                  <!-- Administración de docentes de las carreras profesionales -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/docentes') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Docentes
                      </span>
                    </a>
                  </li>                 

                </ul>                
              </div>
            </div>
          </div>
        </div>
        <!--CONTENIDO-->
        <div class="page-wrapper position-relative">
            @yield('contenido')
            <!--FOOTER-->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                  <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                      <ul class="list-inline list-inline-dots mb-0">                        
                        <li class="list-inline-item">
                          Versión {{ config('app.version') }}                          
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.linkedin.com/in/jos%C3%A9-cortijo-bellido-49a513b5" target="_blank" class="link-secondary" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                            Desarrollo
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                      <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                          UNAMAD &copy; 2022
                        </li>
                        <li class="list-inline-item">                          
                          Oficina de Tecnológias de la Información
                        </li>                        
                      </ul>
                    </div>
                  </div>
                </div>
            </footer>

            <div id="cargando_pagina" class="cargando">
              <div class="text-center pt-4">
                <div class="spinner-border text-blue" role="status"></div> <b>Cargando...</b>
              </div>
            </div>
        </div>
    </div>    

    <div id="mensaje_container"></div>
    <!-- MODAL -->
    @yield('modal')
    <!-- Tabler Core -->
    <script src="{{ asset('lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('lib/tabler/js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/utilitarios.js?v='.config('app.version')) }}"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });       
    </script>
    @yield('js')  
</body>
</html>