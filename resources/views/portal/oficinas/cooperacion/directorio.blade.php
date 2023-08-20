@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales -  Directorio')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales - Directorio</span></h2>
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
            <span>Directorio</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion/directorio') }}"  class="share-btn">
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
                            <p><span style="color: rgb(53, 152, 219);"><strong>DIRECTORIO OCRI</strong></span></p>
                            <p>A continuación, usted podrá encontrar datos del personal directivo de la Oficina de Cooperación y Relaciones Interinstitucionales de la Universidad Nacional Amazónica de Madre de Dios:</p>
                            <p>&nbsp;</p>
                            <p><strong>M.Sc. Federico Kuaquira Huallpa</strong></p>
                            <p><em>Jefe de la Oficina de Cooperación y Relaciones Interinstitucionales – OCRI de la UNAMAD</em></p>
                            <p>Responsable de construir comunicaciones internas y externas, y desarrollar relaciones estratégicas con aliados nacionales e internacionales para la realización de actividades de cooperación internacional, investigación y de intercambio académico.</p>
                            <p>Docente Asociado de la Facultad de Ingeniería adscrito al Departamento Académico de Ciencias Básicas, con experiencia laboral diversa y experiencia en docencia universitaria por 17 años. Tiene Grado Académico de Bachiller en Matemática por la UNSAAC, Maestro en Ciencias de la Educación con mención Gestión Educacional por la UNE – EGyV. De Profesión Licenciado en Matemática por la UNSAAC.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection