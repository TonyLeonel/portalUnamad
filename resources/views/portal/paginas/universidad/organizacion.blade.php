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
            <h2><span>Organización</span></h2>
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
            <span>Organización</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/organizacion') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mb-3 center">
                                        <strong  style="color: rgb(237, 20, 91);">RECTOR DE LA UNIVERSIDAD NACIONAL AMAZONICA DE MADRE DE DIOS- UNAMAD</strong>
                                    </h4>
                                </div>
                                <div class="col-md-4 center foto-organizacion row">
                                    <div class="col-md-12">
                                        <img src="/img/IMG_2500.JPG" alt="">
                                        <h5>Hugo Dueñas Liranes</h5>
                                        <p class="center">Resolución: <a href="https://www.gob.pe/institucion/unamad/normas-legales/3310872-12-2021-unamad-ceu" target="_back"> Ver</a></p>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <h5 style="color: rgb(237, 20, 91);" class="mb-3">Funciones</h5>
                                    <ul>
                                        <li>Dirigir el cumplimiento de las políticas establecidas por la Asamblea Universitaria y
                                            Consejo Universitario. 
                                            </li>
                                        <li>Cumplir y hacer cumplir la Ley, el Estatuto y los Reglamentos de la Universidad.</li>
                                        <li>Dirigir la actividad académica de la universidad y su gestión administrativa,
                                            económica y financiera de la universidad. </li>
                                        <li>Presentar al Consejo Universitario, para su aprobación, los instrumentos de
                                            planeamiento institucional.</li>
                                        <li>Velar por el desarrollo de la investigación, cooperación e intercambio cultural con
                                            otras entidades públicas o privadas sean nacional e internacional.</li>
                                        <li>Refrendar los diplomas de grados académicos y títulos profesionales</li>                                                                                                                  
                                        <li>Suscribir contratos, actos y convenios a nombre de la UNAMAD.</li>
                                        <li>Convocar a elecciones de los representantes a la Asamblea Universitaria, el Consejo
                                            Universitario, Consejo de Facultad y autoridades universitarias, conforme al
                                            reglamento general de elecciones. </li>  
                                        <li>Fomentar la evaluación permanente de la gestión administrativa. </li>
                                        <li><a href="https://cdn.www.gob.pe/uploads/document/file/3780845/ROF%20UNAMAD%202022%20-%20APROBADO%20%26%20PUBLICADO.pdf.pdf?v=1677249616" target="_back">Leer más</a>   </li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mb-3 center">
                                        <strong  style="color: rgb(237, 20, 91);">VICERRECTORADO ACADÉMICO  DE LA UNIVERSIDAD NACIONAL AMAZONICA DE MADRE DE DIOS- UNAMAD</strong>
                                    </h4>
                                </div>
                                <div class="col-md-4 center foto-organizacion row">
                                    <div class="col-md-12">
                                        <img src="/img/IMG_2502.JPG" alt="">
                                        <h5>Joab Maquera Ramirez</h5>
                                        <p class="center">Resolución: <a href="https://www.gob.pe/institucion/unamad/funcionarios/57915-joab-maquera-ramirez" target="_back"> Ver</a></p>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-4">
                                    <h5 style="color: rgb(237, 20, 91);" class="mb-3">Funciones</h5>
                                    <ul>
                                        <li>Dirigir y ejecutar la política general de formación académica en la UNAMAD.</li>
                                        <li>Atender las necesidades de capacitación permanente del personal docente. </li>
                                        <li> Emitir resoluciones en los asuntos de su competencia.</li>
                                        <li> Conducir la evaluación periódica de los docentes en coordinación con la Oficina de
                                            Gestión de la Calidad Académica de la UNAMAD. 
                                        <li>Supervisar el proceso de admisión y la distribución de vacantes para las diferentes
                                            modalidades de admisión propuestas por las facultades.</li>                                    
                                        <li>Coordinar las actividades curriculares y extracurriculares</li>                            
                                        <li>Coordinar y gestionar los procesos de selección de docentes universitarios. </li>                                    
                                        <li>Proponer al rectorado normas, directivas, lineamientos y reglamentos para el
                                            desarrollo de las actividades académicas.</li>                                    
                                        <li>Conducir la evaluación periódica de los docentes en coordinación con la Oficina de
                                            Gestión de la Calidad Académica de la UNAMAD. </li>                                    
                                        <li>Supervisar el proceso de diseño, aprobación y ejecución del plan de gestión de los
                                            egresados</li>                                    
                                        <li>Supervisar la expedición de títulos profesionales y grados académicos. 
                                        </li>                                    
                                        <li>Emitir resoluciones dentro del ámbito de su competencia </li>                                    
                                        <li> Las demás atribuciones que le otorgan la Ley Universitaria y el Estatuto de la
                                            Universidad. </li>
                                        <li><a href="https://cdn.www.gob.pe/uploads/document/file/3780845/ROF%20UNAMAD%202022%20-%20APROBADO%20%26%20PUBLICADO.pdf.pdf?v=1677249616" target="_black"> Leer mas </a></li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3 center">
                                        <strong  style="color: rgb(237, 20, 91);">VICERRECTORADO DE INVESTIGACIÓN DE LA UNIVERSIDAD NACIONAL AMAZONICA DE MADRE DE DIOS- UNAMAD</strong>
                                    </h4>
                                </div>
                                <div class="col-md-4 center foto-organizacion row">
                                    <div class="col-md-12">
                                        <img src="/img/IMG_2504.JPG" alt="">
                                        <h5>Luz Marina Almanza Huamán</h5>
                                        <p class="center">Resolución: <a href="https://www.gob.pe/institucion/unamad/funcionarios/44555-luz-marina-almanza-huaman" target="_back"> Ver</a></p>
                                    </div>
                                </div>
                                <div class="col-8 mb-4">
                                    <h5 style="color: rgb(237, 20, 91);" class="mb-3">Funciones</h5>
                                    <ul>
                                        <li>dg fdfdfgd dfg rter dgfdghrth d dgre erte rte tet rtert erterterte</li>                                    
                                        <li>Formular, ejecutar y evaluar el Plan de Ciencia, Tecnología e Innovación de la
                                            universidad. </li>
                                        <li>Evaluar cada dos años la producción de los docentes, para su permanencia como
                                            investigador. en el marco de los estándares del Sistema Nacional de Ciencia,
                                            Tecnología e Innovación Tecnológica - SINACYT</li>
                                        <li>Promover el intercambio de docentes investigadores con universidades nacionales e
                                            internacionales.</li>
                                        <li>Promover el uso de la tecnología y el fomento a la innovación</li>
                                        <li>Promover la investigación en los estudiantes de pre y posgrado. </li>
                                        <li>Conformar los comités en concordancia con sus reglamentos. 
                                        </li>                                                               
                                        <li>Gestionar y supervisar el registro de derechos de propiedad intelectual y las normas
                                            de ética correspondientes. </li>                                    
                                        <li> Emitir resoluciones en los ámbitos de su competencia.</li>                                    
                                        <li>Velar por el cumplimiento de los instrumentos de planeamiento de la universidad y
                                            de la normatividad interna en el ámbito de sus funciones. </li>                                                    
                                        <li>Promover los grupos semilleros en investigación científica</li>                                    
                                        <li>Las demás atribuciones que le otorgan la Ley Universitaria y el Estatuto de la
                                            Universidad. </li> 
                                        <li><a href="https://cdn.www.gob.pe/uploads/document/file/3780845/ROF%20UNAMAD%202022%20-%20APROBADO%20%26%20PUBLICADO.pdf.pdf?v=1677249616" target="_black">Leer mas</a>  </li>

                                    </ul>                                   
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">                                
                                <div class="row">
                                    <h4 class="mb-3 center">
                                        <strong  style="color: rgb(237, 20, 91);">DECANOS DE LA UNIVERSIDAD NACIONAL AMAZONICA DE MADRE DE DIOS- UNAMAD</strong>
                                    </h4> 
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">                                                    
                                                <div class="mb-3">
                                                    <span class="avatar avatar-xl rounded foto-decano" style="background-image: url(/img/decano1.jpg)"></span>
                                                </div>
                                                <div class="card-title mb-1">Rosel Quispe Herrera</div>
                                                <div class="text-muted">Decano de la Facultad de Ingeniería</div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">                                                    
                                                <div class="mb-3">
                                                    <span class="avatar avatar-xl rounded foto-decano" style="background-image: url(/img/decano2.jpg)"></span>
                                                </div>
                                                <div class="card-title mb-1">Mirella Rosa Luz Gavidia Canaquiri</div>
                                                <div class="text-muted">Decano de la Facultad de Ecoturismo</div>
                                            </div>
                                        </div>                                      
                                    </div> 
                                    <div class="col-md-4 col-xl-3 mb-3">
                                        <div class="card alto">
                                            <div class="card-body text-center">                                                    
                                                <div class="mb-3">
                                                    <span class="avatar avatar-xl rounded foto-decano" style="background-image: url(/img/decano3.jpg)"></span>
                                                </div>
                                                <div class="card-title mb-1">Fredy Rolando Dueñas Linares</div>
                                                <div class="text-muted">Decano de la Faculta de Educación</div>
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
    </div>
</section>
@endsection