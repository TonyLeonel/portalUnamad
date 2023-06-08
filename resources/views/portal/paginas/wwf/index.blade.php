@extends('layouts.portal')
@php($title='Fondo Mundial para la Naturaleza')
@section('titulo',  $title.' - '. $pagina->titulo)

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/wwf.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>WWF</span></h2>
            <h4>{{ $title }}</h4>
        </div>
       
    </div>
</section>
<!-- NAVEGACIÓN -->
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            @if(trim($pagina->flag)=="inicio")
                <span>{{ $title }}</span>                  
            @else
                <a href="{{ url('ocri') }}">{{ $title }}</a>
                <span>{{ $pagina->titulo }}</span>
            @endif
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
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
                @include('secciones.paginas.wwf_menu')
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            {!! $pagina->contenido !!}
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection