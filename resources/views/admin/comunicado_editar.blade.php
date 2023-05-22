@extends('layouts.admin')

@section('titulo', $comunicado != null ? 'Modificar comunicado' : 'Nuevo comunicado')

@section('js')
<script src="{{ asset('lib/tinymce-6.0.0/tinymce.min.js') }}"></script>
<script src="{{ asset('lib/tinymce-6.0.0/langs/es_419.js') }}"></script>
<script src="{{ asset('lib/tabler/libs/litepicker/dist/litepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/comunicado_editar.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    const default_imagen = "{{ $comunicado != null ? asset($comunicado->imagen) : asset('img/no_picture.png') }}";
    const elComunicado = '{{ $comunicado != null ? $comunicado->id : 0 }}';
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
                        <li class="breadcrumb-item"><a href="{{ url('admin/comunicados') }}">Comunicados</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $comunicado != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $comunicado != null ? 'Modificar comunicado' : 'Nuevo comunicado' }}
                </h2>
            </div>                    
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        @php
            $comunicado_estado = ($comunicado? $comunicado->estado : 1);   
            $comunicado_categoria = ($comunicado? $comunicado->comunicado_categoria_id : 0);            
            if($comunicado) {
                $image_ruta = $comunicado->imagen ? $comunicado->imagen : 'img/no_picture.png';
            } else {
                $image_ruta = 'img/no_picture.png';
            }                 
        @endphp
        <div id="form_guardar" class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Datos generales</h3>
                    </div> 
                    <div class="card-body">
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Categoría</label>
                            <select id="comunicado_categoria_id" class="form-select validar_select">
                                <option value="0">Seleccione...</option>
                                @foreach ($categorias as $categoria)                                            
                                <option value="{{ $categoria->id }}" {{ $categoria->id == $comunicado_categoria ? 'selected' : '' }}>{{ $categoria->nombre }}</option>                                                                         
                                @endforeach
                            </select>
                        </div>  
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Título</label>
                            <input id="titulo" type="text" class="form-control" placeholder="" value="{{ $comunicado ? $comunicado->titulo : '' }}">
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
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Detalles</h3>
                    </div> 
                    <div class="card-body">                        
                        <div class="form-group mb-3">
                            <label for="contenido" class="form-label">Contenido </label>
                            <div class="border">
                              <textarea id="contenido" class="w-100" rows="6">{!! $comunicado ? $comunicado->contenido : '' !!}</textarea>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label class="form-label">Fecha de inicio</label>
                                <input type="text" class="form-control" readonly="" value="{{ $comunicado ? $comunicado->created_at->format('d/m/Y') : $ahora->format('d/m/Y') }}">
                            </div>
                            <div class="col-md-6 form-group form-required mb-3">
                                <label class="form-label">Fecha de término</label>
                                <input id="fecha_fin" type="text" class="form-control validar_fecha" placeholder="dd/mm/yyyy" value="{{ $comunicado ? $comunicado->fecha_fin->format('d/m/Y') : '' }}">
                            </div>
                        </div>                                                                   
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="px-3">                        
                        <label class="form-check form-switch mb-0">
                            <input id="estado" class="form-check-input" type="checkbox" {{ $comunicado_estado == 1 ? 'checked' : '' }}>
                            <span class="form-check-label">Estado</span>
                        </label>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url('admin/comunicados') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection