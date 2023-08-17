<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura)) ? 'act-scrlink' : '' }}" href="{{ url('facultades/agroindustrial') }}">INICIO</a></li>

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/resena')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/resena') }}">RESEÑA HISTÓRICA</a></li>
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/reglamentos')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/reglamentos') }}">REGLAMENTOS</a></li>

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/directivas')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/directivas') }}">DIRECTIVAS</a></li>
                
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/malla')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/malla') }}">MALLA CURRICULAR</a></li>

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/vision-y-mision')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/vision-y-mision') }}">VISIÓN Y MISIÓN</a></li>
                
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/perfil')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/perfil') }}">PERFIL PROFESIONAL</a></li>

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/campo')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/campo') }}">CAMPO OCUPACIONAL</a></li>

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/plan')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/plan') }}">PLAN DE ESTUDIOS</a></li>

                

                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/objetivos')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/objetivos') }}">OBJETIVOS ACADÉMICOS</a></li>
                
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/docentes')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/docentes') }}">DOCENTES</a></li>
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
                @if($carrera->telefono!=null)
                <li>
                    <span><i class="fal fa-phone"></i> Teléfono :</span>
                    <a href="#" class="disabled-link">{{$carrera->telefono}}</a>
                </li>
                
                
                @endif
                @if($carrera->correo!=null)
                <li>
                    <span><i class="fal fa-envelope"></i> Correo :</span>
                    <a href="#" class="disabled-link">{{$carrera->correo}}</a>
                </li>
                
                @endif
                @if($carrera->direccion!=null)
                <li>
                    <span><i class="fal fa-map-marker"></i> Dirección :</span>
                    <a href="#" class="disabled-link">{{$carrera->direccion}}</a>
                </li>
                
                @endif
                x
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    @if($carrera->facebook!=null)
                        <li><a href="{{$carrera->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if($carrera->whatsapp!=null)
                        <li><a href="{{$carrera->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    @endif
                </ul>
            </div>                           
        </div>
    </div>
</div> 