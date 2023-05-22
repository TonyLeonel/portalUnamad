@extends('layouts.portal')

@section('titulo', 'Comunicados')
@section('css')    
    <link href="{{ asset('lib/tabler/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('lib/tabler/css/tabler-vendors.min.css') }}" rel="stylesheet"/>       
@endsection
@section('js')
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('lib/datatables/DataTables-1.11.5/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/utilitarios.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/portal/comunicados.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/comunicados2.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Comunicados</span></h2>
            <h4>Puedes acceder a todos los comunicados publicados por la UNAMAD.</h4>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Desplácese hacia abajo para descubrir</span>
        </div>
    </div>
</section>
<!-- NAVEGACIÓN -->
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap image_bar" style="background: #EDF0F4;">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Comunicados</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="small-padding image_complete">
    <div class="container">    
        <div class="section-title fl-wrap"style="margin-bottom: 0px;">
            <h2>Comunicados</h2>
            <p>A través de este medio usted podrá enterarse de todas la comunicaciones oficiales que emite la Universidad Nacional Amazónica de Madre de Dios</p>
        </div>          
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div id="t_principal">
                        <table id="t_comunicados" class="table card-table table-vcenter text-nowrap datatable" width="100%">
                            <thead>
                                <tr>    
                                    <th>CATEGORÍA</th>                              
                                    <th>TÍTULO</th>
                                    <th>INICIO</th>
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
</section>
@endsection