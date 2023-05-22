@extends('layouts.portal')

@section('titulo', 'Ecoturismo')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Ecoturismo</span></h2>
            <h4>Carrera Profesional de Ecoturismo de la UNAMAD.</h4>
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
            <span>Ecoturismo</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
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
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epeco@unamad.edu.pe">dir_epeco@unamad.edu.pe</a></li>
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
                            <img src="{{ asset('img/paginas/ecoturismo.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Ecoturismo</strong></h2>
                            <p style="text-align: justify;">La Carrera Profesional de Ecoturismo de la Universidad Nacional Amazónica de Madre de Dios, es una unidad académica de enseñanza, investigación y responsabilidad social que contribuye a la formación de profesionales de calidad. Al mismo tiempo realiza y promueve ciencia e innovación tecnológica para el aprovechamiento sostenible de los recursos culturales, naturales y conservación del medio ambiente.La Carrera Profesional de Ecoturismo de la Universidad Nacional Amazónica de Madre de Dios, es una unidad académica de enseñanza, investigación y responsabilidad social que contribuye a la formación de profesionales de calidad. Al mismo tiempo realiza y promueve ciencia e innovación tecnológica para el aprovechamiento sostenible de los recursos culturales, naturales y conservación del medio ambiente.De acuerdo a la Nueva Ley Universitaria (Ley 30220) y en función del Plan Estratégico que marca la Política de Aseguramiento de la Calidad de la Educación Superior Universitaria (Decreto supremo N° 016-2015-MINEDU), hacia el bicentenario debemos de contar con docentes fortalecidos en sus capacidades de investigación y enseñanza, la que debe proyectarse con la generación de investigación y estudios en la especialidad que le competen, en la cual, los estudiantes y egresados serán los principales artífices de buscar el desarrollo sostenible de la comunidad madrediosense, nacional y global.En este contexto, la Carrera Profesional de Ecoturismo en Madre de Dios asume su responsabilidad preparando profesionales con talento para identificar, diseñar, implementar, proponer y validar soluciones a los problemas en el marco del Turismo, utilizando herramientas básicas (Turismo, Social, Cultural, Económico, Medio Ambiente y Política).Según el diseño curricular actualizado, los alumnos recibirán una formación multidisciplinaria y tendrán una ventaja de obtener amplios conocimientos, así como las herramientas necesarias para dirigir, gestionar, planificar y ejecutar proyectos hoteleros, gastronómicos, ecoturísticos, ambientales, culturales, social y turístico, lo cual será posible gracias a los módulos de competencia profesional, de manera tal que a la conclusión de los estudios de dichos módulos permita obtener un certificado, para facilitar la incorporación al mercado laboral. Para la obtención de dicho certificado, el estudiante debe elaborar y sustentar un proyecto que demuestre la competencia alcanzada.De esta manera, logramos que nuestros egresados, sean profesionales altamente calificados, lo que hace que ejerzan su profesión de manera responsable y con un compromiso ético, capaz de responder a las más altas exigencias del mercado laboral.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection