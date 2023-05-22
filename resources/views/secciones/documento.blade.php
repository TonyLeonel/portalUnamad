<li>
    <div class="jerarquia-item">
        <div class="jerarquia-icono"><img src="{{ url('img/'.($item->tipo == 'CARPETA' ? 'folder' : 'file').'.png') }}" alt="" width="25px"></div>
        <div class="jerarquia-titulo {{ $item->estado == 1 ? '':'text-danger' }}">{{ $item->nombre }}</div>
        <div class="jerarquia-opciones dropdown dropstart"> 
            <a href="#" class="jerarquia-accion {{ $item->destacado == 1 ? 'bg-success':'' }}" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="8" x2="20" y2="8"></line>
                    <line x1="4" y1="16" x2="20" y2="16"></line>
                 </svg>
            </a>     
            <div class="dropdown-menu">
                @if($item->tipo == 'CARPETA')
                <a class="dropdown-item" href="javascript:void(0);" onclick="agregar_carpeta({{$item->id}}, '{{$item->nombre}}');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon icon-tabler-folder-plus text-warning" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                        <line x1="12" y1="10" x2="12" y2="16"></line>
                        <line x1="9" y1="13" x2="15" y2="13"></line>
                    </svg>
                    Agregar carpeta
                </a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="agregar_archivo({{$item->id}}, '{{$item->nombre}}');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon icon-tabler-file-plus text-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <line x1="12" y1="11" x2="12" y2="17"></line>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    Agregar archivo
                </a>
                <div class="dropdown-divider"></div>
                @endif            
                <a class="dropdown-item" href="javascript:void(0);" data-json="{{ json_encode((array)$item) }}" onclick="{{$item->tipo == 'CARPETA'?'modificar_carpeta':'modificar_archivo'}}(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                    Modificar
                </a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="{{$item->tipo == 'CARPETA'?'mover_carpeta':'mover_archivo'}}({{$item->id}})">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon icon-tabler-arrows-left-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 3l-4 4l4 4"></path>
                        <path d="M3 7h11a3 3 0 0 1 3 3v11"></path>
                        <path d="M13 17l4 4l4 -4"></path>
                     </svg>
                    Mover
                </a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="{{$item->tipo == 'CARPETA'?'eliminar_carpeta':'eliminar_archivo'}}({{$item->id}})">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="4" y1="7" x2="20" y2="7"></line>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                    Eliminar
                </a>
            </div>                                      
        </div>
    </div>
    @if($item->tipo == 'CARPETA')
    <ul>
        @if(count($item->hijos)>0)
        @each('secciones.documento', $item->hijos, 'item')
        @endif
    </ul>
    @endif
</li>