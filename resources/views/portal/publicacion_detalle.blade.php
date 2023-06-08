@extends('layouts.portal')

@section('titulo', 'Publicaciones - Detalles')

@section('contenido')
<!-- NAVEGACIÓN -->
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap top-smpar">
    <div class="container">
        <div class="breadcrumbs-list">
            <a href="{{ url('/') }}">Inicio</a>  
            <a href="{{ url('publicaciones') }}">Publicaciones</a>  
            <span>Detalle</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('publicaciones/'.$publicacion->id.'/detalles') }}"  class="share-btn">
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
                <article class="post-article fl-wrap mb-3">
                    <!--IMAGEN-->
                    <div class="list-single-main-media fl-wrap">
                        <div>
                            <img src="{{ asset($publicacion->imagen) }}" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <!--DETALLE-->
                    <div class="list-single-main-item fl-wrap block_box">
                        <div class="single-article-header fl-wrap">
                            <h2 class="post-opt-title">{{ $publicacion->titulo }}</h2>
                            <span class="fw-separator"></span> 
                            <div class="clearfix"></div>
                            <div class="post-author"><span>{{ $publicacion->user->alias }}</span></div>
                            <div class="post-opt">
                                <ul class="no-list-style">
                                    <li><i class="fal fa-calendar"></i> <span>{{ $publicacion->created_at->format('d/m/Y') }} </span></li>
                                    <li><i class="fal fa-tags"></i> <span>{{ $publicacion->categoria->nombre }}</span></li> 
                                </ul>
                            </div>
                        </div>                       
                        <span class="fw-separator fl-wrap"></span> 
                        <div class="pagina_contenido">
                            {!! $publicacion->contenido !!}
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <div class="box-widget fl-wrap">
                    <div class="box-widget-title fl-wrap">Otras publicaciones</div>
                    <div class="box-widget-content fl-wrap" style="padding: 12px; overflow: hidden;">
                        <!--widget-posts-->
                        <div class="widget-posts  fl-wrap">
                            @if(count($otros) > 0)
                            <ul class="no-list-style">
                                @foreach($otros as $otr)
                                <li>
                                    <div class="widget-posts-descr">
                                        <h4><a href="{{ url('publicaciones/'.$otr->id.'/detalles') }}">{{ $otr->titulo }}</a></h4>
                                        <div class="geodir-category-location fl-wrap mt-0"><a><i class="fal fa-calendar"></i> {{ $otr->created_at->format('d/m/Y') }}</a></div>
                                    </div>
                                </li>
                                @endforeach                                
                            </ul>
                            <div class="clearfix"></div>
                            <div class="pb-2 pt-3">
                                <a href="{{ url('publicaciones') }}" class="tarjeta_link_pink">Ver más publicaciones</a>
                            </div>                            
                            @else
                            <div class="text-muted text-center">NO SE ENCONTRARON REGISTROS</div>
                            @endif
                        </div>
                        <!-- widget-posts end-->                                                      
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

@endsection