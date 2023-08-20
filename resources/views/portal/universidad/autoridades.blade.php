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
                                    <span>fduenas@unamad.edu.pe</span>
                                </div>
                                <div class="col-md-8 mb-3">                                    
                                    <h3 style="color: rgb(237, 20, 91);">EDUCACIÓN:</h3>
                                    <div class="tabla-responsive mb-3">
                                        <table class="tabla">
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
                                    <h3 style="color: rgb(237, 20, 91);">EXPERIENCIA PROFESIONAL Y AFILIACIONES:</h3>
                                    <div class="tabla-responsive">
                                        <table class="tabla">
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
                                </div>      
                                <div class="col-md-8 mb-3">                                
                                    <h2 class="mb-2">
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
        <div class="row mb-3">
            <div class="col-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <div class="row">
                                <div class="col-md-4 mb-3 text-center">                                     
                                    <img style="width: 100%" class="mb-2" src="{{ asset('img/IMG_21334.JPG') }}" alt="">                                    
                                    <h5><strong>Dra. Luz Marina Almanza Huamán</strong></h5>
                                    <h5><strong style="color: rgb(237, 20, 91);">VICERRECTORA DE INVESTIGACIÓN</strong>
                                    </h5>
                                </div>      
                                <div class="col-md-8 mb-3">
                                    <h2 class="mb-2">
                                        <strong style="color: rgb(237, 20, 91);">Presentación</strong>
                                    </h2>
                                    <div class="tabla-responsive">
                                        <table class="tabla">
                                            <thead>
                                                <tr>
                                                    <th style="width: 50%;">Título</th>
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