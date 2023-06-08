@extends('layouts.portal')

@section('titulo', 'Organización')

@section('contenido')
    <!-- HEADER -->
    <section class="relative-padding hidden-section single-par2 " data-scrollax-parent="true">
        <div class="bg-wrap bg-parallax-wrap-gradien">
            <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}"
                data-scrollax="properties: { translateY: '30%' }"></div>
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
                <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/organizacion') }}"
                    class="share-btn">
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
                        <div class="pagina_contenido">
                            <div class="accordion" id="accordion-example">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1" aria-expanded="true">
                                            Alta dirección
                                        </button>
                                    </h2>
                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2" aria-expanded="false">
                                            Órganos de Línea
                                        </button>
                                    </h2>
                                    <div id="collapse-2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-3" aria-expanded="false">
                                            Órganos de Apoyo
                                        </button>
                                    </h2>
                                    <div id="collapse-3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-4" aria-expanded="false">
                                            Órganos de Asesoramiento
                                        </button>
                                    </h2>
                                    {{-- table table-striped table-vcenter --}}
                                    <div id="collapse-4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-5" aria-expanded="false">
                                            Órganos especiales
                                        </button>
                                    </h2>
                                    <div id="collapse-5" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                </div>
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false">
                                            Órganos Desconcentrados
                                        </button>
                                    </h2>
                                    <div id="collapse-6" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-vcenter">
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
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
