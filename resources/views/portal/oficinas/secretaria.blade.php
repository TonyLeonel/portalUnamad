@extends('layouts.portal')

@section('titulo', 'Secretaría General')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Secretaría General</span></h2>
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
            <span>Secretaría General</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/secretaria') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Secretaría General</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Secretaría General es el órgano de apoyo responsable de certificar los documentos oficiales de la universidad en su calidad de fedatario; asimismo, conducir y administrar los procesos resolutivos de la Asamblea Universitaria, Consejo Universitario y Rectorado; así como, dirigir la emisión y otorgamiento de grados académicos y títulos universitarios, preservar el acervo documentario institucional y dirigir y supervisar los procesos de trámite documentario.</p>
                            <p class="text-justify">Son funciones de la Secretaria General, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Planificar, organizar y conducir la agenda y acuerdos de las sesiones de los órganos de gobierno, y de la Alta Dirección de la universidad.</li>
                                <li>Formular actas y/o resoluciones. conforme a los acuerdos de las sesiones de los órganos de gobierno, y de la Alta Dirección de la universidad. Asimismo, realizar las respectivas publicaciones en el portal web de las citadas actas y resoluciones.</li>
                                <li>Dirigir y supervisar los procesos de trámite documentario, archivo y registro de grados académicos y títulos de la universidad. </li>
                                <li>Certificar las copias de documentos oficiales expedidos por las dependencias autorizadas de la UNAMAD. </li>
                                <li>Fomentar y sensibilizar sobre las normas de transparencia y acceso a la información pública conforme a la normatividad. </li>
                                <li>Gestionar la atención de las solicitudes y proporcionar la información requerida en aplicación de la Ley de Transparencia y Acceso a la Información Pública. </li>
                                <li>Conducir la expedición de diplomas de grados académicos y títulos profesionales; así como distinciones honoríficas. </li>
                                <li>Administrar el archivo centralizado de la universidad. </li>
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