@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Visión y Misión</span></h2>
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
            <span>Visión y Misión</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/vision') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <h2 style="color: rgb(237, 20, 91);" class="mb-5 text-center">
                                <strong>VISIÓN, MISIÓN, VALORES Y PRINCIPIOS DE LA UNAMAD </strong>
                            </h2>
                            <p><span  style="color: rgb(237, 20, 91);" class="mb-3 mt-3"><strong>POLITICA INSTITUCIONAL</strong></span> </p>
                            <p class="text-justify mb-4">El compromiso de la Universidad Nacional Amazónica de Madre de Dios – UNAMAD es la formación de profesionales que sean capaces de realizar propuestas de desarrollo y generar cambios en la sociedad los cuales coadyuven al bienestar de la población, promoviendo el uso de la investigación e innovación tecnológica. La Universidad Nacional Amazónica de Madre de Dios es una comunidad académica que trabaja desde diferentes esferas como la académica con el cumplimiento de las condiciones básicas de calidad, desde la gestión administrativa, promoviendo la investigación I+d+i, la responsabilidad social o extensión universitaria y proyección social así como la esfera de la cooperación nacional e internacional; con la perspectiva de la generación de conocimiento a través de la formación profesional y de la investigación integral, humanista, científica y tecnológica, mediante el ejercicio de la docencia; y tendiente al desarrollo de la región y del país. La Universidad Nacional Amazónica de Madre de Dios posee autonomía y la ejerce de manera responsable en estricto respeto a la Constitución y el marco legal vigente.
                            </p>
                            <p><span  style="color: rgb(237, 20, 91);" class="mb-3"><strong>VISIÓN</strong></span> </p>
                            <p class="text-justify mb-4">La Visión Institucional de la Universidad Nacional Amazónica de Madre de Dios es la siguiente: “Universidad innovadora líder en investigación y emprendimiento, con excelencia académica acreditada internacionalmente, que respeta y preserva el conocimiento de los pueblos originarios amazónicos para la conservación y uso de la biodiversidad natural y cultural".</p>                       

                            <p><span  style="color: rgb(237, 20, 91);" class="mb-3"><strong>MISIÓN</strong></span> </p>
                            <p class="text-justify mb-4">La Misión Institucional de la Universidad Nacional Amazónica de Madre de Dios es la siguiente: “Formar profesionales líderes, investigadores e innovadores con orientación humanística, científica y tecnológica, que contribuyan al desarrollo sostenible de la Amazonía y competitividad del país con identidad cultural, espíritu emprendedor y responsabilidad social”.</p>

                            <span style="color: rgb(237, 20, 91);" class="mb-3 mt-3"><strong>VALORES</strong></span> 
                            <p>
                                <ul>
                                    <li>valor 1</li>
                                    <li>valor 2</li>
                                    <li>valor 3</li>
                                    <li>valor 4</li>
                                    <li>valor 5</li>
                                </ul>
                            </p>

                                                   

                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection