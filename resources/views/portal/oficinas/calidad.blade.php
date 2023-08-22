@extends('layouts.portal')

@section('titulo', 'Gestión de la Calidad')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Gestión de la Calidad</span></h2>
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
            <span>Gestión de la Calidad</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/calidad') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Gestión de la Calidad</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Oficina de Gestión de la Calidad es el órgano de asesoramiento responsable de planificar, monitorear, supervisar y evaluar los procesos de mejora de la calidad para el licenciamiento, acreditación y excelencia académica de la UNAMAD; asimismo, elaborar y ejecutar el Plan de Gestión de la Calidad Institucional; así como, gestionar, monitorear y asegurar el proceso de evaluación periódica de los docentes.</p>
                            <p class="text-justify">Son funciones de la Oficina de Gestión de la Calidad, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Gestionar, monitorear y evaluar lineamientos de política, programas, proyectos y acciones de aseguramiento de la calidad institucional y de la oferta del servicio educativo en las carreras profesionales de la universidad. </li>
                                <li>Diseñar, proponer, gestionar y asegurar la gestión efectiva del Sistema de Gestión de la Calidad Institucional. </li>
                                <li>Monitorear los sistemas y procesos trasversales de autoevaluación, licenciamiento y acreditación institucional; así como los que corresponden en las carreras profesionales de la universidad. </li>
                                <li>Fomentar el fortalecimiento de las capacidades de los miembros de la comunidad universitaria y de las diferentes unidades de organización de la universidad, para asegurar una cultura integral de autoevaluación, autorregulación y mejoramiento continuo de la calidad en la institución.</li>
                                <li>Difundir los resultados o niveles de calidad que alcance la universidad de las acciones del licenciamiento y acreditación. </li>
                                <li>Emitir opiniones técnicas en materia de su competencia. </li>
                                <li>Capacitar a los miembros de la comunidad universitaria sobre sistema de gestión de la calidad. </li>
                                <li>Brindar asesoramiento y apoyo a los procesos de acreditación institucional y de las ~ i carreras profesionales de la universidad.</li>
                                <li>Las demás funciones asignadas por el Rectorado, o aquellas que sean otorgadas por norma expresa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection