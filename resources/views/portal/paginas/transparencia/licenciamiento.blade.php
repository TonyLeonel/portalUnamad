@extends('layouts.portal')

@section('titulo', 'Transparencia Universitaria - Licenciamiento Institucional')


@section('js')
<script src="{{ asset('js/portal/componentes.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/biblioteca.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Licenciamiento Institucional</span></h2>
            <h4>Licenciamiento Institucional de la UNAMAD.</h4>
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
            <span>Licenciamiento</span>
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
                    <div class="list-single-main-item fl-wrap">
                        <div class="list-single-main-item-title big-lsmt fl-wrap mb-4">
                            <h3>LICENCIAMIENTO INSTITUCIONAL</h3>
                        </div>
                        <div class="fl-wrap mb-4">
                            <div class="nav_pills">
                                <a href="javascript:void(0);" onclick="activar('informacion');" class="nav_pills_item active" id="nav_informacion">INFORMACION GENERAL DE LA UNIVERSIDAD</a>
                                <a href="javascript:void(0);" onclick="activar('condicion1');" class="nav_pills_item" id="nav_condicion1">CONDICIÓN I</a>
                                <a href="javascript:void(0);" onclick="activar('condicion3');" class="nav_pills_item" id="nav_condicion3">CONDICIÓN III</a>
                                <a href="javascript:void(0);" onclick="activar('condicion4');" class="nav_pills_item" id="nav_condicion4">CONDICIÓN IV</a>
                                <a href="javascript:void(0);" onclick="activar('condicion5');" class="nav_pills_item" id="nav_condicion5">CONDICIÓN V</a>
                                <a href="javascript:void(0);" onclick="activar('condicion6');" class="nav_pills_item" id="nav_condicion6">CONDICIÓN VI</a>
                                <a href="javascript:void(0);" onclick="activar('condicion7');" class="nav_pills_item" id="nav_condicion7">CONDICIÓN VII</a>
                            </div>
                        </div>     
                        <div class="fl-wrap">                  
                            <div class="collapse_container">
                                <div id="informacion" class="collapse_item active">                                    
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>INFORMACION GENERAL DE LA UNIVERSIDAD</b></h6>
                                        <ul class="mb-3">
                                            <li>REPORTE FINAL DE EJECUCION DEL PUR 2018. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8590-reporte-final-de-ejecucion-del-pur-2018/file.html" target="_blank">Descargar</a></li>
                                            <li>ACTIVIDADES PUR PROGRAMADO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8591-actividades-pur-programado/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>ACTIVIDADES PUR EJECUTADO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8593-actividades-pur-ejecutado/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>CARTERA DE PROYECTOS 2020 - 2022 - UNAMAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8429-cartera-de-proyectos-2020-2022-unamad/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>ANEXOS</b></h6>
                                        <ul>
                                            <li>MEMORIA ANUAL 2018. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/documentos-de-gestion/memoria-anual/8101-memoria-anual-2018/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>MEMORIA ANUAL 2017. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/documentos-de-gestion/memoria-anual/8100-memoria-anual-2017/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>MEMORIA ANUAL 2016. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/documentos-de-gestion/memoria-anual/8099-memoria-anual-2016-modificado/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>MEMORIA ANUAL 2013. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8471-memoria-anual-2013/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>                                            
                                    </div>
                                </div>
                                <div id="condicion1" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 2</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-DISEÑO CURRICULAR DE ADMINISTRACIÓN Y NEGOCIOS INTERNACIONALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8489-mv1-dise-o-curricular-de-administracion-y-negocios-internacionales/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE CONTABILIDAD Y FINANZAS.<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8490-mv1-dise-o-curricular-de-contabilidad-y-finanzas/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE DERECHO Y CIENCIAS POLITICAS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8491-mv1-dise-o-curricular-de-derecho-y-ciencias-politicas/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE ECOTURISMO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8492-mv1-dise-o-curricular-de-ecoturismo/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE EDUCACIÓN ESPECIALIDAD INICIAL Y ESPECIAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8493-mv1-dise-o-curricular-de-educacion-especialidad-inicial-y-especial/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE EDUCACIÓN ESPECIALIDAD MATEMATICA Y COMPUTACIÓN. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8494-mv1-dise-o-curricular-de-educacion-especialidad-matematica-y-computacion/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE ENFERMERÍA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8495-mv1-dise-o-curricular-de-enfermeria/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE INGENIERIA AGROINDUSTRIAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8496-mv1-dise-o-curricular-de-ingenieria-agroindustrial/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE INGENIERIA DE SISTEMAS E INFORMÁTICA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-2/8576-dise-o-curricular-de-ing-de-sistemas/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE INGENIERIA FORESTAL Y MEDIO AMBIENTE. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8497-mv1-dise-o-curricular-de-ingenieria-forestal-y-medio-ambiente/file.html">Descargar</a></li>
                                            <li>MV1-DISEÑO CURRICULAR DE MEDICINA VETERINARIA-ZOOTECNIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8498-mv1-dise-o-curricular-de-medicina-veterinaria-zootecnia/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>MV2-FORMATO DE LICENCIAMIENTO_C1. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8506-mv2-formato-de-licenciamiento-c1/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>Formato de licenciamiento C1 - Malla Curricular y análisis de créditos académicos. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8440-fc1-malla-curricular-y-analisis-de-creditos-academicos-a2/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 5</b></h6>
                                        <ul class="mb-3">
                                            <li>REGLAMENTO GENERAL DE ADMISIÓN. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8445-indicador-5-reglamento-general-de-admision/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 6</b></h6>
                                        <ul class="mb-3">
                                            <li>
                                                VACANTES POSTULANTES INGRESANTES
                                                <ul>
                                                    <li>2017-1. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8574-2017-1/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                                    <li>2017-2. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8569-2017-2/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                                    <li>2018-1. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8570-2018-1/file.html">Descargar</a></li>
                                                    <li>2018-2. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8571-2018-2/file.html">Descargar</a></li>
                                                    <li>2019-1. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8572-2019-1/file.html">Descargar</a></li>
                                                    <li>2019-2. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/vacantes-postulantes-ingresantes/8573-2019-2/file.html">Descargar</a></li>
                                                </ul>
                                            </li>
                                        </ul>                                       
                                        <ul class="mb-3">
                                            <li>MATRICULADOS 2017 - 2019. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-6/matriculados/8568-matriculados-2017-2019-1/file.html">Descargar</a></li>
                                            <li>OTROS LISTA DE INGRESANTES CLASIFICADOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8510-otros-lista-de-ingresantes-clasificados2/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 7</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 PLAN DE GESTION DE LA CALIDAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-7/8567-plan-de-gestion-de-la-calidad-unamad/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>INFORME DE CUMPLIMIENTO DE PLAN DE GESTION DE LA CALIDAD INSTITUCIONAL.<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-7/8446-indicador-7-informe-de-cumplimiento-de-plan-de-gestion-de-la-calidad-institucional/file.html" target="_blank" rel="noopener">Descargar</a><span style="font-size: 10pt;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="condicion3" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 17</b></h6>
                                        <ul class="mb-3">
                                        <li>MV4 CONSTANCIA DE POSESION. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8509-mv4-constancia-de-posesion/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 20</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 PROTOCOLO DE ENFERMERIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8476-mv1-protocolo-de-enfermeria/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LA PLANTA PILOTO DE FRUTAS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8477-mv1-protocolo-de-la-planta-piloto-de-frutas/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE ANALISIS DE ALIMENTOS. <a href="https://unamad.edu.pe/descargas/send/442-2019/16769-mv1-protocolo-de-laboratorio-de-analisis-de-alimentos.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE ANATOMIA DE LA MADERA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8479-mv1-protocolo-de-laboratorio-de-anatomia-de-la-madera/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE CONTROL DE CALIDAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8480-mv1-protocolo-de-laboratorio-de-control-de-calidad/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE MICROBIOLOGIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8481-mv1-protocolo-de-laboratorio-de-microbiologia/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE PRESERVADO DE LA MADERA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8482-mv1-protocolo-de-laboratorio-de-preservado-de-la-madera/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO DE PROCESOS AGROINDUSTRIALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8483-mv1-protocolo-de-laboratorio-de-procesos-agroindustriales/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DE LABORATORIO PROPIEDADES DE LA MADERA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8484-mv1-protocolo-de-laboratorio-propiedades-de-la-madera/file.html">Descargar</a></li>
                                            <li>MV1 PROTOCOLO DEL CETERGEN. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8485-mv1-protocolo-del-cetergen/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 27</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-FORMATO DE LICENCIAMIENTO C6. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8499-mv1-formato-de-licenciamiento-c6/file.html">Descargar</a></li>
                                            <li>Formato de licenciamiento C6 - Relacion de laboratorios y talleres de enseñanza. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8442-formato-de-licenciamiento-c6-relacion-de-laboratorios-y-talleres-de-ensenanza/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 28</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 FORMATO DE LICENCIAMIENTO C7. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8473-mv1-formato-de-licenciamiento-c7/file.html">Descargar</a></li>
                                            <li>Formato de licenciamiento C7 - Equipos de laboratorios y talleres de enseñanza. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8443-formato-de-licenciamiento-c7-equipos-de-laboratorios-y-talleres-de-ensenanza/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 30</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 PRESUPUESTO DE MANTENIMIENTO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8475-mv1-presupuesto-de-mantenimiento/file.html">Descargar</a></li>
                                            <li>MV2 PLAN DE MANTENIMIENTO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8505-mv2-plan-de-mantenimiento/file.html">Descargar</a></li>
                                            <li>OTROS RELACION DE PERSONAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8520-otros-relacion-de-personal/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019)&nbsp; ind 30 UNAMAD ACTUALIZADO AL 31 DE JULIO MANTENIMIENTO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-30/8554-cadena-fp-y-de-gastos-2018-2019-indicador-30-unamad-actualizado-al-31-de-julio-mantenimiento/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-30/8555-lista-de-personal-7/file.html">Descargar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="condicion4" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 31</b></h6>
                                        <ul class="mb-3">
                                            <li>OTROS REGLAMENTO DE EVALUACION Y MONITOREO DEL DOCENTE INVESTIGADOR. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8516-otros-reglamento-de-evaluacion-y-monitoreo-del-docente-investigador/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 32</b></h6>
                                        <ul class="mb-3">
                                            <li>MV2 RELACION DE PERSONAL DEL ORGANO DE INVESTIGACION. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8508-mv2-relacion-de-personal-del-organo-de-investigacion-n2/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 33</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 LINEAS DE INVESTIGACION. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-33/8552-lineas-de-investigacion/file.html">Descargar</a></li>
                                            <li>OTROS RELACION DE ASIGNATURA VINCULADAS A LA INVESTIGACION. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-33/8553-programas-academicos-vinculadas-a-investigacion-formativa/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 36</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 FORMATO DE LICENCIAMIENTO C9. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8472-mv1-formato-de-licenciameinto-c9/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 38</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1 REGISTRO DE PROYECTOS DE INVESTIGACION DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8486-mv1-registro-de-proyectos-de-investigacion-docentes/file.html">Descargar</a></li>
                                            <li>MV1 REGISTRO DE PROYECTOS DE TESIS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8487-mv1-registro-de-proyectos-de-tesis/file.html">Descargar</a></li>
                                            <li>OTROS REGLAMENTO Y BASE DE COVOCATORIA FONDO CONCURSABLE DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8517-otros-reglamento-y-base-de-covocatoria-fondo-concursable-docentes/file.html">Descargar</a></li>
                                            <li>OTROS REGLAMENTO Y BASE DE COVOCATORIA FONDO CONCURSABLE TESISTAS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8518-otros-reglamento-y-base-de-covocatoria-fondo-concursable-tesistas/file.html">Descargar</a></li>
                                            <li>OTROS RELACION DE PROYECTOS DE INVESTIGACION CON FONDOS EXTERNOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8521-otros-relacion-de-proyectos-de-investigacion-con-fondos-externos/file.html">Descargar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="condicion5" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 40</b></h6>
                                        <ul class="mb-3">
                                            <li>INDICADOR_40 -MV1- FORMATO C9. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8450-indicador-40-mv1-formato-c9/file.html">Descargar</a></li>
                                            <li>INDICADOR_40 OTROS INFORMES DE DESABASTECIMIENTO DE DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8451-indicador-40-otros-informes-de-desabastecimiento-de-docentes/file.html">Descargar</a></li>
                                            <li>INDICADOR_40 OTROS INFORMES DE DOCENTES CON LICENCIA Y RENUNCIA 2018-II. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-40/8548-informe-de-docentes-con-licencias-de-los-semestres-2019-i-y-2018-ii/file.html">Descargar</a></li>
                                            <li>INDICADOR_40 OTROS INFORMES DE OTRAS OBSERVACIONES A DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8453-indicador-40-otros-informes-de-otras-observaciones-a-docentes/file.html">Descargar</a></li>
                                            <li>Formato de licenciamiento C9 - Relación de Docentes. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8444-formato-de-licenciamiento-c9-relacion-de-docentes/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 41</b></h6>
                                        <ul class="mb-3">
                                            <li>INDICADOR_41 - OTROS- REGLAMENTO DE EVALUACION PARA NOMBRAMIENTO Y PROMOCION DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-41/8543-reglamento-de-evaluacion-para-nombramiento-y-promocion-de-los-docentes/file.html">Descargar</a></li>
                                            <li>INDICADOR_41 - OTROS- REGLAMENTO DE EVALUACION PARA RATIFICACION DE DOCENTES ORDINARIOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8456-indicador-41-otros-reglamento-de-evaluacion-para-ratificacion-de-docentes-ordinarios/file.html">Descargar</a></li>
                                            <li>INDICADOR_41 INFORME SOBRE PROCESO DE RATIFICACION DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8454-indicador-41-informe-sobre-proceso-de-ratificacion-docentes/file.html">Descargar</a></li>
                                            <li>INDICADOR_41 -MV1- REGLAMENTO DE SELECCION DOCENTE. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8455-indicador-41-mv1-reglamento-de-seleccion-docente/file.html">Descargar</a></li>
                                            <li>INDICADOR_41 OTROS BASES DE EVALUACION PARA NOMBRAMIENTO Y PROMOCION DE DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-41/8546-bases-de-evaluacion-para-nombramiento-y-promocion-docente/file.html">Descargar</a></li>
                                            <li>INDICADOR 41_BASES RATIFICACION DOCENTE 2019. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8454-indicador-41-informe-sobre-proceso-de-ratificacion-docentes/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                            <li>INDICADOR 41 INFORME DE OBSERVACIONES SOBRE BAJA DE EJECUCION PRESUPUESTAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8448-indicador-41-informe-de-observaciones-sobre-baja-de-ejecucion-presupuestal/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2">A. POBLACION ESTUDIANTIL</h6>
                                        <ul class="mb-3">
                                            <li>CARGA ACADEMICA 2018-II. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8428-carga-academica-2018-ii/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>DETALLE DE LA POBLACION ESTUDIANTIL POR CADA ASIGNATURA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8434-detalle-de-la-poblacion-estudiantil-por-cada-asignatura/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2">B. RESOLUCIÓN DE PROCESOS DE CONVOCATORIA 2018</h6>
                                        <ul class="mb-3">
                                            <li>003-2018-CU-PRIMERA CONVOCATORIA. <a href="https://unamad.edu.pe/descargas/send/442-2019/17016-003-2018-cu-primera-convocatoria.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>065-2018-CU-SEGUNDA CONVOCATORIA. <a href="https://unamad.edu.pe/descargas/send/442-2019/17017-065-2018-cu-segunda-convocatoria.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>111-2018-CU-TERCERA CONVOCATORIA. <a href="https://unamad.edu.pe/descargas/send/442-2019/17018-111-2018-cu-tercera-convocatoria.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>294-2018-CU-CUARTA CONVOCATORIA. <a href="https://unamad.edu.pe/descargas/send/442-2019/17019-294-2018-cu-cuarta-convocatoria.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2">C. RESOLUCIÓN DE CONTRATO DE DOCENTES 2018 POR PROCESO DE CONVOCATORIA</h6>
                                        <ul class="mb-3">
                                            <li>
                                                DOCENTES INVITADOS SEMESTRE I
                                            </li>
                                        </ul>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;127-2018-UNAMAD-CU-DFEC. <a href="https://unamad.edu.pe/descargas/send/442-2019/17020-127-2018-unamad-cu-dfec.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;174-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17021-174-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;175-2018-UNAMAD-CU-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17022-175-2018-unamad-cu-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;177-2018-UNAMAD-CU-DFEC. <a href="https://unamad.edu.pe/descargas/send/442-2019/17023-177-2018-unamad-cu-dfec.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;195-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17024-195-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;209-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17025-209-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a></p>
                                        <ul style="list-style-type: circle;">
                                        <li>DOCENTES INVITADOS SEMESTRE II</li>
                                        </ul>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 303-2018-UNAMAD-CU-DFEC. <a href="https://unamad.edu.pe/descargas/send/442-2019/17026-303-2018-unamad-cu-dfec.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;304-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17027-304-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar&nbsp;</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;305-2018-UANAMD-CU-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17028-305-2018-uanamd-cu-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;325-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17029-325-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;327-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17030-327-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a></p>
                                        <ul style="list-style-type: circle;">
                                        <li>GANADORES 1RA CONVOCATORIA</li>
                                        </ul>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;057-2018-UNAMAD-CU-DFEC-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17031-057-2018-unamad-cu-dfec-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp;064-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17032-064-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a></p>
                                        <ul style="list-style-type: circle;">
                                        <li>GANADORES 2DA CONVOCATORIA</li>
                                        </ul>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 080-2018-UNAMAD-CU-DFEC. <a href="https://unamad.edu.pe/descargas/send/442-2019/17033-080-2018-unamad-cu-dfec.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 108-2018-UNAMAD-CU-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17034-108-2018-unamad-cu-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 109-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17035-109-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a></p>
                                        <ul style="list-style-type: circle;">
                                        <li>GANADORES 3RA CONVOCATORIA</li>
                                        </ul>
                                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 124-2018-UNAMAD-CU-DFEC. <a href="https://unamad.edu.pe/descargas/send/442-2019/17036-124-2018-unamad-cu-dfec.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 125-2018-UNAMAD-CU-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17037-125-2018-unamad-cu-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 126-2018-UNAMAD-CU-DFED. <a href="https://unamad.edu.pe/descargas/send/442-2019/17038-126-2018-unamad-cu-dfed.html" target="_blank" rel="noopener noreferrer">Descargar</a><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- 135-2018-UNAMAD-CU-DFI. <a href="https://unamad.edu.pe/descargas/send/442-2019/17039-135-2018-unamad-cu-dfi.html" target="_blank" rel="noopener noreferrer">Descargar</a></p>
                                        <p>- CUADRO DE ESTUDIANTES MATRICULADOS AFECTADOS_2018-II. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8432-cuadro-de-estudiantes-matriculados-afectados-2018-ii/file.html" target="_blank" rel="noopener">Descargar</a></p>
                                        <p>-&nbsp;PROCESO DE SELECCION DE DOCENTES 2014 - 2019 VF17.9.2019.pdf&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17408-proceso-de-seleccion-de-docentes-2014-2019.html" target="_blank" rel="noopener">Descargar</a></p>
                                        <p>-&nbsp;PROCESO DE SELECCION DE DOCENTES 2014 - 2019 VF17.9.2019.xls <a href="https://unamad.edu.pe/descargas/send/442-2019/17409-proceso-de-seleccion-de-docentes-2014-2019-vf17-9-2019.html" target="_blank" rel="noopener">Descragar</a></p>
                                        <p>RESOLUCIONES DE LAS CONVOCATORIAS 2019</p>
                                        <ul style="list-style-type: disc;">
                                        <li>1era. CONVOCATORIA 068-2019-CU-FACULTAD DE ECOTURISMO. <a href="https://unamad.edu.pe/descargas/send/442-2019/17410-1era-convocatoria-068-2019-cu-facultad-de-ecoturismo.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>2da. CONVOCATORIA 097-2019-CU-FACULTAD ECOTURISMO. <a href="https://unamad.edu.pe/descargas/send/442-2019/17411-2da-convocatoria-097-2019-cu-facultad-ecoturismo.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>2da. CONVOCATORIA 098-2019-CU-FACULTAD INGENIERIA.&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17412-2da-convocatoria-098-2019-cu-facultad-ingenieria.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>2da. CONVOCATORIA 120-2019-CU-FACULTAD EDUCACIÓN.&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17413-2da-convocatoria-120-2019-cu-facultad-educacion.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>3ra. CONVOCATORIA 151-2019-CU-FACULTAD EDUCACIÓN.&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17414-3ra-convocatoria-151-2019-cu-facultad-educacion.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>3ra. CONVOCATORIA 152-2019-CU-FACULTAD INGENIERIA.&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17415-3ra-convocatoria-152-2019-cu-facultad-ingenieria.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>3ra. CONVOCATORIA 153-2019-CU-FACULTAD ECOTURISMO.&nbsp;<a href="https://unamad.edu.pe/descargas/send/442-2019/17416-3ra-convocatoria-153-2019-cu-facultad-ecoturismo.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>REGLAMENTO PARA SELECION DE DOCENTES Y JEFES DE PRACTICA. <a href="https://unamad.edu.pe/descargas/send/359-consejo-universitario-2019/14293-resolucion-n-092-2019-unamad-cu.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>RATIFICACION DE DOCENTES ORDINARIOS.&nbsp;<a href="https://unamad.edu.pe/descargas/send/359-consejo-universitario-2019/15703-resolucion-n-254-2019-unamad-cu.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>BASES DEL PROCESO DE SELECCIÓN DE DOCENTES.&nbsp;<a href="https://unamad.edu.pe/descargas/send/265-consejo-universitario-2018/13992-resolucion-n-489-2018-unamad-cu.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>BASES DE LA II CONVOCATORIA DEL CONCURSO DE SELECCIÓN DE DOCENTES.&nbsp;<a href="https://unamad.edu.pe/descargas/send/359-consejo-universitario-2019/14136-resolucion-n-093-2019-unamad-cu.html" target="_blank" rel="noopener">Descargar</a></li>
                                        <li>BASES DE LA III CONVOCATORIA DE SELECCIÓN DE DOCENTES.&nbsp;<a href="https://unamad.edu.pe/descargas/send/359-consejo-universitario-2019/14501-resolucion-n-130-2019-unamad-cu.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>
                                        <p>- DOCENTES INVITADOS 110-2019-R-FACULTAD DE INGENIERIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8436-docentes-invitados-110-2019-r-facultad-de-ingenieria/file.html" target="_blank" rel="noopener">Descargar</a></p>
                                        <p>-&nbsp;DOCENTES INVITADOS 111-2019-R-FACULTAD DE ECOTURISMO.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8437-docentes-invitados-111-2019-r-facultad-de-ecoturismo/file.html" target="_blank" rel="noopener">Descargar</a></p>
                                        <p>-&nbsp;DOCENTES INVITADOS 117-2019-R-FACULTAD DE EDUCACIÓN.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8438-docentes-invitados-1117-2019-r-facultad-de-educaci-n/file.html" target="_blank" rel="noopener">Descargar</a></p>
                                        <p>- CUADRO RESUMEN DE TESIS ASESORADAS.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8433-cuadro-resumen-de-tesis-asesoradas/file.html" target="_blank" rel="noopener">Descargar</a></p>
                                    </div>
                                </div>
                                <div id="condicion6" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 43</b></h6>
                                        <ul class="mb-3">
                                            <li>MV2-PRESPUESTO DE CENTRO MEDICO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8507-mv2-prespuesto-de-centro-medico/file.html">Descargar</a></li>
                                            <li>OTROS- PERSONAL DEL SERVICIO MÉDICO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8513-otros-personal-del-servicio-medico/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 43 TOPICO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-43/8542-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-43-topico/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-43/8541-lista-de-personal-6/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 44</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-PRESUPUESTO DE BIENESTAR UNIVERSITARIO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8503-mv1-presupuesto-de-bienestar-universitario/file.html">Descargar</a></li>
                                            <li>OTROS-PERSONAL DE BIENESTAR UNIVERSITARIO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-44/8540-lista-de-personal-5/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 44 SERVICIOS SOCIALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-44/8539-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-44-servicios-sociales-final/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL BIENESTAR UNIVERSITARIO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-44/8540-lista-de-personal-5/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 45</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-PRESPUESTO DE SERVICIOS PSICOPEDAGOGICOS.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8502-mv1-prespuesto-de-servicios-psicopedagogicos/file.html">Descargar</a></li>
                                            <li>OTROS- PERSONAL DE SERVICIOS PSICOPEDAGOGICOS.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8511-otros-personal-de-servicios-psicopedagogicos/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 45 SER PEDAGOGICO.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-45/8538-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-45-ser-pedagogico/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL SERVICIOS PSICOPEDAGOGICOS.&nbsp;<a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-45/8537-lista-de-personal-4/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 46</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-PRESPUESTO DE SERVICIOS DEPORTIVOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8501-mv1-prespuesto-de-servicios-deportivos/file.html">Descargar</a></li>
                                            <li>OTROS- PERSONAL DEL SERVICIO DEPORTIVOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8512-otros-personal-del-servicio-deportivos/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 46 DEPORTE. <a href="https://unamad.edu.pe/descargas/send/442-2019/16891-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-46-deporte.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL SERVICIOS DEPORTIVOS. <a href="https://unamad.edu.pe/descargas/send/442-2019/16892-lista-de-personal-servicios-deportivos.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 47</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-PRESPUESTO DE SERVICIOS CULTURALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8500-mv1-prespuesto-de-servicios-culturales/file.html">Descargar</a></li>
                                            <li>OTROS- PERSONAL DEL SERVICIOS CULTURALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8514-otros-personal-del-servicios-culturales/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 47 SERVICIOS CULTURALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-47/8533-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-47-servicios-culturales-1/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL SERVICIOS CULTURALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-47/8534-lista-de-personal-2/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 48</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-PRESUPUESTO DE SERVICIOS DE SEGURIDAD Y VIGILANCIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8504-mv1-presupuesto-de-servicios-de-seguridad-y-vigilancia/file.html">Descargar</a></li>
                                            <li>OTROS- PERSONAL DEL SERVICIOS DE SEGURIDAD Y VIGILANCIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8515-otros-personal-del-servicios-de-seguridad-y-vigilancia/file.html">Descargar</a></li>
                                            <li>CADENA FP Y DE GASTOS (2018-2019) UNAMAD INDICADOR 48 SEGURIDAD Y VIGILANCIA. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-48/8531-cadena-fp-y-de-gastos-2018-2019-unamad-indicador-48-seguridad-y-vigilancia-1/file.html">Descargar</a></li>
                                            <li>LISTA DE PERSONAL SERVICIOS DE SEGURIDAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-48/8532-lista-de-personal-1/file.html">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 50</b></h6>
                                        <ul class="mb-3">
                                            <li>MV1-ACERVO BIBLIOGRAFICO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8488-mv1-acervo-bibliografico/file.html">Descargar</a></li>
                                            <li>INDICADOR 50_MV1_ACERVO BIBLIOGRÁFICO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8449-indicador-50-mv1-acervo-bibliografico/file.html">Descargar</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="condicion7" class="collapse_item">
                                    <div class="pagina_estilo_correcion">
                                        <h6 class="mb-2"><b>Indicador 51</b></h6>
                                        <ul class="mb-3">
                                            <li>PLAN DEL AREA DE SEGUIMIENTO AL GRADUADO. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8524-plan-del-area-de-seguimiento-al-graduado/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        <li>RESOLUCIONES DE CREACION Y FUNCIONES DE AREA</li>
                                        </ul>
                                        <ul style="list-style-type: circle;">
                                            <li>RESOLUCION N 140-2017-UNAMAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/resoluciones/resoluciones-de-consejo-universitario/consejo-universitario-2017/1671-resolucion-n-140-2017-unamad-cu/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>RESOLUCION N 529-2017-UNAMAD-CU. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/resoluciones/resoluciones-de-consejo-universitario/consejo-universitario-2017/2044-resolucion-n-529-2017-unamad-cu/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <ul class="mb-3">
                                            <li>Egresados (HASTA 2019-I) SUNEDU. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8439-egresados-hasta-2019-i-sunedu/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>SEGUIMIENTO AL GRADUADO UNAMAD. <a href="https://unamad.edu.pe/descargas/send/442-2019/16985-seguimiento-al-graduado-unamad.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 52</b></h6>
                                        <ul class="mb-3">
                                            <li>ACTIVIDADES PARA LOS EGRESADOS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8592-actividades-para-los-egresados/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                            <li>FICHA PARA REGISTRO DE EMPRESA - BOLSA LABORAL. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8441-ficha-para-registro-de-empresa-bolsa-laboral/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 53</b></h6>
                                        <ul class="mb-3">
                                            <li>INDICADOR_53 MV1 REGISTRO DE CONVENIOS DE PRACTICAS. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8457-indicador-53-mv1-registro-de-convenios-de-practicas/file.html">Descargar</a></li>
                                            <li>INDICADOR_53 OTROS RELACIONDE ESTUDIANTES QUE REALIZARON PRACTICAS PRE-PROFESIONALES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-53/8526-relacion-de-estudiantes-que-realizaron-practicas-pre-profesionales/file.html">Descargar</a></li>
                                            <li>CONVENIOS VIGENTES DE LA UNAMAD. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/indicador-53/8525-convenios-vigentes-parte2/file.html" target="_blank" rel="noopener noreferrer">Descargar</a></li>
                                        </ul>
                                        <h6 class="mb-2"><b>Indicador 54</b></h6>
                                        <ul class="mb-3">
                                            <li>INDICADOR_54 OTROS REGISTRO DE CONVENIOS VIGENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8459-indicador-54-otros-registro-de-convenios-vigentes/file.html">Descargar</a></li>
                                            <li>INDICADOR_54 OTROS RELACION DE PASANTIAS REALIZADAS POR DOCENTES. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8460-indicador-54-otros-relacion-de-pasantias-realizadas-por-docentes/file.html">Descargar</a></li>
                                            <li>INFORMACIÓN SUNEDU 2019. <a href="https://unamad.edu.pe/intranet-unamad/descargar-documentos/licenciamiento/2019-3/8461-informacion-sunedu-2019/file.html" target="_blank" rel="noopener">Descargar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--   list-single-main-item end -->                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection