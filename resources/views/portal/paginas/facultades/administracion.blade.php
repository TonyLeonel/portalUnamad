@extends('layouts.portal')

@section('titulo', 'Administración y Negocios Internacionales')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Administración y Negocios Internacionales</span></h2>
            <h4>Carrera Profesional de Administración y Negocios Internacionales de la UNAMAD.</h4>
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
            <span>Administración y Negocios Internacionales</span>
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
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epa@unamad.edu.pe">dir_epa@unamad.edu.pe</a></li>
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
                            <img src="{{ asset('img/paginas/administracion.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Administración y Negocios Internacionales</strong></h2>
                            <p style="text-align: justify;">La Carrera Profesional de Administración y Negocios Internacionales proporciona los conocimientos teóricos y prácticos requeridos para formar profesionales especializados en la gestión de los negocios internacionales, y en el manejo de los modernos mecanismos de financiamiento y de los nuevos instrumentos comerciales que el mercado global exige.</p>
                            <p style="text-align: justify;">La Carrera Profesional de AyNI busca especializar a los estudiantes que la elijan como carrera o profesión en las áreas tanto de gestión como de negociación internacional, de forma integrada y completa. El nombre de la carrera es ese y por tanto lo que el estudiante busca es una profesión orientada tanto a los negocios como al dominio del entorno internacional. Proponer otra orientación a la Carrera Profesional sería incurrir en costos de oportunidad innecesarios.La Carrera Profesional de AyNI busca especializar a los estudiantes que la elijan como carrera o profesión en las áreas tanto de gestión como de negociación internacional, de forma integrada y completa. El nombre de la carrera es ese y por tanto lo que el estudiante busca es una profesión orientada tanto a los negocios como al dominio del entorno internacional. Proponer otra orientación a la Carrera Profesional sería incurrir en costos de oportunidad innecesarios.</p>
                            <p style="text-align: justify;">El egresado de la Carrera Profesional de AyNI procurará desarrollar sus fortalezas y aprovechas las oportunidades que el mercado va a brindarle en comparación a las debilidades de otras carreras profesionales de administración de otros centros de estudio y así afrontar las amenazas locales, regionales, nacionales y globales que pudieran atentar contra la eficiencia y eficacia de la ciencia administrativa, esto se logrará con un Plan de Estudios acorde a la competitividad que se desea lograr del egresado de la Carrera Profesional de Administración y Negocios Internacionales.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection