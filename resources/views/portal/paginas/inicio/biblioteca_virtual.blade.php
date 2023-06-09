<!DOCTYPE html>
<html>

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
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .full-screen-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url('../img/images/bvirtual.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="full-screen-image"></div>
</body>

</html>
