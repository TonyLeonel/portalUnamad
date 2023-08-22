@extends('layouts.portal')

@section('titulo', 'Innovación y Transferencia Tecnológica')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Innovación y Transferencia Tecnológica</span></h2>
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
            <span>Innovación y Transferencia Tecnológica</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/innovacion') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Innovación y Transferencia Tecnológica</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Dirección de Innovación y Transferencia Tecnología es el órgano de línea responsable de dirigir, coordinar y promover la innovación y transferencia tecnológica en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI). En la UNAMAD, promueve y gestiona la protección intelectual y registro de patentes como resultado de las actividades de investigación e innovación. La Dirección de Innovación y Transferencia Tecnología establece canales de comunicación entre la universidad, empresa y el estado para gestionar fondos públicos y privados que financien el desarrollo de actividades de innovación y transferencia tecnológica. También gestiona, coordina y supervisa el repositorio institucional, los centros de innovación, centros de extensión y transferencia tecnológica de la UNAMAD.</p>
                            <p class="text-justify">Son funciones de la Dirección de Innovación y Transferencia Tecnológica, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Promover, gestionar y ejecutar acciones de innovación en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI)</li>
                                <li>Promover, gestionar y ejecutar acciones de transferencia tecnológica en el marco de los objetivos del Sistema Nacional de Ciencia, Tecnología e Innovación (SINACTI).</li>
                                <li>Diseñar y proponer al Vicerrectorado de Investigación las normas, reglamentos y directivas para el desarrollo de la innovación y transferencia tecnológica dirigidas a la sociedad civil, empresas y el estado.</li>
                                <li>Generar capacidades para la innovación y transferencia tecnológica; orientadas a la atención de las necesidades y oportunidades del sector productivo de la región y del país.</li>
                                <li>Promover y gestionar relaciones entre la universidad, la empresa, comunidades e instituciones científicas públicas o privadas, para el financiamiento de actividades de innovación a través de contratos, prestaciones de servicios y asesorías. </li>
                                <li>Promover la protección del conocimiento generado en el proceso científico, tecnológico y de innovación, a través del registro de la propiedad intelectual y trámite de patentes.</li>
                                <li>Diseñar, elaborar y difundir las políticas, programas e instrumentos para la transferencia tecnológica e innovación. </li>
                                <li>Mapear, sistematizar y analizar las experiencias como las buenas prácticas en el diseño y ejecución de políticas, programas e instrumentos para la promoción de la transferencia tecnológica e innovación. </li>
                                <li>Diseñar, implementar y evaluar programas de incentivos para el desarrollo de innovación y transferencia tecnológica. </li>
                                <li>Las demás funciones asignadas por el Vicerrectorado de Investigación, o aquellas que sean otorgadas por norma expresa.  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection