@extends('layouts.portal')

@section('titulo', 'Publicaciones')

@section('js')
<script src="{{ asset('js/publicaciones.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/publicaciones.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Publicaciones</span></h2>
            <h4>Puedes acceder a todas las publicaciones realizadas por las diferentes oficinas de la UNAMAD.</h4>
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
            <span>Publicaciones</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('publicaciones') }}" class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">        
        <div class="row">
            <div class="col-md-8">
                <div class="post-container fl-wrap">
                @if(count($publicaciones) > 0)
                    @foreach ($publicaciones as $publicacion)
                    <article class="post-article fl-wrap">
                        <div class="list-single-main-media fl-wrap">
                            <img src="{{ asset($publicacion->imagen) }}" class="respimg" alt="">
                        </div>
                        <div class="list-single-main-item fl-wrap block_box">
                            <h2 class="post-opt-title"><a href="{{ url('publicaciones/'.$publicacion->id.'/detalles') }}">{{ $publicacion->titulo }}</a></h2>
                            <p>{{ $publicacion->resumen }}</p>                           
                            <span class="fw-separator fl-wrap"></span>
                            <div class="post-author"><a><span>{{ $publicacion->user->alias }}</span></a></div>
                            <div class="post-opt">
                                <ul class="no-list-style">
                                    <li><i class="fal fa-calendar"></i> <span>{{ $publicacion->created_at->format('d/m/Y')}}</span></li>
                                    <li><i class="fal fa-tags"></i> <a href="{{ url('publicaciones?categoria_id='.$publicacion->publicacion_categoria_id) }}">{{ $publicacion->categoria->nombre }}</a></li>
                                </ul>
                            </div>
                            <a href="{{ url('publicaciones/'.$publicacion->id.'/detalles') }}" class="btn color-bg float-btn small-btn">Leer más</a>
                        </div>
                    </article>
                    @endforeach
                    <div class="row pt-3">
                        <div class="col-12">
                            {{ $publicaciones->appends(['texto' => $texto, 'categoria_id' => $categoria_id])->links('secciones.paginacion') }}
                        </div>
                    </div>
                @else
                    <div class="text-center p-3 text-muted fs-6" style="background: #ebebeb;">
                    NO SE ENCONTRARON REGISTROS
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-widget-wrap fl-wrap fixed-bar fixbar-action">
                    <div class="box-widget fl-wrap">
                        <div class="search-widget fl-wrap">
                            <form action="{{ url('publicaciones') }}" class="fl-wrap custom-form">
                                <input name="texto" id="texto" type="text" class="search ps-3" placeholder="Buscar..." value="{{ $texto }}" style="">
                                @if($texto != '')
                                <a href="{{ url('publicaciones') }}" class="search-cancel"><i class="far fa-times"></i></a>
                                @endif
                                <button class="search-submit" id="submit_btn"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="box-widget fl-wrap">
                        <div class="box-widget-title fl-wrap">          
                            <div class="d-flex">
                                <div class="flex-fill">Categorias</div>   
                                @if($categoria_id != 0)
                                <div class="pe-2"><a href="{{ url('publicaciones') }}" class="text-danger"><i class="fal fa-times"></i></a></div> 
                                @endif
                            </div>                  
                            
                        </div>
                        <div class="box-widget-content fl-wrap">
                            <ul class="cat-item no-list-style">
                                @foreach ($categorias as $categoria)
                                <li><a href="{{ url('publicaciones?categoria_id='.$categoria->id) }}" class="{{ $categoria_id == $categoria->id ? 'active' : '' }}">{{ $categoria->nombre }}</a> <span>{{ $categoria->publicaciones_count }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection