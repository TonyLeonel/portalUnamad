<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                @php
                $carrera = [
                    'abreviatura' => 'Agroindustrial',
                    'facultad' => 'Agroindustrial',
                    // Otras propiedades de la carrera
                ];
            @endphp
            <li><a class="{{ (request()->is('facultades/agroindustrial')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/agroindustrial') }}">INICIO</a></li>

            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/resena')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/resena') }}">RESEÑA HISTÓRICA</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/reglamentos')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/reglamentos') }}">REGLAMENTOS</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/directivas')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/directivas') }}">DIRECTIVAS</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/malla')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/malla') }}">MALLA CURRICULAR</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/vision-y-mision')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/vision-y-mision') }}">VISIÓN Y MISIÓN</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/perfil')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/perfil') }}">PERFIL PROFESIONAL</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/campo')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/campo') }}">CAMPO OCUPACIONAL</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/plan')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/plan') }}">PLAN DE ESTUDIOS</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/areas')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/areas') }}">ÁREAS CURRICULARES</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/objetivos')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/objetivos') }}">OBJETIVOS ACADÉMICOS</a></li>
            <li><a class="{{ (request()->is('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/docentes')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera['facultad'].'/'.$carrera['abreviatura'].'/docentes') }}">DOCENTES</a></li>


                
            </ul>
            
            
        </div>                      
    </div>
</div>

<div class="box-widget fl-wrap mb-3">   
    <div class="box-widget-header"></div>                 
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Datos de contacto</div>
        <div class="contats-list clm fl-wrap">
            <ul class="no-list-style">
                <li><span><i class="fal fa-phone"></i> Teléfono :</span></li>
                <li><span><i class="fal fa-envelope"></i> Correo :</span></li>
                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> </li>
                <li><span><i class="fal fa-browser"></i> Web :</span> </li>
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    <!--
                    <li><a href="https://www.facebook.com/profile.php?id=100063722523487" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://wa.me/51974120205" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    -->
                </ul>
            </div>                           
        </div>
    </div>
</div> 