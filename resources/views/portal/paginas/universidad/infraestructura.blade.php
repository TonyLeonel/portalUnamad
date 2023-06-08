@extends('layouts.portal')

@section('titulo', 'Infraestructura')
@section('js')
<script src="./dist/js/tabler.min.js?1674944402" defer></script>

@endsection
@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Infraestructura</span></h2>
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
            <span>Infraestructura</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/infraestructura') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-12 mb-4">                                 
                                    <p style="text-align: justify;padding: 0 20px;">g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte
                                        g fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterteg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte

                                    </p>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <div class="card"style="border: none;">
                                    <div class="card-body">
                                      <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/group-of-people-sightseeing-in-the-city.jpg">
                                                    
                                                </div>
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/group-of-people-sightseeing-in-the-city.jpg">                                                    
                                                </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/color-palette-guide-sample-colors-catalog-.jpg">                                               
                                                </div>
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/color-palette-guide-sample-colors-catalog-.jpg">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/stylish-workplace-with-computer-at-home.jpg">                                                
                                                </div>
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/stylish-workplace-with-computer-at-home.jpg">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/pink-desk-in-the-home-office.jpg">                                                
                                                </div>
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/pink-desk-in-the-home-office.jpg">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg">                                                
                                                </div>
                                                <div class="col-6">
                                                    <img class="d-block w-100" alt="" src="/img/photos/young-woman-sitting-on-the-sofa-and-working-on-her-laptop.jpg">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="mb-2" style="padding: 0 20px;"> <strong>Locales</strong></h4>
                                    <span>
                                        <ul style="margin-left: 15px;">
                                            <li>local 1</li>
                                            <li>local 1</li>
                                            <li>local 1</li>
                                            <li>local 1</li>
                                            <li>local 1</li>
                                            <li>local 1</li>
                                        </ul>
                                    </span>
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