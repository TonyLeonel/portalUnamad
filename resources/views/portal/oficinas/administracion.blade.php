@extends('layouts.portal')

@section('titulo', 'Dirección General de Administración')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Dirección General de Administración</span></h2>
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
            <span>Dirección General de Administración</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/administracion') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Dirección General de Administración</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Dirección General de Administración es el órgano de apoyo responsable de conducir los procesos de administración de los recursos humanos, materiales, infraestructuras y financieros que garanticen servicios de calidad, equidad, pertinencia y satisfacer las necesidades de las unidades de organización de la universidad, en el marco normativo de los sistemas administrativos que dirige.</p>
                            <p class="text-justify">Son funciones de la Dirección General de Administración, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Organizar, planificar, coordinar y supervisar las actividades administrativas de la UNAMAD en función de los requerimientos académicos.</li>
                                <li>Gestionar, administrar, conducir y supervisar, el eficiente y buen uso de los recursos humanos, económicos, financieros y patrimoniales de la UNAMAD. </li>
                                <li>Coordinar la elaboración del presupuesto general de la UNAMAD. </li>
                                <li>Proponer al Rector las políticas y normas internas de carácter administrativo. </li>
                                <li>Promover la capacitación y el perfeccionamiento de los servidores no docentes de la universidad. </li>
                                <li>Conducir y evaluar los sistemas administrativos de contabilidad, tesorería, abastecimiento, gestión de recursos humanos; así como la ejecución de las inversiones, servicios generales, mantenimiento y patrimonio.</li>
                                <li>Emitir opinión técnica en materia de su competencia.</li>
                                <li>Formular y proponer documentos normativos para la implementación de los sistemas administrativos en la institución. </li>
                                <li>Establecer y mantener el Sistema de Control Interno conforme a las normas legales vigentes. </li>
                                <li>Conducir la ejecución de operaciones orientadas a la gestión de los fondos que administran, de acuerdo con la normativa vigente. </li>
                                <li>Promover la capacitación profesional y la especialización de los servidores administrativos de la institución. </li>
                                <li>Planificar, dirigir, ejecutar, controlar y evaluar las actividades de mantenimiento y servicios generales de la universidad.</li>
                                <li>Emitir resoluciones dentro del ámbito de su competencia.</li>
                                <li>Establecer y mantener el Sistema de Control Interno conforme a las normar legales vigentes.</li>
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