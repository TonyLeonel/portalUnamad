@extends('layouts.portal')

@section('titulo', 'Educación: Especialidad Matemática y Computación')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Educación: Especialidad Matemática y Computación</span></h2>
            <h4>Carrera Profesional de Educación: Especialidad Matemática y Computación de la UNAMAD.</h4>
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
            <span>Educación: Especialidad Matemática y Computación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
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
                <div class="box-widget fl-wrap mb-3">   
                    <div class="box-widget-header"></div>                 
                    <div class="box-widget-content fl-wrap">
                        <div class="box-widget-title fl-wrap mt-1">Datos de contacto</div>
                        <div class="contats-list clm fl-wrap">
                            <ul class="no-list-style">
                                <li><span><i class="fal fa-phone"></i> Teléfono :</span> -</li>
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epe@unamad.edu.pe">dir_epe@unamad.edu.pe</a></li>
                                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="https://goo.gl/maps/KwU7w1xeRXjTrHkG7"> AV. Jorge Chávez N° 1160</a></li>
                                <li><span><i class="fal fa-browser"></i> Web :</span> -</li>
                            </ul>
                        </div>
                        <div class="profile-widget-footer fl-wrap">
                            <div class="card-info-content_social ">
                                <!--<ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063722523487" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://wa.me/51974120205" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>-->
                            </div>                           
                        </div>
                    </div>
                </div>                      
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <img src="{{ asset('img/paginas/educacion.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Educación: Especialidad Matemática y Computación</strong></h2>
                            <p style="text-align: justify;">La Carrera de Profesional de Educación tiene 16 años (2001-2016), de funcionando en la Facultad de Educación de la Universidad Nacional Amazónica de Madre de Dios con la Especialidad de Educación: Especialidad Matemática y Computación, en el año 2009 se crean las especialidades de Educación: Especialidad Inicial y Especial y, Educación: Especialidad Primaria e Informática; en la actualidad la Carrera Profesional de Educación cuenta con egresados en las tres especialidades. El trayecto transcurrido hasta el momento, da cuenta de la complejidad del contexto de la carrera, que no solo ha crecido en número de docentes y estudiantes, sino que han aumentado las variables desde el aspecto del currículo, requiriendo de una mirada más analítica y objetiva. De acuerdo con este escenario, se hace propicio y necesario realizar una evaluación sobre el funcionamiento real de la Carrera Profesional de Educación en pos de poder expresar las debilidades y fortalezas, para luego iniciar acciones tendientes al mejoramiento de la misma en todos los aspectos.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection