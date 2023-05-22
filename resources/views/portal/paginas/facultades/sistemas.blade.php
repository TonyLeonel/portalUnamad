@extends('layouts.portal')

@section('titulo', 'Ingeniería de Sistemas e Informática')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Ingeniería de Sistemas e Informática</span></h2>
            <h4>Carrera Profesional de Ingeniería de Sistemas e Informática de la UNAMAD.</h4>
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
            <span>Ingeniería de Sistemas e Informática</span>
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
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epis@unamad.edu.pe">dir_epis@unamad.edu.pe</a></li>
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
                            <img src="{{ asset('img/paginas/sistemas.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Ingeniería de Sistemas e Informática</strong></h2>
                            <p style="text-align: justify;">La carrera profesional de Ingeniería de Sistemas e Informática es responsable por la generación de recursos humanos orientados a la creación de nueva tecnología computacional que, a su vez, permita impulsar la industria de software de nuestro medio. Nuestros egresados deben estar preparados para cambiar la situación actual de nuestro país mediante el desarrollo de tecnología propia.</p>
                            <p style="text-align: justify;">Es necesario recalcar que, el Ingeniero de Sistemas e Informática siempre estará preparado para afrontar cualquier reto tecnológico que se le presente en alguna empresa o proyecto en la cual esté laborando, debido a que siempre está en constante actualización respecto a las nuevas tecnologías de información emergentes, su función no es solo generar tecnología, sino también saber adaptarse y usar las que son generadas por otros profesionales alrededor del mundo.Es necesario recalcar que, el Ingeniero de Sistemas e Informática siempre estará preparado para afrontar cualquier reto tecnológico que se le presente en alguna empresa o proyecto en la cual esté laborando, debido a que siempre está en constante actualización respecto a las nuevas tecnologías de información emergentes, su función no es solo generar tecnología, sino también saber adaptarse y usar las que son generadas por otros profesionales alrededor del mundo.De acuerdo a la Nueva Ley Universitaria (Ley 30220) y en función del Plan Estratégico que marca la Política de Aseguramiento de la Calidad de la Educación Superior Universitaria (Decreto supremo N° 016-2015-MINEDU), hacia el bicentenario debemos de contar con docentes fortalecidos en sus capacidades de investigación y enseñanza, la que debe proyectarse con la generación de investigación y estudios en la especialidad que le competen, en la cual, los estudiantes y egresados serán los principales artífices de buscar el desarrollo sostenible de la comunidad maternitana, nacional y global.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection