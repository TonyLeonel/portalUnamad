@extends('layouts.portal')

@section('titulo', 'Gestión Ambiental Universitario')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Gestión Ambiental Universitario</span></h2>
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
            <span>Gestión Ambiental Universitario</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/ambiental') }}"  class="share-btn">
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
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/paginas/ambiental.jpg') }}" alt="" width="70%" height="auto"></p>
                            <h2 style="text-align: center;">&nbsp;</h2>
                            <h2 style="text-align: center;"><span style="color: rgb(219, 4, 85);"><strong>COMITÉ AMBIENTAL UNIVERSITARIO</strong></span></h2>
                            <p>El Comite Ambiental Universitaria de la Universidad Nacional Amazonica de Madre de Dios.</p>
                            <p>&nbsp;</p>
                            <p><span style="color: rgb(219, 4, 85);"><strong>Objetivo General&nbsp;</strong></span></p>
                            <p style="text-align: justify;">Incorporar la dimensión ambiental y el fomento del desarrollo sostenible en la comunidad universitaria, a travez de la Politica Ambiental Universitaria, Plan ambiental Universitario, programas y acciones integrales, aplicados en el ámbito formativo, de investigación, de responzabilidad social y extensión universitaria, y en la gestión institucional.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection