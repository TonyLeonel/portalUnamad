@extends('layouts.portal')

@section('titulo', 'Decanatura')

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
            <h2><span>Decanatura</span></h2>
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
            <span>Decanatura</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/decanatura') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Decanatura</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">El Decanato es la máxima autoridad de gobierno de la Facultad, representa a la Facultad ante la Asamblea Universitaria y Consejo Universitario conforme lo dispone la Ley Universitaria y el Estatuto de la UNAMAD. Es elegido por un periodo de cuatro (4) años y no hay reelección inmediata.</p>
                            <p class="text-justify">Son funciones de los Decanatos, las siguientes:</p>
                            <ul style="list-style: lower-alpha;" class="text-justify">
                                <li style="list-style: lower-alpha;">Presidir el Consejo de Facultad.</li>
                                <li style="list-style: lower-alpha;">Dirigir administrativamente la Facultad.</li>
                                <li style="list-style: lower-alpha;">Dirigir académicamente la Facultad, a través de los Directores de los Departamentos Académicos, de las Escuelas Profesionales y Unidades de Posgrado.</li>
                                <li style="list-style: lower-alpha;">Representar a la Facultad ante la Asamblea Universitaria y ante el Consejo Universitario, en los términos que establece la Ley Universitaria y el Estatuto.</li>
                                <li style="list-style: lower-alpha;">Designar al Secretario Académico, a los Directores de las Escuelas Profesionales, Instituto de Investigación, las Unidades de Posgrado, centros de producción y demás unidades.</li>
                                <li style="list-style: lower-alpha;">Presentar al Consejo de Facultad, para su aprobación, el plan anual de funcionamiento y desarrollo de la Facultad y su Informe de Gestión. </li>
                                <li style="list-style: lower-alpha;">Aprobar y autorizar los planes de viaje por estudios, investigaciones, eventos académicos a estudiantes y docentes de la UNAMAD. </li>
                                <li style="list-style: lower-alpha;">Proponer al Consejo de Facultad el número de vacantes para el Concurso de Admisión, en concordancia con el Plan de Desarrollo Institucional y el presupuesto asignado a la Facultad.</li>
                                <li style="list-style: lower-alpha;">Firmar certificados de estudios, constancias y documentos similares; así como los diplomas de grados académicos y títulos profesionales de los egresados de la Facultad y tramitarlos a las instancias superiores para su otorgamiento. </li>
                                <li style="list-style: lower-alpha;">Gestionar las prácticas pre-profesionales de acuerdo al reglamento correspondiente.</li>
                                <li style="list-style: lower-alpha;">Proponer al Consejo de Facultad el número de vacantes para el Concurso de Admisión, en concordancia con el Plan de Desarrollo Institucional y el presupuesto asignado a la Facultad. </li>
                                <li style="list-style: lower-alpha;">Autorizar los permisos solicitados por los docentes y personal administrativo de la facultad hasta por un máximo de cinco (05) días por semestre.</li>
                                <li style="list-style: lower-alpha;">Proponer al Consejo de Facultad la constitución de comisiones permanentes y otras que se establezcan en los reglamentos respectivos.</li>
                                <li style="list-style: lower-alpha;">Presentar el Currículo de Estudios, ante el Consejo de Facultad a propuesta de las Escuelas Profesionales. </li>
                                <li style="list-style: lower-alpha;">Proponer al Consejo de Facultad, sanciones a los docentes y estudiantes que incurran en omisión de funciones, faltas entre otros, conforme lo señalan los respectivos reglamentos, en concordancia con el Estatuto de la Universidad.</li>
                                <li style="list-style: lower-alpha;">Emitir Resoluciones de Decanatura.</li>
                                <li style="list-style: lower-alpha;">Hacer cumplir los acuerdos de Consejo de Facultad.</li>
                                <li style="list-style: lower-alpha;">Autorizar las prácticas y salidas de campo que se encuentre dentro del sílabo de asignatura a propuesta del Director de Escuela.</li>
                                <li style="list-style: lower-alpha;">Las demás atribuciones que le asignen la Ley, el Estatuto y los Reglamentos.</li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection