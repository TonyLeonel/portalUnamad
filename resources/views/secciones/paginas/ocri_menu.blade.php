<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                <li><a class="{{ (request()->is('ocri')) ? 'act-scrlink' : '' }}" href="{{ url('ocri') }}">INICIO</a></li>
                <li><a class="{{ (request()->is('ocri/mision-y-vision')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/mision-y-vision') }}">MISIÓN, VISIÓN, OBJETIVOS</a></li>
                <li><a class="{{ (request()->is('ocri/estructura')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/estructura') }}">ESTRUCTURA ORGÁNICA</a></li>
                <li><a class="{{ (request()->is('ocri/personal')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/personal') }}">PERSONAL ADMINISTRATIVO</a></li>
                <li><a class="{{ (request()->is('ocri/directorio')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/directorio') }}">DIRECTORIO</a></li>
                <li><a class="{{ (request()->is('ocri/servicios')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/servicios') }}">SERVICIOS</a></li>
                <li><a class="{{ (request()->is('ocri/convenios')) ? 'act-scrlink' : '' }}" href="{{ url('ocri/convenios') }}">CONVENIOS</a></li>
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
                <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="tel:+51975845006">+51 975 845 006 </a></li>
                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:ocri@unamad.edu.pe">ocri@unamad.edu.pe</a></li>
                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="https://goo.gl/maps/eerkNBU32xniPCVY7">Av. Jorge Chávez N°1160 - 2do piso, Biblioteca Central de la Ciudad Universitaria</a></li>
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    <li><a href="http://wa.me/51975845006" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>                           
        </div>
    </div>
</div> 