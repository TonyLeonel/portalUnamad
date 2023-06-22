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

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <style>
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
   </style>


</head>

<body>
   <nav class="cajaNav">
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
   </nav>

   <script>
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
   </script>
</body>

</html>

