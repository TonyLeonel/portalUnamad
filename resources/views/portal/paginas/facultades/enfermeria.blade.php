@extends('layouts.portal')

@section('titulo', 'Enfermería')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Enfermería</span></h2>
            <h4>Carrera Profesional de Enfermería de la UNAMAD.</h4>
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
            <span>Enfermería</span>
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
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:epenfer@unamad.edu.pe">epenfer@unamad.edu.pe</a></li>
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
                            <img src="{{ asset('img/paginas/enfermeria.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Enfermería</strong></h2>
                            <p style="text-align: justify;">La Carrera Profesional de Enfermería de la Universidad Nacional de Madre de Dios, fue creada mediante resolución de Asamblea Universitaria Nro. 003-2009-AU, del 07 de diciembre de 2009, y posteriormente fue implementada por resolución de la Asamblea Nacional de Rectores N° 1137-2013-ANR del 05 de agosto de 2013.La Carrera Profesional de Enfermería de la Universidad Nacional de Madre de Dios, fue creada mediante resolución de Asamblea Universitaria Nro. 003-2009-AU, del 07 de diciembre de 2009, y posteriormente fue implementada por resolución de la Asamblea Nacional de Rectores N° 1137-2013-ANR del 05 de agosto de 2013.Los cambios constantes que se vienen suscitando a nivel de la sociedad y la globalización exigen establecer estándares de formación concordantes con la problemática actual en base a las disposiciones establecidas por el CONEAU.Los Docentes de la Carrera Profesional de Enfermería de la Universidad Nacional Amazónica de Madre de Dios, conscientes de esta necesidad han adecuado el Diseño Curricular 2017-2021 a las normas emanadas por la Ley 30220 a fin de garantizar la adecuada formación de nuestros estudiantes y alcanzar la ansiada acreditación que se verá reflejada en la formación de profesionales competentes en el mercado laboral, toda vez que se ha evaluado el plan curricular 2012, el mismo que se encuentra diseñado bajo el enfoque de las normas de la anterior Ley Universitaria, no concordante con la Ley actual, que es emanada por el Ministerio de Educación y SUNEDU.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection