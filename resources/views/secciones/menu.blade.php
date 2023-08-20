<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                @foreach ($menu as $enlace)
                <li><a class="{{ (request()->is($enlace['link'])) ? 'act-scrlink' : '' }}" href="{{ url($enlace['link']) }}">{{ $enlace['nombre'] }}</a></li>
                @endforeach
            </ul>
        </div>                      
    </div>
</div>