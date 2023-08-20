@extends('layouts.portal')

@section('titulo', 'Bienestar Universitario - Actividades')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellona.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Bienestar Universitario - Actividades</span></h2>
            <h4>Centro de formación académica de la UNAMAD.</h4>
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
            <a href="{{ url('oficinas/bienestar') }}">Bienestar Universitario</a>    
            <span>Actividades</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/bienestar/actividades') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.menu', $menu)    
                @include('secciones.paginas.bienestar_info')                            
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title fl-wrap mb-4">
                            <h4>Bienestar Universitario</h4>
                            <h2>Actividades recientes</h2>
                        </div>
                    </div>
                </div>
                <div class="post-container fl-wrap">
                    <div class="text-center p-3 text-muted fs-6" style="background: #ebebeb;">
                    NO SE ENCONTRARON REGISTROS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection