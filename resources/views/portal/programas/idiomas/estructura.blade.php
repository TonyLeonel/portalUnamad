@extends('layouts.portal')

@section('titulo', 'Centro de Idiomas - Estructura Orgánica')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Centro de Idiomas</span></h2>
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
            <a href="{{ url('programas/idiomas') }}">Centro de Idiomas</a>    
            <span>Estructura Orgánica</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/idiomas/estructura') }}"  class="share-btn">
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
                @include('secciones.paginas.idimas_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p><img src="https://portal.unamad.edu.pe/storage/VvLU7SrWes0RTHAokhlViF6si5vKkKUtKKiCynwu.jpg" alt="" width="100%" height="auto"></p>
                            <p>&nbsp;</p>
                            <p><strong>a) &nbsp; </strong>&nbsp;Estar al servicio de los Cursos, Programas y Carreras que ofrezca el Instituto y de las necesidades surgidas en la Universidad.</p>
                            <p><strong>b) &nbsp; </strong>&nbsp;Planificar, ejecutar y evaluar los servicios académicos propendiendo a brindar un valor agregado al servicio informático.</p>
                            <p><strong>c) &nbsp; &nbsp;</strong>Administra los recursos económicos dentro del marco de la naturaleza de los órganos desconcentrados y las políticas de la Alta Dirección.</p>
                            <p><strong>d) &nbsp; &nbsp;</strong>Otorgar certificaciones previo cumplimiento del Plan de Actividades Académicas realizadas..</p>
                            <p><strong>e) &nbsp; </strong>&nbsp;Realizar las demás funciones inherentes a su naturaleza.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection