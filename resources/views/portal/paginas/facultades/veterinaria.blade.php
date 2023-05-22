@extends('layouts.portal')

@section('titulo', 'Medicina Veterinaria - Zootecnia')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Medicina Veterinaria - Zootecnia</span></h2>
            <h4>Carrera Profesional de Medicina Veterinaria - Zootecnia de la UNAMAD.</h4>
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
            <span>Medicina Veterinaria - Zootecnia</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir_this();"  class="share-btn">
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
                <div class="box-widget fl-wrap mb-3">   
                    <div class="box-widget-header"></div>                 
                    <div class="box-widget-content fl-wrap">
                        <div class="box-widget-title fl-wrap mt-1">Datos de contacto</div>
                        <div class="contats-list clm fl-wrap">
                            <ul class="no-list-style">
                                <li><span><i class="fal fa-phone"></i> Teléfono :</span> -</li>
                                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:dir_epmvz@unamad.edu.pe">dir_epmvz@unamad.edu.pe</a></li>
                                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="https://goo.gl/maps/KwU7w1xeRXjTrHkG7"> AV. Jorge Chávez N° 1160</a></li>
                                <li><span><i class="fal fa-browser"></i> Web :</span> -</li>
                            </ul>
                        </div>
                        <div class="profile-widget-footer fl-wrap">
                            <div class="card-info-content_social ">
                                <!--<ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=100063722523487" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://wa.me/51974120205" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>-->
                            </div>                           
                        </div>
                    </div>
                </div>                      
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <img src="{{ asset('img/paginas/veterinaria.jpg') }}" alt="" width="100%" height="auto" class="mb-3">
                            <h2 class="mb-3"><strong>Medicina Veterinaria - Zootecnia</strong></h2>
                            <p style="text-align: justify;">La Carrera Profesional de Medicina Veterinaria - Zootecnia en el marco de su mejora continua de la calidad, y de acuerdo a las nuevas directivas de la Nueva Ley N˚ 30220 y el Estatuto de la UNAMAD. Busca formar Médicos Veterinarios Zootecnistas, mediante un proceso de enseñanza- aprendizaje de calidad y el desarrollo de la investigación científica, programas de extensión universitaria y proyección social; Destacando en todos ellos el papel salud, económico y social que tienen los médicos veterinarios y zootecnistas, contribuyendo a formar un profesional de buena calidad que apoye el desarrollo rural, contribuya a la seguridad alimentaria y asista técnicamente en el comercio de las organizaciones de exportación e importación agropecuarios. El comité de homologación del Consejo Panamericano de Educación de Ciencias veterinarias (COPEVET) define el perfil profesional del Médico Veterinario para América latina como un “profesional que en función del mejoramiento de la calidad de vida y del desarrollo humano sustentable, tenga un espíritu ético, científico y humanístico y sea capaz de ejecutar acciones tendientes a la previsión, planificación y resolución de problemas en los diferentes ámbitos de la realidad sociocultural nacional e internacional, referente a todo lo que directa ó indirectamente esté relacionado con las especies animales y su relación con el ser humano”.</p>
                            <p style="text-align: justify;">De acuerdo a las conclusiones sobre Educación Veterinaria organizada por la OIE (Organización Mundial de Sanidad Animal), el Perfil del Veterinario en Latinoamérica Visión al 2030, elaborado por la Asociación Panamericana de Ciencias Veterinarias, el año 2013 y el 1ER EDUCAVET (Educación para la Calidad de la Medicina Veterinaria en el Perú) realizado en julio del 2014, se hace necesario incluir dentro de las nuevas competencias del médico veterinario nuevos conceptos en los programas de formación veterinaria básica inicial y continua en los ámbitos de sanidad animal, epidemiología veterinaria, salud pública (zoonosis, calentamiento global, inocuidad alimentaria, trazabilidad, análisis de riesgo, etc), producción animal, economía, comercio y valores sociales tales como la medicina en animales de compañía, silvestres, acuáticos, deportes y entrenamiento, el bienestar animal y la conservación de la biodiversidad, que aporta beneficios socioeconómicos a la sociedad. Adicionalmente es de gran importancia el conocimiento de las normas sanitarias internacionales y los códigos alimentarios en animales terrestres y acuáticos, así como la utilización de nuevas tecnologías informáticas para el aprendizaje (TICS).</p>
                            <p style="text-align: justify;">En el Perú existen 19 universidades que forman Médicos Veterinarios y/o Médicos Veterinarios Zootecnistas. De ellas once son públicas y ocho privadas. Trece están ubicadas en provincias y seis están en Lima. La carrera profesional de Medicina Veterinaria - Zootecnia es una moderna concepción que conjuga componentes cognitivos, actitudinales, procedimentales y psicomotrices multidisciplinarios, convergentes y complementarios entre sí, para la formación de competencias académico-profesionales en Ciencias Veterinarias y Ciencias Pecuarias. En la región de Madre de Dios ninguna universidad responde a esta denominación y Título Profesional de sus egresados, destacando con esta propuesta la Universidad Nacional Amazónica de Madre de Dios, respondiendo de esta manera a las necesidades generales y demanda social del país en especial de esta región.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>

@endsection