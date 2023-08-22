@extends('layouts.portal')

@section('titulo', 'Autoridades')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Autoridades</span></h2>
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
            <span>Autoridades</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/autoridades') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding small-padding gray-bg">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-4 mb-3 text-center">                             
                                    <img style="width: 100%;" class="mb-2" src="{{ asset('img/IMG_21333.JPG') }}" alt="">                                        
                                    <h5><strong>Dr. Hugo Dueñas Liranes</strong></h5>
                                    <h5><strong style="color: rgb(237, 20, 91);">RECTOR</strong></h5>
                                    <span>hduenas@unamad.edu.pe</span>
                                    <div>
                                        <a href="https://ctivitae.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=3882" style="color: rgb(237, 20, 91);" target="_blank">WEB INFO.</a>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">DATOS ACADÉMICOS</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>GRADO</th>
                                                    <th>TITULO</th>
                                                    <th>CENTRO DE ESTUDIOS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BACHILLER</td>
                                                    <td>BACHILLER EN CIENCIAS BIOLÓGICAS</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>LICENCIADO / TÍTULO</td>
                                                    <td>TITULO DE BIÓLOGO</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>MAGISTER</td>
                                                    <td>MAGISTER EN CIENCIAS</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>DOCTORADO</td>
                                                    <td>DOCTOR EN CIENCIAS BIOLOGICAS</td>
                                                    <td>UNIVERSIDAD NACIONAL MAYOR DE SAN MARCOS</td>
                                                </tr>                                                		
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">EXPERIENCIA LABORAL</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>PERIODO</th>
                                                    <th>CARGO</th>
                                                    <th>INSTITUCIÓN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2011-2017</td>
                                                    <td>DOCENTE (ORDINARIO – PRINCIPAL)</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                                <tr>
                                                    <td>2021 - Actualidad</td>
                                                    <td>RECTOR</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">PRODUCCIÓN CIENTÍFICA Y/O DE INVESTIGACIÓN</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>TIPO PRODUCCIÓN</th>
                                                    <th>TITULO</th>
                                                    <th>FECHA</th>
                                                    <th>FUENTE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ARTÍCULO EN REVISTA CIENTÍFICA</td>
                                                    <td>DIFFERENCES IN SOIL INFILTRATION CAPACITY IN TWO VEGETATION COVER TYPES IN THE PERUVIAN AMAZON</td>
                                                    <td>2022</td>
                                                    <td>SCOPUS</td>
                                                </tr>
                                                <tr>
                                                    <td>BOOK</td>
                                                    <td>LOS BOSQUES DE LA AMAZONÍA PERUANA BIODIVERSIDAD, ECOSISTEMA, POLÍTICAS Y NORMAS</td>
                                                    <td>2021</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>ARTICLE</td>
                                                    <td>INFLUENCE OF FOREST CONSERVATION ON THE TREE DIVERSITY AND FLORISTIC COMPOSITION IN THE SOUTHWEST PERUVIAN AMAZON</td>
                                                    <td>2019</td>
                                                    <td>WEB OF SCIENCE</td>
                                                </tr>
                                                <tr>
                                                    <td>BOOK</td>
                                                    <td>FIRST CATALOGUE OF THE AMAZONIAN TREES SPECIES OF MADRE DE DIOS, PERU</td>
                                                    <td>2019</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>JOURNAL_ARTICLE</td>
                                                    <td>DIVERSIDAD, DOMINANCIA Y DISTRIBUCIÓN ARBÓREA EN MADRE DE DIOS, PERÚ</td>
                                                    <td>2018</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>ARTÍCULO EN REVISTA CIENTÍFICA</td>
                                                    <td>EFFECTS OF ROAD INFRASTRUCTURE ON FOREST VALUE ACROSS A TRI-NATIONAL AMAZONIAN FRONTIER</td>
                                                    <td>2015</td>
                                                    <td>SCOPUS</td>
                                                </tr>
                                                <tr>
                                                    <td>JOURNAL-ARTICLE</td>
                                                    <td>EFFECTS OF ROAD INFRASTRUCTURE ON FOREST VALUE ACROSS A TRI-NATIONAL AMAZONIAN FRONTIER</td>
                                                    <td>2015</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>JOURNAL-ARTICLE</td>
                                                    <td>ESTUDIO PRELIMINAR DEL ECOSISTEMA LINGÜÍSTICO DE MADRE DE DIOS EN LA VARIEDAD DEL CASTELLANO AMAZÓNICO</td>
                                                    <td>2014</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>JOURNAL-ARTICLE</td>
                                                    <td>TRADE-OFFS AMONG FOREST VALUE COMPONENTS IN COMMUNITY FORESTS OF SOUTHWESTERN AMAZONIA</td>
                                                    <td>2014</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>ARTÍCULO EN REVISTA CIENTÍFICA</td>
                                                    <td>TRADE-OFFS AMONG FOREST VALUE COMPONENTS IN COMMUNITY FORESTS OF SOUTHWESTERN AMAZONIA</td>
                                                    <td>2014</td>
                                                    <td>SCOPUS</td>
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
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-4 mb-3 text-center"> 
                                    <img style="width: 100%" class="mb-2" src="{{ asset('img/IMG_21335.JPG') }}" alt="">                                    
                                    <h5><strong>Dr. Joab Maquera Ramírez </strong></h5>
                                    <h5><strong style="color: rgb(237, 20, 91);">VICERRECTOR ACADÉMICO</strong></h5>
                                    <span>jmaquera@unamad.edu.pe</span>
                                    <div>
                                        <a href="https://ctivitae.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=23590" style="color: rgb(237, 20, 91);" target="_blank">WEB INFO.</a>
                                    </div>                                    
                                </div>      
                                <div class="col-md-8 mb-3">                                
                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">DATOS ACADÉMICOS</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>GRADO</th>
                                                    <th>TITULO</th>
                                                    <th>CENTRO DE ESTUDIOS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BACHILLER</td>
                                                    <td>BACHILLER EN CIENCIAS DE LA INGENIERÍA DE SISTEMAS</td>
                                                    <td>UNIVERSIDAD NACIONAL DEL ANTIPLANO</td>
                                                </tr>
                                                <tr>
                                                    <td>DOCTORADO</td>
                                                    <td>DOCTOR EN CIENCIAS DE LA EDUCACIÓN</td>
                                                    <td>UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                                </tr>
                                                <tr>
                                                    <td>MAGISTER</td>
                                                    <td>MAGISTER SCIENTIAE EN CONTABILIDAD Y ADMINISTRACIÓN</td>
                                                    <td>UNIVERSIDAD NACIONAL DEL ALTIPLANO</td>
                                                </tr>
                                                <tr>
                                                    <td>LICENCIADO / TÍTULO</td>
                                                    <td>INGENIERO DE SISTEMAS</td>
                                                    <td>UNIVERSIDAD NACIONAL DEL ALTIPLANO</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">EXPERIENCIA LABORAL</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>PERIODO</th>
                                                    <th>CARGO</th>
                                                    <th>INSTITUCIÓN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2005-2021</td>
                                                    <td>DOCENTE (ORDINARIO – PRINCIPAL)</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-ACTUALIDAD</td>
                                                    <td>VICERRECTOR ACADÉMICO</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">PRODUCCIÓN CIENTÍFICA Y/O DE INVESTIGACIÓN</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>TIPO PRODUCCIÓN</th>
                                                    <th>TITULO</th>
                                                    <th>FECHA</th>
                                                    <th>FUENTE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>TESIS DOCTORAL</td>
                                                    <td>Incidencia del recurso didáctico sistema e-learning personalizado en el proceso integral de enseñanza aprendizaje de los estudiantes de Ingeniería de Sistemas e Informática de la Universidad Nacional Amazónica de Madre de Dios, 2015</td>
                                                    <td>2017</td>
                                                    <td>ALICIA</td>
                                                </tr>
                                                <tr>
                                                    <td>MasterThesis</td>
                                                    <td>Comercio electrónico y la comercialización de la castaña en el Departamento de Madre de Dios</td>
                                                    <td>2011</td>
                                                    <td>ALICIA</td>
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
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-4 mb-3 text-center">                                     
                                    <img style="width: 100%" class="mb-2" src="{{ asset('img/IMG_21334.JPG') }}" alt="">                                    
                                    <h5><strong>Dra. Luz Marina Almanza Huamán</strong></h5>
                                    <h5><strong style="color: rgb(237, 20, 91);">VICERRECTORA DE INVESTIGACIÓN</strong></h5>
                                    <span>lalmanza@unamad.edu.pe</span>
                                    <div>
                                        <a href="https://dina.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do;jsessionid=826642570f15c1f72462218ecdde?id_investigador=86686" style="color: rgb(237, 20, 91);" target="_blank">WEB INFO.</a>
                                    </div>
                                </div>      
                                <div class="col-md-8 mb-3">
                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">DATOS ACADÉMICOS</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>GRADO</th>
                                                    <th>TITULO</th>
                                                    <th>CENTRO DE ESTUDIOS</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr>
                                                    <td>LICENCIADO / TÍTULO</td>
                                                    <td>ABOGADO</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>BACHILLER</td>
                                                    <td>BACHILLER EN DERECHO</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>LICENCIADO / TÍTULO</td>
                                                    <td>TITULO DE ABOGADO</td>
                                                    <td>UNIVERSIDAD NACIONAL DE SAN ANTONIO ABAD DEL CUSCO</td>
                                                </tr>
                                                <tr>
                                                    <td>DOCTORADO</td>
                                                    <td>DOCTOR EN CIENCIAS DE LA EDUCACION</td>
                                                    <td>UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                                </tr>
                                                <tr>
                                                    <td>MAGISTER</td>
                                                    <td>MAGISTER EN CIENCIAS DE LA EDUCACION, ESPECIALIDAD: EDUCACION AMBIENTAL.Y.DESARROLLO SOSTENIBLE</td>
                                                    <td>UNIVERSIDAD NACIONAL DE EDUCACIÓN ENRIQUE GUZMÁN Y VALLE</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>SEGUNDA ESPECIALIDAD EN EDUCACION SUPERIOR Y ANDRAGOGIA</td>
                                                    <td>UNIVERSIDAD JOSE CARLOS MARIATEGUI</td>
                                                </tr>
                                                <tr>
                                                    <td>MAGISTER</td>
                                                    <td>MAESTRO EN DERECHO CON MENCIÓN EN CIENCIAS PENALES</td>
                                                    <td>UNIVERSIDAD JOSE CARLOS MARIATEGUI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">EXPERIENCIA LABORAL</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>PERIODO</th>
                                                    <th>CARGO</th>
                                                    <th>INSTITUCIÓN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2005-2021</td>
                                                    <td>DOCENTE (ORDINARIO – PRINCIPAL)</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                                <tr>
                                                    <td>2021 - Actualidad</td>
                                                    <td>VICERRECTORA DE INVESTIGACIÓN</td>
                                                    <td>UNAMAD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class=" mb-2" style="color: rgb(237, 20, 91);">PRODUCCIÓN CIENTÍFICA Y/O DE INVESTIGACIÓN</h4>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th>TIPO PRODUCCIÓN</th>
                                                    <th>TITULO</th>
                                                    <th>FECHA</th>
                                                    <th>FUENTE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>CONDUCCIÓN EN ESTADO DE EBRIEDAD Y LAS TRANSGRESIONES A LA LEY PENAL - CIUDAD DE PUERTO MALDONADO</td>
                                                    <td>La investigación tuvo por objetivo determinar la asociación entre los factores asociados al consumo de alcohol y la transgresión al Código Penal por conducción de vehículos en estado de ebriedad, en el distrito de Tambopata durante el año 2019.</td>
                                                    <td>2019</td>
                                                    <td>ORCID</td>
                                                </tr>
                                                <tr>
                                                    <td>LOS CONTRATOS DE LOCACIÓN DE SERVICIO Y SU DESNATURALIZACIÓN Y LA FORMACIÓN DE UN NUEVO CONTRATO EN LA UNIVERSIDAD NACIONAL AMAZÓNICA DE MADRE DE DIOS PERIODO ENERO DEL 2017 AL 31 DE DICIEMBRE 2018</td>
                                                    <td>La investigación tuvo por objetivo determinar el grado de desnaturalización de contratos de locación de servicios y el nivel de cumplimiento de requisitos para la formación de un nuevo contrato, en la UNAMAD durante el año 2018.</td>
                                                    <td>2019</td>
                                                    <td>ORCID</td>
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

        <div class="row ">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item fl-wrap" id="faq1">
                        <div class="list-single-main-item-title big-lsmt fl-wrap">
                            <h3 style="color: rgb(237, 20, 91);">Organización</h3>
                        </div>
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">Alta Dirección <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap" style="display: none;">
                                <div class="tabla-responsive">
                                    <table class="tabla">
                                        <thead>
                                            <tr>
                                                <th>DEPENDENCIA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>CARGO</th>
                                                <th>N° DE CELULAR</th>
                                                <th>CORREO INSTITUCIONAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rectorado</td>
                                                <td>Dr. Hernando Hugo Dueñas Linares</td>
                                                <td>Rector</td>
                                                <td>942855797</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Rectorado</td>
                                                <td>Tec. Tania Suri Palomino</td>
                                                <td>Secretaria</td>
                                                <td>975845191</td>
                                                <td>rectorado@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectorado Académico</td>
                                                <td>Dr. Joab Maquera Ramírez</td>
                                                <td>Vicerrector Académico</td>
                                                <td>974119965</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectorado Académico</td>
                                                <td>Lic. Lisbeth Álvarez Ríos</td>
                                                <td>Secretaria</td>
                                                <td>974122982</td>
                                                <td>vra@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectorado de Investigación</td>
                                                <td>Dra. Luz Marina Almanza Huamán</td>
                                                <td>Vicerrectora de Investigación</td>
                                                <td>975845045</td>
                                                <td>vri@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Vicerrectorado de Investigación</td>
                                                <td>Tec. Lesly Katherine Aragón Navarrete</td>
                                                <td>Secretaria</td>
                                                <td>975842828</td>
                                                <td>mesadepartes.vri@unamad.edu.pe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">Órganos de Línea <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap" style="display: none;">
                                <div class="tabla-responsive">
                                    <table class="tabla">
                                        <thead>
                                            <tr>
                                                <th>DEPENDENCIA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>CARGO</th>
                                                <th>N° DE CELULAR</th>
                                                <th>CORREO INSTITUCIONAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Facultad de Ecoturismo</td>
                                                <td>Dra. Mirella Rosa Luz Gavidia Canaquiri</td>
                                                <td>Decana de la Facultad de Ecoturismo</td>
                                                <td>975845277</td>
                                                <td>fecoturismo@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ecoturismo</td>
                                                <td>Carmen Méndez Torrez</td>
                                                <td>Secretaria</td>
                                                <td>975845277</td>
                                                <td>fecoturismo@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ecoturismo</td>
                                                <td>Tec. Miriam Roxana Escobedo Pacco</td>
                                                <td>Asistente Administrativo</td>
                                                <td>975845277</td>
                                                <td>fecoturismo@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Educación</td>
                                                <td>Dr. Fredy Rolando Dueñas Linares</td>
                                                <td>Decano de la Facultad de Educación</td>
                                                <td>975843012</td>
                                                <td>feducacion@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Educación</td>
                                                <td>Inés Milagros Savala Velarde</td>
                                                <td>Secretaria</td>
                                                <td>975843012</td>
                                                <td>feducacion@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ingeniería</td>
                                                <td>Dr. Rosel Quispe Herrera</td>
                                                <td>Decano de la Facultad de Ingeniería</td>
                                                <td>975845260</td>
                                                <td>fingenieria@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Facultad de Ingeniería</td>
                                                <td>Tec. Helen Marja Pinedo Pinedo</td>
                                                <td>Secretaria</td>
                                                <td>975845260</td>
                                                <td>fingenieria@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Contabilidad y Administración</td>
                                                <td>Dr. Jorge Luis Castillo Hurtado</td>
                                                <td>Directora del Departamento Académico de Contabilidad y
                                                    Administración</td>
                                                <td>975844891</td>
                                                <td>mesadepartes.dir-daceca@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Contabilidad y Administración</td>
                                                <td>Lorraine Isabel Pérez Gonzales</td>
                                                <td>Secretaria</td>
                                                <td>975844891</td>
                                                <td>mesadepartes.dir-daceca@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Ciencias Básicas</td>
                                                <td>Dr. William Gerardo Lavilla Condori</td>
                                                <td>Director del Departamento Académico de Ciencias Básicas</td>
                                                <td>975845125</td>
                                                <td>mesadepartes.dir_dacb@unamad.com.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Ciencias Básicas</td>
                                                <td>Tec. Kimberly Aparicio Alanoca Ing. Yakeli Damiana
                                                    Choquegonza Sonco</td>
                                                <td>Secretaria Responsable del Almacén de Laboratorios de
                                                    Ciencias Básicas</td>
                                                <td>975845125</td>
                                                <td>mesadepartes.dir_dacb@unamad.com.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Derecho y Ciencias Políticas</td>
                                                <td>Abog. Shelni Ady Kuentas Aragón</td>
                                                <td>Directora del Departamento Académico de Derecho y Ciencias
                                                    Políticas</td>
                                                <td>975845255</td>
                                                <td>mesadepartes.dir_dad@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Derecho y Ciencias Políticas</td>
                                                <td>Tec. Teresa Álvarez Quispe</td>
                                                <td>Secretaria</td>
                                                <td>975845255</td>
                                                <td>mesadepartes.dir_dad@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Ecoturismo</td>
                                                <td>Mg. Gloria Echegaray Carreño</td>
                                                <td>Directora del Departamento Académico de Ecoturismo</td>
                                                <td>975842811</td>
                                                <td>decoturismo@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Ecoturismo</td>
                                                <td>Ayde Chuquimamani Payehuanca</td>
                                                <td>Secretaria</td>
                                                <td>975842811</td>
                                                <td>decoturismo@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Educación</td>
                                                <td>Mg. María Isabel Puma Camargo</td>
                                                <td>Directora del Departamento Académico de Educación</td>
                                                <td>974122747</td>
                                                <td>mesadepartes.dir_dae@unamad.edu.pe</td>
                                            </tr>
                                            <tr>
                                                <td>Departamento Académico de Educación</td>
                                                <td>Bach. Sulna Chalco Mamani</td>
                                                <td>Secretaria</td>
                                                <td>974122747</td>
                                                <td>mesadepartes.dir_dae@unamad.edu.pe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->										
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">Órganos de Apoyo <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap" style="display: none;">
                                <div class="tabla-responsive">
                                    <table class="tabla">
                                        <thead>
                                            <tr>
                                                <th>DEPENDENCIA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>CARGO</th>
                                                <th>N° DE CELULAR</th>
                                                <th>CORREO INSTITUCIONAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td>Lic. Ricardo Yuri Hermoza Pérez</td>
                                                <td>Secretario General</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td>Tec. Yevonmesa Iconema Vizcarra</td>
                                                <td>Secretaria</td>
                                                <td>975845257</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td>Abog. Vida del Pilar Chacacanta Limachi</td>
                                                <td>Jefe de la Unidad de Grados y Títulos</td>
                                                <td>975845257</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td>Bach. Brenda Alicia Mamani Quispe</td>
                                                <td>Auxiliar Administrativo</td>
                                                <td>966994466</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Secretaría General</td>
                                                <td>CPCC. Olivia Rolin Ramos</td>
                                                <td>Jefe de Archivo Central</td>
                                                <td>947937149</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->	
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">Órganos de Asesoramiento <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap" style="display: none;">
                                <div class="tabla-responsive">
                                    <table class="tabla">
                                        <thead>
                                            <tr>
                                                <th>DEPENDENCIA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>CARGO</th>
                                                <th>N° DE CELULAR</th>
                                                <th>CORREO INSTITUCIONAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Oficina de Planeamiento Estratégico y Presupuesto</td>
                                                <td>CPC. Katerin Roca Pedraza</td>
                                                <td>Jefe de la Oficina de Planeamiento y Presupuesto</td>
                                                <td>958956795</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Planeamiento Estratégico y Presupuesto</td>
                                                <td>Josy Pacaya Pautre</td>
                                                <td>Secretaria</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Planeamiento Estratégico y Presupuesto</td>
                                                <td>Bach. Yorka Salome Quispe Mendoza</td>
                                                <td>Asistente administrativo</td>
                                                <td>946674729</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Planeamiento Estratégico y Presupuesto</td>
                                                <td>Abg. Irma Rado Aguilar</td>
                                                <td>Jefe de la Unidad de Modernización y Estadística</td>
                                                <td>946674729</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Planeamiento Estratégico y Presupuesto</td>
                                                <td>Lic. Jan Carlos Enriquez Mora</td>
                                                <td>Especialista administrativo</td>
                                                <td>982740587</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD DEPLANEAMIENTO</td>
                                                <td>Ing. Alberto Brandon Peña Gudiel</td>
                                                <td>Jefe de la Unidad de Planeamiento Estratégico</td>
                                                <td>983015852</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD DEPLANEAMIENTO</td>
                                                <td>Bach. Chelsia Sheylla Cáceres Valcárcel</td>
                                                <td>Analista y procesamiento de Información de Gestión</td>
                                                <td>957784093</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD FORMULADORA</td>
                                                <td>Econ. Sandra Quecaño Mayo</td>
                                                <td>Jefe de la Unidad Formuladora</td>
                                                <td>984428365</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD FORMULADORA</td>
                                                <td>Ing. Carlos Enrique Olivera Araujo</td>
                                                <td>Especialista Administrativa</td>
                                                <td>982723442</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD FORMULADORA</td>
                                                <td>Bach. Dilan Renato Ccancapa Quisocala</td>
                                                <td>Auxiliar Administrativo</td>
                                                <td>916983365</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD DE PRESUPUESTO</td>
                                                <td>CPC Leonid Roque Huanca</td>
                                                <td>Jefe de la Unidad de Presupuesto</td>
                                                <td>969745544</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD DE PRESUPUESTO</td>
                                                <td>Katherine Condori Ramos</td>
                                                <td>Analista en control Presupuestal y Gubernamental</td>
                                                <td>914540128</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>UNIDAD DE PRESUPUESTO</td>
                                                <td>Betzabet Yovana Sulla Quea</td>
                                                <td>Especialista en Finanzas</td>
                                                <td>925308031</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Asesoría Legal</td>
                                                <td>Mg. Kimilsung Delgado Palma.</td>
                                                <td>Jefe de la Oficina de Asesoría Legal</td>
                                                <td>991220146 975845138</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Asesoría Legal</td>
                                                <td>Nancy Quispehuanca Galiano</td>
                                                <td>Auxiliar Administrativo</td>
                                                <td>991245626</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Asesoría Legal</td>
                                                <td>Abg. Marlon S. Castro Espinal</td>
                                                <td>Especialista Legal</td>
                                                <td>971004243</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Asesoría Legal</td>
                                                <td>Bach. Diana Liset Caviedes Oraco</td>
                                                <td>Asistente Legal</td>
                                                <td>926216469</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Asesoría Legal</td>
                                                <td>Abg. Alexander Herles Cutipa</td>
                                                <td>Coordinador de Asuntos Judiciales y Contencioso
                                                    Administrativo</td>
                                                <td>992454419</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Cooperación y Relaciones Internacionales</td>
                                                <td>Mg. Federico Koaquira Huallpa</td>
                                                <td>Jefe de la Oficina de Cooperación y Relaciones
                                                    Internacionales</td>
                                                <td>982758444</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Cooperación y Relaciones Internacionales</td>
                                                <td>Sonia Ocola Portocarrero</td>
                                                <td>Secretaria</td>
                                                <td>982348359</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Cooperación y Relaciones Internacionales</td>
                                                <td>Bach. Gertson Akhiles Gaona Mendonza</td>
                                                <td>Auxiliar Administrativo</td>
                                                <td>944141493</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Gestión de laCalidad</td>
                                                <td>Dr. Ralph Miranda Castillo</td>
                                                <td>Jefe de la Oficina de Gestión de la Calidad</td>
                                                <td>975845152</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Gestión de laCalidad</td>
                                                <td>Bach. Griselda Yeni Valencia Pari</td>
                                                <td>Asistente administrativo</td>
                                                <td>931713246</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Gestión de laCalidad</td>
                                                <td>Lic. Sherely Molero Quispe</td>
                                                <td>Especialista Administrativo</td>
                                                <td>986133655</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Comunicación e Imagen Institucional</td>
                                                <td>Lic. HAYDE MAMANI</td>
                                                <td>Jefe de la Oficina de Comunicación e Imagen Institucional
                                                </td>
                                                <td>975844946</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Comunicación e Imagen Institucional</td>
                                                <td>Bach. Vanessa Yuca Bautista</td>
                                                <td>Auxiliar administrativo</td>
                                                <td>932291920</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Comunicación e Imagen Institucional</td>
                                                <td>Lic. Gisela del Carmen Vargas Medina</td>
                                                <td>Unidad de Relaciones Públicas</td>
                                                <td>951523621</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Oficina de Comunicación e Imagen Institucional</td>
                                                <td>Lic. Frank Arellano Mestanza</td>
                                                <td>Camarógrafo</td>
                                                <td>982386611</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->
                        <!--   accordion-lite -->
                        <div class="accordion-lite-container fl-wrap">
                            <div class="accordion-lite-header fl-wrap">Órganos especiales <i class="fas fa-plus"></i></div>
                            <div class="accordion-lite_content fl-wrap" style="display: none;">
                                <div class="tabla-responsive">
                                    <table class="tabla">
                                        <thead>
                                            <tr>
                                                <th>DEPENDENCIA</th>
                                                <th>NOMBRES Y APELLIDOS</th>
                                                <th>CARGO</th>
                                                <th>N° DE CELULAR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Órgano de Control Institucional</td>
                                                <td>Abog. Edith Flor Bedregal Ferro</td>
                                                <td>Jefe del Órgano de Control Institucional</td>
                                                <td>932141039</td>
                                            </tr>
                                            <tr>
                                                <td>Comisión Permanente de Fiscalización</td>
                                                <td>Sin personal</td>
                                                <td>Director de la Comisión Permanente de Fiscalización</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tribunal de Honor Universitario</td>
                                                <td>Dra. Sonia Cairo Daza</td>
                                                <td>Director del Tribunal de Honor</td>
                                                <td>921109728</td>
                                            </tr>
                                            <tr>
                                                <td>Defensoría Universitaria</td>
                                                <td>Mgt. Silvia Antonieta Polanco Chavez</td>
                                                <td>Defensor Universitario</td>
                                                <td>953271420</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--   accordion-lite end -->									
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection