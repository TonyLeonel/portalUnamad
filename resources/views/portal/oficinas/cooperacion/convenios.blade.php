@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales -  Convenios')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales - Convenios</span></h2>
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
            <a href="{{ url('oficinas/cooperacion') }}">Oficina de Cooperación y Relaciones Internacionales</a>    
            <span>Convenios</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion/convenios') }}"  class="share-btn">
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
                @include('secciones.paginas.coperacion_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p><span style="color: rgb(53, 152, 219);"><strong>INFORMACIÓN SOBRE CONVENIOS</strong></span></p>
                            <p><strong>¿QUÉ ES UN CONVENIO O ACUERDO DE COOPERACIÓN?</strong></p>
                            <p>También conocido como convenio marco o general, es un instrumento de cooperación suscrito entre dos o más instituciones dedicadas a la enseñanza de la educación universitaria superior o a la investigación, sin implicaciones financieras directas, que permiten la cooperación promoviendo el desarrollo de investigaciones u otras actividades académicas y culturales.</p>
                            <p>Estos convenios tienen como propósito fomentar programas de intercambios académicos; promover las investigaciones conjuntas; efectuar proyectos de desarrollo; establecer convenios para prácticas pre profesionales a favor de nuestros estudiantes, realizar transferencia de donaciones, desarrollar prestaciones o contrataciones de servicios educativos y establecer directivas para la cooperación interinstitucional, entre otros.</p>
                            <p>Un convenio de cooperación funciona, en conjunto, mediante Convenios Específicos, los cuales promueven la cooperación en áreas de interés común, y tienen la función de implementar y efectuar las modalidades de cooperación mencionadas anteriormente, definiendo así las actividades y el plan de trabajo a ser ejecutados</p>
                            <p>&nbsp;</p>
                            <p><strong>PRINCIPALES MODALIDADES DE COOPERACIÓN QUE SE DESARROLLA MEDIANTE LOS CONVENIOS ESPECÍFICOS</strong></p>
                            <p>A) PROGRAMA DE INTERCAMBIO ACADÉMICO POR CONVENIO: Se desarrolla en las siguientes modalidades:</p>
                            <p style="padding-left: 40px;"><!-- [if !supportLists]-->(1) Intercambio de estudiantes:</p>
                            <p style="padding-left: 40px;"><!-- [if !supportLists]-->(2) Intercambio de docentes, investigadores y staff profesional:</p>
                            <p style="padding-left: 40px;"><!-- [if !supportLists]-->(3) Intercambio de publicaciones académicas y de información estudiantil:</p>
                            <p>B) PROYECTOS PARA INVESTIGACIONES CONJUNTAS</p>
                            <p>C) PROYECTOS DE DESARROLLO</p>
                            <p>D) PRÁCTICAS PRE PROFESIONALES</p>
                            <p>E) DONACIONES</p>
                            <p>F) CAPACITACIÓN Y EJECUCIÓN DE ACTIVIDADES DE EXTENSIÓN CON INSTITUCIONES PRIVADAS DIRIGIDAS AL PÚBLICO EN GENERAL</p>
                            <p>&nbsp;</p>
                            <p><span style="color: rgb(53, 152, 219);"><strong>MODELOS DE CONVENIOS</strong></span></p>
                            <p>Descargue los modelos de convenios: Marco, Específicos e Intercambios</p>
                            <ul style="list-style-type: square;">
                            <li><a href="#">Descargue modelo de Convenio MARCO</a> (Español e Inglés)</li>
                            <li><a href="#">Descargue modelo de Convenio ESPECÍFICO</a> (Español e Inglés)</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><span style="color: rgb(53, 152, 219);"><strong>SUSCRIPCIÓN DE CONVENIOS</strong></span></p>
                            <p><strong>PROCEDIMIENTO</strong></p>
                            <p class="MsoListParagraphCxSpFirst" style="margin-left: 21.3pt; text-indent: -21.3pt; background: white; text-align: justify;">A) Los proyectos de convenio serán presentados ante el Rectorado, quien lo remitirá a la oficina de cooperación - OCRI para su revisión y opinión.</p>
                            <p style="text-align: justify;">B) La OCRI solicitará un informe a la oficina de asesoría legal - OAL sobre los aspectos legales del proyecto de convenio, cuidando salvaguardar los intereses de la universidad. en caso no se hagan observaciones, el documento será elevado al rectorado para ser aprobado en el consejo universitario.</p>
                            <p style="text-align: justify;">C) En caso de existir observaciones en el texto del convenio, la OCRI tomando en cuenta el informe de la OAL, reformulará el proyecto de convenio de acuerdo a su competencia y lo elevará a la oficina de asesoría legal - OAL.</p>
                            <p style="text-align: justify;">D) De ser aprobado, el proyecto de convenio será elevado al rectorado para ser aprobado en el Consejo Universitario, para su posterior suscripción; y en caso contrario, será devuelto a la dependencia de origen con las observaciones correspondientes para su reformulación.</p>
                            <p style="text-align: justify;">E) Corresponde a la oficina de secretaría general emitir la respectiva resolución del consejo universitario aprobando la suscripción del convenio.</p>
                            <p style="text-align: justify;">&nbsp;</p>
                            <p><strong>Flujograma de suscripción</strong></p>
                            <p><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('img/paginas/ocri_convenios.png') }}" width="645" height="400"></strong></p>
                       
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection