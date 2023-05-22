@extends('layouts.portal')

@section('titulo', 'Transparencia Universitaria - Indicador 55')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/biblioteca.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Transparencia Indicador 55</span></h2>
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
            <span>Indicador 55</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();" class="share-btn">
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
                @include('secciones.paginas.transparencia_menu')        
            </div>
            
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <!--   list-single-main-item -->
                    <div class="list-single-main-item fl-wrap" id="faq1">
                        <div class="list-single-main-item-title big-lsmt fl-wrap">
                            <h3>TRANSPARENCIA INDICADOR 55</h3>
                        </div>
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV1: MISIÓN Y VISIÓN <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <p><b>MISIÓN</b></p>
                                <p class="mb-3">“Formar Profesionales con orientación humanística, científica y tecnológica en el estudiante, contribuyendo al desarrollo sostenible de la biodiversidad con identidad cultural y responsabilidad social ”.</p>
                                <p><b>VISIÓN</b></p>
                                <p class="pb-0">“Ser la Universidad lider en al Región Amazónica, holística, humanistica, democrática, innovadora, con vocación de servicio, comprometida con la solución de los problemas de nuestra sociedad pluricultural, de la biodiversidad y del medio ambiente, orientada al derarrollo sotenible a través de principio y valores éticos, en el marco de una gestión eficiente, eficaz y transparente”.</p>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV2: REGLAMENTO Y CALENDARIO DE ADMISIÓN <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Reglamento de Admisión: <a href="http://academico.unamad.edu.pe/admision/index.php?id=reglamento" target="_blank" rel="noopener">Ver Reglamento</a></li>
                                        <li>Calendario de Admisión: <a href="http://academico.unamad.edu.pe/admision/index.php?id=cronograma" target="_blank" rel="noopener">Ver Calendario</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->										
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV3: TEMARIO EXÁMENES DE ADMISIÓN <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Temario de Examenes de Admisión: <a href="http://academico.unamad.edu.pe/admision/?id=temario" target="_blank" rel="noopener">Ver Temario</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV4: POSTULANTES E INGRESANTES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Número de Postulantes: <a href="http://academico.unamad.edu.pe/indicadores/index.php?id=postulante&amp;menu=postulantesCarrera" target="_blank" rel="noopener">Ver Estadisticas</a></li>
                                        <li>Número de Ingresantes:&nbsp;<a href="http://academico.unamad.edu.pe/indicadores/index.php?id=academico" target="_blank" rel="noopener">Ver Estadisticas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV5: CONCURSOS DE SELECCIÓN PARA DOCENTES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Concursos de Selección para Docentes 2019: <a href="https://unamad.edu.pe/descargas/category/384-abril-2019.html" target="_blank" rel="noopener">Ver Concursos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV6: NÚMERO DE ESTUDIANTES POR CARRERAS Y PROGRAMAS DE ESTUDIO <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Número de Estudiantes por Carreras y Programas de Estudio: <a title="Número de Estudiantes por Carreras y Programas de Estudio:" href="http://academico.unamad.edu.pe/indicadores/index.php?id=matriculados&amp;menu=matriculadosCarrera" target="_blank" rel="noopener noreferrer">Ver estadísticas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV7: REGLAMENTO DE ESTUDIANTES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Número de Estudiantes por Carreras y Programas de Estudio: <a title="Número de Estudiantes por Carreras y Programas de Estudio:" href="http://academico.unamad.edu.pe/indicadores/index.php?id=matriculados&amp;menu=matriculadosCarrera" target="_blank" rel="noopener noreferrer">Ver estadísticas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV8: AMBIENTES O ESPACIOS DESTINADOS A BRINDAR LOS SERVICIOS SOCIALES, DEPORTIVOS O CULTURALES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Ambientes o Espacios Destinados a Brindar los Servicios Sociales, Deportivos o Culturales : <a title="Ambientes" href="http://www.unamad.edu.pe/universidad/datos-generales/galeria-de-imagenes.html" target="_blank" rel="noopener">Verificar Ambientes </a></li>
                                        <li>Ambientes de Servicio Social : <a title="Ambientes de Servicios Sociales" href="http://www.unamad.edu.pe/universidad/datos-generales/galeria-de-imagenes/ambientes-de-servicios-sociales.html" target="_blank" rel="noopener">Verificar Ambientes </a></li>
                                        <li>Ambientes de Servicio Deportivo :<a title="Ambientes de Servicios Deportivos" href="http://www.unamad.edu.pe/universidad/datos-generales/galeria-de-imagenes/ambientes-de-servicios-deportivos.html" target="_blank" rel="noopener">Verificar Ambientes </a></li>
                                        <li>Ambientes de Servicio Cultural : <a title="Ambientes de Servicios Culturales" href="http://www.unamad.edu.pe/universidad/datos-generales/galeria-de-imagenes/ambientes-de-servicio-cultural.html" target="_blank" rel="noopener">Verificar Ambientes </a></li>
                                        <li>Ambientes de Espacios Complementarios : <a title="Ambientes de Espacios Complementarios" href="http://www.unamad.edu.pe/universidad/datos-generales/galeria-de-imagenes/ambientes-de-espacios-complementarios.html" target="_blank" rel="alternate noopener noreferrer">Verificar Ambientes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV9: TÍTULO DE LOS PROYECTOS DE INVESTIGACIÓN, ACTUALIZADOS AL ÚLTIMO SEMESTRE ACADÉMICO <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Título de los Proyectos de Investigación, Docentes 2015 - 2019: <a title="Título de los Proyectos de Investigación Docentes" href="http://www.unamad.edu.pe/descargas/send/442-2019/17041-01-registro-de-proyectos-docentes.html" target="_blank" rel="noopener noreferrer">Verificar Titulos de Proyectos</a></li>
                                        <li>Titulo de Proyectos de Investigación Tesistas 2015 - 2019: <a title="Titulos de Proyectos de Investigacion Tesistas" href="http://www.unamad.edu.pe/descargas/send/442-2019/17042-registro-de-proyecto-de-investigacion-de-tesista.html" target="_blank" rel="noopener">Verificar Titulos de Proyectos </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV10: TARIFAS DE LOS SERVICIOS PRESTA-DOS POR TODA ÍNDOLE (MATRÍCULAS, PENSIÓN, CONSTANCIAS, CERTIFICA-DOS, ENTRE OTROS) <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Tarifas de los Servicios Prestados por Toda Índole (Matrículas, Pensión, Constancias, Certificados, Entre Otros): <br><a title="Tarifas de los Servicios Prestados por Toda Índole (Matrículas, Pensión, Constancias, Certificados, Entre Otros)" href="http://academico.unamad.edu.pe/index.php?id=tasas" target="_blank" rel="noopener noreferrer">Ver Tarifas </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV11: PLANA DOCENTE Y DOCENTES INVESTIGADORES <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul>
                                        <li>Plana Docente: <a title="Plana Docente y Docentes Investigadores" href="https://unamad.edu.pe/academico/vicerrectorado-academico/plana-docentes-unamad.html" target="_blank" rel="noopener noreferrer">Verificar Docentes</a></li>
                                        <li>Docentes Investigadores Registrados en DINA:&nbsp;<a title="Docentes Investigadores Registrados en DINA" href="https://unamad.edu.pe/descargas/send/442-2019/16989-docentes-investigadores.html" target="_blank" rel="noopener noreferrer">Verificar Investigadores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">MV12: MALLA CURRICULAR DE TODOS LOS PROGRAMAS DE ESTUDIOS <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap">
                                <div class="pagina_estilo_correcion">
                                    <ul >
                                        <li>Malla Curricular de Todos los Programas de Estudios: <a title="Malla Curricular de Todos los Programas de Estudios:" href="https://unamad.edu.pe/descargas/send/442-2019/16732-formato-de-licenciamiento-c1-malla-curricular-y-analisis-de-creditos-academicos.html" target="_blank" rel="noopener noreferrer">Verificar Mallas</a></li>
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