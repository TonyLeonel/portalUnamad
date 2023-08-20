@extends('layouts.portal')

@section('titulo', 'Gestión Ambiental Universitario - Actividades')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Gestión Ambiental Universitario - Actividades</span></h2>
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
            <a href="{{ url('oficinas/ambiental') }}">Gestión Ambiental Universitario</a>    
            <span>Actividades</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/ambiental/actividades') }}"  class="share-btn">
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
                @include('secciones.paginas.ambiental_info')                            
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title fl-wrap mb-4">
                            <h4>Gestión Ambiental</h4>
                            <h2>Actividades recientes</h2>
                        </div>
                    </div>
                </div>
                <div class="post-container fl-wrap">
                @if(count($publicaciones) > 0)
                    @foreach ($publicaciones as $publicacion)                    
                    <article class="post-article fl-wrap">
                        <div class="list-single-main-media fl-wrap">
                            <img src="{{ asset($publicacion->imagen) }}" class="respimg" alt="">
                        </div>
                        <div class="list-single-main-item fl-wrap block_box">
                            <h2 class="post-opt-title"><a href="{{ url('publicaciones/'.$publicacion->id.'/detalles') }}">{{ $publicacion->titulo }}</a></h2>
                            <p>{{ $publicacion->resumen }}</p>                            
                            <span class="fw-separator fl-wrap"></span>
                            <div class="post-author"><a><span>{{ $publicacion->user->alias }}</span></a></div>
                            <div class="post-opt">
                                <ul class="no-list-style">
                                    <li><i class="fal fa-calendar"></i> <span>{{ $publicacion->created_at->format('d/m/Y') }}</span></li>
                                    <li><i class="fal fa-tags"></i><a>{{ $publicacion->categoria->nombre }}</a></li>
                                </ul>
                            </div>
                            <a href="{{ url('publicaciones/'.$publicacion->id.'/detalles') }}" class="btn color-bg float-btn small-btn">Leer más</a>
                        </div>
                    </article>
                    @endforeach
                    <div class="row pt-3">
                        <div class="col-12">
                            {{ $publicaciones->links('secciones.paginacion') }}
                        </div>
                    </div>
                @else
                    <div class="text-center p-3 text-muted fs-6" style="background: #ebebeb;">
                    NO SE ENCONTRARON REGISTROS
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection