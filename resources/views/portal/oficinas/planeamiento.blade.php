@extends('layouts.portal')

@section('titulo', 'Oficina de Planeamiento y Presupuesto')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Planeamiento y Presupuesto</span></h2>
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
            <span>Oficina de Planeamiento y Presupuesto</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/planeamiento') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Oficina de Planeamiento y Presupuesto</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Oficina de Planeamiento y Presupuesto es el órgano de asesoramiento responsable de asesorar en asuntos de formulación, ejecución y evaluación de los planes estratégicos institucionales, planes operativos, programa de inversiones, presupuesto y modernización de la gestión de la entidad; así como, en los procesos de organización de la UNAMAD.</p>
                            <p class="text-justify">Son funciones de la Oficina de Planeamiento y Presupuesto, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Formular, monitorear y evaluar el Plan Estratégico Institucional, Plan de Desarrollo Institucional y el Plan Operativo Institucional de la UNAMAD.</li>
                                <li>Coordinar, preparar, elaborar y presentar el proyecto anual de presupuesto institucional en el marco de las normas vigentes y sustentarlo ante las instancias correspondientes. </li>
                                <li>Conducir el proceso de la gestión presupuestaria de la universidad en las fases de Programación Multianual, Formulación, Aprobación, Ejecución y Evaluación Presupuestaria; así como, realizar el seguimiento presupuestal, en el marco de las disposiciones vigentes que emite el Sistema Nacional de Presupuesto Público. </li>
                                <li>Conducir, articular, promover el proceso de formulación y actualización de los documentos de gestión institucional de la universidad. </li>
                                <li>Implementar el proceso de modernización institucional de la universidad, de acuerdo a las normas y lineamientos existentes sobre la materia. </li>
                                <li>Proponer la mejora y actualización de los procesos y procedimientos internos en el marco de la implementación de la gestión por proceso en la universidad. </li>
                                <li>Consolidar y elaborar la Memoria Anual Institucional, en coordinación con las distintas unidades de organización de la universidad. </li>
                                <li>Brindar asistencia técnica especializada a las distintas unidades de organización de la universidad. </li>
                                <li>Emitir opinión técnica previa en lo referente a políticas, planes, presupuesto, modernización de la gestión de la universidad y otros temas vinculadas al ámbito de su competencia. </li>
                                <li>Asegurar la aplicación de las normas del Sistema Nacional de Gestión de Inversiones. </li>
                                <li>Mantener actualizada la información registrada en los aplicativos informáticos de los sistemas administrativos o funcionales que conduce. </li>
                                <li>Proponer directivas. lineamientos o herramientas internas que coadyuven al ordenamiento de los procesos y actividades de la universidad, en el marco de las normas generales emitidas por los organismos rectores de los sistemas administrativos y del Ministerio de Educación, los cuales estén vinculados al ámbito de su competencia.</li>
                                <li>Programar, recolectar, validar, procesar, analizar y difundir la información estadística de la universidad.</li>
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