<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{-- <meta http-equiv="Permissions-Policy" content="interest-cohort=()"> --}}

   <!--  favicons  -->
   <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="keywords"
      content="UNAMAD, unamad, universidad de madre de dios, universidad, manu, tambopata, peru, universidad nacional amazonica de madre de dios, madre de dios" />
   <meta name="description"
      content="La UNAMAD tiene por finalidad programar el desarrollo de la educación universitaria, que se brinda a nivel en las diferentes carreras profesionales especialmente vinculadas al desarrollo de la Región de Madre de Dios." />

   <title>{{ config('app.name', 'UNAMAD') }} - @yield('titulo')</title>

   <!-- Styles -->
   <link type="text/css" rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap-grid.css') }}">
   <link type="text/css" rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap-utilities.css') }}">
   <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/plugins.css') }}">
   <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/style.css') }}">
   <link type="text/css" rel="stylesheet" href="{{ asset('lib/homeradar/css/color.css') }}">
   <link href="{{ asset('css/portal.css') }}" rel="stylesheet">

   @yield('css')
</head>

<body>
   <!--loader-->
   <div class="loader-wrap">
      <div class="loader-inner-alt">
         <img src="{{ asset('img/logo_single_min.png') }}" alt="Logo simple" style="">
         <div class="stage">
            <div class="dot-flashing"></div>
         </div>
      </div>
   </div>
   <!--loader end-->

   <!-- main -->
   <div id="main">
      <!-- HEADER -->
      <header class="main-header">        
         <!--  logo  -->
         <div class="logo-holder"><a href="{{ url('/') }}" title="Inicio">
            <img src="{{ asset('img/logo_horizontal_max2.png') }}" alt="Logo horizontal"></a>
         </div>
         <!-- nav-button-wrap-->
         <div class="nav-button-wrap color-bg nvminit">
            <div class="nav-button">
               <span></span><span></span><span></span>
            </div>
         </div>
         <!-- ENLACES -->
         <div class="nav-element">
            <a href="https://www.gob.pe/unamad" target="_blank" class="d-none d-md-block" title="Portal GOB.PE UNAMAD">
               <img src="{{ asset('img/images/gob.png') }}" style="height: 30px;" alt="Logo GOB.PE">
            </a>
            <a href="https://www.gob.pe/unamad" target="_blank" class="d-block d-md-none" title="Portal GOB.PE UNAMAD">
               <img src="{{ asset('img/gobpe_min.jpg') }}" style="height: 30px;" alt="Logo GOB.PE">
            </a>
         </div>
         <div class="nav-element">
            <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk"
               target="_blank" class="d-none d-md-block" title="Portal Transparencia UNAMAD">
               <img src="{{ asset('img/images/transparencia.png') }}" style="height: 40px;" alt="Logo Transparencia">
            </a>
            <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13136#.YvEV03ZByUk"
               target="_blank" class="d-block d-md-none" title="Portal Transparencia UNAMAD">
               <img src="{{ asset('img/transp_min.jpg') }}" style="height: 30px;" alt="Logo Transparencia">
            </a>
         </div>
         <!-- MENU DE NAVEGACION -->
         <div class="nav-holder main-menu">
            <nav>
               <ul class="no-list-style">
                  <li>
                     <a href="{{ url('/') }}" title="Inicio" class="{{ request()->is('/') ? 'act-link' : '' }}">INICIO</a>
                  </li> 
                  <li>
                     <a href="#" class="{{ request()->is('universidad*') ? 'act-link' : '' }}">UNIVERSIDAD <i class="fas fa-caret-down"></i></a>
                     <ul class="no-list-style">
                        <li>
                           <a href="{{ url('universidad/presentacion') }}" class="{{ request()->is('universidad/presentacion') ? 'act-link' : '' }}">Presentación</a>
                        </li>
                        <li>
                           <a href="{{ url('universidad/autoridades') }}" class="{{ request()->is('universidad/autoridades') ? 'act-link' : '' }}">Autoridades</a>
                        </li>
                        <li>
                           <a href="{{ url('universidad/historia') }}" class="{{ request()->is('universidad/historia') ? 'act-link' : '' }}">Historia</a>
                        </li>
                        <li>
                           <a href="{{ url('universidad/sedes') }}" class="{{ request()->is('universidad/sedes') ? 'act-link' : '' }}">Sedes</a>
                        </li>
                        <li>
                           <a href="{{ url('universidad/politicas') }}" class="{{ request()->is('universidad/politicas') ? 'act-link' : '' }}">Política Institucional</a>
                        </li>
                     </ul>
                  </li> 
                  <li>
                     <a href="#" class="{{ request()->is('oficinas*') ? 'act-link' : '' }}">OFICINAS <i class="fas fa-caret-down"></i></a>
                     <ul class="no-list-style">
                        <li>
                           <a href="#">Órganos de Gobierno <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('oficinas/asamblea') }}" class="{{ request()->is('oficinas/asamblea') ? 'act-link' : '' }}">Asamblea Universitaria</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/consejo') }}" class="{{ request()->is('oficinas/consejo') ? 'act-link' : '' }}">Consejo Universitario</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/decanatura') }}" class="{{ request()->is('oficinas/decanatura') ? 'act-link' : '' }}">Decanatura</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Vicerrectorado Académico <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('oficinas/admision') }}" class="{{ request()->is('oficinas/admision') ? 'act-link' : '' }}">Dirección de Admisión</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/presentacion') }}" class="{{ request()->is('oficinas/biblioteca') ? 'act-link' : '' }}">Biblioteca Central</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/presentacion') }}" class="{{ request()->is('oficinas/academicos') ? 'act-link' : '' }}">Asuntos Académicos</a>
                              </li>
                              <li>
                                 <a href="https://proyeccionsocial.unamad.edu.pe/" target="_blank">Proyección Social y Extensión Cultural</a>
                             </li>
                             
                              <li>
                                 <a href="{{ url('oficinas/presentacion') }}" class="{{ request()->is('oficinas/bienestar') ? 'act-link' : '' }}">Bienestar Universitario</a>
                              </li>
                           </ul>
                        </li>   
                        <li>
                           <a href="#">Vicerrectorado de Investigación <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('oficinas/incubadora') }}" class="{{ request()->is('oficinas/incubadora') ? 'act-link' : '' }}">Incubadora de Empresas</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/innovacion') }}" class="{{ request()->is('oficinas/innovacion') ? 'act-link' : '' }}">Innovación y Transferencia Tecnológica</a>
                              </li>
                              <li>
                                 <a href="{{ url('oficinas/investigacion') }}" class="{{ request()->is('oficinas/investigacion') ? 'act-link' : '' }}">Instituto de Investigación</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/secretaria') }}" class="{{ request()->is('oficinas/secretaria') ? 'act-link' : '' }}">Secretaría General</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/calidad') }}" class="{{ request()->is('oficinas/calidad') ? 'act-link' : '' }}">Gestión de la Calidad</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/cooperacion') }}" class="{{ request()->is('oficinas/cooperacion') ? 'act-link' : '' }}">Cooperación y Relaciones Internacionales</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/ambiental') }}" class="{{ request()->is('oficinas/ambiental') ? 'act-link' : '' }}">Gestión Ambiental</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/administracion') }}" class="{{ request()->is('oficinas/administracion') ? 'act-link' : '' }}">Dirección General de Administración</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/oti') }}" class="{{ request()->is('oficinas/oti') ? 'act-link' : '' }}">Oficina de Tecnologías de la Información</a>
                        </li>
                        <li>
                           <a href="{{ url('oficinas/planeamiento') }}" class="{{ request()->is('oficinas/planeamiento') ? 'act-link' : '' }}">Oficina de Planeamiento y Presupuesto</a>
                        </li>
                     </ul>
                  </li>                                
                  <li>
                     <a href="#" class="{{ request()->is('facultades*') ? 'act-link' : '' }}">FACULTADES <i class="fas fa-caret-down"></i></a>
                     <ul class="no-list-style">
                        <li>
                           <a href="#">Ingeniería <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('facultades/agroindustrial') }}"  class="{{ request()->is('facultades/agroindustrial') ? 'act-link' : '' }}">Agroindustrial</a>
                             </li>
                             <li>
                              <a href="{{ url('facultades/forestal') }}"  class="{{ request()->is('facultades/forestal') ? 'act-link' : '' }}">Forestal y de Medio Ambiente</a>
                           </li>
                              <li>
                                 <a href="{{ url('facultades/sistemas') }}" class="{{ request()->is('facultades/sistemas') ? 'act-link' : '' }}">Sistemas e Informática</a>
                              </li>
                              <li>
                                 <a href="{{ url('facultades/veterinaria') }}" class="{{ request()->is('facultades/veterinaria') ? 'act-link' : '' }}">Medicina Veterinaria y Zootecnia</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Educación <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('facultades/matematica') }}" class="{{ request()->is('facultades/matematica') ? 'act-link' : '' }}">Matemática y Computación</a>
                              </li>
                              <li>
                                 <a href="{{ url('facultades/derecho') }}" class="{{ request()->is('facultades/derecho') ? 'act-link' : '' }}">Derecho y Ciencias Política</a>
                              </li>
                              <li>
                                 <a href="{{ url('facultades/enfermeria') }}" class="{{ request()->is('facultades/enfermeria') ? 'act-link' : '' }}">Enfermería</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Ecoturismo <i class="fas fa-caret-down"></i></a>
                           <ul>
                              <li>
                                 <a href="{{ url('facultades/ecoturismo') }}" class="{{ request()->is('facultades/ecoturismo') ? 'act-link' : '' }}">Ecoturismo</a>
                              </li>
                              <li>
                                 <a href="{{ url('facultades/administracion') }}" class="{{ request()->is('facultades/administracion') ? 'act-link' : '' }}">Administración y Negocios Internacionales</a>
                              </li>
                              <li>
                                 <a href="{{ url('facultades/contabilidad') }}" class="{{ request()->is('facultades/contabilidad') ? 'act-link' : '' }}">Contabilidad y Finanzas</a>
                              </li>                              
                           </ul>
                        </li>
                     </ul>
                  </li>                  
                  <li>
                     <a href="#" class="{{ request()->is('programas*') ? 'act-link' : '' }}">PROGRAMAS <i class="fas fa-caret-down"></i></a>
                     <ul class="no-list-style">
                        <li>
                           <a href="{{ url('programas/informatica') }}" class="{{ request()->is('programas/informatica*') ? 'act-link' : '' }}">Centro de Informática</a>
                        </li>
                        <li>
                           <a href="https://cidiomas.unamad.edu.pe/" target="_blank">Centro de Idiomas</a>
                        </li>
                        <li>
                           <a href="https://cepre.unamad.edu.pe/" target="_blank">Centro Preuniversitario</a>
                        </li>
                        <li>
                           <a href="{{ url('programas/postgrado') }}" class="{{ request()->is('programas/postgrado*') ? 'act-link' : '' }}">Posgrado</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#" class="{{ request()->is('proyectos*') ? 'act-link' : '' }}">PROYECTOS <i class="fas fa-caret-down"></i></a>
                     <ul class="no-list-style">
                        <li>
                           <a href="{{ url('proyectos/jardin') }}" class="{{ request()->is('proyectos/jardin*') ? 'act-link' : '' }}">Cuna Jardín</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/panificadora') }}" class="{{ request()->is('proyectos/panificadora*') ? 'act-link' : '' }}">Panificadora UNAMAD</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/bus') }}" class="{{ request()->is('proyectos/bus*') ? 'act-link' : '' }}">Bus Universitario</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/herbario') }}" class="{{ request()->is('proyectos/herbario*') ? 'act-link' : '' }}">Herbario</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/estacion') }}" class="{{ request()->is('proyectos/estacion*') ? 'act-link' : '' }}">Estación Geológica</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/aldea') }}" class="{{ request()->is('proyectos/aldea*') ? 'act-link' : '' }}">Aldea Científica</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/km16') }}" class="{{ request()->is('proyectos/km16*') ? 'act-link' : '' }}">Campus Km. 16</a>
                        </li>
                        <li>
                           <a href="{{ url('proyectos/km18') }}" class="{{ request()->is('proyectos/km18*') ? 'act-link' : '' }}">Complejo Polideportivo Km. 18</a>
                        </li>                        
                     </ul>
                  </li>                   
                  <li>
                     <a href="#" class="{{ request()->is('transparencia*') ? 'act-link' : '' }}">TRANSPARENCIA <i class="fa fa-caret-down"></i></a>                     
                     <ul class="no-list-style">
                        <li>
                           <a href="{{ url('transparencia/indicador-55') }}" class="{{ request()->is('transparencia/indicador-55') ? 'act-link' : '' }}">Indicador 55</a>
                        </li>
                        <li>
                           <a href="{{ url('transparencia/articulo-11') }}" class="{{ request()->is('transparencia/articulo-11') ? 'act-link' : '' }}">Artículo 11</a>
                        </li>
                        <li>
                           <a href="{{ url('transparencia/licenciamiento') }}" class="{{ request()->is('transparencia/licenciamiento') ? 'act-link' : '' }}">Licenciamiento Institucional</a>
                        </li>
                        <li>
                           <a href="#">Acceso a Información Pública <i class="fa fa-caret-down"></i></a>                           
                           <ul class="sub-menu">
                              <li>
                                 <a href="https://facilita.gob.pe/t/3371" target="_blank">Formulario Virtual</a>
                              </li>
                              <li>
                                 <a href="https://drive.google.com/file/d/1tStD8HiMChMZO8QmnepBPU3evR920xGz/view?usp=sharing" target="_blank">Descargar Formato</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="{{ url('documentos') }}">Documentos Normativos y de Gestión</a>
                        </li>
                     </ul>                     
                  </li>
               </ul>
            </nav>
         </div> 
      </header>

      <!-- WRAPPER  -->
      <div id="wrapper">
         <!-- CONTENIDO -->
         <div class="content">
            @yield('contenido')
         </div>

         <!-- FOOTER -->         
         <footer class="main-footer fl-wrap image_complete" style="background-image: url({{ asset('img/tejido.png')}});">
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
                              <li><a href="https://mail.google.com/" target="_blank"
                                    title="Correo Institucional">Correo
                                    Institucional</a></li>
                              <li><a href="http://sgd.unamad.edu.pe/" target="_blank"
                                    title="Gestión Documental">Sitema de
                                    Gestion Documental</a>
                              </li>
                              <li><a href="https://www.peru.gob.pe/egovadmin/" target="_blank"
                                    title="Transparencia">Transparencia</a></li>
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
                              <li><span><i class="fal fa-envelope"></i> Correo :</span><a
                                    href="mailto:tramite-documentario@unamad.edu.pe" target="_blank"
                                    class="lh-sm">tramite-documentario<br>@unamad.edu.pe</a>
                              </li>
                              <li> <span><i class="fal fa-map-marker"></i> Dirección :</span><a
                                    href="https://goo.gl/maps/jZRbasfkeJhcUKqq5" target="_blank"> AV.
                                    Jorge Chávez N° 1160</a></li>
                              <li><span><i class="fal fa-phone"></i> Teléfono :</span><a href="tel:975842679">+51
                                    975842679</a></li>
                           </ul>
                           <div class="footer-social fl-wrap">
                              <ul>
                                 <li><a href="https://www.facebook.com/unamad.oficial/" target="_blank"><i
                                          class="fab fa-facebook-f"></i></a>
                                 </li>
                                 <li><a href="https://www.youtube.com/channel/UCUNGgRNunGECIxEd_-qv_oA"
                                       target="_blank"><i class="fab fa-youtube"></i></a></li>
                                 <li><a href="https://www.instagram.com/unamad22/" target="_blank"><i
                                          class="fab fa-instagram"></i></a>
                                 </li>
                                 <li><a href="https://www.tiktok.com/@unamad_mdd" target="_blank"><i
                                          class="fas fa-music"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- footer widget end-->
                     <!-- footer widget-->
                     <div class="col-md-3">
                        <div class="footer-widget fl-wrap">
                           <div class="footer-widget-title fl-wrap">
                              <h4>Ubicanos:</h4>
                           </div>
                           <div class="api-links fl-wrap">
                              <div class="text-center">
                                 <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3370.3026982206466!2d-69.20903203371203!3d-12.589610182792892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b49441850fe49%3A0x2881b0658744e313!2sUniversidad%20Nacional%20Amaz%C3%B3nica%20de%20Madre%20de%20Dios%2C%20Puerto%20Maldonado%2017001!5e0!3m2!1ses!2spe!4v1686747233645!5m2!1ses!2spe"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <li><a href="{{ url('oficinas/oti') }}">Oficina de Tecnologías de la Información</a></li>
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
                           <a href="javascript:void(0);" onclick="compartir_facebook();"
                              class="compartir-boton flex-shrink-0">
                              <span style="background: #3b5998; color: #fff;"><i class="fab fa-facebook-f"></i></span>
                              <label>Facebook</label>
                           </a>
                           <a href="javascript:void(0);" onclick="compartir_whatsapp();"
                              class="compartir-boton flex-shrink-0">
                              <span style="background: #25d366; color: #fff;"><i class="fab fa-whatsapp"></i></span>
                              <label>WhatsApp</label>
                           </a>
                           <a href="javascript:void(0);" onclick="compartir_twitter();"
                              class="compartir-boton flex-shrink-0">
                              <span style="background: #1da1f2; color: #fff;"><i class="fab fa-twitter"></i></span>
                              <label>Twitter</label>
                           </a>
                        </div>
                     </div>
                     <div class="custom-form" style="float: none !important;">
                        <div class="pass-input-wrap fl-wrap">
                           <input id="input_compartir" name="compartir" type="text" value="-"
                              class="ps-2" readonly style="padding-right: 75px; margin-bottom: 10px;">
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
   <script src="{{ asset('lib/homeradar/js/jquery.min.js') }}"></script>
   <script src="{{ asset('lib/homeradar/js/plugins.js') }}"></script>
   <script src="{{ asset('js/portal.js') }}" defer></script>
   @yield('js')
</body>

</html>
