@extends('layouts.portal')

@section('titulo', 'Transparencia Universitaria - Artículo 11')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/biblioteca.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Transparencia Artículo 11</span></h2>
            <h4>Transparencia Universitaria de la UNAMAD.</h4>
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
            <span>Artículo 11</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();" class="share-btn">
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
                @include('secciones.paginas.transparencia_menu')        
            </div>
            
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <!--   list-single-main-item -->
                    <div class="list-single-main-item fl-wrap" id="faq1">
                        <div class="list-single-main-item-title big-lsmt fl-wrap">
                            <h3>TRANSPARENCIA UNIVERSITARIA ARTICULO 11</h3>
                        </div>
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">ESTATUTO <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Estatuto UNAMAD: <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/documentos-de-gestion/estatuto.html" target="_blank" rel="noopener">Ver Estatuto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">TEXTO ÚNICO DE PROCEDIMIENTOS ADMINISTRATIVOS - TUPA <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Texto Unico de Procedimientos Administrativos: <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/documentos-de-gestion/tupa.html" target="_blank" rel="noopener">Ver TUPA</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->										
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">PROCESO PRESUPUESTARIO DEL AÑO 2019 (Resumen del Marco Presupuestal y Ejecución de Gasto del mes de Enero - Diciembre 2019) <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Presupuesto Institucional y Ejecución Presupuestal Año Fiscal 2019: <a href="https://unamad.edu.pe/descargas/send/206-planificacion/18708-presupuesto-institucional.html" target="_blank" rel="noopener">Ver Presupuesto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">ACTAS DE CONSEJO DE FACULTAD, CONSEJO UNIVERSITARIO Y ASAMBLEA UNIVERSITARIA <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Actas de Facultad: <a href="https://unamad.edu.pe/descargas/category/287-documento-de-facultades.html" target="_blank" rel="noopener">Ver&nbsp;Actas</a></li>
                                        <li>Actas de Asamblea Universitaria:&nbsp;<a href="https://unamad.edu.pe/descargas/category/155-actas-de-los-acuerdos-asamblea-universitaria.html" target="_blank" rel="noopener">Ver&nbsp;Actas</a></li>
                                        <li>Actas de Consejo Universitario: <a href="https://unamad.edu.pe/descargas/category/154-actas-de-los-acuerdos.html" target="_blank" rel="noopener">Ver Actas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">INVERSIONES, REINVERSIONES, DONACIONES, OBRAS DE INFRAESTRUCTURA <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Proyectos de Inversión y su Ejecución: <a href="https://unamad.edu.pe/descargas/send/206-planificacion/18709-reporte-de-inversiones-ano-fiscal-2019.html" target="_blank" rel="noopener">Ver Reportes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">PROYECTOS DE INVESTIGACIÓN Y LOS GASTOS QUE GENERE <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Proyectos de Investigación y los gastos que genere: <a href="https://unamad.edu.pe/proyectos-de-investigacion.html" target="_blank" rel="noopener">Ver Reportes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">NUMERO DE EGRESADOS DE PREGADO <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Egresados de Pregrado: <a href="http://academico.unamad.edu.pe/indicadores/index.php?id=egresados&amp;menu=egresadosCarrera" target="_blank" rel="noopener">Ver Estadisticas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">VACANTES Y FECHAS DE CONCURSO DE SELECCION PARA DOCENTES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Proceso de Selección de Docentes 2014 - 2019: <a href="https://unamad.edu.pe/descargas/send/442-2019/17408-proceso-de-seleccion-de-docentes-2014-2019.html" target="_blank" rel="noopener">Ver Reporte</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">REMUNERACIONES, BONIFICACIÓN Y ESTIMULOS A DOCENTES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Remuneraciones, Bonificaciones y demas estimulos a Docentes: <a href="https://unamad.edu.pe/remuneracion-bonificacion-y-estimulos-a-docentes.html" target="_blank" rel="noopener">Verificar Reporte</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">REGLAMENTO DE ORGANIZACION Y FUNCIONES - ROF <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul style="list-style-type: square;">
                                        <li>Reglamento de Organización y Funciones: <a href="https://unamad.edu.pe/index.php/descargas/send/24-institucionales/5763-reglamento-de-organizacion-y-funciones-2016" target="_blank" rel="noopener">Ver ROF</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">PLAN OPERATIVO INSTITUCIONAL <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Plan Operativo Institucional: <a href="https://unamad.edu.pe/descargas/send/503-2020/18477-poi-2020.html" target="_blank" rel="noopener">Ver POI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end --> 
                    </div>
                    <!--   list-single-main-item end -->                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection