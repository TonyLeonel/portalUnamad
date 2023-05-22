@extends('layouts.admin')

@section('titulo', $publicacion != null ? 'Modificar publicación' : 'Nueva publicación')

@section('js')
<script src="{{ asset('lib/tinymce-6.0.0/tinymce.min.js') }}"></script>
<script src="{{ asset('lib/tinymce-6.0.0/langs/es_419.js') }}"></script>
<script src="{{ asset('js/admin/publicacion_editar.js') }}" type="text/javascript"></script>
<script>
    const laPublicacion = '{{ $publicacion != null ? $publicacion->id : 0 }}';
    const default_imagen = "{{ $publicacion != null ? asset($publicacion->imagen) : asset('img/no_picture.png') }}";
</script>
@endsection

@section('contenido')
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <div>
                    <ol class="breadcrumb breadcrumb-alternate" aria-label="breadcrumbs">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/publicaciones') }}">Publicaciones</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $publicacion != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $publicacion != null ? 'Modificar publicación' : 'Nueva publicación' }}
                </h2>
            </div>                    
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        @php
            $publicacion_estado = ($publicacion? $publicacion->estado : 1);   
            $publicacion_categoria = ($publicacion? $publicacion->publicacion_categoria_id : 0);
            if($publicacion) {
                $image_ruta = $publicacion->imagen ? $publicacion->imagen : 'img/no_picture.png';
            } else {
                $image_ruta = 'img/no_picture.png';
            }  
        @endphp
        <div id="form_guardar" class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Datos generales</h3>
                    </div> 
                    <div class="card-body">
                        <div class="form-group form-false-required mb-3">
                            <label for="contenido" class="form-label">Contenido </label>
                            <div class="border">
                              <textarea id="contenido" class="w-100" rows="6">{!! $publicacion ? $publicacion->contenido : '' !!}</textarea>
                            </div>                        
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Detalles</h3>
                    </div> 
                    <div class="card-body">
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Categoría</label>
                            <select id="publicacion_categoria_id" class="form-select validar_select">
                                <option value="0">Seleccione...</option>
                                @foreach ($categorias as $categoria)                                            
                                <option value="{{ $categoria->id }}" {{ $categoria->id == $publicacion_categoria ? 'selected' : '' }}>{{ $categoria->nombre }}</option>                                                                         
                                @endforeach
                            </select>
                        </div>  
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Título</label>
                            <input id="titulo" type="text" class="form-control" placeholder="" value="{{ $publicacion ? $publicacion->titulo : '' }}">
                        </div>   
                        <div class="form-group form-required mb-3">
                            <label for="resumen" class="form-label">Resumen </label>                            
                            <textarea id="resumen" class="form-control" rows="4">{{ $publicacion ? $publicacion->resumen : '' }}</textarea>                                                  
                        </div>
                        <div class="form-group form-false-required ">
                            <label class="form-label">Imagen principal</label>
                            <input type="file" id="foto_principal"  name="foto_principal" class="d-none" accept="image/jpeg" onchange="cambio_imagen(this);" >
                            <a href="javascript:void(0);" onclick="seleccionar_imagen();">
                            <img id="imagen_principal" src="{{ asset($image_ruta) }}" alt="mdo" width="100%">
                            </a>
                        </div>                                    
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="px-3">                        
                        <label class="form-check form-switch mb-0">
                            <input id="estado" class="form-check-input" type="checkbox" {{ $publicacion_estado == 1 ? 'checked' : '' }}>
                            <span class="form-check-label">Estado</span>
                        </label>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url('admin/publicaciones') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection