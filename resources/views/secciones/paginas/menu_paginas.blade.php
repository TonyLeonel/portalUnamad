<div class="box-widget fl-wrap mb-3">
    <div class="box-widget-content fl-wrap">
        <div class="box-widget-title fl-wrap mt-1">Navegación</div>
        <div class="faq-nav scroll-init fl-wrap mb-0">
            <ul>
                @foreach ($lista_paginas as $item)
                    <li><a class="{{ (request()->is($item->flag.'/unamad')) ? 'act-scrlink' : '' }}" href="{{ url($item->flag.'/unamad') }}">{{$item->titulo}}</a></li>                    
                @endforeach
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
                @if($categoria->telefono!=null)
                    <li><span><i class="fal fa-phone"></i> Teléfono :</span> <a href="{{$categoria->telefono}}">{{$categoria->telefono}}</a></li>
                @endif
                @if($categoria->correo!=null)
                    <li><span><i class="fal fa-phone"></i> Correo :</span> <a href="{{$categoria->correo}}">{{$categoria->correo}}</a></li>
                @endif
                @if($categoria->direccion!=null)
                    <li><span><i class="fal fa-phone"></i> Dirección :</span> <a href="{{$categoria->direccion}}">{{$categoria->direccion}}</a></li>
                @endif
                <li><span><i class="fal fa-browser"></i> Web :</span> <a href="{{$categoria->flag}}">{{$categoria->flag}}</a></li>
            </ul>
        </div>
        <div class="profile-widget-footer fl-wrap">
            <div class="card-info-content_social ">
                <ul>
                    @if($categoria->facebook!=null)
                        <li><a href="{{$categoria->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if($categoria->whatsapp!=null)
                        <li><a href="{{$categoria->whatsapp}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    @endif
                </ul>
            </div>                           
        </div>
    </div>
</div> 