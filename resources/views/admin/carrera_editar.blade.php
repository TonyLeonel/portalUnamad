@extends('layouts.admin')

@section('titulo', $carrera != null ? 'Modificar carrera' : 'Nuevo carrera')

@section('js')
<script src="{{ asset('lib/tinymce-6.0.0/tinymce.min.js') }}"></script>
<script src="{{ asset('lib/tinymce-6.0.0/langs/es_419.js') }}"></script>
<script src="{{ asset('js/admin/carreras_editar.js') }}" type="text/javascript"></script>
<script>
    const laCarrera = '{{ $carrera != null ? $carrera->id : 0 }}';
</script>
@endsection

@section('contenido')
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div>
                    <ol class="breadcrumb breadcrumb-alternate" aria-label="breadcrumbs">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/carrera') }}">Carrera</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $carrera != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $carrera != null ? 'Modificar carrera' : 'Nueva carrera profesional' }}
                </h2>
            </div>             
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div id="form_carrera" class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Datos de la carrera</h3>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group form-required mb-3 col-6">
                                <label class="form-label">Nombre</label>
                                <input id="nombre" type="text" class="form-control" placeholder="" value="{{ $carrera ? $carrera->nombre : '' }}">
                            </div>
                            <div class="form-group form-required mb-3 col-6">
                                <label class="form-label">Flag</label>
                                <input id="abreviatura" type="text" class="form-control" placeholder="" value="{{ $carrera ? $carrera->nombre : '' }}">
                            </div>
                            <div class="form-group form-required mb-3 col-6">
                                <label class="form-label">Facultad</label>
                                <select type="text" class="form-select" placeholder="Select a date" id="facultad">
                                    @if($carrera)
                                        @foreach($facultades as $facultad)
                                            <option value="{{$facultad->id}}" {{$facultad->id===$carrera->facultad->id ? "selected":""}}>{{$facultad->nombre}}</option>
                                        @endforeach
                                    @else
                                        @foreach($facultades as $facultad)
                                            <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Teléfono </label>
                                <input id="telefono" type="text" class="form-control" placeholder="" value="{{ $carrera ? $carrera->telefono : '' }}">
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Correo </label>
                                <input id="correo" type="text" class="form-control" placeholder="" value="{{ $carrera ? $carrera->correo : '' }}">
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Dirección </label>
                                <input id="direccion" type="text" class="form-control" placeholder="" value="{{ $carrera ? $carrera->direccion : '' }}">
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Facebook  </label>
                                <input id="facebook" type="text"  class="form-control" placeholder="" value="{{ $carrera ? $carrera->facebook : '' }}">
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Whatsapp  </label>
                                <input id="whatsapp" type="text"  class="form-control" placeholder="" value="{{ $carrera ? $carrera->whatsapp : '' }}">
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label class="form-label">Web  </label>
                                <input id="web" type="text" readonly="readonly" class="form-control" placeholder="" value="{{ $carrera ? 'facultades/'.$carrera->abreviatura : 'facultades/' }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion"  rows="5">{{ $carrera ? $carrera->descripcion : '' }}</textarea>                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Visión</label>
                            <textarea class="form-control" name="vision" id="vision"  rows="5">{{ $carrera ? $carrera->vision : '' }}</textarea>                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Mision</label>
                            <textarea class="form-control" name="mision" id="mision"  rows="5">{{ $carrera ? $carrera->mision : '' }}</textarea>  
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Perfil</label>
                            <textarea class="form-control" name="perfil" id="perfil"  rows="5">{{ $carrera ? $carrera->perfil : '' }}</textarea>  
                        </div>                                                
                    </div>
                </div>
            </div>
            <div class="col-md-6">              
                <div class="d-flex align-items-center">
                    <div class="ms-auto">
                        <a href="{{ url('admin/carreras') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection