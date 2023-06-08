@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Historia</span></h2>
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
            <span>Historia</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/vision') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <h2 style="color: rgb(237, 20, 91);" class="mb-5 text-center">
                                <strong>Historia </strong>
                            </h2>
                            <p class="text-justify">La Universidad Nacional Amazónica de Madre de Dios:</p>

                            <p class="text-justify"> - Fue creada mediante la LEY Nº 27297 el 5 de julio del año 2000.</p>
                            <p class="text-justify"> - Se autoriza su funcionamiento mediante la Resolución Nº 060-2001-CONAFU.</p>
                            <p class="text-justify"> - La Primera Comisión Organizadora se forma con la Resolución Nº 062-2001-CONAFU del 19 de marzo y la Resolución Nº 076-2001-CONAFU del 6 de abril.</p>
                            <p class="text-justify"> - El 27 de noviembre de 2009, mediante la Resolución Nº 626-2009-CONAFU, se otorga la Autorización Definitiva de Funcionamiento a la Universidad Nacional Amazónica de Madre de Dios, bajo la Ley Nº 23733 y sus modificatorias y complementarias.</p>
                            <p class="text-justify"> - Cuenta con Centros de Prestación de Servicios, que incluyen: Centro Preuniversitario, Centro de Idiomas, Instituto de Informática y los Centros de Producción.</p>
                            <p class="text-justify"> - Como alma Mater de la Región Madre de Dios, se espera que sea un modelo en la Educación Superior universitaria y contribuya al cambio y desarrollo regional y nacional.</p>
                            <p class="text-justify"> - Existe un compromiso por parte de todos los involucrados para asegurar una excelente preparación académica, profesional, humanística y ética de los estudiantes.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection