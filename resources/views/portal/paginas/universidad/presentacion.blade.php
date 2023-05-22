@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Presentación</span></h2>
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Presentación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/presentacion') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-8 mt-3">
                                    <h2 style="padding-bottom: 50px;">
                                        <strong style="color: rgb(237, 20, 91);" >Presentación</strong>
                                    </h2>
                                    <p class="text-justify">La Universidad Nacional Amazónica de Madre de Dios – UNAMAD, es una comunidad académica orientada a la investigación y a la docencia, que brinda una formación humanista, científica, y tecnológica con una clara conciencia de nuestro país como realidad multicultural. Adopta el concepto de educación como derecho fundamental y servicio público esencial. Está integrado por docentes, estudiantes y graduados.</p>
                                    <p class="text-justify">La UNAMAD es persona jurídica de derecho público, cuenta con autonomía normativa. De gobierno, académica, administrativa y económica de conformidad con lo establecido en la Constitución Política del Perú, la Ley Universitaria y demás normativa aplicable.</p>
                                </div>
                                <div class="col-4 center mr-3">
                                    <img style="margin-left:15px" src="/img/IMG_2500.JPG" alt="">
                                </div>
                                <div class="col-6 center">
                                    <h5><strong>Dr. Hugo Dueñas Liranes, Rector</strong></h5> 
                                    <span>Rector</span></br>
                                    <span>fduenas@unamad.edu.pe</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection