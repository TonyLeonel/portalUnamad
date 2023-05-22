<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura)) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->abreviatura.'/'.$carrera->abreviatura) }}">INICIO</a></li>
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/vision-y-mision')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/vision-y-mision') }}">VISIÓN, MISIÓN Y OBJETIVOS</a></li>
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/perfil')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/perfil') }}">PERFIL</a></li>
                <li><a class="{{ (request()->is('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/malla')) ? 'act-scrlink' : '' }}" href="{{ url('facultades/'.$carrera->facultad['flag'].'/'.$carrera->abreviatura.'/malla') }}">MALLA CURRICULAR</a></li>
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
                    <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="{{$carrera->telefono}}">{{$carrera->telefono}}</a></li>
                @endif
                @if($carrera->correo!=null)
                    <li><span><i class="fal fa-phone"></i> Correo :</span> <a href="{{$carrera->correo}}">{{$carrera->correo}}</a></li>
                @endif
                @if($carrera->direccion!=null)
                    <li><span><i class="fal fa-phone"></i> Dirección :</span> <a href="{{$carrera->direccion}}">{{$carrera->direccion}}</a></li>
                @endif
                <li><span><i class="fal fa-browser"></i> Web :</span> <a href="https://portal.unamad.edu.pe/facultades/ingenieria/{{$carrera->abreviatura}}">.../facultades/ingenieria/{{$carrera->abreviatura}}</a></li>
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