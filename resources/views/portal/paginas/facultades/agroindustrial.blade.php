@extends('layouts.portal')

@section('titulo', 'Ingeniería Agroindustrial')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Ingeniería Agroindustrial</span></h2>
            <h4>Carrera Profesional de Ingeniería Agroindustrial de la UNAMAD.</h4>
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
            <span>Ingeniería Agroindustrial</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.paginas.agroindustrial')                 
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <img src="{{ asset('img/paginas/agroindustrial.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Ingeniería Agroindustrial</strong></h2>
                            <p style="text-align: justify;">La Carrera Profesional de Ingeniería Agroindustrial (IA) de la Universidad Nacional Amazónica de Madre de Dios (UNAMAD), es una unidad académica y de investigación que contribuye a la sociedad formando profesionales de calidad en Ciencia, Tecnología e Ingeniería Agroindustrial. Que, a través de la aplicación de sólidos conocimientos científicos, tecnológicos e innovación, busca resolver problemas relacionados con la producción agroindustrial, la seguridad agroalimentaria y el desarrollo agroindustrial de los diversos sectores que engloba esta actividad, como el sector agrícola, pecuario, hidrobiológico y forestal.La Carrera Profesional de Ingeniería Agroindustrial (IA) de la Universidad Nacional Amazónica de Madre de Dios (UNAMAD), es una unidad académica y de investigación que contribuye a la sociedad formando profesionales de calidad en Ciencia, Tecnología e Ingeniería Agroindustrial. Que, a través de la aplicación de sólidos conocimientos científicos, tecnológicos e innovación, busca resolver problemas relacionados con la producción agroindustrial, la seguridad agroalimentaria y el desarrollo agroindustrial de los diversos sectores que engloba esta actividad, como el sector agrícola, pecuario, hidrobiológico y forestal.El sector agroindustrial en la Región Madre de Dios y sobre todo en el País, se ha convertido en uno de los sectores más dinámicos y estratégicos de la economía nacional, principalmente por las actividades a que este sector está orientado, como la manipulación, adecuación y conservación de la materia prima proveniente del campo (tanto de origen alimentario como no alimentario), su procesamiento, conservación y comercialización en productos terminados, destinados al consumo de los hogares y empresas.De acuerdo a la Nueva Ley Universitaria (Ley 30220) y en función del Plan Estratégico que marca la Política de Aseguramiento de la Calidad de la Educación Superior Universitaria (Decreto supremo N° 016-2015-MINEDU), hacia el bicentenario debemos de contar con docentes fortalecidos en sus capacidades de investigación y enseñanza, la que debe proyectarse con la generación de investigación y estudios en la especialidad que le competen, en la cual, los estudiantes y egresados serán los principales artífices de buscar el desarrollo sostenible de la comunidad madrediocense, nacional y global.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection