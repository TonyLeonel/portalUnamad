@extends('layouts.admin')

@section('titulo', 'Administración de páginas')

@section('js')
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/paginas.js') }}" type="text/javascript"></script>
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
                        <li class="breadcrumb-item active" aria-current="page">Páginas</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    Administración de páginas
                </h2>
            </div> 
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <a href="{{ url('admin/paginas/nuevo') }}" class="btn btn-primary d-sm-inline-block" >
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
                    <div class="card-header pb-1">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-4" style="padding-bottom: .5rem;">
                                    <select id="categoria_select" class="form-select" title="CATEGORIAS">
                                        <option value="0">CATEGORIA - [TODOS]</option>
                                        @foreach ($categorias as $categoria)                                            
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>                                                                         
                                        @endforeach
                                    </select>
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <div id="t_principal">
                        <table id="t_paginas" class="table card-table table-vcenter text-nowrap datatable" width="100%">
                            <thead>
                                <tr>    
                                    <th>ID</th>
                                    <th>CATEGORÍA</th>
                                    <th>TÍTULO</th>
                                    <th>FLAG</th>                                    
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6">Cargando...</td>
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