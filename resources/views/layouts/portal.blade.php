<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">

    <!--  favicons  -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="UNAMAD, unamad, universidad de madre de dios, universidad, manu, tambopata, peru, universidad nacional amazonica de madre de dios, madre de dios" />
	<meta name="description" content="La UNAMAD tiene por finalidad programar el desarrollo de la educación universitaria, que se brinda a nivel en las diferentes carreras profesionales especialmente vinculadas al desarrollo de la Región de Madre de Dios." />
	
    <title>{{ config('app.name', 'UNAMAD') }} - @yield('titulo')</title>

    <!-- Styles -->
    {{-- <link type="text/css" rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap.min.css') }}"> --}}
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap-grid.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap-utilities.css') }}">
    <link href="{{ asset('lib/tabler/css/tabler.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{ asset('lib/tabler/css/demo.min.css?1674944402') }}" rel="stylesheet"/>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css"> --}}

    <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/color.css') }}">
    <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
    
    @yield('css')
</head>
<body>
    <!--loader-->
    {{-- <div class="loader-wrap">
        <div class="loader-inner-alt">
            <img src="{{ asset('img/logo_single_min.png') }}" alt="Logo simple" style="">
            <div class="stage">
                <div class="dot-flashing"></div>
            </div>
        </div>
    </div> --}}
    <!--loader end-->

    <!-- main -->
    <div id="main">
        <!-- header -->
        <header class="main-header">
        {{-- <header class="main-header image_bar" style="background-image: url({{ asset('img/tejido.png')}});"> --}}
        {{-- <header class="main-header image_bar"> --}}
            <!--  logo  -->
            <div class="logo-holder"><a href="{{ url('/') }}" title="Inicio"><img src="{{ asset('img/logo_horizontal_max2.png') }}" alt="Logo horizontal"></a></div>
  
            <!-- nav-button-wrap--> 
            <div class="nav-button-wrap color-bg nvminit">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>      

            <!-- ENLACES -->
            <div class="nav-element">                
                <a href="https://www.gob.pe/unamad" target="_blank" class="d-none d-md-block" title="Portal GOB.PE UNAMAD">
                    {{-- <img src="{{ asset('img/gobpe.png') }}" style="height: 30px;" alt="Logo GOB.PE"> --}}
                    <img src="{{ asset('img/images/gob.png') }}" style="height: 30px;" alt="Logo Transparencia">
                </a>
                <a href="https://www.gob.pe/unamad" target="_blank" class="d-block d-md-none" title="Portal GOB.PE UNAMAD">
                    <img src="{{ asset('img/gobpe_min.jpg') }}" style="height: 30px;" alt="Logo GOB.PE">
                </a>
            </div>            
            <div class="nav-element">                
                <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk" target="_blank" class="d-none d-md-block" title="Portal Transparencia UNAMAD">
                    {{-- <img src="{{ asset('img/transp.png') }}" style="height: 40px;" alt="Logo Transparencia"> --}}
                    <img src="{{ asset('img/images/transparencia.png') }}" style="height: 40px;" alt="Logo Transparencia">
                </a>
                <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk" target="_blank" class="d-block d-md-none" title="Portal Transparencia UNAMAD">
                    <img src="{{ asset('img/transp_min.jpg') }}" style="height: 30px;" alt="Logo Transparencia">
                </a>
                
            </div>
            <div class="nav-element">                
                <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk" target="_blank" class="d-none d-md-block" title="Portal Transparencia UNAMAD">
                    {{-- <img src="{{ asset('img/transp.png') }}" style="height: 40px;" alt="Logo Transparencia"> --}}
                    <img src="{{ asset('img/images/acceso_info_publica.png') }}" style="height: 40px;" alt="Logo Transparencia">
                </a>
                <a href="https://www.produce.gob.pe/index.php/formularios-de-atencion-al-ciudadano/solicitud-de-acceso-a-la-informacion-publica" target="_blank" class="d-block d-md-none" title="Portal Transparencia UNAMAD">
                    <img src="{{ asset('img/transp_min.jpg') }}" style="height: 30px;" alt="Logo Transparencia">
                </a>
                
            </div>
            {{-- <div class="nav-element">
                <img src="{{ asset('img/images/separacion.png')}} " >
            </div> --}}
            

            <!--  navigation --> 
            <div class="nav-holder main-menu">
                
                <nav>
                    
                    <ul class="no-list-style">
                        @foreach ($menus as $menu)
                            @if ($menu->tipo==1 && $menu->estado==1)
                                <li class="nav-principal">
                                    {{-- inicio --}}
                                    <a href="{{$menu->fuente==0? url(''.$menu->flag.''): $menu->flag}}" {{$menu->fuente==1? 'target="_back"':''}} class="{{ request()->is($menu->flag) ? 'act-link' : '' }}">{{$menu->nombre}}</a>
                                    
                                </li>  
                            @else   
                                @if ($menu->estado==1)                                                 
                                    <li>
                                        @if (count($menu->categorias)>0)
                                            <a  href="#" class="{{ (request()->is($menu->flag.'*')) ? 'act-link' : '' }}">{{$menu->nombre}}<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                @foreach($menu->categorias as $categoria)
                                                    @if ($categoria->pagina_categorias_id==null)
                                                        @if ($categoria->tipo==1)
                                                            @if($categoria->fuente==1)
                                                                <a href="{{$categoria->tipo==1? $categoria->flag:""}}" target="_back"><i class="far fa-globe"></i> {{$categoria->nombre}}</a>                                                    
                                                            @else
                                                                <a href="{{$categoria->tipo==1? url(''.$categoria->flag.'/unamad'):""}}"  class="{{ request()->is($categoria->flag) ? 'act-link' : '' }}"><i class="far fa-globe"></i> {{$categoria->nombre}}</a>                                                    
                                                            @endif
                                                        @else
                                                            <li>
                                                                <a href="#">{{'>'.$categoria->nombre}} <i class="fa fa-caret-down"></i></a>
                                                                    <!--third  level  -->
                                                                <ul>
                                                                    @foreach($categoria->categorias as $items)
                                                                        @if ($items->estado==1)                                                                        
                                                                            <li><a href="{{ url($items->flag.'/unamad') }}"><i class="far fa-globe"></i> {{$items->nombre}}</a></li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>                                           
                                                                <!--third  level end-->
                                                            </li>                                                    
                                                        @endif                                                            
                                                    @endif
                                                                                            
                                                @endforeach
                                            </ul>   
                                        @endif  
                                        <!--second level end-->
                                    </li>                                  
                                @endif                                                                 
                            @endif
                            @if ($menu->posicion == 3)
                                <li class="nav-principal">
                                    <a href="#" class="{{ (request()->is('facultades*')) ? 'act-link' : '' }}">VRA<i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-stream"></i> Facultades <i class="fa fa-caret-down"></i></a>
                                            
                                            <!--third level -->
                                            <ul>
                                                @foreach($facultades as $facultad)
                                                <li>
                                                    <a href="#">{{$facultad->nombre}} <i class="fa fa-caret-down"></i></a>
                                                    <!--fourth   level  -->
                                                    <ul>
                                                        @foreach($facultad->carreras as $carrera)
                                                            <li>
                                                                <a href="{{ url('facultades/'.$facultad->flag.'/'.$carrera->abreviatura) }}"><i class="far fa-globe"></i> {{$carrera->nombre}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <!--fourth   level end-->
                                                </li>
                                                @endforeach
                                            </ul>
                                            
                                            <!--third level -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-globe"></i> Dirección de Admisión</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-globe"></i> Dirección de Biblioteca Central</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-globe"></i> Dirección de Proyección Social y Extensión Cultural</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-globe"></i> Dirección de Bienestar Universitario</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-globe"></i> Dirección de Asuntos Académicos</a>
                                        </li>
                                        
                                    </ul>
                                    <!--second level end-->
                                </li>
                            @endif
                            {{-- @if ($menu->posicion == 4)
                            @endif --}}
                        @endforeach                       
                           
                        <li class="nav-principal">
                            <a href="#"  class="{{ request()->is('transparencia*') ? 'act-link' : '' }}">TRANSPARENCIA<i class="fa fa-caret-down"></i></a>
                            <!--second level -->   
                            <ul>
                                <li><a href="{{ url('transparencia/indicador-55') }}"><i class="far fa-globe"></i> Indicador 55</a></li>
                                <li><a href="{{ url('transparencia/licenciamiento') }}" class="lh-sm"><i class="far fa-globe"></i> Licenciamiento Institucional</a></li>
                                <li>
                                    <a href="#" class="lh-sm"><i class="fas fa-stream"></i> Acceso a Información Pública <i class="fa fa-caret-down"></i></a>
                                    <!--third  level  -->
                                    <ul>
                                        <li><a href="https://facilita.gob.pe/t/3371" target="_blank"><i class="far fa-globe"></i> Formulario Virtual</a></li>
                                        <li><a href="https://drive.google.com/file/d/1tStD8HiMChMZO8QmnepBPU3evR920xGz/view?usp=sharing" target="_blank"><i class="far fa-globe"></i> Descargar Formato</a></li>
                                    </ul>
                                    <!--third  level end-->
                                </li>
                                <li><a href="{{ url('documentos') }}" class="lh-sm"><i class="far fa-globe"></i> Documentos Normativos y de Gestión</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                        
                    </ul>
                    
                </nav>
                
            </div>
            <!-- navigation  end -->
            

            
        </header>
        
        <!-- header end  -->

        <!-- WRAPPER  -->	
        <div id="wrapper">
            <!-- CONTENIDO -->	
            <div class="content">
                
                @yield('contenido')
            </div>

            <!-- FOOTER -->
            <footer class="gray-section main-footer fl-wrap image_complete">
            {{-- <footer class="main-footer fl-wrap image_complete" style="background-image: url({{ asset('img/tejido.png')}});"> --}}
                <div class="footer-inner fl-wrap">
                    <div class="container">
                        <div class="row">
                            <!-- footer widget-->
                            <div class="col-md-3">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-widget-logo fl-wrap">
                                        <img src="{{ asset('img/logo_horizontal.png') }}" alt="">
                                    </div>
                                    <p class="lh-sm">Busca el desarrollo de la educación universitaria, a traves de las diferentes carreras profesionales especialmente vinculadas al desarrollo de la Región de Madre de Dios.</p>
                                    <div class="fw_hours fl-wrap">
                                        <span class="text-center">Lunes - Viernes</span>
                                        <span>Horario:<strong> 07:00am - 16:00pm</strong></span>
                                    </div>
                                </div>
                            </div>
                            <!-- footer widget end-->
                            <!-- footer widget-->
                            <div class="col-md-3">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-widget-title fl-wrap">
                                        <h4>Enlaces de Interés</h4>
                                    </div>
                                    <ul class="footer-list fl-wrap">
                                        <li><a href="https://mail.google.com/" target="_blank" title="Correo Institucional">Correo Institucional</a></li>
                                        <li><a href="http://sgd.unamad.edu.pe/" target="_blank" title="Gestión Documental">Sitema de Gestion Documental</a></li>
                                        <li><a href="https://www.peru.gob.pe/egovadmin/" target="_blank" title="Transparencia">Transparencia</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- footer widget end--> 
                            <!-- footer widget-->
                            <div class="col-md-3">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-widget-title fl-wrap">
                                        <h4>Información de contacto</h4>
                                    </div>
                                    <ul class="footer-contacts fl-wrap">
                                        <li><span><i class="fal fa-envelope"></i> Correo :</span><a href="mailto:tramite-documentario@unamad.edu.pe" target="_blank" class="lh-sm">tramite-documentario<br>@unamad.edu.pe</a></li>
                                        <li> <span><i class="fal fa-map-marker"></i> Dirección :</span><a href="https://goo.gl/maps/jZRbasfkeJhcUKqq5" target="_blank"> AV. Jorge Chávez N° 1160</a></li>
                                        <li><span><i class="fal fa-phone"></i> Teléfono :</span><a href="tel:975842679">+51 975842679</a></li>
                                    </ul>
                                    <div class="footer-social fl-wrap">
                                        <ul>
                                            <li><a href="https://www.facebook.com/unamad.oficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCUNGgRNunGECIxEd_-qv_oA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://www.instagram.com/unamad22/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.tiktok.com/@unamad_mdd" target="_blank"><i class="fas fa-music"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- footer widget end-->   
                            <!-- footer widget-->
                            <div class="col-md-3">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-widget-title fl-wrap">
                                        <h4>Licenciada por:</h4>
                                    </div>
                                    <div class="api-links fl-wrap">
                                        <div class="text-center">
                                            <img src="{{ asset('img/logo-sunedu.png') }}" alt="sunedu" class="d-inline-block" style="width: 70%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer widget end-->                                     
                        </div>
                    </div>
                </div>
                <!--sub-footer-->
                <div class="sub-footer gray-bg fl-wrap">
                    <div class="container">
                        <div class="copyright"> © UNAMAD 2023 &#183; Todos los derechos reservados.</div>
                        <div class="subfooter-nav">
                            <ul class="no-list-style">
                                <li><a href="#">Desarrollo</a></li>
                                <!--<li><a href="#">Blog</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <!--sub-footer end -->                     
            </footer>

        </div>

        <!-- MODAL COMPARTIR -->
        <div id="modal_compartir" class="main-register-wrap modal">
            <div class="reg-overlay"></div>
            <div class="main-share-holder tabs-act">
                <div class="main-register-wrapper modal_main fl-wrap">
                    <div class="main-share">
                        <div class="modal-title">Compartir</div>
                        <div class="close-modal"><i class="fal fa-times"></i></div>
                        <div class="px-4">
                            <div class="py-4">
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:void(0);" onclick="compartir_facebook();" class="compartir-boton flex-shrink-0">
                                        <span style="background: #3b5998; color: #fff;"><i class="fab fa-facebook-f"></i></span>
                                        <label>Facebook</label>
                                    </a>
                                    <a href="javascript:void(0);" onclick="compartir_whatsapp();" class="compartir-boton flex-shrink-0">
                                        <span style="background: #25d366; color: #fff;"><i class="fab fa-whatsapp"></i></span>
                                        <label>WhatsApp</label>
                                    </a>
                                    <a href="javascript:void(0);" onclick="compartir_twitter();" class="compartir-boton flex-shrink-0">
                                        <span style="background: #1da1f2; color: #fff;"><i class="fab fa-twitter"></i></span>
                                        <label>Twitter</label>
                                    </a>
                                </div>
                            </div>                           
                            <div class="custom-form" style="float: none !important;">                               
                                <div class="pass-input-wrap fl-wrap">
                                    <input id="input_compartir" name="compartir" type="text" value="-" class="ps-2" readonly style="padding-right: 75px; margin-bottom: 10px;">
                                    <span class="input-derecha" onclick="compartir_copiar();">COPIAR</span>
                                </div>                               
                                <div class="clearfix"></div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- IR A INICIO -->
        <a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>

    </div>
    <!-- Main end -->

    <!-- Scripts -->
    <script src="{{ asset('lib/tabler/js/tabler.min.js?1674944402') }}"></script>
    <script src="{{ asset('lib/homeradar/js/jquery.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script> --}}
    <script src="{{ asset('lib/homeradar/js/plugins.js') }}"></script>
    <script src="{{ asset('js/portal.js') }}" defer></script>
    @yield('js')
</body>
</html>