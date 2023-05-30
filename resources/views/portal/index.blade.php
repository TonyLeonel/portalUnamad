@extends('layouts.portal')

@section('titulo', 'Universidad Nacional Amazónica de Madre de Dios')

@section('css')
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
@endsection

@section('js')
<script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('js/simpleParallax.min.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('js/inicio.js') }}" type="text/javascript"></script>
<script>
    // var images = document.getElementsByClassName('thumbnail');
    // new simpleParallax(images,{
    //     orientation: 'up',
    //     scale: 2, // Ajusta el valor según el efecto de parallax deseado
    //     // orientation: 'up',
    //     // delay: 1,
    //     // transition: 'cubic-bezier(0,0,0,1)'
        
    // });
</script>
@endsection

@section('contenido')


<div class="flexslider" style="border: 1px dotted;">
    <ul class="slides">
        <li>
            <img src="{{ asset('img/images/5v.jpg')}}" />
        </li>
        <li>
            <img src="{{ asset('img/images/4v.jpg')}}" />
        </li>
        
        <li>
            <img src="{{ asset('img/images/2uuu.jpg')}}" />
        </li>
        <li>
            <img src="{{ asset('img/images/3v.jpg')}}" />
        </li>
    </ul>
</div>

{{-- <section>
    <div class="media-container">
        <img id="imagen" class="thumbnail" src="{{ asset('img/images/1.jpg')}} " alt="image">
    </div>
</section> --}}

<!-- SERVICIOS -->
<section style="border: 1px dotted;" >
    <div class="container">
         <!--Titulo-->
        <div class="section-title st-center fl-wrap">
            <h4>Conoce todos</h4>
            <h2>Nuestros servicios</h2>
        </div>
        <!--Listado 01--> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://campus.unamad.edu.pe/" class="tarjeta tarjeta_pink" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fal fa-graduation-cap"></i>      
                                        </div>
                                        <h4>CAMPUS VIRTUAL</h4>
                                        <p class="text-center">Alumnos, Docentes, Matrículas, Notas, Horarios, Aulas y otros.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://admision.unamad.edu.pe/" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fal fa-users-cog"></i>
                                        </div>
                                        <h4>PORTAL DE ADMISIÓN</h4>
                                        <p class="text-center">Resultados de Admisión, Vacantes, Carreras, Requisitos y otros.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://cepre.unamad.edu.pe/" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="{{ asset('img/cepre.png') }}" alt="" style="width: 35px;">
                                        </div>
                                        <h4>PORTAL CEPRE</h4>
                                        <p class="text-center">Resultados de Exámenes, Carreras, Constancias, Horarios, Costos y otros.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://portal.unamad.edu.pe/ocri" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="https://portal.unamad.edu.pe/img/logo_pink.png" alt="" style="width: 35px;">
                                        </div>
                                        <h4>OCRI</h4>
                                        <p class="text-center">Oficina de Cooperación y Relaciones Internacionales</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://portal.unamad.edu.pe/centro-de-idiomas" class="tarjeta tarjeta_white">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="https://portal.unamad.edu.pe/img/logo_pink.png" alt="" style="width: 35px;">
                                        </div>
                                        <h4>Centro de Idiomas</h4>
                                        <p class="text-center">Centro de formación académica.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://reclamos.servicios.gob.pe/?institution_id=224" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="" >                                    
                                            <img src="{{ asset('img/reclamaciones.png') }}" alt="" style="width: 80%;">                             
                                        </div>                                                       
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="tarjeta_container mb-3">
                            <div>
                                <div class="mb-3">
                                    <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                                </div>
                                <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            </div>                    
                            <div class="tarjeta_wrapper">
                                <div class="tarjeta tarjeta_white" style="background: #eeeef1 !important;">
                                    <div class="tarjeta_centro">                                
                                        <h4>Documentos normativos<br>y de gestión</h4>
                                        
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
                                            </li>
                                        </ul> 
                                        <a href="{{ url('documentos') }}" class="tarjeta_link_pink">Ver más documentos</a> 
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

<!-- ENLACES -->
<!-- section -->

<!-- ENLACES -->
<!-- section -->

{{-- <section style="border: 1px dotted;"> --}}

<div class="parallaxDiv thumbnail">
    div with background
    {{-- <img id="imagen" class="thumbnail" src="{{ asset('img/images/i1.jpg')}} " alt="image"> --}}
</div>
{{-- </section> --}}

<section class="gray-bg small-padding">
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



<!-- ACTIVIDADES -->
<section class="small-padding image_complete" >
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
                                    <?php $i++;
                                    ?>                                     
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
                                $i++;                                    
                            @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="{{url($publicacion->imagen)}}">
                                </div>  
                                $i++;                               
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
<section class="gray-bg small-padding">
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
                <a href="http://www.cienciactiva.gob.pe/" class="externo_item" target="_blank" title="cienciactiva">
                    <img src="{{ asset('img/logo-cienciactiva-pie.png') }}" alt="cienciactiva" srcset="">
                </a>
            </div>
            <!--slick-item end -->							
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://portal.concytec.gob.pe/" class="externo_item" target="_blank" title="concytec">
                    <img src="{{ asset('img/logo-concyte-pie.png') }}" alt="concytec" srcset="">
                </a>
            </div>
            <!--slick-item end -->
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://dina.concytec.gob.pe/appDirectorioCTI/" class="externo_item" target="_blank" title="dina">
                    <img src="{{ asset('img/logo-dina-pie.png') }}" alt="dina" srcset="">
                </a>
            </div>
            <!--slick-item end -->								
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://www.sanciones.gob.pe:8081/transparencia/" class="externo_item" target="_blank" title="transparencia">
                    <img src="{{ asset('img/logo-rnsdd-pie.png') }}" alt="transparencia" srcset="">
                </a>
            </div>
            <!--slick-item end -->		
            <!--slick-item -->
            <div class="slick-item">
                <a href="https://www.sunedu.gob.pe/" class="externo_item" target="_blank" title="sunedu">
                    <img src="{{ asset('img/logo-sunedu-pie.png') }}" alt="sunedu" srcset="">
                </a>
            </div>
            <!--slick-item end -->			
            <!--slick-item -->
            <div class="slick-item">
                <a href="http://rpu.edu.pe/" class="externo_item" target="_blank">
                    <img src="{{ asset('img/red-peruana-de-universidades.png') }}" alt="" srcset="">
                </a>
            </div>
            <!--slick-item end -->						
        </div>
    </div>
</section>

@endsection