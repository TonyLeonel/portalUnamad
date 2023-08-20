@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales -  Estructura orgánica')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales - Estructura orgánica</span></h2>
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
            <a href="{{ url('oficinas/cooperacion') }}">Oficina de Cooperación y Relaciones Internacionales</a>    
            <span>Estructura orgánica</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion/estructura') }}"  class="share-btn">
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
                @include('secciones.paginas.coperacion_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1; background: white; mso-background-themecolor: background1;">&nbsp; &nbsp;<span style="color: rgb(53, 152, 219);"><strong>ESTRUCTURA ORGÁNICA</strong></span></p>
                            <p>&nbsp;</p>
                            <p><img src="{{ asset('img/paginas/ocri_estructura.png') }}" width="600" height="339"></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection