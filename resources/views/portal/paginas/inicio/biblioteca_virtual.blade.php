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

   <body class="hero-anime">

      <div class="navigation-wrap bg-light start-header start-style">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <nav class="navbar navbar-expand-md navbar-light">

                     <a class="navbar-brand" href="https://front.codes/" target="_blank"><img
                           src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>

                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav py-md-0 ml-auto py-4">
                           <li class="nav-item pl-md-0 ml-md-4 active ml-0 pl-4">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">Home</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                              </div>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Portfolio</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Agency</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">Services</a>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                              </div>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Journal</a>
                           </li>
                           <li class="nav-item pl-md-0 ml-md-4 ml-0 pl-4">
                              <a class="nav-link" href="#">Contact</a>
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
            <div class="section">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <h1>
                           <span>B</span><span>o</span><span>o</span><span>t</span><span>s</span><span>t</span><span>r</span><span>a</span><span>p</span>
                           <span>4</span><br>
                           <span>m</span><span>e</span><span>n</span><span>u</span>
                        </h1>
                        <p>scroll for nav animation</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section mt-5">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div id="switch">
                           <div id="circle"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="my-5 py-5">
      </div>

      <!-- Link to page
   ================================================== -->

      <a href="https://front.codes/" class="logo" target="_blank">
         <img src="https://assets.codepen.io/1462889/fcy.png" alt="">
      </a>
      <p data-chaffle="en" data-chaffle-onLoad>English</p>
      <p data-chaffle="ja">日本語</p>
      <p data-chaffle="ja-hiragana">ひらがな</p>
      <p data-chaffle="ja-katakana">カタカナ</p>
      <p data-chaffle="ua">Українська</p>


   </body>

   {{-- <script>
      function alternar(menu) {
         var oMenu = document.getElementById(menu);
         //Si el menu tiene clase abierto
         //cambia clase a cerrado y cambia el botón
         if (oMenu.classList.contains('abierto')) {
            oMenu.classList.remove('abierto');
            oMenu.classList.add('cerrado');
            event.target.innerText = 'Abrir'
         }
         //Si no está abierto, cambia clase a abierto y cambia el botón
         else {
            oMenu.classList.remove('cerrado');
            oMenu.classList.add('abierto');
            event.target.innerText = 'Cerrar'
         }
      }
   </script> --}}
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
   <script src="{{ asset('js/chaffle.js') }}"></script>
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
   {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
   <script>
      var elm = document.querySelectorAll('[data-chaffle-onLoad]');
      Array.prototype.forEach.call(elm, function (el) {
      var chaffle = new Chaffle(el, {
        delay: 200
      })
      setInterval(function(){
        chaffle.init();
      }, 8000)
    });


   </script>
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
            $('body.hero-anime').removeClass('hero-anime');
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
</body>

</html>
