@extends('layouts.portal')

@section('titulo', 'Universidad Nacional Amazónica de Madre de Dios')

@section('css')
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
@endsection

@section('js')
<script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.imageScroll.min.js') }}" type="text/javascript"></script>
{{-- <script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js" type="text/javascript"></script> --}}
{{-- <script src="{{ asset('js/simpleParallax.min.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('js/inicio.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
{{-- <p id="screen">Pantalla del dispositivo: ancho: , altura: .</p>
<p id="window">Ventana del navegador: ancho: , altura: .</p>
<p id="page">Página web: ancho: , altura: .</p> --}}

<div class="flexslider">
    <ul class="slides">
        <li>
            <img src="{{ asset('img/images/1.png')}}" />
        </li>
        <li>
            <img src="{{ asset('img/images/2.png')}}" />
        </li>
        
        <li>
            <img src="{{ asset('img/images/3.png')}}" />
        </li>
        <li>
            <img src="{{ asset('img/images/4.png')}}" />
        </li>
    </ul>
</div>

{{-- <section>
    <div class="media-container">
        <img id="imagen" class="thumbnail" src="{{ asset('img/images/1.jpg')}} " alt="image">
    </div>
</section> --}}

<!-- SERVICIOS -->


<section>
    <div class="container">
         <!--Titulo-->
        <div class="section-title st-center fl-wrap">
            <h4>Conoce todos</h4>
            <h2>Nuestros Servicios</h2>
        </div>
        <!--Listado 01--> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://campus.unamad.edu.pe/" class="tarjeta tarjeta_pink" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fal fa-graduation-cap"></i>      
                                        </div>
                                        <h4>CAMPUS VIRTUAL</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fal fa-graduation-cap"></i> --}}
                                            <i class="fa fa-book" aria-hidden="true"></i>     
                                        </div>
                                        <h4>BIBLIOTECA VIRTUAL</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://portal.unamad.edu.pe/centro-de-idiomas" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fa fa-language" aria-hidden="true"></i>     
                                        </div>
                                        <h4>CENTRO DE IDIOMAS</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://cepre.unamad.edu.pe/" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="{{ asset('img/cepre.png') }}" alt="" style="width: 35px;">
                                        </div>
                                        <h4>CENTRO PRE UNIVERSITARIO</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fa fa-terminal" aria-hidden="true"></i>       --}}
                                            {{-- <i class="fa fa-desktop" aria-hidden="true"></i> --}}
                                            <i class="fas fa-laptop-code"></i>
                                            
                                        </div>
                                        <h4>CENTRO DE INFORMÁTICA</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fas fa-volleyball-ball"></i>       --}}
                                            {{-- <i class="fas fa-palette"></i> --}}
                                            <i class="fas fa-theater-masks"></i>
                                        </div>
                                        <h4>TALLERES EN ACTIVIDADES ARTÍSTICAS Y CULTURALES</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fas fa-diploma"></i>       --}}
                                            <i class="fas fa-award"></i>
                                        </div>
                                        <h4>BECAS</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fas fa-user-md"></i>       --}}
                                            <i class="fas fa-user-nurse"></i>
                                            {{-- <i class="fas fa-stethoscope"></i> --}}
                                        </div>
                                        <h4>CENTRO DE SALUD INTEGRAL</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fas fa-mug-hot"></i>       --}}
                                            <i class="fas fa-turkey"></i>
                                            {{-- <i class="fas fa-apple-crate"></i> --}}
                                        </div>
                                        <h4>COMEDOR<br>UNIVERSITARIO</h4>                       
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://admision.unamad.edu.pe/" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fal fa-users-cog"></i> --}}
                                            <i class="fas fa-chalkboard-teacher"></i>
                                        </div>
                                        <h4>PORTAL DE ADMISIÓN</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://portal.unamad.edu.pe/ocri" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            {{-- <i class="fas fa-handshake-alt"></i> --}}
                                            {{-- <i class="fas fa-handshake"></i> --}}
                                            {{-- <i class="fal fa-handshake"></i> --}}
                                            <i class="far fa-globe"></i>
                                        </div>
                                        <h4>OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://reclamos.servicios.gob.pe/?institution_id=224" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="{{ asset('img/reclamaciones.png') }}" alt="" style="width: 70%;">
                                            {{-- <img src="{{ asset('img/cepre.png') }}" alt="" style="width: 35px;"> --}}
                                        </div>
                                        <h4>LIBRO DE RECLAMACIONES DIGITAL</h4>                                                       
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tarjeta_container mb-3">
                            <div>
                                <div class="mb-3">
                                    <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                                </div>
                            </div>                    
                            <div class="tarjeta_wrapper">
                                <div class="tarjeta tarjeta_yellow">
                                    <div class="tarjeta_centro">                                
                                        <h4>DOCUMENTOS NORMATIVOS Y DE GESTIÓN</h4>
                                        
                                        <ul class="lista_simple">
                                            <li>
                                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/tipos/237-resolucion-rectoral" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Resoluciones Rectorales</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/colecciones/10080-resolucion-de-consejo-universitario" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Resoluciones de Consejo Universitario</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/colecciones/10013-resolucion-de-vicerrectorado-academico" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Resoluciones de Vicerectorado Académico</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/colecciones/10418-resolucion-de-vicerrectorado-de-investigacion" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Resoluciones de Vicerectorado de Investigación</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/168-reglamento" class="lista_item"  target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Reglamentos</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/normas-legales/tipos/28-directiva" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Directivas</div>                                           
                                                </a>
                                                <a href="https://www.gob.pe/institucion/unamad/colecciones/16884-convenios-institucionales" class="lista_item" target="_blank">                                            
                                                    <div class="lista_icono flex-shrink-0">
                                                        <i class="far fa-file-alt"></i>
                                                    </div>
                                                    <div class="lista_descripcion flex-grow-1"> Convenios Institucionales</div>                                           
                                                </a>
                                                
                                            </li>
                                        </ul> 
                                        <a href="{{ url('documentos') }}" class="tarjeta_link_white">Ver más documentos</a> 
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>             
    </div>
</section>

{{-- <div class="xd" data-image="{{ asset('img/images/i1.jpg')}}"></div> --}}


<!-- ENLACES -->
<!-- section -->

<!-- ENLACES -->
<!-- section -->

{{-- <section style="border: 1px dotted;"> --}}

{{-- <div class="parallaxDiv thumbnail"> --}}
    {{-- div with background --}}
    {{-- <img id="imagen" class="thumbnail" src="{{ asset('img/images/i1.jpg')}} " alt="image"> --}}
{{-- </div> --}}
{{-- </section> --}}

<img style="width:100%;" src="{{ asset('img/images/separacion4.png')}} " >
{{-- <img style="width:100%;" src="{{ asset('img/images/separacion2.png')}} " > --}}
{{-- <div class="img-holder" data-image={{ asset('img/images/i1.jpg')}} data-image-mobile="https://raw.github.com/pederan/ImageScroll/master/demo/img/autumn_season-800x450.jpg"></div> --}}

{{-- https://boxy-svg.com/app/disk:PeEn8Z79dz --}}
<div class="img-holder" data-image={{ asset('img/images/maloka1.jpg')}}>
    <div style="-webkit-transform: translateZ(1px);">

    
        <p></p>
        <p></p>
        <p style="-webkit-transform: translateZ(1px);font-size: 36pt; color: #ffffff; text-shadow: 3px 3px 3px #101010;">  Formando profesionales de</p>
        <p></p>
        <p></p>
        <p style="-webkit-transform: translateZ(1px);font-size: 36pt; color: #ffffff; text-shadow: 3px 3px 3px #101010;">  CALIDAD y COMPETENCIA</p>
        <div class="filtro"></div>
        <div class="container mb-4">
            <div class="row numeros-container justify-content-center">
                <div class="col-6 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center">
                    <img src={{ asset('img/images/xdddd.svg')}} alt="produccion-cientifica-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 class="title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">2, 212</h2>
                    <p class="text-center text-shadow-numeros mb-0">
                        Docentes <br />
                        
                    </p>
                </div>
                <div class="col-6 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center">
                    <img src={{ asset('img/images/investigadores.svg')}} alt="icono-carreras-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 class="title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros" >
                        
                    </h2>
                    <p class="text-center text-shadow-numeros mb-0">
                        
                    </p>
                </div>
                <div class="col-6 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center" >
                    <h2 class="title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros" >
                        
                    </h2>
                    <p class="text-center text-shadow-numeros mb-0">
                        
                    </p>
                </div>
                <div class="col-6 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center" >
                    <h2 class="title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros" >
                        
                    </h2>
                    <p class="text-center text-shadow-numeros mb-0">
                        
                    </p>
                </div>
                <div class="col-6 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center" >
                    <h2 class="title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros" >
                        15, 158 TESIS
                    </h2>
                    <p class="text-center text-shadow-numeros mb-0">
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="small-padding">
    <div class="container">
        <div class="section-title st-center fl-wrap">
            <h4>También te puede interesar</h4>
            <h2>Otros enlaces</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">
                <div class="tarjeta_container mb-3">
                    <a href="https://www.gob.pe/institucion/unamad/funcionarios"  class="hover-none externo_item" target="_blank">
                        <div class="tarjeta_icon">                                    
                            <i class="fal fa-user-tie"></i>                                
                        </div>
                        <h4>Directorio de funcionarios</h4>
                        <p class="text-center">Datos de contácto e información del personal de la UNAMAD.</p>   
                    </a>
                </div>
            </div>
            <!--slick-item end -->						
        </div>
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://www.cienciactiva.gob.pe/" class="hover-none externo_item" target="_blank" title="cienciactiva">
                    <div class="tarjeta_icon">
                        <i class="fal fa-file-download"></i>
                    </div>
                    <h4>REPOSITORIO DIGITAL</h4>
                    <p class="text-center">Información intelectual producida y compilada por la comunidad universitaria de la UNAMAD.</p>                                

                </a>
            </div>
            <!--slick-item end -->						
        </div>
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">
                <div class="tarjeta_container mb-3">
                    <a href="https://www.gob.pe/institucion/unamad/funcionarios"  class="hover-none externo_item" target="_blank">
                        <div class="tarjeta_icon">                                    
                            <i class="fal fa-user-tie"></i>                                
                        </div>
                        <h4>Directorio de funcionarios</h4>
                        <p class="text-center">Datos de contácto e información del personal de la UNAMAD.</p>   
                    </a>
                </div>
            </div>
            <!--slick-item end -->						
        </div>
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://www.cienciactiva.gob.pe/" class="hover-none externo_item" target="_blank" title="cienciactiva">
                    <div class="tarjeta_icon">
                        <i class="fal fa-file-download"></i>
                    </div>
                    <h4>REPOSITORIO DIGITAL</h4>
                    <p class="text-center">Información intelectual producida y compilada por la comunidad universitaria de la UNAMAD.</p>                                

                </a>
            </div>
            <!--slick-item end -->						
        </div>
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">                
                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/80-convocatorias-de-trabajo" class="hover-none externo_item" target="_blank">
                    <div class="tarjeta_centro">
                        <div class="tarjeta_icon">
                            <i class="fal fa-bullhorn"></i>                                            
                        </div>
                        <h4>CONVOCATORIAS</h4>
                        <p class="text-center">Convocatorias a procesos de selección de personal administrativo y docente.</p>                                
                    </div>
                </a>
            </div>
            <!--slick-item end -->						
        </div>
        <div class="col-3 row">
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://www.cienciactiva.gob.pe/" class="hover-none externo_item" target="_blank" title="cienciactiva">
                    <div class="tarjeta_centro">
                        <div class="tarjeta_icon">
                            <i class="fal fa-book"></i>
                        </div>
                        <h4>REVISTAS CIENTIFICAS</h4>
                        <p class="text-center">Conjunto de revistas científicas temáticas de publicación semestral.</p>                                
                    </div>
                </a>
            </div>
            <!--slick-item end -->						
        </div>
    </div>
    
</section>
<h4 class="title">hola</h4>


{{-- <img style="width:100%;" src="{{ asset('img/images/separacion.png')}} " > --}}
<img style="width:100%;" src="{{ asset('img/images/separacion4.png')}} " >


{{-- <div class="img-holder" data-image={{ asset('img/images/maloka.jpg')}}> --}}

<!-- ACTIVIDADES -->
<section class="small-padding" >
    <div class="container">
        <!--Titulo-->
         <!--Titulo-->
        <div class="section-title st-center fl-wrap" style="margin-bottom: 25px !important;">
            <h4>Entérate sobre nuestros</h4>
        </div>
        <!--Listado 03-->
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="dropdown-menu dropdown-menu-demo"style="padding-bottom: 0px;">
                            <div class="section-title card-header"style="margin-bottom: 5px;">
                              <h2 class="card-title">Videos</h2>
                            </div>
                            <div class="tarjeta_container mb-3" style="margin-bottom: 0px !important;">
                                <div class="youtube_fix_height"></div>
                                <div class="tarjeta_wrapper">
                                    <div class="tarjeta tarjeta_black p-0">
                                        <div class="tarjeta_centro">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLne5X_hwjWd5pL7WveLwUSqbMplFft-II" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    <!--Listado-->  
            </div> 
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="dropdown-menu dropdown-menu-demo">
                            <div class="section-title card-header"style="margin-bottom: 5px;">
                              <h2 class="card-title">Comunicados</h2>
                            </div>
                            <?php $i=0;
                            ?>
                                @foreach ($comunicados as $comunicado)  
                                    <article class="com_item " style="margin: 0;">
                                        <div class="com_imagen row"style="{{$i==0? 'padding:15px':'padding: 0px 15px 10px 15px'}};margin: 0 -10px;">
                                            <div class="col-2" style="bottom: 10px;left: 10px;background: #ed145b;padding-top: 15px;">
                                                <p class="text-fecha">{{ $comunicado->created_at->format('d')}}</p>
                                                <p class="text-fecha">{{ $comunicado->created_at->format('M')}}</p>
                                                <p class="text-fecha">{{ $comunicado->created_at->format('Y')}}</p>
                                            </div>                       
                                            <div class="col-10">
                                                <a href="{{ url('comunicados/detalle/'.$comunicado->id)}}" class="com_link" target="_blank">                                                                                                        
                                                     {{substr($comunicado->titulo,0,150)}}                                                    
                                                </a>
                                            </div>
                                        </div>                    
                                    </article>                                
                                    <?php $i++;?>                                     
                            @endforeach                   
                            <div>
                              <a href="{{url('/comunicados')}}" class="dropdown-item">
                                Ver más</a>
                            </div>  
                        </div>
                    </div>
                </div>                    <!--Listado-->  
            </div> 
            <div class="col-lg-4">
                <div class="card">
                  <div class="section-title card-header"style="margin-bottom: 5px;">
                    <h2 class="card-title">Eventos</h2>
                  </div>
                  <div class="card-body">
                    <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <?php $i=0?>
                        @foreach ($publicaciones as $publicacion)
                            @if ($i==0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="{{url($publicacion->imagen)}}">
                                </div>
                                <?php $i++;?>                                      
                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="{{url($publicacion->imagen)}}">
                                </div>  
                                <?php $i++;?>                                 
                            @endif
                            
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>          
            </div>           
        </div>
    </div>
</section>

<!-- ENLACES -->
<!-- section -->
{{-- <img style="width:100%;" src="{{ asset('img/images/separacion2.png')}} " > --}}
<img style="width:100%;" src="{{ asset('img/images/separacion4.png')}} " >


<section class="small-padding">
    <div class="container">
        <div class="section-title st-center fl-wrap">
            <h4>También te puede interesar</h4>
            <h2>Enlaces externos</h2>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="testimonials-slider-wrap">
        <div id="externo-slider" class="testimonials-slider">
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://portalanterior.prociencia.gob.pe/" class="externo_item" target="_blank" title="prociencia">
                    <img src="{{ asset('img/prociencia.png') }}" alt="prociencia" srcset="">
                </a>
            </div>
            <!--slick-item end -->							
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://portal.concytec.gob.pe/" class="externo_item" target="_blank" title="concytec">
                    <img src="{{ asset('img/concytec.png') }}" alt="concytec" srcset="">
                </a>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://ctivitae.concytec.gob.pe/appDirectorioCTI/" class="externo_item" target="_blank" title="ctivitae">
                    <img src="{{ asset('img/ctivitae.png') }}" alt="ctivitae" srcset="">
                </a>
            </div>
            <!--slick-item end -->								
            <!--slick-item -->
            
            <div class="slick-item">
                <a href="https://www.pronabec.gob.pe/beca-18/" class="externo_item" target="_blank" title="pronabec">
                    <img src="{{ asset('img/logoPronabec_hd.png') }}" alt="pronabec" srcset="">
                </a>
            </div>
            <!--slick-item end -->								
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://www.sanciones.gob.pe/rnssc/#/transparencia/acceso" class="externo_item" target="_blank" title="rnssc">
                    <img src="{{ asset('img/rnssc.png') }}" alt="rnssc" srcset="">
                </a>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://www.scopus.com/" class="externo_item" target="_blank" title="scopus">
                    <img src="{{ asset('img/scopus.png') }}" alt="scopus" srcset="">
                </a>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://reclamos.servicios.gob.pe/" class="externo_item" target="_blank" title="libro_reclamaciones">
                    <img src="{{ asset('img/libro_reclamaciones.png') }}" alt="libro_reclamaciones" srcset="">
                </a>
            </div>
            <!--slick-item end -->		
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://www.sunedu.gob.pe/" class="externo_item" target="_blank" title="sunedu">
                    <img src="{{ asset('img/sunedu.png') }}" alt="sunedu" srcset="">
                </a>
            </div>
            <!--slick-item end -->			
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://rpu.edu.pe/" class="externo_item" target="_blank">
                    <img src="{{ asset('img/rpu.png') }}" alt="" srcset="">
                </a>
            </div>
            <!--slick-item end -->						
        </div>
    </div>
</section>
{{-- <img style="width:100%;" src="{{ asset('img/images/separacion.png')}} " > --}}
<img style="width:100%;" src="{{ asset('img/images/separacion4.png')}} " >
{{-- <div class="img-holder" data-image={{ asset('img/images/comedor.jpg')}}> --}}

@endsection