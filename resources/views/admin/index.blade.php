@extends('layouts.admin')

@section('titulo', 'Panel administrador')

@section('contenido')
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    BIENVENIDO
                </div>
                <h2 class="page-title">
                    PANEL ADMINISTRADOR DE PORTAL WEB - {{ config('app.name', 'Titulo') }}
                </h2>
            </div>            
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-3">Bienvenido al panel administrador del portal web institucional de la Universidad Nacional Amazónica de Madre de Dios. En este panel podrá realizar las siguientes acciones:</p>
                <ul>
                    <li>Actualizar el contenido de páginas institucionales</li>
                    <li>Publicar comunicados</li>
                    <li>Realizar publicaciones de las actividades de su oficina</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection