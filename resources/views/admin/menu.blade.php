@extends('layouts.admin')

@section('titulo', 'Categorías de página')

@section('js')
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/menu.js') }}" type="text/javascript"></script>
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
                        <li class="breadcrumb-item"><a href="{{ url('paginas') }}">Paginas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menus</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    Menus de la página
                </h2>
            </div> 
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <a href="javascript:void(0);" onclick="nuevo();" class="btn btn-primary d-sm-inline-block" >
	                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Agregar
                    </a>
                </div>
            </div>           
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div id="t_principal">
                        <table id="t_categorias" class="table card-table table-vcenter text-nowrap datatable" width="100%">
                            <thead>
                                <tr>    
                                    <th>NOMBRE</th>
                                    <th title="REGISTROS">REG.</th>
                                    <th>ESTADO</th>
                                    <th>FLAG</th>
                                    <th>ACCIONES</th>     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="4">Cargando...</td>
                                </tr>
                            </tbody>
                        </table>   
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<!-- MODAL MODIFICAR -->
<div id="editar" class="modal modal-blur fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="titulo_editar" class="modal-title">Nuevo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="form_editar" class="modal-body">  
                <div class="form-group form-required mb-3">
                    <label class="form-label">Nombre</label>
                    <input id="nombre" type="text" class="form-control" placeholder="">
                </div> 
                <div class="col-6 form-group form-required mb-3">
                    <label class="form-label">Tipo</label>
                    <select type="text" class="form-select" placeholder="Select a date" id="tipo" onchange="tipo_menu(this)">                       
                        <option value="0">Contenedor</option>                            
                        <option value="1">Pagina</option>                            
                    </select>
                </div>
                <div class="row oculto" id="div_menu">
                    <div class="form-group mb-3">
                        <label class="form-label">Fuente</label>
                        <select type="text" class="form-select" placeholder="Select a date" id="fuente" >                       
                            <option value="0">Interno</option>                            
                            <option value="1">Externo</option>                            
                        </select>
                    </div> 
                    <div class="form-group">
                        <label class="form-label">Flag</label>
                        <input id="flag" type="text" class="form-control" placeholder="">
                    </div> 
                </div> 
                <div class="form-group form-required">
                    <label class="form-label">Despues de</label>
                    <select type="text" class="form-select" placeholder="Select a date" id="posicion">                       
                        @foreach ($menus as $menu)
                            @if($menu->menu_id==null)
                                <option value="{{$menu->id}}">{{$menu->nombre}}</option>     
                            @endif                                                   
                        @endforeach
                    </select>
                </div>                            
            </div>   
            <div class="modal-footer">
                <div>
                    <label class="form-check form-switch mb-0">
                        <input id="estado" class="form-check-input" type="checkbox" checked="">
                        <span class="form-check-label">Estado</span>
                    </label>
                </div>
                <button type="button" class="btn btn-link link-secondary ms-auto" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
            </div>       
        </div>
    </div>
</div>
@endsection