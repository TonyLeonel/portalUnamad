@extends('layouts.portal')

@section('titulo', 'Incubadora de Empresas')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Incubadora de Empresas</span></h2>
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
            <span>Incubadora de Empresas</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/incubadora') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Incubadora de Empresas</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Dirección de Incubadoras de Empresas es el órgano de línea responsable de estimular la creación y el fortalecimiento de empresas innovadoras en base a ciencia y tecnología o en base al conocimiento tradicional para los estudiantes de últimos semestres y graduados. Ofrecer toda la capacitación, asistencia técnica y gerencial para lograr con éxito su constitución. Corresponden a ambientes planeados para transformar ideas y proyectos en productos y servicios estimulando la creación y el fortalecimiento de empresas innovadoras y brindando además las condiciones para que las empresas reciban capacitación y asistencia técnica de modo que puedan superar barreras burocráticas en los primeros años de su constitución. En esencia es la unidad de investigación encargada de promover y gestionar la generación de la micro y pequeña empresa en la que los estudiantes son propietarios.</p>
                            <p class="text-justify">Son funciones de la Dirección de Incubadoras de Empresas, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Formular y proponer lineamientos y políticas respecto a la metodología de emprendimiento e incubación de empresas en la universidad.</li>
                                <li>Promover la iniciativa de los estudiantes para la creación de pequeñas y microempresas de propiedad de los estudiantes.</li>
                                <li>Realizar las convocatorias a fondos concursables de emprendimiento, así como su seguimiento, monitoreo y evaluación.</li>
                                <li>Difundir las actividades de emprendimiento empresarial desarrolladas por los estudiantes de la universidad.</li>
                                <li>Desarrollar los planes de competitividad en lo que se refiere a la innovación empresarial, mejorar de la gestión y formación de las personas.</li>
                                <li>Gestionar el acceso a financiamiento con fondos de cooperación nacional y/o internacional para el desarrollo de propuestas o ideas de negocio. </li>
                                <li>Brindar asesoría técnica especializada para la generación, desarrollo y consolidación de empresas en innovación y desarrollo empresarial. </li>
                                <li>Las demás funciones asignadas por el Vicerrectorado de Investigación, o aquellas que sean otorgadas por norma expresa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection