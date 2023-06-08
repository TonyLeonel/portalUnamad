@extends('layouts.portal')

@section('titulo', 'Autoridades')

@section('contenido')
    <!-- HEADER -->
    <section class="relative-padding  hidden-section single-par2  " data-scrollax-parent="true">
        <div class="bg-wrap bg-parallax-wrap-gradien">
            <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}"
                data-scrollax="properties: { translateY: '30%' }"></div>
        </div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>Autoridades</span></h2>
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
                <span>Autoridades</span>
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
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 center mr-3">
                                        <img style="margin-right:15px" src="/img/IMG_21333.JPG" alt="">
                                        {{-- <div class="col-6 center"> --}}
                                        <h5><strong>Dr. Hugo Dueñas Liranes</strong></h5>
                                        <h5><strong style="color: rgb(237, 20, 91);">RECTOR</strong></h5>
                                        <span>fduenas@unamad.edu.pe</span>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 mt-3">

                                        <div class="container">
                                            <h3>EDUCACIÓN:</h3>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
                                                    <tbody>
                                                        <tr>
                                                            <td>2018</td>
                                                            <td>Dr. Ciencias Ciencias de la Educación (Mención Distinción)
                                                            </td>
                                                            <td>Universidad Enrique Guzman y Valle</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2014</td>
                                                            <td>Dr. Ciencias Biológicas</td>
                                                            <td>Universidad Nacional Mayor de San Marcos</td>
                                                        </tr>

                                                        <tr>
                                                            <td>2011</td>
                                                            <td>Msc Ecología y Recursos Naturales (Mención: Distinción)</td>
                                                            <td>UNSAAC</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1993</td>
                                                            <td>Biólogo</td>
                                                            <td>UNSAAC</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1990</td>
                                                            <td>Bachiller en Ciencias Biológicas</td>
                                                            <td>UNSAAC</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h3>EXPERIENCIA PROFESIONAL Y AFILIACIONES:</h3>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
                                                    <tbody>
                                                        <tr>
                                                            <td>Actual 2019</td>
                                                            <td>Profesor Principal</td>
                                                            <td>Universidad Nacional Amazónica de Madre de Dios</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>Vice-presidente</td>
                                                            <td>Sociedad Peruana de Ciencias Forestales y Medio Ambiente
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2011</td>
                                                            <td>Director</td>
                                                            <td>Oficina General de Investigación-UNAMAD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2011</td>
                                                            <td>Director</td>
                                                            <td>Centro de Investigación Herbario "Alwyn Gentry"-UNAMAD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2011-2013</td>
                                                            <td>Decano</td>
                                                            <td>Consejo Regional XXI Madre de Dios del Colegio de Biólogos
                                                                del Perú</td>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="list-single-main-container">
                        <div class="list-single-main-item">
                            <div class="pagina_contenido">

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 center mr-3">
                                        <img style="margin-right:15px" src="/img/IMG_21335.JPG" alt="">
                                        {{-- <div class="col-6 center"> --}}
                                        <h5><strong>Dr. Joab Maquera Ramírez </strong></h5>
                                        <h5><strong style="color: rgb(237, 20, 91);">VICERRECTOR ACADÉMICO</strong></h5>
                                        {{-- <span>fduenas@unamad.edu.pe</span> --}}
                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 mt-3">

                                        <div class="container">
                                            <h2 style="padding-bottom: 50px;">
                                                <strong style="color: rgb(237, 20, 91);">Presentación</strong>
                                            </h2>
                                            <p class="text-justify">Profesor Ordinario en la categoría de Principal en la
                                                Universidad Nacional Amazónica de Madre de Dios - Perú. Ingeniero de
                                                Sistemas con grado Académico de Magister y Doctorado.</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="list-single-main-container">
                        <div class="list-single-main-item">
                            <div class="pagina_contenido">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 center mr-3">
                                        <img style="margin-right:15px" src="/img/IMG_21334.JPG" alt="">
                                        {{-- <div class="col-6 center"> --}}
                                        <h5><strong>Dra. Luz Marina Almanza Huamán</strong></h5>
                                        <h5><strong style="color: rgb(237, 20, 91);">VICERRECTORA DE INVESTIGACIÓN</strong>
                                        </h5>
                                        {{-- <span>fduenas@unamad.edu.pe</span> --}}
                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 mt-3">
                                        <div class="container">
                                            <h2 style="padding-bottom: 50px;">
                                                <strong style="color: rgb(237, 20, 91);">Presentación</strong>
                                            </h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th>Título</th>
                                                            <th>Institución</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Abogada</td>
                                                            <td>Universidad Nacional San Antonio Abad del Cusco</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maestra en Derecho con mención en Ciencias Penales</td>
                                                            <td>Universidad José Carlos Mariátegui</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doctora en Ciencias de la Educación</td>
                                                            <td>Universidad Nacional Enrique Guzmán y Valle</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Becaria del CAF en "Programa de Gobernabilidad e Innovación
                                                                Pública para Líderes y Lideresas de Latinoamérica"</td>
                                                            <td>CAF</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Becaria de PMESUT en "Programa de Especialización para
                                                                Gestores de I+D+i en Universidades Públicas"</td>
                                                            <td>Consorcio BIOACTIVA de Perú y CAMBIOTEC de México</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Segunda especialidad en Educación Superior y Andragogía</td>
                                                            <td>Universidad José Carlos Mariátegui</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Especialización en "Entornos Virtuales de Aprendizaje en el
                                                                Desarrollo Curricular y Didáctica Universitaria"</td>
                                                            <td>---</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Especialización en "Redacción de Artículos Científicos con
                                                                Estándares de Calidad Internacional"</td>
                                                            <td>---</td>
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
