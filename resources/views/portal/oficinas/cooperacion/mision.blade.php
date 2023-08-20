@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales - Misión, Visión y Objetivos')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales - Misión, Visión y Objetivos</span></h2>
            <h4>Centro de formación académica de la UNAMAD.</h4>
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <a href="{{ url('oficinas/cooperacion') }}">Oficina de Cooperación y Relaciones Internacionales</a>    
            <span>Misión, Visión y Objetivos</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion/mision') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.menu', $menu)    
                @include('secciones.paginas.coperacion_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p><span style="color: rgb(53, 152, 219);"><strong>MISIÓN Y VISIÓN</strong></span></p>
                            <p><strong>Misión de la OCRI</strong></p>
                            <p>Vincular a la Universidad Nacional Amazónica de Madre de Dios - UNAMAD con instituciones públicas y privadas en el Perú y en el mundo, de manera tal que estas vinculaciones potencien los roles de investigación, docencia y servicio de la universidad, tanto al facilitar y formalizar canales de expresión como al brindar recursos de fuentes diversas que optimen el funcionamiento de la universidad.</p>
                            <p><strong>Visión de la OCRI</strong></p>
                            <p style="text-align: left;">La Oficina de Cooperación y Relaciones Interinstitucionales – OCRI es el vínculo dinámico de la Universidad Nacional Amazónica de Madre de Dios al mundo exterior. Es un facilitador, un puente para promover convenios, becas, donaciones, proyectos de investigación y desarrollo. Coordina las actividades internacionales, contando para ello con un equipo especializado que brinda asesoría técnica a las facultades. Como unidad operativa del Rectorado, promueve y coordina iniciativas que involucren a la Universidad en su conjunto; y fortalece las capacidades descentralizadas para la gestión de la cooperación en todas y cada una de nuestras Facultades y unidades académicas.</p>
                            <p style="text-align: left;">&nbsp;</p>
                            <p><span style="color: rgb(53, 152, 219);"><strong>BASE LEGAL</strong></span></p>
                            <ul style="list-style-type: square;">
                            <li>Constitución Política del Perú</li>
                            <li>Ley N°. 27444, Ley del Procedimiento Administrativo General, aprobada por decreto supremo N° 004 – 2019 – JUS (21- 01 – 2019).</li>
                            <li>Ley Universitaria Nº 30220</li>
                            <li>Estatuto de la Universidad Nacional Amazónica de Madre de Dios. Aprobado con Resolución Universitaria Nº 004-2019-AU y reformulado mediante Resolución de Asamblea Universitaria N° 002-2020-UNAMAD-AU, de fecha 30 de enero 2020.</li>
                            <li>Reglamento General de Suscripción, Ejecución y Seguimiento, de Convenios Interinstitucionales, aprobado mediante Resolución Nº 409-2016-UNAMAD-CU.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><span style="color: rgb(53, 152, 219);"><strong>OBJETIVOS</strong></span></p>
                            <p>Los objetivos de la Oficina de Cooperación y Relaciones Internacionales son los siguientes:</p>
                            <ul style="list-style-type: square;">
                            <li>Gestionar suscripción de convenios interinstitucionales.</li>
                            <li>Afianzar la integración de alianzas entre instituciones académicas, empresas, instituciones no gubernamentales con la Universidad Nacional Amazónica de Madre de Dios</li>
                            <li>Impulsar el fortalecimiento de capacidades de docentes y estudiantes de la UNAMAD, a través de la ejecución de los convenios suscritos.</li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection