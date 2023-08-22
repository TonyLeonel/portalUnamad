@extends('layouts.portal')

@section('titulo', 'Postgrado')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Postgrado</span></h2>
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
            <span>Postgrado</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/postgrado') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Postgrado</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La escuela de Posgrado es el órgano de línea responsable de la formación académica de investigadores y docentes universitarios del más alto nivel que desarrolla programas de: Doctorado, Maestría, Diplomados de Posgrado, para aplicar, ampliar profundizar e innovar el concomimiento en áreas específicas de la ciencia, la técnica, las humanidades y las artes. </p>
                            <p class="text-justify fw-bold" style="color: rgb(237, 20, 91);">Funciones de la Escuela de Posgrado</p>
                            <p class="text-justify">Son funciones de la Escuela de Posgrado, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Dirigir, supervisar y controlar la actividad académica y administrativa de la Escuela de Posgrado, en coordinación con las Unidades de Posgrado de las Facultades.</li>
                                <li>Elaborar y elevar para su aprobación el plan anual de funcionamiento y desarrollo de la Escuela, su informe de gestión anual, reglamentos y manuales internos.</li>
                                <li>Refrendar les diplomas de grados académicos de los Programas a su cargo.</li>
                                <li>Desarrollar los procedimientos y actividades de auto evaluación en cada programa de Posgrado, en coordinación con la Oficina de Gestión de la Calidad.</li>
                                <li>Elaborar y difundir las publicaciones de los programas de Posgrado de la universidad.</li>
                                <li>Proponer al Consejo Universitario el número de vacantes en los programas de maestría y doctorado en cada proceso de admisión, en coordinación con las Unidades de Posgrado.</li>
                                <li>Aprobar y proponer al consejo universitario los grados de maestrías y doctorados para su otorgamiento respectivo.</li>
                                <li>Elaborar y proponer al Consejo Universitario nuevos programas de maestrías y doctorados con sus respectivas asignaturas y créditos correspondientes en coordinación con las facultades y las unidades de posgrado.</li>
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