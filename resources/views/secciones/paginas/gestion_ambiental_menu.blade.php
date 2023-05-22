<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                <li><a class="{{ (request()->is('gestion-ambiental')) ? 'act-scrlink' : '' }}" href="{{ url('gestion-ambiental') }}">INICIO</a></li>
                <li><a class="{{ (request()->is('gestion-ambiental/actividades')) ? 'act-scrlink' : '' }}" href="{{ url('gestion-ambiental/actividades') }}">ACTIVIDADES</a></li>
                
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
                <li><span><i class="fal fa-phone"></i> Teléfono :</span> -</li>
                <li><span><i class="fal fa-envelope"></i> Correo :</span> <a href="mailto:ofi.gestionambiental@unamad.edu.pe">ofi.gestionambiental@unamad.edu.pe</a></li>
                <li><span><i class="fal fa-map-marker"></i> Dirección :</span> <a href="https://goo.gl/maps/KwU7w1xeRXjTrHkG7"> AV. Jorge Chávez N° 1160</a></li>
                <!--<li><span><i class="fal fa-browser"></i> Web :</span> <a href="http://cidiomas.unamad.edu.pe/">cidiomas.unamad.edu.pe</a></li>-->
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    <li><a href="https://www.facebook.com/REDAMBIENTALINTERUNIVERSITARIA" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <!--<li><a href="http://wa.me/51974120205" target="_blank"><i class="fab fa-whatsapp"></i></a></li>-->
                </ul>
            </div>                           
        </div>
    </div>
</div> 