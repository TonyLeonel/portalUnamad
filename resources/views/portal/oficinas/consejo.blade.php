@extends('layouts.portal')

@section('titulo', 'Consejo Universitario')

@section('css')
<style>
    ul li::marker {
        color: rgb(237, 20, 91);
    }
</style>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Consejo Universitario</span></h2>
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
            <span>Consejo Universitario</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/consejo') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Consejo Universitario</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">El Consejo Universitario es el máximo órgano de gestión, dirección y ejecución académica y administrativa de la UNAMAD.</p>
                            <p class="text-justify">Son funciones del Consejo Universitario, las siguientes:</p>
                            <ul style="list-style: lower-alpha;" class="text-justify">
                                <li style="list-style: lower-alpha;">Aprobar a propuesta del Rector, los instrumentos de planeamiento, Plan de Desarrollo y los documentos de gestión de la universidad de la UNAMAD.</li>
                                <li style="list-style: lower-alpha;">Dictar el reglamento general de la universidad, el reglamento de elecciones y otros reglamentos internos especiales, así como vigilar su cumplimiento.</li>
                                <li style="list-style: lower-alpha;">Aprobar el presupuesto general de la UNAMAD, el plan anual de adquisiciones de bienes y servicios, autorizar los actos y contratos que atañen a la universidad y resolver todo lo pertinente a su economía.</li>
                                <li style="list-style: lower-alpha;">Proponer a la Asamblea Universitaria la creación, fusión, supresión o reorganización de unidades académicas, administrativas e institutos de investigación, de los centros de producción y en general de cualquier unidad de organización de la UNAMAD. </li>
                                <li style="list-style: lower-alpha;">Concordar y ratificar los planes de estudios y de gestión propuestos por las unidades académicas de la UNAMAD. </li>
                                <li style="list-style: lower-alpha;">Nombrar al Director General de Administración y al Secretario General, a propuesta del Rector. </li>
                                <li style="list-style: lower-alpha;">Nombrar, contratar, ratificar, promover y remover a los docentes, a propuesta, en su caso, de las respectivas unidades académicas concernidas. </li>
                                <li style="list-style: lower-alpha;">Nombrar, contratar, ratificar, promover y remover a los docentes, a propuesta de los Consejos de Facultad y previo procedimiento correspondiente. </li>
                                <li style="list-style: lower-alpha;">Nombrar, designar, contratar, promover y remover al personal no docente, a propuesta de la respectiva unidad. </li>
                                <li style="list-style: lower-alpha;">Conferir los grados académicos y los títulos profesionales aprobados por las Facultades y Escuela de Posgrado, así como otorgar distinciones honoríficas y reconocer y revalidar los estudios, grados y títulos de universidades extranjeras a propuesta de las instancias correspondientes, cuando la UNAMAD está autorizada por la SUNEDU.</li>
                                <li style="list-style: lower-alpha;">Aprobar las modalidades de ingreso e incorporación a la UNAMAD, así como el número de vacantes para los procesos de admisión a nivel de pre y posgrado en sus diferentes modalidades, previa propuesta de las Facultades y de conformidad al presupuesto y planes de desarrollo de la UNAMAD.</li>
                                <li style="list-style: lower-alpha;">Fijar las remuneraciones y todo concepto de ingresos de las autoridades, docentes y no docentes de acuerdo a ley.</li>
                                <li style="list-style: lower-alpha;">Ejercer en instancia revisora, el poder disciplinario sobre los docentes, estudiantes y personal administrativo, en la forma y grado que lo determinen los reglamentos sobre la materia.</li>
                                <li style="list-style: lower-alpha;">Celebrar convenios con universidades nacionales, extranjeras, organismos gubernamentales, internacionales u otros sobre investigación científica y tecnológica, así como otros asuntos relacionados con las actividades de la UNAMAD.</li>
                                <li style="list-style: lower-alpha;">Aprobar el Calendario Académico, elevado por el Vicerrectorado Académico.</li>
                                <li style="list-style: lower-alpha;">Autorizar, ratificar o suspender las licencias con o sin goce de haber, para las autoridades, docentes y personal no docente, cuando esta fuera superior a tres (03) mese, previo cumplimiento de las disposiciones y requisitos exigidos por los reglamentos correspondientes.</li>
                                <li style="list-style: lower-alpha;">Aceptar donaciones y legados, de acuerdo a la legislación.</li>
                                <li style="list-style: lower-alpha;">Aprobar el endeudamiento de la UNAMAD, como autorizar el gravamen y enajenación de sus bienes, con cargo de dar cuenta a la Asamblea Universitaria para su ratificación. </li>
                                <li style="list-style: lower-alpha;">Autorizar, ratificar o suspender los viajes nacionales e internacionales en comisión de servicios para las autoridades, docentes y personal no docente de la UNAMAD, previo cumplimiento de las disposiciones y requisitos exigidos por ley y los reglamentos correspondientes</li>
                                <li style="list-style: lower-alpha;">Aprobar el margesí de la UNAMAD.</li>
                                <li style="list-style: lower-alpha;">Resolver todas aquellas circunstancias que impidan el normal desarrollo de las actividades académicas, de investigación y administrativas, cumpliendo con la Ley, el Estatuto y otras normas vigentes.</li>
                                <li style="list-style: lower-alpha;">Tomar conocimiento de parte del Rector de la petición de ingreso de la Policía Nacional y el Ministerio Público, al campus universitario, en caso se haya declarado el estado de emergencia, se produzca un delito flagrante o haya peligro inminente de su perpetración.</li>
                                <li style="list-style: lower-alpha;">Conformar o ratificar (de ser el caso) comisiones investigadoras, de trabajo, y de cualquier otra índole.</li>
                                <li style="list-style: lower-alpha;">Conocer y resolver todos los demás asuntos que no están encomendados a otras autoridades universitarias.</li>
                                <li style="list-style: lower-alpha;">Conferir licencias por año sabático a los docentes que reúnan los requisitos previstos por la Ley Universitaria, el Estatuto y el Reglamento de Año Sabático a propuesta de las Facultades.</li>
                                <li style="list-style: lower-alpha;">Las demás atribuciones que le otorgan la Ley Universitaria y el Estatuto de la Universidad.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection