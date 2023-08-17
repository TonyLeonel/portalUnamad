@extends('layouts.portal')

@section('titulo', 'Docentes')
@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/docente.css') }}">
@endsection
@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>{{$carrera->nombre}}</span></h2>
            <h4>Carrera Profesional de {{$carrera->nombre}} de la UNAMAD.</h4>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Desplácese hacia abajo para descubrir</span>
        </div>
    </div>
</section>
<!-- NAVEGACIÓN -->
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>{{$carrera->nombre}}</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.paginas.menu')                 
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <span style="color: rgb(237, 20, 91);"><strong>PLANA DOCENTE</strong></span>
                                </div>
                                <div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">
                                                <div class="mb-3">
                                                    <i class="fas fa-user fa-5x"></i> <!-- Cambia el tamaño del ícono según tus necesidades -->
                                                </div>
                                                <div class="card-title mb-1">Juan Fidel Ttio Huaranca</div>
                                            </div>
                                        </div>
                                    </div>
                                                                                                                                                                                                                                                            
                                </div>  
                            </div>                      
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection