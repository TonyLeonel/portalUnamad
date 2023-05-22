@extends('layouts.admin')

@section('titulo', $pagina != null ? 'Modificar pagina' : 'Nueva pagina')

@section('js')
<script src="{{ asset('lib/tinymce-6.0.0/tinymce.min.js') }}"></script>
<script src="{{ asset('lib/tinymce-6.0.0/langs/es_419.js') }}"></script>
<script src="{{ asset('js/admin/pagina_editar.js') }}" type="text/javascript"></script>
<script>
    const laPagina = '{{ $pagina != null ? $pagina->id : 0 }}';
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
                        <li class="breadcrumb-item"><a href="{{ url('admin/paginas') }}">Páginas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $pagina != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $pagina != null ? 'Modificar pagina' : 'Nueva pagina' }}
                </h2>
            </div>                    
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">

        @php
            $pagina_estado = ($pagina? $pagina->estado : 1);   
            $pagina_categoria = ($pagina? $pagina->pagina_categoria_id : 0);
        @endphp

        <div id="form_guardar" class="row">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Datos generales</h3>
                    </div> 
                    <div class="card-body">
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Título</label>
                            <input id="titulo" type="text" class="form-control" placeholder="" value="{{ $pagina ? $pagina->titulo : '' }}">
                        </div>   
                        <div class="form-group form-false-required mb-3">
                            <label for="contenido" class="form-label">Contenido </label>
                            <div class="border">
                              <textarea id="contenido" class="w-100" rows="6">{!! $pagina ? $pagina->contenido : '' !!}</textarea>
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
                            <select id="pagina_categoria_id" class="form-select validar_select">
                                <option value="0">Seleccione...</option>
                                @foreach ($categorias as $categoria)                                            
                                <option value="{{ $categoria->id }}" {{ $categoria->id == $pagina_categoria ? 'selected' : '' }}>{{ $categoria->nombre }}</option>                                                                         
                                @endforeach
                            </select>
                        </div>  
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Flag</label>
                            <input id="flag" type="text" class="form-control" placeholder="" value="{{ $pagina ? $pagina->flag : '' }}">
                        </div>                                              
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="px-3">                        
                        <label class="form-check form-switch mb-0">
                            <input id="estado" class="form-check-input" type="checkbox" {{ $pagina_estado == 1 ? 'checked' : '' }}>
                            <span class="form-check-label">Estado</span>
                        </label>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url('admin/paginas') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection