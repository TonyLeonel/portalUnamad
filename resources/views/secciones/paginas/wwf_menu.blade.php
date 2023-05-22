<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                <li><a class="{{ (request()->is('wwf')) ? 'act-scrlink' : '' }}" href="{{ url('wwf') }}">INICIO</a></li>
                {{-- <li><a class="{{ (request()->is('wwf/mision-y-vision')) ? 'act-scrlink' : '' }}" href="{{ url('wwf/mision-y-vision') }}">MISIÓN, VISIÓN</a></li>
                <li><a class="{{ (request()->is('wwf/estructura')) ? 'act-scrlink' : '' }}" href="{{ url('wwf/estructura') }}">ESTRUCTURA ORGÁNICA</a></li>
                <li><a class="{{ (request()->is('wwf/personal')) ? 'act-scrlink' : '' }}" href="{{ url('wwf/personal') }}">PERSONAL ADMINISTRATIVO</a></li>
                <li><a class="{{ (request()->is('wwf/directorio')) ? 'act-scrlink' : '' }}" href="{{ url('wwf/directorio') }}">DIRECTORIO Y CONTÁCTANOS</a></li> --}}
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
                <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="tel:+51">+51 </a></li>
                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:@">@</a></li>
                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="https://goo.gl/maps/mM2X36ZV6RCv36yv8">sn</a></li>
                <li><span><i class="fal fa-browser"></i> Web :</span> <a href="http://dominio.com">dominio.com</a></li>
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://wa.me/51" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>                           
        </div>
    </div>
</div> 