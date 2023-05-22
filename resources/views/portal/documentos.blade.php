@extends('layouts.portal')

@section('titulo', 'Documentos normativos y de gestión')

@section('js')
<script src="{{ asset('js/portal/documentos.js') }}" type="text/javascript"></script>
@endsection


@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/documentos.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Documentos normativos y de gestión</span></h2>
            <h4>Instrumentos técnicos que regulan el modelo de gestión interna de la UNAMAD.</h4>
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <span>Documentos</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('documentos') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="list-main-wrap-header box-list-header fl-wrap mb-3">
                    <!-- list-main-wrap-title-->
                    <div class="list-main-wrap-title">
                        <h2>
                            Se Muestran : 
                            @if($buscar == '')
                            <span>Todos los Documentos</span>
                            @else
                            <span>Resultados de busqueda <a href="{{url('documentos')}}" title="LIMPIAR" style="color: #144273; vertical-align: middle; margin-left: 5px;"><i class="fas fa-times"></i></a></span> 
                            @endif
                        </h2>
                    </div>
                    <!-- list-main-wrap-title end-->
                    <!-- list-main-wrap-opt-->
                    <div class="list-main-wrap-opt">
                        <!-- price-opt-->
                        <div class="box-widget fl-wrap">
                            <div class="search-widget fl-wrap">
                                <form action="{{ url('documentos') }}" class="fl-wrap custom-form">
                                    <input name="buscar" id="buscar" type="text" class="search" placeholder="Buscar.." value="{{ $buscar }}" style="padding-left: 18px; min-width: 250px;">
                                    <button class="search-submit" id="submit_btn"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- price-opt end-->
                    </div>
                    <!-- list-main-wrap-opt end-->                    
                </div>

                <div class="box-widget fl-wrap mb-3">
                    <div class="box-widget-content fl-wrap" style="background: #eeeef1; overflow: auto; border: 1px solid #e1e1e1;">
                        <div class="jerarquia" style="min-width: 500px;">
                            <ul class="ps-0 mb-0">
                            @if(count($documentos)>0)
                                @if($buscar == '')
                                    @each('secciones.documento_simple', $documentos, 'item')
                                @else
                                    @foreach($documentos as $documento)
                                    <li>
                                        <a href="{{ $documento->enlace }}" class="jerarquia-item" target="_blank">
                                            <div class="jerarquia-icono"><img src="{{ url('img/file.png') }}" alt="" width="20px"></div>
                                            <div class="jerarquia-titulo">{{ $documento->nombre }}</div>        
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                            @else
                                <span class="text-muted">NO SE ENCONTRARON REGISTROS</span>
                            @endif
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <div class="box-widget fl-wrap mb-3">
                    <div class="box-widget-title fl-wrap">Destacados</div>
                    <div class="box-widget-content fl-wrap" style="padding: 25px 20px;">                        
                        <ul class="ps-0 mb-0">
                        @if(count($destacados) > 0)
                            @foreach($destacados as $destacado)
                            <li>
                                <a href="{{ $destacado->enlace }}" class="jerarquia-item" target="_blank">
                                    <div class="jerarquia-icono"><img src="{{ url('img/file.png') }}" alt="" width="20px"></div>
                                    <div class="jerarquia-titulo">{{ $destacado->nombre }}</div>        
                                </a>
                            </li>
                            @endforeach
                        @else
                        <span class="text-muted">NO SE ENCONTRARON REGISTROS</span>
                        @endif
                        </ul>                        
                    </div>
                </div>
                <div class="box-widget fl-wrap mb-3">
                    <div class="tarjeta_container">                    
                        <div class="tarjeta_wrapper" style="position: relative;">
                            <a href="https://www.gob.pe/busquedas?contenido%5B%5D=normas&contenido%5B%5D=publicaciones&institucion%5B%5D=unamad&sort_by=recent" class="tarjeta tarjeta_red" target="_blank">
                                <div class="">                                   
                                    <h4 class="p-0 m-0">BUSCADOR GOB.PE</h4>                                                     
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <a href="https://www.youtube.com/watch?v=jXXAx11HTo4" target="_blank" class="link_pink">¿Cómo utilizar el buscador de Gob pe?</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection