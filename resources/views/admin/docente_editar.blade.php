@extends('layouts.admin')

@section('titulo', $docente != null ? 'Modificar docente' : 'Nuevo docente')

@section('js')
<script src="{{ asset('lib/tinymce-6.0.0/tinymce.min.js') }}"></script>
<script src="{{ asset('lib/tinymce-6.0.0/langs/es_419.js') }}"></script>
<script src="{{ asset('lib/tabler/libs/litepicker/dist/litepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/docentes_editar.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    const default_imagen = "{{ $docente != null ? asset($docente->imagen) : asset('img/no_picture.png') }}";
    const elDocente = '{{ $docente != null ? $docente->id : 0 }}';
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
                        <li class="breadcrumb-item"><a href="{{ url('admin/comunicados') }}">Docentes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $docente != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $docente != null ? 'Modificar docente' : 'Nuevo docente' }}
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        @php
            $docente_estado = ($docente? $docente->estado : 1);
            $docente_carrera = ($docente? $docente->carrera_id : 0);
            if($docente) {
                $image_ruta = $docente->imagen ? $docente->imagen : 'img/no_picture.png';
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
                            <label class="form-label">Carrera</label>
                            <select id="carrera_id" class="form-select validar_select">
                                <option value="0">Seleccione...</option>
                                @foreach ($carreras as $carrera)
                                <option value="{{ $carrera->id }}" {{ $carrera->id == $docente_carrera ? 'selected' : '' }}>{{ $carrera->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group form-required mb-3">
                            <label class="form-label">nombre</label>
                            <input id="nombre" type="text" class="form-control" placeholder="" value="{{ $docente ? $docente->nombre : '' }}">
                        </div>
                        <div class="form-group form-required mb-3">
                            <label class="form-label">cv</label>
                            <input id="cv" type="text" class="form-control" placeholder="" value="{{ $docente ? $docente->cv : '' }}">
                        </div>
                        <div class="px-3">
                            <label class="form-check form-switch mb-0">
                                <input id="estado" class="form-check-input" type="checkbox" {{ $docente_estado == 1 ? 'checked' : '' }}>
                                <span class="form-check-label">Estado</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Imagen</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group form-false-required ">
                            <input type="file" id="foto_principal"  name="foto_principal" class="d-none" accept="image/*" onchange="cambio_imagen(this);" >
                            <a href="javascript:void(0);" onclick="seleccionar_imagen();">
                            <img id="imagen_principal" src="{{ asset($image_ruta) }}" alt="mdo" width="100%">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="ms-auto">
                        <a href="{{ url('admin/docentes') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
