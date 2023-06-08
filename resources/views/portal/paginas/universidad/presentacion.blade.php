@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding  hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Presentación</span></h2>
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
            <span>Presentación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/presentacion') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding  gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-4 center mr-3">
                                    <img style="margin-right:15px" src="/img/IMG_21333.JPG" alt="">
                                    {{-- <div class="col-6 center"> --}}
                                        <h5><strong>Dr. Hugo Dueñas Liranes</strong></h5>
                                        <h5><strong>Rector</strong></h5>
                                        <span>fduenas@unamad.edu.pe</span>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-8 mt-3">
                                    <h2 style="padding-bottom: 50px;">
                                        <strong style="color: rgb(237, 20, 91);" >Presentación</strong>
                                    </h2>
                                    <p class="text-justify">La Universidad Nacional Amazónica de Madre de Dios (UNAMAD) es la primera casa de estudios y líder en la región de Madre de Dios; es una universidad pública de alto crecimiento de esta última década, nuestro impacto en las personas, en nuestra región y en el Perú es profundo, pues hemos sido desafiantes, caracterizándonos por el impulso a la innovación y el desarrollo.</p>
                                    <p class="text-justify">La investigación en la Universidad ha abierto nuevos caminos, impulsado los límites del conocimiento, hecho que ha generado un impacto en las vidas de las personas.</p>
                                    <p class="text-justify">Hoy, nuestros estudiantes y profesores trabajan conjuntamente para convertir las ideas en el impacto y en el proceso de transformar vidas y por qué no, nuestro mundo; convirtiéndonos en una comunidad académica vibrante y diversa, centrada en la enseñanza y el aprendizaje, el descubrimiento de nuevos conocimientos y el servicio a la región Madre de Dios y mucho más allá.</p>
                                    <p class="text-justify">Asumimos un nuevo reto y esperamos no defraudarlos, los invitamos a hacer un recorrido por nuestro portal a fin de que conozcan nuestros logros y sean parte de la UNAMAD.</p>
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