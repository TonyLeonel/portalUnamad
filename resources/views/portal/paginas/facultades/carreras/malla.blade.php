@extends('layouts.portal')

@section('titulo', 'Malla')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>{{$carrera->nombre}}</span></h2>
            <h4>Carrera Profesional de {{$carrera->nombre}} de la UNAMAD.</h4>
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
            <span>{{$carrera->nombre}}</span>
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
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">  
                @include('secciones.paginas.menu')                 
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">
                        <div class="pagina_contenido">
                            <div class="row">
                                
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                        <h2 style="padding-bottom: 50px;">
                                            <strong style="color: rgb(237, 20, 91);padding-bottom:40px">MALLAS CURRICULARES</strong>
                                        </h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-vcenter">
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>Descripción</th>
                                                        <th>Fecha</th>
                                                        <th>Descargar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Malla curricular 1.</td>
                                                        <td>03/04/2012</td>
                                                        <td style="position:relative;">
                                                            <div class="tarjeta_icon1">
                                                                <i class="fas fa-file-pdf"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Malla curricular 2.</td>
                                                        <td>01/02/2017</td>
                                                        <td style="position:relative;">
                                                            <div class="tarjeta_icon1">
                                                                <i class="fas fa-file-pdf"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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