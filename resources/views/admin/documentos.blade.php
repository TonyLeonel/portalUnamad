@extends('layouts.admin')

@section('titulo', 'Gestion de documentos')

@section('js')
<script src="{{ asset('js/admin/documentos.js') }}" type="text/javascript"></script>
@endsection

@section('css')
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
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
                        <li class="breadcrumb-item active" aria-current="page">Documentos</li>
                    </ol>
                </div>
                <h2 class="page-title">
                    Gestion de documentos
                </h2>
            </div>                    
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">       
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="w-100">
                            <div class="row row align-items-center">
                                <div class="col-md-6">
                                    <h3 class="card-title">Documentos y Carpetas</h3>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button type="button" class="btn btn-warning" onclick="agregar_carpeta(0, 'RAIZ');">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                            <line x1="12" y1="10" x2="12" y2="16"></line>
                                            <line x1="9" y1="13" x2="15" y2="13"></line>
                                        </svg>
                                        Carpeta                                     
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="agregar_archivo(0, 'RAIZ');">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                            <line x1="12" y1="11" x2="12" y2="17"></line>
                                            <line x1="9" y1="14" x2="15" y2="14"></line>
                                         </svg>
                                        Archivo                                     
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="card-body" style="background: #e9ebed; overflow: auto;" >
                        <div class="jerarquia" style="min-width: 500px;">
                            <ul class="ps-0 mb-0">
                                @each('secciones.documento', $documentos, 'item')
                            </ul>
                        </div>                 
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection


@section('modal')
<!-- MODAL CARPETA -->
<div id="editar_carpeta" class="modal modal-blur fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="titulo_editar_carpeta" class="modal-title">Carpeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="form_editar_carpeta" class="modal-body">
                <div class="form-group mb-3">
                    <label class="form-label">Carpeta base</label>
                    <input id="padre_carpeta" type="text" class="form-control" placeholder="" readonly>
                </div> 
                <div class="form-group form-required mb-3">
                    <label class="form-label">Nombre</label>
                    <input id="nombre_carpeta" type="text" class="form-control" placeholder="">
                </div> 
                <div class="form-group form-required">
                    <label class="form-label">Alias</label>
                    <textarea id="alias_carpeta" class="form-control" rows="3"></textarea>
                </div>                            
            </div>   
            <div class="modal-footer">
                <div>
                    <label class="form-check form-switch mb-0">
                        <input id="estado_carpeta" class="form-check-input" type="checkbox" checked="">
                        <span class="form-check-label">Estado</span>
                    </label>
                </div>
                <button type="button" class="btn btn-link link-secondary ms-auto" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardar_carpeta()">Guardar</button>
            </div>       
        </div>
    </div>
</div>

<!-- MODAL ARCHIVO -->
<div id="editar_archivo" class="modal modal-blur fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="titulo_editar_archivo" class="modal-title">Carpeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="form_editar_archivo" class="modal-body">  
                <div class="form-group mb-3">
                    <label class="form-label">Carpeta</label>
                    <input id="padre_archivo" type="text" class="form-control" placeholder="" readonly>
                </div> 
                <div class="form-group form-required mb-3">
                    <label class="form-label">Nombre</label>
                    <input id="nombre_archivo" type="text" class="form-control" placeholder="">
                </div> 
                <div class="form-group form-required mb-3">
                    <label class="form-label">Alias</label>
                    <textarea id="alias_archivo" class="form-control" rows="3"></textarea>
                </div>  
                <div class="form-group form-required mb-3">
                    <label class="form-label">Enlace</label>
                    <textarea id="enlace_archivo" class="form-control" rows="3"></textarea>
                </div> 
                <div class="form-group">
                    <label class="form-label">Adicionales</label>
                    <div class="divide-y">
                      <div>
                        <label class="row">
                            <span class="col">Archivo destacado</span>
                            <span class="col-auto">
                                <label class="form-check form-check-single form-switch">
                                    <input id="destacado_archivo" class="form-check-input" type="checkbox" >
                                </label>
                            </span>
                        </label>
                      </div>
                    </div>
                </div>
            </div>   
            <div class="modal-footer">
                <div>
                    <label class="form-check form-switch mb-0">
                        <input id="estado_archivo" class="form-check-input" type="checkbox" checked="">
                        <span class="form-check-label">Estado</span>
                    </label>                    
                </div>
                <button type="button" class="btn btn-link link-secondary ms-auto" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardar_archivo()">Guardar</button>
            </div>       
        </div>
    </div>
</div>

<!-- MODAL MOVER -->
<div id="mover_modal" class="modal modal-blur fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="titulo_mover_modal" class="modal-title">Seleccione carpeta destino</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="interno-item">
                    <ul id="carpetas_mover" style="padding-left: 0;">

                    </ul>
                </div>                
                <div id="loading_mover" class="cargando">
                    <div class="text-center pt-4">
                      <div class="spinner-border text-blue" role="status"></div> <b>Cargando...</b>
                    </div>
                </div>
            </div>   
            <div class="modal-footer">                
                <button type="button" class="btn ms-auto" data-bs-dismiss="modal">Cancelar</button>
            </div>       
        </div>
    </div>
</div>
@endsection