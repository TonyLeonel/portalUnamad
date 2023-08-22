@extends('layouts.portal')

@section('titulo', 'Oficina de Tecnologías de la Información')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Tecnologías de la Información</span></h2>
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
            <span>Oficina de Tecnologías de la Información</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/oti') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Oficina de Tecnologías de la Información</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Oficina de Tecnologías de la Información es el órgano de apoyo responsable de organizar y dirigir los procesos y servicios informáticos de la UNAMAD, determinando los procedimientos, buenas prácticas y estándares necesarios, a fin de proveer al usuario final el acceso seguro a la información institucional y la red global mediante el correcto uso de las tecnologías de información.</p>
                            <p class="text-justify">Son funciones de la Oficina de Tecnologías de la Información, las siguientes:</p>
                            <ul class="lista_base text-justify">
                                <li>Planificar, formular, dirigir y monitorear la programación de sus actividades y tareas; así como velar por una adecuada ejecución de los recursos que le fueran asignados, en el marco de sus funciones. </li>
                                <li>Formular, ejecutar y evaluar el Plan Estratégico de Tecnologías de Información (PETI) de la Universidad. </li>
                                <li>Gestionar el Gobierno Digital en la UNAMAD, procurando la transformación digital a través de la formulación e implementación de los distintos planes en materia de tecnologías de la información, alineados a las políticas y estrategias de la universidad. </li>
                                <li>Promover el uso intensivo de tecnologías de la información a través de los mecanismos idóneos que coadyuven al incremento de la productividad de los procesos institucionales.</li>
                                <li>Planificar, coordinar, dirigir, controlar y evaluar las actividades orientadas al diseño, desarrollo, implementación, mantenimiento y administración de sistemas de información, herramientas y soluciones de software. </li>
                                <li>Proponer, planificar, ejecutar y controlar proyectos tecnológicos orientados a mejorar la productividad de los procesos de la entidad, atendiendo las necesidades de las distintas unidades de organización de la universidad.</li>
                                <li>Proponer lineamientos de políticas, directivas, estándares, lineamientos y/o procedimientos en materia de tecnologías de la información para la adecuada administración de los servicios y recursos tecnológicos de la universidad, asegurando su cumplimiento en el marco de su competencia.</li>
                                <li>Planificar, administrar, mantener, controlar y evaluar la infraestructura tecnológica y la red de datos de la UNAMAD para garantizar la continuidad de los distintos servicios tecnológicos que se brindan a usuarios internos y externos, minimizando los riesgos inherentes. </li>
                                <li>Promover, planificar, implementar, administrar y controlar la seguridad de la información, seguridad informática y respaldo de datos de la UNAMAD con el fin de garantizar la confidencialidad, integridad y disponibilidad de los activos de información. </li>
                                <li>Brindar soporte y asistencia tecnológica a las distintas unidades de organización en el uso de herramientas, servicios y sistemas de información, a fin de procurar el óptimo uso de los recursos tecnológicos de la entidad.</li>
                                <li>Planificar, administrar, mantener y custodiar el equipamiento tecnológico y el software de la entidad con el fin de garantizar su operatividad y vigencia tecnológica. </li>
                                <li>Gestionar los riesgos asociados a los sistemas, infraestructura y servicios de tecnologías de la información, en base a los lineamientos institucionales para la gestión de riesgos y buenas prácticas internacionales. </li>
                                <li>Supervisar, controlar y evaluar los servicios tecnológicos contratados con proveedores, con el fin de garantizar el cumplimiento de los requerimientos técnicos, así como la adecuada prestación de los mismos.</li>
                                <li>Emitir opinión técnica. en el ámbito de su competencia.</li>
                                <li>Informar a la Alta Dirección, respecto al inventario informático de la universidad. </li>
                                <li>Mantener actualizado de manera permanente el portal de la UNAMAD respetando la Ley de Transparencia y Acceso a la Información Pública. </li>
                                <li>Supervisar y evaluar trabajos y/o servicios de terceros relacionados a TI.</li>
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