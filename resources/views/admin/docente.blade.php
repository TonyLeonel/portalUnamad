@extends('layouts.admin')

@section('titulo', 'Administración de Carreras')

@section('js')
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/docentes.js') }}" type="text/javascript"></script>
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
                        <li class="breadcrumb-item active" aria-current="page">Carreras</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    Administración de docentes
                </h2>
            </div> 
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <a href="{{url('admin/docentes/nuevo')}}" class="btn btn-primary d-sm-inline-block" >
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
                        <table id="t_docentes" class="table card-table table-vcenter text-nowrap datatable" width="100%">
                            <thead>
                                <tr>   
                                    <th>NOMBRE</th>                                 
                                    <th>CARRERA</th>
                                    <th>ACCIONES</th>     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="8">Cargando...</td>
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