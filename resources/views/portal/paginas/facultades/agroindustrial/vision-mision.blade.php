@extends('layouts.portal')

@section('titulo', 'Ingeniería Agroindustrial')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Ingeniería Agroindustrial</span></h2>
            <h4>Carrera Profesional de Ingeniería Agroindustrial de la UNAMAD.</h4>
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
            <span>Ingeniería Agroindustrial</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.paginas.agroindustrial')                 
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <img src="{{ asset('img/paginas/agroindustrial.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Visión</strong></h2>
                            <p style="text-align: justify;">{{$carrera->vision}}</p>
                                
                            <h2 class="mb-3"><strong>Misión</strong></h2>
                            <p style="text-align: justify;">{{$carrera->mision}}</p>                                
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection