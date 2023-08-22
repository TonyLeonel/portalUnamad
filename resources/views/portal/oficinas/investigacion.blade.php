@extends('layouts.portal')

@section('titulo', 'Instituto de Investigación')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Instituto de Investigación</span></h2>
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
            <span>Instituto de Investigación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/investigacion') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Instituto de Investigación</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">El Instituto de Investigación, es el órgano de línea responsable de gestionar, organizar, asesorar, promover y supervisar el desarrollo de las actividades de investigación científica y desarrollo tecnológico (l+D) en el ámbito de la ciencia, tecnología, creación de grupos, redes y semilleros de investigación, acordes con la política institucional y líneas de investigación de la UNAMAD. El Instituto de Investigación gestiona fondos públicos y privados para el desarrollo de actividades de l+D. El Instituto de Investigación ~ gestiona, coordina y supervisa el fondo editorial, institutos, laboratorios y centros de investigación de la UNAMAD.</p>
                            <p class="text-justify">Son funciones del Instituto de Investigación, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Promover el desarrollo de proyectos de investigación de acuerdo a la política dictada por el Vicerrectorado de Investigación.</li>
                                <li>Promover, coordinar, supervisar, ejecutar actividades de investigación y desarrollo (l+D) de acuerdo a la política dictada por el Vicerrectorado de Investigación.</li>
                                <li>Identificar, actualizar y promover las líneas de investigación de la UNAMAD en coordinación con las unidades de investigación de las facultades.</li>
                                <li>Formular y ejecutar planes de trabajo para gestionar el financiamiento de convocatorias a fondos concursables de la UNAMAD, o externos en el marco de las líneas de investigación, a fin de viabilizar su ejecución y resultados, previa opinión favorable de la Oficina de Planeamiento y Presupuesto.</li>
                                <li>Formular y actualizar documentos normativos institucionales (reglamentos, directivas, otros) para mejorar la gestión de la l+D, en el marco de la política general de investigación de la UNAMAD.</li>
                                <li>Gestionar el portafolio de proyectos de investigación durante todo el ciclo de vida (convocatoria, planificación, ejecución, monitoreo y control, cierre).</li>
                                <li>Promover relaciones de cooperación entre los diferentes proyectos y programas de investigación en los diferentes niveles de formación de la universidad. </li>
                                <li>Diseñar, implementar y evaluar programas de incentivos para el desarrollo de investigación. </li>
                                <li>Lanzar convocatorias de publicación científica de los resultados de las investigaciones desarrolladas en la UNAMAD. </li>
                                <li>Realizar el seguimiento y evaluación de los productos entregables de proyectos de investigación de la UNAMAD. </li>
                                <li>Administrar y mantener actualizados los sistemas informáticos y bases de datos de investigadores que ejecutan proyectos de investigación y desarrollo (l+D). </li>
                                <li>Fomentar, supervisar y brindar asistencia técnica para creación y reconocimiento de grupos, redes y semilleros de investigación en la UNAMAD. </li>
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