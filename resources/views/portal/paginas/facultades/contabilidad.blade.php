@extends('layouts.portal')

@section('titulo', 'Contabilidad y Finanzas')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Contabilidad y Finanzas</span></h2>
            <h4>Carrera Profesional de Contabilidad y Finanzas de la UNAMAD.</h4>
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
            <span>Contabilidad y Finanzas</span>
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
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epc@unamad.edu.pe">dir_epc@unamad.edu.pe</a></li>
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
                            <img src="{{ asset('img/paginas/contabilidad.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Contabilidad y Finanzas</strong></h2>
                            <p style="text-align: justify;">La Universidad Nacional Amazónica de Madre de Dios, asume a inicios de este nuevo milenio el gran reto de fortalecer la preparación de los futuros profesionales de la Carrera Profesional de Contabilidad y Finanzas, mediante el desarrollo del currículo acorde con los avances de las técnicas financieras, aplicando nuevas formas contables y preparación en los niveles que plantea el proceso financiero para alcanzar una educación contable de calidad en la Región de Madre de Dios.La Universidad Nacional Amazónica de Madre de Dios, asume a inicios de este nuevo milenio el gran reto de fortalecer la preparación de los futuros profesionales de la Carrera Profesional de Contabilidad y Finanzas, mediante el desarrollo del currículo acorde con los avances de las técnicas financieras, aplicando nuevas formas contables y preparación en los niveles que plantea el proceso financiero para alcanzar una educación contable de calidad en la Región de Madre de Dios.Para tal índole la Universidad Nacional Amazónica de Madre de Dios se constituye como entidad educativa fundamental del mecanismo económico mediante el cual se cristalizará los objetivos y lineamientos de la política de la Institución.El Proyecto de la carrera de Contabilidad y Finanzas está cimentado en leyes contables de los últimos tiempos, cuenta con ejes transversales acorde a lo que en los últimos años está promoviendo el Gobierno y la Región en función al área contable y económica que la Superintendencia Nacional de Educación Superior Universitaria (SUNEDU), requiere sobre la preparación profesional por competencias y la vinculación de la contabilidad con la economía.contable y económica que la Superintendencia Nacional de Educación Superior Universitaria (SUNEDU), requiere sobre la preparación profesional por competencias y la vinculación de la contabilidad con la economía.De igual manera se ha tomado en consideración los aspectos positivos de las ciencias financieras en el horizonte contable-económico de las experiencias universitarias que tienen vigencia preponderante a nivel nacional e internacional en el campo de la Contabilidad. Cada uno de los criterios establecidos en este proyecto luego de una ardua investigación se materializó con el objetivo de contribuir a formar un profesional Integro de Calidad.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection