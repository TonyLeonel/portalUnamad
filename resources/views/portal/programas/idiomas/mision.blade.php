@extends('layouts.portal')

@section('titulo', 'Centro de Idiomas - Misión, Visión y Objetivos ')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Centro de Idiomas</span></h2>
            <h4>Centro de formación académica de la UNAMAD.</h4>
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
            <a href="{{ url('programas/idiomas') }}">Centro de Idiomas</a>    
            <span>Misión, Visión y Objetivos</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/idiomas/mision') }}"  class="share-btn">
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
                @include('secciones.menu', $menu)    
                @include('secciones.paginas.idimas_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <h2 style="text-align: center;"><span style="color: rgb(237, 20, 91);"><strong>Misión, Visión y Objetivos</strong></span></h2>
                            <p>&nbsp;</p>
                            <p style="text-align: justify;"><img src="http://localhost:8000/storage/NluIpmJld2eBtl8XQPU6Q5xF7x9MaeCTPN0OyTaK.jpg" alt="" width="100%" height="auto"></p>
                            <p>&nbsp;</p>
                            <p><span style="color: rgb(237, 20, 91);"><strong>NUESTRA MISIÓN</strong></span></p>
                            <p style="text-align: justify;">El Centro de Idiomas de la UNAMAD tiene como misión la formación de profesionales líderes altamente calificados para el desarrollo de las organizaciones y empresas modernas, que contribuyan al desarrollo económico y cultural de la región y el país, dentro del proceso de globalización del mundo actual.</p>
                            <p><span style="color: rgb(237, 20, 91);"><strong>NUESTRA VISIÓN</strong></span></p>
                            <p style="text-align: justify;">Ser el Instituto Superior más importante de la Región, por su calidad, prestigio y cobertura Nacional, al mismo tiempo brindar un servicio de excelencia orientado a formar profesionales capaces de alcanzar un pensamiento racional, una autonomía moral, afectiva e intelectual.</p>
                            <p style="text-align: justify;">Una educación centrada en el estudiante, basada en valores, propiciando un aprendizaje holístico dentro de un clima de armonía y democracia.</p>
                            <p><span style="color: rgb(237, 20, 91);"><strong>OBJETIVOS</strong></span></p>
                            <ul>
                            <li style="text-align: justify;">Ofrecer cursos de idiomas diseñados para la cualificación integral de los estudiantes universitarios, como preparación indispensable para presentar pruebas estandarizadas que les permita cumplir con el requisito de grado exigido por la universidad.</li>
                            <li style="text-align: justify;">Dirigir nuestra enseñanza a los estudiantes de la universidad, graduados y público en general que desean mejorara sus habilidades de lenguaje en los distintos idiomas.</li>
                            <li style="text-align: justify;">Disponer de personal competente y profesionalizado en la enseñanza de idiomas con alto grado de responsabilidad en el desempeño de sus labores académicas y personales.</li>
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection