@extends('layouts.portal')

@section('titulo', 'Bienestar Universitario')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellona.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Bienestar Universitario</span></h2>
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
            <span>Bienestar Universitario</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/bienestar') }}"  class="share-btn">
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
                @include('secciones.paginas.bienestar_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p>&nbsp;</p>
                            <p style="text-align: justify;">La Dirección Universitaria de Bienestar Universitario, brinda a la población estudiantil programas de asistencia social en alimentación, orientación social familiar, atención de la salud, psicología, psicopedagogía y fomento &nbsp;cultural y artístico a través del trabajo conjunto de sus unidades y áreas que la conforman tales como:</p>
                            <ul>
                            <li>Unidad de Servicios de Salud – USS</li>
                            <li>Unidad de Bienestar Estudiantil – UBE</li>
                            <li>Unidad de Servicios Alimentarios – USA</li>
                            <li>Área Psicopedagógico</li>
                            <li>Unidad de Servicio de Deporte</li>
                            </ul>
                            <p style="text-align: justify;">&nbsp;</p>
                            <p style="text-align: justify;">La DUBU, durante el periodo 2017 ha desarrollado un conjunto de actividades acordes a la naturaleza de sus funciones, las mismas que son consideradas en la programación del Plan Operativo Institucional anual y cumplidas aún a pesar de las dificultades de presupuesto, equipos y personal de apoyo.</p>
                            <p style="text-align: justify;">&nbsp;</p>
                            <p style="text-align: justify;"><span style="color: rgb(219, 4, 85);"><strong>FINALIDAD</strong></span></p>
                            <p style="text-align: justify;">Es la de contribuir al bienestar integral de los estudiantes con la participación multidisciplinaria del equipo que la conforma, valiéndose también de estrategias y políticas sociales de nuestro medio. Su labor asistencial ocupa temas de salud integral, académica, social y familiar. Su labor de investigación se basa en el estudio socioeconómico de la población estudiantil, detectando casos de vulnerabilidad social que le permite plantear su acción y beneficios como la gestión y/o el otorgamiento de becas integrales y parciales sea para estudios, capacitación, atención alimentaria y apoyo administrativo en reinicios de estudio y retiros de semestre de conformidad al Reglamento Académico General.</p>
                            <p style="text-align: justify;">&nbsp;</p>
                            <p style="text-align: justify;"><span style="color: rgb(219, 4, 85);"><strong>OBJETIVO</strong></span></p>
                            <p style="text-align: justify;">Contribuir en el bienestar integral de los estudiantes universitarios con actividades de orientación, integración y participación activa en programas sociales, educativos, &nbsp;recreativos y culturales organizados por la Oficina Universitaria de Bienestar Universitario.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection