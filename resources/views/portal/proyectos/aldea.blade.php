@extends('layouts.portal')

@section('titulo', 'Aldea Científica')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Aldea Científica</span></h2>
            <h4>Universidad Nacional Amazónica de Madre de Dios.</h4>
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap image_bar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Aldea Científica</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('proyectos/aldea') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding small-padding gray-bg">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">                        
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Aldea Científica</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Aldea Científica Iñapari-UNAMAD se construyó con el objetivo de crear un centro para el encuentro académico y de intercambios entre docentes y estudiantes investigadores de los países vecinos de Brasil y Bolivia, una estación para los profesionales de las diferentes escuelas académicas que realizan trabajos de investigación en el campo, tanto en el eje carretero.</p>
                            <p class="text-justify">Esta obra es un inicio para la implementación de laboratorios de investigación que se edificarán en la Provincia de Tahuamanu, específicamente en la zona de frontera, donde la universidad pretende extender sus servicios educativos y de proyección social.</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection