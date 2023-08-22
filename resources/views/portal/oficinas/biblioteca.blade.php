@extends('layouts.portal')

@section('titulo', 'Biblioteca Central')

@section('css')
<style>
    ul li::marker {
        color: rgb(237, 20, 91);
    }
</style>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Biblioteca Central</span></h2>
            <h4>Universidad Nacional Amazónica de Madre de Dios.</h4>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Desplácese hacia abajo para descubrir</span>
        </div>
    </div>
</section>
<!-- NAVEGACIÓN -->
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap image_bar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Biblioteca Central</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/biblioteca') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding small-padding gray-bg">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">                        
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Biblioteca Central</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Dirección de Biblioteca Central es el órgano de línea responsable de gestionar y desarrollar los planes y programas del sistema bibliotecario, conservar y difundir los acervos bibliográficos y documentales, utilizando los recursos informáticos permanentemente actualizados; ofrecer servicios de biblioteca virtual, asegurar una adecuada gestión en calidad de servicios bibliotecarios, acceso a archivos, unidades de información y contribuye a desarrollar las competencias genéricas relacionadas con el acceso y uso de la información dentro de la comunidad universitaria de la UNAMAD.</p>
                            <p class="text-justify">Son funciones de la Dirección de Biblioteca Central, las siguientes:</p>
                            <ul style="list-style: lower-alpha;" class="text-justify">
                                <li style="list-style: lower-alpha;">Organizar los materiales bibliográficos y documentarios, para que sean accesibles al estudiante y a la comunidad universitaria.</li>
                                <li style="list-style: lower-alpha;">Sugerir la adquisición de activo bibliográfico. </li>
                                <li style="list-style: lower-alpha;">Preponer políticas de mantenimiento, conservación y seguridad del acervo bibliográfico.</li>
                                <li style="list-style: lower-alpha;">Facilitar el acceso a los distintos materiales bibliográficos e informativos, según las especialidades de la universidad.</li>
                                <li style="list-style: lower-alpha;">Garantizar el acceso y funcionamiento de los ambientes de lectura.</li>
                                <li style="list-style: lower-alpha;">Proporcionar la información bibliográfica clasificada y almacenada en una base de datos.</li>
                                <li style="list-style: lower-alpha;">Las demás funciones asignadas por el Vicerrectorado Académico, o aquellas que sean otorgadas por norma expresa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection