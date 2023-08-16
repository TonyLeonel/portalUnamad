@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Presentación</span></h2>
            <h4>Universidad Nacional Amazónica de Madre de Dios.</h4>
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap image_bar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Presentación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/presentacion') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding small-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <img src="{{ asset('img/IMG_21333.JPG') }}" alt="" style="width: 100%;">
                                    <div class="center pt-3">
                                        <h5><strong>Dr. Hugo Dueñas Liranes</strong></h5>
                                        <h5><strong>Rector</strong></h5>
                                        <span>fduenas@unamad.edu.pe</span>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <h2 class="mb-3">
                                        <strong style="color: rgb(237, 20, 91);" >Presentación</strong>
                                    </h2>
                                    <p class="text-justify">La Universidad Nacional Amazónica de Madre de Dios (UNAMAD) es la primera casa de estudios y líder en la región de Madre de Dios; es una universidad pública de alto crecimiento de esta última década, nuestro impacto en las personas, en nuestra región y en el Perú es profundo, pues hemos sido desafiantes, caracterizándonos por el impulso a la innovación y el desarrollo.</p>
                                    <p class="text-justify">La investigación en la Universidad ha abierto nuevos caminos, impulsado los límites del conocimiento, hecho que ha generado un impacto en las vidas de las personas.</p>
                                    <p class="text-justify">Hoy, nuestros estudiantes y profesores trabajan conjuntamente para convertir las ideas en el impacto y en el proceso de transformar vidas y por qué no, nuestro mundo; convirtiéndonos en una comunidad académica vibrante y diversa, centrada en la enseñanza y el aprendizaje, el descubrimiento de nuevos conocimientos y el servicio a la región Madre de Dios y mucho más allá.</p>
                                    <p class="text-justify">Asumimos un nuevo reto y esperamos no defraudarlos, los invitamos a hacer un recorrido por nuestro portal a fin de que conozcan nuestros logros y sean parte de la UNAMAD.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h2 style="text-align: center;"><span style="color: rgb(237, 20, 91);"><strong>Misión, Visión y Objetivos</strong></span></h2>                                    
                                    <p><span  style="color: rgb(237, 20, 91);" class="mb-3 mt-3"><strong>POLITICA INSTITUCIONAL</strong></span> </p>
                                    <p class="text-justify mb-4">El compromiso de la Universidad Nacional Amazónica de Madre de Dios – UNAMAD es la formación de profesionales que sean capaces de realizar propuestas de desarrollo y generar cambios en la sociedad los cuales coadyuven al bienestar de la población, promoviendo el uso de la investigación e innovación tecnológica. La Universidad Nacional Amazónica de Madre de Dios es una comunidad académica que trabaja desde diferentes esferas como la académica con el cumplimiento de las condiciones básicas de calidad, desde la gestión administrativa, promoviendo la investigación I+d+i, la responsabilidad social o extensión universitaria y proyección social así como la esfera de la cooperación nacional e internacional; con la perspectiva de la generación de conocimiento a través de la formación profesional y de la investigación integral, humanista, científica y tecnológica, mediante el ejercicio de la docencia; y tendiente al desarrollo de la región y del país. La Universidad Nacional Amazónica de Madre de Dios posee autonomía y la ejerce de manera responsable en estricto respeto a la Constitución y el marco legal vigente.
                                    </p>
                                    <p><span  style="color: rgb(237, 20, 91);" class="mb-3"><strong>VISIÓN</strong></span> </p>
                                    <p class="text-justify mb-4">La Visión Institucional de la Universidad Nacional Amazónica de Madre de Dios es la siguiente: “Universidad innovadora líder en investigación y emprendimiento, con excelencia académica acreditada internacionalmente, que respeta y preserva el conocimiento de los pueblos originarios amazónicos para la conservación y uso de la biodiversidad natural y cultural".</p>
                                    <p><span  style="color: rgb(237, 20, 91);" class="mb-3"><strong>MISIÓN</strong></span> </p>
                                    <p class="text-justify mb-4">La Misión Institucional de la Universidad Nacional Amazónica de Madre de Dios es la siguiente: “Formar profesionales líderes, investigadores e innovadores con orientación humanística, científica y tecnológica, que contribuyan al desarrollo sostenible de la Amazonía y competitividad del país con identidad cultural, espíritu emprendedor y responsabilidad social”.</p>                                   
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