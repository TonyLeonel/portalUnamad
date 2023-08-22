@extends('layouts.portal')

@section('titulo', 'Asamblea Universitaria')

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
            <h2><span>Asamblea Universitaria</span></h2>
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
            <span>Asamblea Universitaria</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/asamblea') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Asamblea Universitaria</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Asamblea Universitaria es el máximo órgano de gobierno de la UNAMAD, representa a la comunidad universitaria y se encarga de dictar las políticas generales de la universidad.</p>                   
                            <p class="text-justify">Su actuación se rige por lo dispuesto en la Ley Universitaria, el Estatuto de la UNAMAD y demás normas conexas; así como, por las políticas nacionales, sectoriales y los lineamientos normativos establecidos por el Ministerio de Educación.</p>
                            <p class="text-justify">Son funciones de la Asamblea Universitaria, las siguientes:</p>
                            <ul style="list-style: lower-alpha;" class="text-justify">
                                <li style="list-style: lower-alpha;">Reformar el Estatuto de la UNAMAD, con la aprobación de por lo menos dos tercios del número de miembros y remitir el nuevo Estatuto a la SUNEDU.</li>
                                <li style="list-style: lower-alpha;">Velar por el adecuado cumplimiento de los instrumentos de planeamiento de la universidad, aprobados por el Consejo Universitario.</li>
                                <li style="list-style: lower-alpha;">Declarar la vacancia del Rector o Vicerrectores, de acuerdo a las causales expresamente señaladas en la Ley y el Estatuto, a través de una votación calificada de dos tercios (2/3) del número legal de miembros. </li>
                                <li style="list-style: lower-alpha;">Declarar la vacancia de los representantes docentes y estudiantes ante la Asamblea. Informando al Comité Electoral Universitario a fin de cubrir sus reemplazos de acuerdo al Estatuto.</li>
                                <li style="list-style: lower-alpha;">Elegir a los integrantes del Comité Electoral Universitario y del Tribunal de Honor Universitario, como también, aceptar o rechazar la renuncia de sus miembros y declarar la vacancia de sus cargos por las causales previstas en el Estatuto.</li>
                                <li style="list-style: lower-alpha;">Designar anualmente entre sus miembros, a los integrantes de la Comisión Permanente encargada de fiscalizar la gestión de la universidad. Los resultados de dicha fiscalización se informan a la Contraloría General de la República y a la SUNEDU.</li>
                                <li style="list-style: lower-alpha;">Evaluar y aprobar la memoria anual, el informe semestral de gestión del Rector y el informe de rendición de cuentas del presupuesto anual ejecutado.</li>
                                <li style="list-style: lower-alpha;">Acordar la constitución, fusión, reorganización, separación y supresión de Facultades, Escuelas y Unidades de Posgrado, Escuelas Profesionales, Departamentos Académicos, Centros de Investigación y Producción, y de los Institutos, a propuesta del Consejo Universitario.</li>
                                <li style="list-style: lower-alpha;">Declarar en receso temporal a la universidad o a cualquiera de sus unidades académicas, cuando las circunstancias lo requieran, con cargo a informar a la SUNEDU.</li>
                                <li style="list-style: lower-alpha;">Pronunciarse sobre temas de interés público del quehacer internacional, nacional regional y local. </li>
                                <li style="list-style: lower-alpha;">Ratificar el Plan Anual de Desarrollo de la universidad, aprobado por el Consejo Universitario, y velar por su cumplimiento.</li>
                                <li style="list-style: lower-alpha;">Aprobar y regirse por su propio reglamento.</li>
                                <li style="list-style: lower-alpha;">Las demás atribuciones que le otorgan la Ley Universitaria y el Estatuto de la Universidad.</li>
                            </ul>
                        </div>                    
                        <div class="clearfix"></div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection