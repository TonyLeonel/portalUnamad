@extends('layouts.portal')

@section('titulo', 'Convenios')

@section('contenido')
    <!-- HEADER -->
    <section class="relative-padding  hidden-section single-par2  " data-scrollax-parent="true">
        <div class="bg-wrap bg-parallax-wrap-gradien">
            <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}"
                data-scrollax="properties: { translateY: '30%' }"></div>
        </div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>Convenios</span></h2>
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
                <span>Convenios</span>
            </div>
            <div class="share-holder hid-share">
                <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/presentacion') }}"
                    class="share-btn">
                    <i class="fas fa-share-alt"></i> Compartir
                </a>
            </div>
        </div>
    </div>
    <!-- CONTENIDO -->
    <section class="relative-padding  gray-bg small-padding fl-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="list-single-main-container">
                        <div class="list-single-main-item">
                            <div class="pagina_contenido">
                                <div class="row">
                                    
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                        <div class="container">
                                            <h2 style="padding-bottom: 50px;">
                                                <strong style="color: rgb(237, 20, 91);">Convenios</strong>
                                            </h2>
                                            <p style="text-align: justify;padding-bottom:40px">En el ámbito nacional e internacional, la Universidad Nacional Amazónica de Madre de Dios tiene suscrito convenios con instituciones públicas y privadas, con el propósito de fomentar programas de intercambios académicos; promover las investigaciones conjuntas y efectuar proyectos de desarrollo en bien de nuestra comunidad Unamadina.</p>
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
                                                            <td><p style="text-align: justify;pading:10px">Convenio marco de cooperación interinstitucional entre la unidad ejecutora n° 118 mejoramiento de la Calidad Educativa Básica y Superior y la Universidad Nacional Amazónica de Madre de Dios.</p></td>
                                                            <td>09/05/2023</td>
                                                            <td style="position:relative;">
                                                                <div class="tarjeta_icon1">
                                                                    <i class="fas fa-file-pdf"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><p style="text-align: justify;pading:10px">Convenio marco de cooperación interinstitucional entre la Universidad Nacional Amazónica de Madre de Dios y la Universidad Nacional de Moquegua.</p></td>
                                                            <td>09/05/2023</td>
                                                            <td style="position:relative;">
                                                                <div class="tarjeta_icon">
                                                                    <i class="fas fa-file-pdf"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><p style="text-align: justify;pading:10px">Convenio Marco De Cooperación Interinstitucional entre la Universidad Católica De Santa María, Arequipa y la Universidad Nacional Amazónica De Madre De Dios.</p></td>
                                                            <td>09/05/2023</td>
                                                            <td style="position:relative;">
                                                                <div class="tarjeta_icon1">
                                                                    <i class="fas fa-file-pdf"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td><p style="text-align: justify;pading:10px">Convenio Marco De Cooperación Interinstitucional entre la Universidad Nacional Amazónica de Madre de Dios Y Bosques Amazónicos.</p></td>
                                                            <td>09/05/2023</td>
                                                            <td style="position:relative;">
                                                                <div class="tarjeta_icon1">
                                                                    <i class="fas fa-file-pdf"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td><p style="text-align: justify;pading:10px">Convenio Marco de Cooperación Interinstitucional entre la Universidad Nacional Amazónica de Madre de Dios y Ana.</p></td>
                                                            <td>09/05/2023</td>
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
        </div>
    </section>
@endsection
