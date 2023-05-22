<li>
    @if($item->tipo == 'ARCHIVO')
    <a href="{{ $item->enlace }}" class="jerarquia-item" target="_blank">
        <div class="jerarquia-icono"><img src="{{ url('img/file.png') }}" alt="" width="20px"></div>
        <div class="jerarquia-titulo">{{ $item->nombre }}</div>        
    </a>
    @else
    <a class="jerarquia-item hover-none" id="a{{$item->id}}" data-elemid="0" onclick="mostrar_ocultar({{$item->id}})">
        <span id="mas{{$item->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
        <path d="M9 12l6 0"></path>
        <path d="M12 9l0 6"></path>
        </svg></span>
        <span id="menos{{$item->id}}" class="oculto"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-minus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
            <path d="M9 12l6 0"></path>
        </svg></span>
        <div class="jerarquia-icono"><img src="{{ url('img/folder.png') }}" alt="" width="25px"></div>
        <div class="jerarquia-titulo">{{ $item->nombre }}</div>        
    </a>
    <div class="oculto" id="div_carpeta{{$item->id}}">
        <ul>
            @if(count($item->hijos)>0)
            @each('secciones.documento_simple', $item->hijos, 'item')
            @endif
        </ul>
    </div>
    @endif
</li>