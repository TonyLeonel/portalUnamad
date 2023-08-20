@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales</span></h2>
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
            <span>Oficina de Cooperación y Relaciones Internacionales</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion') }}"  class="share-btn">
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
                            <p>La Oficina de Cooperación y Relaciones Internacionales es el órgano de asesoramiento responsable de generar convenios de interés para la UNAMAD y para el país en general y mantenerlos activos, de modo que permitan el desarrollo de las actividades respectivas.</p>
                            <p>Contribuye al desarrollo de la UNAMAD, mediante el diseño y ejecución de la política institucional para las Relaciones Nacionales e Internacionales. Asimismo, generar y mantener la base de datos de los convenios existentes con la UNAMAD, oportunidades de intercambio, movilidad y capacitación para los miembros de la comunidad universitaria y evalúa periódicamente los convenios vigentes, para proponer su renovación o finalización, según sea conveniente.</p>
                            <p>Asimismo, gestionar la cooperación internacional para la investigación y el cumplimento de los fines institucionales.</p>
                            <p><span style="color: rgb(224, 62, 45);">El Jefe es un Docente Ordinario, designado por el Consejo Universitario a propuesta del Rector.</span></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection