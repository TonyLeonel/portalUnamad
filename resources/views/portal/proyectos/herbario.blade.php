@extends('layouts.portal')

@section('titulo', 'Herbario')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Herbario</span></h2>
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
            <span>Herbario</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('proyectos/herbario') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Herbario</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">Madre de Dios es reconocido como <i>“Un tesoro de biodiversidad para el mundo”</i>  por ende, realizar una colección de plantas o partes de plantas, desecadas, preservadas, identificadas y acompañadas de información como el nombre común, nombre científico, localidad de colecta, hábitat, características particulares de la planta, altitud, fecha, entre otros datos, permitiría difundir el conocimiento y la importancia de su cuidado a estudiantes y público en general a través de proyecciones sociales. Su función principal es servir de referencia o patrón en la investigación botánica y ayudar en actividades como:</p>
                            <p class="text-justify">Actividades de apoyo a la docencia: Colaborar en Trabajos de Fin de Grado y Trabajos de Fin de Máster de la escuela profesional de Forestal y desarrollar sitios web relacionados con distintas asignaturas.</p>
                            <p class="text-justify">Actividades de apoyo a la investigación: Colaborar en proyectos y contratos de investigación además de prestar y recibir pliegos para estudios sobre la flora de la región de Madre de Dios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection