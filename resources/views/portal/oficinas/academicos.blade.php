@extends('layouts.portal')

@section('titulo', 'Oficina de Asuntos Académicos')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Asuntos Académicos</span></h2>
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
            <span>Oficina de Asuntos Académicos</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/academicos') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Oficina de Asuntos Académicos</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Dirección de Asuntos Académicos es el órgano de línea responsable de organizar el proceso de matrícula, actas de evaluación, archivos académicos, certificados; así como registrar y custodiar la información académica de la Universidad, Además, de mantener vinculación permanente con sus egresados para que participen y se enriquezcan de la actividad académica, de investigación y sociocultural; así como establecer vínculos con entidades del sector público y privado a fin de retroalimentar y conocer la inserción de sus egresados en el mercado laboral.</p>
                            <p class="text-justify">Son funciones de la Dirección de Asuntos Académicos, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Organizar y sistematizar la información académica de las facultades y programas académicos. </li>
                                <li>Coordinar y ejecutar las acciones de matrícula, registro, estadística y otras relacionadas con el funcionamiento académico de la universidad.</li>
                                <li>Organizar y conducir el archivo general de historiales académicos de los estudiantes regulares y egresados, registrar y archivar las actas de evaluación académica.</li>
                                <li>Procesar y preservar la información académica en los sistemas informáticos y físicos para la emisión de informes académicos.</li>
                                <li>Mantener y actualizar el registro de planes de estudios de las especialidades de la universidad para la emisión de informes.</li>
                                <li>Diseñar, proponer, gestionar y asegurar la gestión efectiva del Sistema de Seguimiento al Graduado.</li>
                                <li>Gestionar el seguimiento de los graduados por carrera profesional, para proponer su inserción en el mercado laboral. </li>
                                <li>Proponer documentos, protocolos, directivas, manuales, entre otros, para la administración y funcionamiento de los servicios que se brinda al estudiante.</li>
                                <li>Elaborar y proponer al Vicerrectorado Académico el calendario académico de la universidad.</li>
                                <li>Proponer normas generales de evaluación pedagógica para estudiantes y docentes de la Universidad. </li>
                                <li>Las demás funciones asignadas por el Vicerrectorado Académico, o aquellas que sean otorgadas por norma expresa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection