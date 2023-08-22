@extends('layouts.portal')

@section('titulo', 'Estación Geológica')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Estación Geológica</span></h2>
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
            <span>Estación Geológica</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('proyectos/estacion') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Estación Geológica</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">Dentro de las Ciencias de la Tierra la Geología es una de las ramas fundamentales que estudia la composición química, física, mineralógica, petrológica, estratigráfica, estructural, tectónica, que controlan la dinámica interna y externa del planeta; dichos estudios conducen a la localización de sustancias minerales y energéticas necesarias para el desarrollo y sustento de la especie humana.</p>
                            <p class="text-justify">La Geología como cualquier ciencia está en constante desarrollo, cada vez cuenta con mayores datos del planeta, nuevos y mayor eficiencia de los equipos analíticos, mayor disponibilidad de la información científica gracias al avance de las comunicaciones (publicaciones, revistas científicas en la web).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection