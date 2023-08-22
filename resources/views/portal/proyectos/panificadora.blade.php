@extends('layouts.portal')

@section('titulo', 'Panificadora')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Panificadora</span></h2>
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
            <span>Panificadora</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('proyectos/panificadora') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Panificadora</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify mb-3">Crear un programa de investigación, capacitación, asesoría técnica y producción a nivel universitaria especializados en la línea de panadería y pastelería, cumpliendo los estándares de calidad, mediante el mejoramiento continuo de todos los procesos, a fin de contribuir en la formación profesional a través de cursos de capacitación e investigación.</p>
                            <p class="text-justify fw-bold" style="color: rgb(237, 20, 91);">OBJETIVOS</p>
                            <ul class="lista_base text-justify">
                                <li>Realizar trabajos de investigación y desarrollo de productos de panadería y pastelería.</li>
                                <li>Apoyar a la enseñanza a través de las prácticas pre-profesionales, y a cursos de pre y post grado y tesistas.</li>
                                <li>Brindar cursos de extensión y proyección social a la comunidad.</li>
                                <li>Mejorar la gestión administrativa a través de la capacitación del recurso humano para la mejora continua de los procesos productivos y administrativos. Así como la implementación de equipos y maquinarias con tecnología de punta.</li>
                                <li>Mejorar el sistema de ventas y comercialización de los productos la Molina para su auto sostenimiento.</li>
                                <li>Ofrecer productos de panificación de calidad y nutritivos para satisfacer a los clientes.</li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection