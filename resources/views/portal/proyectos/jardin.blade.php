@extends('layouts.portal')

@section('titulo', 'Cuna Jardin')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Cuna Jardin</span></h2>
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
            <span>Cuna Jardin</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('proyectos/jardin') }}" class="share-btn">
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
                            <h3 class="fw-bold mb-3" style="color: rgb(237, 20, 91);">Cuna Jardin</h3>  
                            <img src="{{ asset('img/back2.jpg') }}" alt="background" class="mb-4" style="width: 100%;">
                            <p class="text-justify">La Educación Inicial ha adquirido en los últimos años una creciente importancia en el sistema educativo peruano, en razón de los beneficios que otorga al desarrollo de los niños, niñas y a sus familias, según confirman distintas experiencias educativas y estudios a nivel nacional o internacional por ello la Ley general de Educación define a la Educación Inicial como el primer nivel de la Educación física regular. La educación es un fenómeno personal histórico social ideológico, nace en la sociedad y es garantía de su supervivencia y progreso. Ella es parte de la realidad social, por tanto, no debe ser un proceso divorciado de su contexto, sino vinculado a su propia dinámica histórica (como proceso socio cultural, facilita y hace posible el desarrollo integral de la persona, lo cual resulta indispensable para el desarrollo socioeconómico de un país.</p>
                            <p class="text-justify">La calidad y equidad con la que se desarrolle es aquello que permite que un país logre avances económicos y culturales) es la herramienta para el desarrollo de la persona y, por ende, de la familia y de la sociedad promueve la verdadera libertad a través del pensamiento y permite, con el conocimiento, acercar a las personas, romper las barreras del miedo y de la injusticia, que son muchas veces producto de la ignorancia.</p>
                            <p class="text-justify">Los criterios que deben tenerse en cuenta para el normal funcionamiento de los ambientes especializados y aulas comunes, de modo que puedan estar preparadas para el uso de equipamiento informático, con las normas de seguridad y de exclusividad que exige una enseñanza moderna en el marco de los planteamientos pedagógicos actuales para cada uno de los niveles y modalidades educativos adecuados a la realidad geográfica, urbana, rural periurbano.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection