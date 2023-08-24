@extends('layouts.portal')

@section('titulo', 'Universidad Nacional Amazónica de Madre de Dios')

@section('css')
<link href="{{ asset('css/inicio.css') }}" rel="stylesheet"/>
@endsection

@section('js')
<script src="{{ asset('js/jquery.imageScroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/counter.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/inicio.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
<!-- SLIDER -->
<section class="slider_section gray-bg">
    <div class="overflow-hidden">
        <div class="fix_slider">    
            <div class="slider_principal">
                <img src="{{ asset('img/banners/1.jpg')}}" alt="" style="width: 100%;">    
                <img src="{{ asset('img/banners/2.jpg')}}" alt="" style="width: 100%;">    
                <img src="{{ asset('img/banners/3.jpg')}}" alt="" style="width: 100%;">      
                <img src="{{ asset('img/banners/4.jpg')}}" alt="" style="width: 100%;">           
            </div>  
        </div>
    </div>
    <div class="slider-progress-bar">
        <span>
            <svg class="circ" width="30" height="30">
                <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"/>
                <circle class="circ1" cx="15" cy="15" r="13" stroke="#fff" stroke-width="2" fill="none"/>
            </svg>
        </span>
    </div>  
    <div class="slider_scroll">
        <div class="mousey">
            <div class="scroller"></div>
        </div>            
    </div>   
</section>
<!-- COMUNICADOS -->
@if(count($comunicados) > 0)
<section class="gray-bg small-padding ">
    <div class="container">
        <!--Titulo-->
        <div class="row">
            <div class="col-6">
                <div class="section-title fl-wrap">
                    <h4>Entérate sobre nuestros</h4>
                    <h2>Comunicados</h2>
                </div>
            </div>
            <div class="col-6">
                <a href="{{ url('comunicados') }}" class="btn float-btn-right color-bg small-btn">Ver todos</a>             
            </div>
        </div>
        <div class="clearfix"></div>  
        @php
            $izquierda = array();
            $centro = array();
            $derecha = array();
            $contador = 1;

            foreach ($comunicados as $comunicado) {
                if($contador == 1){
                    $izquierda[] = $comunicado;
                } elseif($contador == 2) {
                    $centro[] = $comunicado;
                } else {
                    $derecha[] = $comunicado;
                }
                
                if($contador >= 3)
                    $contador = 1;
                else
                    $contador++;
            }
            
        @endphp 
        <!--Listado-->
        <div class="row">
            <!--izquierda-->
            <div class="col-md-4">
                @foreach ($izquierda as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach
            </div>                                                                                                                              </div> 
            <!--centro-->
            <div class="col-md-4">
                @foreach ($centro as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach
            </div>  
            <!--derecha-->
            <div class="col-md-4">
                @foreach ($derecha as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach
            </div>  
        </div> 
    </div>
</section>
@endif

<!-- SERVICIOS -->
<section class="relative-padding">
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
                                <a href="{{ url('oficinas/biblioteca') }}" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
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
                                <a href="https://cidiomas.unamad.edu.pe/" class="tarjeta tarjeta_white" target="_blank">
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
                                <a href="{{ url('programas/informatica') }}" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
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
                                <a href="https://proyeccionsocial.unamad.edu.pe" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-theater-masks"></i>
                                        </div>
                                        <h4>TALLERES EN ACTIVIDADES ARTÍSTICAS Y CULTURALES</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- 
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="#" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon"> 
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
                                            <i class="fas fa-user-nurse"></i>
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
                                            <i class="fas fa-turkey"></i>
                                        </div>
                                        <h4>COMEDOR<br>UNIVERSITARIO</h4>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    --}}
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
                                <a href="{{ url('oficinas/cooperacion') }}" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
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
                            
                                <div class="tarjeta tarjeta_yellow p-4">
                                    <div class="tarjeta_centro">
                                        <h4 class="my-3">DOCUMENTOS NORMATIVOS Y DE GESTIÓN</h4>
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
                                        <a href="{{ url('documentos') }}" class="tarjeta_link_white d-block mb-3">Ver más documentos</a>
                                    </div>
                                </div>
                              
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CIFRAS -->
<section class="wave-section" style="margin-bottom: -1px;">
    <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L507.56,166.82 L-8.23,167.80 Z" style="stroke: none; fill: #ffc136;"></path></svg></div>
</section>
<section class="relative-padding yellow-section small-padding">
    <div class="section-numeros mt-2">
        <div class="container mb-4">
            <div class="row numeros-container justify-content-center">
                <div class="col-12 mb-3 mb-md-0 col-md-12 d-flex justify-content-start flex-column align-items-center mt-3">
                    <h2  class="marco title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">La unamad en cifras: </h2>
                </div>
            </div>
            <div class="row numeros-container justify-content-center">
                <div class="col-12 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center mt-3">
                    <img src={{ asset('img/images/investigadores.svg')}} alt="produccion-cientifica-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 data-counter-target="24" class="counter title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">24</h2>
                    <p  class="marco text-center text-shadow-numeros mb-0">DOCENTES</p>
                    <p  class="marco text-center text-shadow-numeros mb-0">INVESTIGADORES</p>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center mt-3">
                    <img src={{ asset('img/images/fundacion.svg')}} alt="icono-carreras-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 id="counter-target" data-counter-target="0" class="counter title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">23</h2>
                    <p class="marco text-center text-shadow-numeros mb-0">AÑOS DE FUNDACIÓN</p>
                    <p class="marco text-center text-shadow-numeros mb-0">INSTITUCIONAL</p>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center mt-3">
                    <img src={{ asset('img/images/matriculados.svg')}} alt="icono-carreras-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 data-counter-target="3917" class="counter title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">3917</h2>
                    <p class="marco text-center text-shadow-numeros mb-0">ESTUDIANTES</p>
                    <p class="marco text-center text-shadow-numeros mb-0">MATRICULADOS</p>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center mt-3">
                    <img src={{ asset('img/images/escuelas.svg')}} alt="icono-carreras-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 data-counter-target="10" class="counter title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">10</h2>
                    <p class="marco text-center text-shadow-numeros mb-0">ESCUELAS</p>
                    <p class="marco text-center text-shadow-numeros mb-0">PROFESIONALES</p>
                </div>
                <div class="col-12 mb-3 mb-md-0 col-md-2 d-flex justify-content-start flex-column align-items-center mt-3">
                    <img src={{ asset('img/images/convenio.svg')}} alt="icono-carreras-san-marcos-en-numeros" class="sm-numeros"/>
                    <h2 data-counter-target="139" class="counter title-section text-center text-uppercase font-weight-bold mb-0 text-shadow-numeros">139</h2>
                    <p class="marco text-center text-shadow-numeros mb-0">CONVENIOS</p>
                    <p class="marco text-center text-shadow-numeros mb-0">INSTITUCIONALES</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wave-section" style="margin-top: -1px;">
    <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.00,49.85 C150.00,149.60 271.37,-49.85 500.00,49.85 L500.00,0.00 L-0.00,0.00 Z" style="stroke: none; fill: #ffc136;"></path></svg></div>
</section>

<!-- OTROS -->
<section class="relative-padding small-padding">
    <div class="container">
        <div class="section-title st-center fl-wrap">
            <h4>También te puede interesar</h4>
            <h2>Otros enlaces</h2>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.gob.pe/institucion/unamad/funcionarios" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <h4>DIRECTORIO DE FUNCIONARIOS</h4>
                                        <p class="text-center d-none d-md-block">Datos de contacto e información del personal de la UNAMAD.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="http://www.cienciactiva.gob.pe/" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-download"></i>
                                        </div>
                                        <h4>REPOSITORIO DIGITAL</h4>
                                        <p class="text-center d-none d-md-block">Información intelectual producida y compilada por la comunidad universitaria.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.gob.pe/institucion/unamad/informes-publicaciones/tipos/80-convocatorias-de-trabajo" class="tarjeta tarjeta_yellow" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                        <h4>CONVOCATORIAS</h4>
                                        <p class="text-center d-none d-md-block">Convocatorias a procesos de selección de personal administrativo y docente.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>                
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://sgd.unamad.edu.pe/mesa-de-partes" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-paperclip"></i>
                                        </div>
                                        <h4>MESA DE PARTES VIRTUAL</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="{{ url('proyectos/bus') }}" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-bus"></i>
                                        </div>
                                        <h4>RUTA - GPS BUS</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="tarjeta_container mb-3">
                            <img class="s_s" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="{{ url('proyectos/aldea') }}" class="tarjeta tarjeta_white" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fas fa-flask-potion"></i>
                                        </div>
                                        <h4>OBSERVATORIO PARQUE CIENTIFICO</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACTIVIDADES -->
<section class="relative-padding small-padding" >
    <div class="container">        
        <!--Titulo-->
        <div class="section-title st-center fl-wrap">
            <h4>Entérate sobre nuestras</h4>
            <h2>Actividades</h2>
        </div>        
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
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
            <div class="col-md-6 mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.gob.pe/institucion/unamad/noticias" class="tarjeta tarjeta_red" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fal fa-newspaper"></i>
                                        </div>
                                        <h4>NOTAS DE PRENSA</h4>
                                        <p class="text-center">Listado de las últimas noticias publicadas en la UNAMAD.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.facebook.com/unamad.oficial/" class="tarjeta tarjeta_blue" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fab fa-facebook"></i>
                                        </div>
                                        <h4>FACEBOOK</h4>
                                        <p class="text-center">Página oficial de la UNAMAD en Facebook.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>  
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.instagram.com/unamad22/" class="tarjeta tarjeta_insta" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                        <h4>INSTAGRÁM</h4>
                                        <p class="text-center">Cuenta oficial de la UNAMAD en Instagram.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta_container mb-3">
                            <img class="img_fix_height" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'></svg>">
                            <div class="tarjeta_wrapper">
                                <a href="https://www.tiktok.com/@unamad_mdd" class="tarjeta tarjeta_black" target="_blank">
                                    <div class="tarjeta_centro">
                                        <div class="tarjeta_icon">
                                            <img src="https://portal.unamad.edu.pe/img/tiktok.png" alt="" style="width: 35px;">
                                        </div>
                                        <h4>TIKTOK</h4>
                                        <p class="text-center">Cuenta oficial de la UNAMAD en Tiktok.</p>                                
                                    </div>
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>    
            </div>            
        </div>        
    </div>
</section>

<!-- ENLACES -->
<section class="wave-section">
    <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-33.63,114.66 C196.04,201.26 372.12,-105.79 500.00,49.85 L667.83,199.29 L-0.00,149.60 Z" style="stroke: none; fill: #f0f0f0;"></path></svg></div>
</section>
<section class="gray-section relative-padding small-padding">
    <div class="container">
        <div class="section-title st-center fl-wrap">
            <h4>También te puede interesar</h4>
            <h2>Enlaces externos</h2>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="testimonials-slider-wrap">
        <div id="externo-slider" class="testimonials-slider">
            <div class="slick-item">
                <a href="https://portalanterior.prociencia.gob.pe/" class="externo_item" target="_blank" title="cienciactiva">
                    <img src="{{ asset('img/prociencia.png') }}" alt="cienciactiva" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://portal.concytec.gob.pe/" class="externo_item" target="_blank" title="concytec">
                    <img src="{{ asset('img/concytec.png') }}" alt="concytec" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://dina.concytec.gob.pe/appDirectorioCTI/" class="externo_item" target="_blank" title="dina">
                    <img src="{{ asset('img/ctivitae.png') }}" alt="dina" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://www.pronabec.gob.pe/beca-18/" class="externo_item" target="_blank" title="transparencia">
                    <img src="{{ asset('img/logoPronabec_hd.png') }}" alt="pronabec" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://www.sanciones.gob.pe/rnssc/#/transparencia/acceso" class="externo_item" target="_blank" title="sunedu">
                    <img src="{{ asset('img/rnssc.png') }}" alt="rnssc" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://www.scopus.com/" class="externo_item" target="_blank">
                    <img src="{{ asset('img/scopus.png') }}" alt="scopus" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="https://www.sunedu.gob.pe/" class="externo_item" target="_blank">
                    <img src="{{ asset('img/sunedu.png') }}" alt="sunedu" srcset="">
                </a>
            </div>
            <div class="slick-item">
                <a href="http://rpu.edu.pe/" class="externo_item" target="_blank">
                    <img src="{{ asset('img/rpu.png') }}" alt="rpu" srcset="">
                </a>
            </div>				
        </div>
    </div>
</section>
@endsection
