@extends('layouts.admin')

@section('titulo', $usuario != null ? 'Modificar usuario' : 'Nuevo usuario')

@section('js')
<script src="{{ asset('js/admin/usuario_editar.js') }}" type="text/javascript"></script>
<script>
    const elUsuario = '{{ $usuario != null ? $usuario->id : 0 }}';
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
                        <li class="breadcrumb-item"><a href="{{ url('admin/usuarios') }}">Usuarios</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $usuario != null ? 'Modificar' : 'Nuevo' }}</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    {{ $usuario != null ? 'Modificar usuario' : 'Nuevo usuario' }}
                </h2>
            </div>             
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div id="form_usuario" class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Datos de usuario</h3>
                    </div> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 form-group form-required mb-3">
                                <label class="form-label">DNI</label>
                                <input id="dni" type="text" class="form-control validar_numero validar_minimo:8" placeholder="" value="{{ $usuario ? $usuario->dni : '' }}">
                            </div>
                            <div class="col-md-6 form-group form-required mb-3">
                                <label class="form-label">Nombre</label>
                                <input id="nombre" type="text" class="form-control mayuscula" placeholder="" value="{{ $usuario ? $usuario->nombre : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group form-required mb-3">
                                <label class="form-label">Apellido paterno</label>
                                <input id="apaterno" type="text" class="form-control mayuscula" placeholder="" value="{{ $usuario ? $usuario->apaterno : '' }}">
                            </div>
                            <div class="col-md-6 form-group form-required mb-3">
                                <label class="form-label">Apellido materno</label>
                                <input id="amaterno" type="text" class="form-control mayuscula" placeholder="" value="{{ $usuario ? $usuario->amaterno : '' }}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Teléfono</label>
                            <input id="telefono" type="text" class="form-control" placeholder="" value="{{ $usuario ? $usuario->telefono : '' }}">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Dirección</label>
                            <input id="direccion" type="text" class="form-control" placeholder="" value="{{ $usuario ? $usuario->direccion : '' }}">
                        </div>
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Correo</label>
                            <input id="email" type="email" class="form-control validar_correo" placeholder="" value="{{ $usuario ? $usuario->email : '' }}" {{ $usuario ? 'readonly' : '' }}>
                        </div>                 
                        <div class="row">
                            <div class="col-md-6 form-group form-false-required mb-3">
                                <label class="form-label">Contraseña</label>
                                <input id="password" type="password" class="form-control validar_minimo:8">
                            </div> 
                            <div class="col-md-6 form-group form-false-required mb-3">
                                <label class="form-label">Confirmar Contraseña</label>
                                <input id="password_confirmed" type="password" class="form-control validar_igual:password" >
                            </div> 
                        </div>                                          
                    </div>
                </div>
            </div>
            @php
                $usuario_estado = ($usuario? $usuario->estado : 1);   
                $usuario_tipo = ($usuario? $usuario->tipo : 1);
            @endphp
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">Niveles de acceso</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group form-required mb-3">
                            <label class="form-label">Tipo de usuario</label>
                            <select id="tipo" class="form-select">
                                <option value="1" {{ $usuario_tipo == 1 ? 'selected' : '' }}>Administrador</option>
                                <option value="0" {{ $usuario_tipo == 0 ? 'selected' : '' }}>Colaborador</option>
                            </select>
                        </div>     
                        <fieldset class="form-fieldset">
                            <div class="form-group mb-3">
                                <div class="form-label">Categorías de Página</div>
                                <div>
                                    @if(count($pagina_categorias) > 0)
                                        @foreach ($pagina_categorias as $p_categoria)
                                            @if ($p_categoria->tipo==1)
                                                @php
                                                    $p_checked = false;
                                                    foreach ($permisos as $permiso) {
                                                        if($permiso->elemento == 'PAGINA' && $permiso->elemento_id == $p_categoria->id){
                                                            $p_checked = true;
                                                            break;
                                                        }
                                                    }
                                                @endphp
                                                <label class="form-check">
                                                    <input id="pagina_check_{{$p_categoria->id}}" class="form-check-input pagina_check" type="checkbox" {{ ($p_checked ? 'checked="checked"' : '') }} >
                                                    <span class="form-check-label">{{ $p_categoria->nombre }}</span>
                                                </label>
                                                
                                            @endif
                                        @endforeach
                                    @else
                                    <span class="text-muted">No se encontraron registros</span>   
                                    @endif                                 
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-label">Categorías de Publicaciones</div>
                                <div>
                                    @if(count($publicacion_categorias) > 0)
                                        @foreach ($publicacion_categorias as $c_categoria)
                                            @php
                                                $c_checked = false;
                                                foreach ($permisos as $permiso) {
                                                    if($permiso->elemento == 'PUBLICACION' && $permiso->elemento_id == $c_categoria->id){
                                                        $c_checked = true;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            <label class="form-check">
                                                <input id="publicacion_check_{{$c_categoria->id}}" class="form-check-input publicacion_check" type="checkbox" {{ ($c_checked ? 'checked="checked"' : '') }} >
                                                <span class="form-check-label">{{ $c_categoria->nombre }}</span>
                                            </label>
                                        @endforeach
                                    @else
                                    <span class="text-muted">No se encontraron registros</span>   
                                    @endif 
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="form-label">Categorías de Comunicados</div>
                                <div>
                                    @if(count($comunicado_categorias) > 0)
                                        @foreach ($comunicado_categorias as $u_categoria)
                                            @php
                                                $u_checked = false;
                                                foreach ($permisos as $permiso) {
                                                    if($permiso->elemento == 'COMUNICADO' && $permiso->elemento_id == $u_categoria->id){
                                                        $u_checked = true;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            <label class="form-check">
                                                <input id="comunicado_check_{{$u_categoria->id}}" class="form-check-input comunicado_check" type="checkbox" {{ ($u_checked ? 'checked="checked"' : '') }} >
                                                <span class="form-check-label">{{ $u_categoria->nombre }}</span>
                                            </label>
                                        @endforeach
                                    @else
                                    <span class="text-muted">No se encontraron registros</span>   
                                    @endif   
                                </div>
                            </div>    
                        </fieldset>                                  
                    </div>
                </div>               
                <div class="d-flex align-items-center">
                    <div class="px-3">                        
                        <label class="form-check form-switch mb-0">
                            <input id="estado" class="form-check-input" type="checkbox" {{ $usuario_estado == 1 ? 'checked' : '' }}>
                            <span class="form-check-label">Estado</span>
                        </label>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ url('admin/usuarios') }}" class="btn btn-link link-secondary">Cancelar</a>
                        <button type="button" class="btn btn-primary anti_doble_click" onclick="guardar()">Guardar</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection