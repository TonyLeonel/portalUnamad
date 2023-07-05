<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = yes, width = device-width">
   <meta http-equiv="Permissions-Policy" content="interest-cohort=()">

   <!--  favicons  -->
   <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="keywords"
      content="UNAMAD, unamad, universidad de madre de dios, universidad, manu, tambopata, peru, universidad nacional amazonica de madre de dios, madre de dios" />
   <meta name="description"
      content="La UNAMAD tiene por finalidad programar el desarrollo de la educación universitaria, que se brinda a nivel en las diferentes carreras profesionales especialmente vinculadas al desarrollo de la Región de Madre de Dios." />

   <title>{{ config('app.name', 'UNAMAD') }} - @yield('titulo')</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
   <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
   <link rel="stylesheet" href="https://unpkg.com/@egjs/flicking/dist/flicking.css" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> --}}
   {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}


   {{-- <style>
      @charset "utf-8";

      /* CSS Document */
      :root {
         --color: white;
         --fnd: #1b0202;
         --fndRsp: white;
         --colorRsp: black;
      }

      .cajaNav {
         font-family: sans-serif;
         display: flex;
         justify-content: space-between;
         background: var(--fnd);
         color: var(--color);
      }

      .cajaNav .barNav {
         margin: 0 10px 0 0;
      }

      .cajaNav .titNav {
         display: flex;
         justify-content: space-between;
         align-items: center;
         flex: 1;
         background: var(--fnd);
         color: var(--color);
         height: auto;
      }

      .cajaNav .titNav .toggle {
         display: none;
      }

      .cajaNav .titNav .logo {
         margin: 10px 10px;
      }

      .cajaNav .barNav {
         display: flex;
         list-style: none;
         align-items: center;
         padding: 0;
      }

      .cajaNav .barNav li {
         display: flex;
         align-items: center;
         padding: 0 20px;
         height: 100%;
      }

      .cajaNav .barNav li:hover {
         background: var(--color);
         color: var(--fnd);
         cursor: pointer;
      }

      .cajaNav .barNav li a {
         text-decoration: none;
         cursor: pointer;
         color: inherit;
      }

      @media (max-width: 576px) {
         .cajaNav {
            flex-direction: column;
            align-items: flex-end;
            background: unset;
         }

         .cajaNav .barNav {
            color: black;
            background: white;
            flex-direction: column;
            display: none;
         }

         .cajaNav .barNav li {
            padding: 10px 20px;
         }

         .cajaNav .barNav li:hover {
            background: var(--fnd);
            color: var(--color);
         }

         .cajaNav .titNav {
            width: 100%;
            align-items: center;
         }

         .cajaNav .titNav .toggle {
            display: block;
            margin-right: 10px;
            cursor: pointer
         }

         .abierto {
            display: flex !important
         }

         .cerrado {
            display: none !important
         }
      }
   </style> --}}

   <style>

   </style>


</head>

<body>
   {{-- <nav class="cajaNav">
      <div class="titNav">
         <div class="logo">LOGO</div>
         <div class="toggle" onclick="alternar('menu')">Abrir</div>
      </div>
      <ul class="barNav cerrado" id="menu">
         <li><a href="#">item 1</a></li>
         <li><a href="#">item 2</a></li>
         <li><a href="#">item 3</a></li>
         <li><a href="#">item 4</a></li>
      </ul>
   </nav> --}}

   <body class="animado">

      <div class="navigation-wrap bg-light start-header start-style">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <nav class="navbar navbar-expand-md navbar-light">

                     <a class="navbar-brand" href="#" target="_blank"><img
                           src="{{ asset('img/logo_horizontal_max2.png') }}" alt=""></a>

                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav py-md-0 ml-auto py-4">
                           <li class="nav-item pl-md-0 ml-md-4 active ml-0 pl-4">
                              <a class="nav-link" href="#">Inicio</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">Universidad</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Presentación</a>
                                 <a class="dropdown-item" href="#">Visión Misión</a>
                                 <a class="dropdown-item" href="#">Autoridades</a>
                                 <a class="dropdown-item" href="#">Organización</a>
                                 <a class="dropdown-item" href="#">Historia</a>
                                 <a class="dropdown-item" href="#">Convenios</a>
                                 <a class="dropdown-item" href="#">Sedes</a>
                                 <a class="dropdown-item" href="#">Infraestructura</a>
                              </div>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">V.R.A</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">V.R.I</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">Oficina</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Servicio 1</a>
                                 <a class="dropdown-item" href="#">Servicio 2</a>
                                 <a class="dropdown-item" href="#">Servicio 3</a>
                                 <a class="dropdown-item" href="#">Servicio 4</a>
                              </div>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Diprobys</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Posgrado</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                 role="button" aria-haspopup="true" aria-expanded="false">Transparencia</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Servicio 1</a>
                                 <a class="dropdown-item" href="#">Servicio 2</a>
                                 <a class="dropdown-item" href="#">Servicio 3</a>
                                 <a class="dropdown-item" href="#">Servicio 4</a>
                              </div>
                           </li>
                        </ul>
                     </div>

                  </nav>
               </div>
            </div>
         </div>
      </div>

      <div class="section full-height">
         <div class="absolute-center">
            <div class="section mt-5">
               <div class="container">
                  {{-- <div class="row">
                     <div class="col-12">
                        <div id="switch">
                           <div id="circle"></div>
                        </div>
                     </div>
                  </div> --}}
                  <div class="row">
                     <div class="col-12">
                        <div id="autoplay" class="my-slider">
                           <div>1</div>
                           <div>2</div>
                           <div>3</div>
                           <div>4</div>
                           <div>5</div>
                           <div>6</div>
                           <div>7</div>
                           <div>8</div>
                           <div>9</div>
                           <div>10</div>
                           <div>11</div>
                           <div>12</div>
                           <div>13</div>
                           <div>14</div>
                           <div>15</div>
                           <div>16</div>
                           <div>17</div>
                           <div>18</div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <p style="font-weight: 600;" data-chaffle="en" data-chaffle-onLoad>UNAMAD</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <span id="myElement"></span>
                     </div>
                  </div>

               </div>
            </div>

         </div>
      </div>

      {{-- <div class="section full-height">
         <div class="section mt-5">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div id="flick" class="flicking-viewport">
                        <div class="flicking-camera">
                           <div class="flicking-panel"><img src="{{ asset('img/logo_horizontal_max2.png') }}"
                                 alt=""></div>
                           <div class="flicking-panel"><img src="{{ asset('img/logo_horizontal_max2.png') }}"
                                 alt=""></div>
                           <div class="flicking-panel">3</div>
                           <div class="flicking-panel">4</div>
                           <div class="flicking-panel">5</div>
                        </div>
                     </div>
                     <div class="is-flex is-justify-content-center block">
                        <span id="btn-prepend" class="button is-info is-outlined mr-2">Prepend</span>
                        <span id="btn-append" class="button is-info is-outlined mr-2">Append</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}


      <div class="my-5 py-5">
      </div>

      <!-- Link to page
   ================================================== -->

      <a href="#" class="logo" target="_blank">
         <img src="{{ asset('img/logo_single.png') }}" alt="">
      </a>



   </body>

   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   <script>
      /* Please ❤ this if you like it! */


      (function($) {
         "use strict";

         $(function() {
            var header = $(".start-style");
            $(window).scroll(function() {
               var scroll = $(window).scrollTop();

               if (scroll >= 10) {
                  header.removeClass('start-style').addClass("scroll-on");
               } else {
                  header.removeClass("scroll-on").addClass('start-style');
               }
            });
         });

         //Animation

         $(document).ready(function() {
            $('body.animado').removeClass('animado');
         });

         //Menu On Hover

         $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
            if ($(window).width() > 750) {
               var _d = $(e.target).closest('.nav-item');
               _d.addClass('show');
               setTimeout(function() {
                  _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
               }, 1);
            }
         });

         //Switch light/dark

         $("#switch").on('click', function() {
            if ($("body").hasClass("dark")) {
               $("body").removeClass("dark");
               $("#switch").removeClass("switched");
            } else {
               $("body").addClass("dark");
               $("#switch").addClass("switched");
            }
         });

      })(jQuery);
   </script>
   <script src="{{ asset('js/chaffle.js') }}"></script>
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
   <script>
      var elm = document.querySelectorAll('[data-chaffle-onLoad]');
      Array.prototype.forEach.call(elm, function(el) {
         var chaffle = new Chaffle(el, {
            delay: 200
         })
         setInterval(function() {
            chaffle.init();
         }, 8000)
      });
   </script>

   <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
   <script src="https://unpkg.com/@egjs/flicking/dist/flicking.pkgd.min.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
   <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
   <script>
      {

      }
      var slider = tns({
         autoplayButtonOutput:false,
         nav: false,
         controls: false,
         container: '#autoplay',
         items: 7,
         speed: 300,
         autoplay: true,
         autoplayHoverPause: false,
         autoplayTimeout: 1000,
         autoplayText: [
            "▶",
            "❚❚"
         ],
         swipeAngle: false
      });
   </script>

   <script>
      new TypeIt("#myElement", {
            speed: 50,
            startDelay: 900,
         })

         .type("formamos profesionales lideres, investigadores e innovadores", {
            delay: 100
         })
         .move(null, {
            to: "START",
            instant: true,
            delay: 300
         })
         .move(1, {
            delay: 100
         })
         .delete(1)
         .type("F", {
            delay: 225
         })
         .pause(200)
         .move(8, {
            instant: true
         })
         .pause(200)
         .move(15, {
            instant: true
         })
         .pause(200)
         .move(1, {
            delay: 100
         })
         .delete(1)
         .type("í", {
            delay: 400
         })
         .pause(200)
         .move(7, {
            instant: true
         })
         .pause(200)
         .move(7, {
            instant: true
         })
         .pause(200)
         .move(15, {
            instant: true
         })
         .pause(200)
         .move(2, {
            instant: true
         })
         .pause(200)
         .move(null, {
            to: "END"
         })
         .pause(200)
         .type(' para <span class="lugar">la región</span>', {
            delay: 400
         })
         .delete(".lugar", {
            delay: 800,
            instant: true
         })
         .type('<em><strong style="color: #33cc33" class="font-semibold">el mundo.</strong></em>', {
            speed: 100,
         })


         .go();
   </script>
   <script>
      const flicking = new Flicking("#flick", {
         renderOnlyVisible: true
      });
      let minIdx = 1;
      let maxIdx = 5;

      const prependBtn = document.querySelector("#btn-prepend");
      const appendBtn = document.querySelector("#btn-append");

      prependBtn.addEventListener("click", () => {
         flicking.prepend(`<div class="flicking-panel">${--minIdx}</div>`)
      });
      appendBtn.addEventListener("click", () => {
         flicking.append(`<div class="flicking-panel">${++maxIdx}</div>`)
      });
   </script>
</body>

</html>
