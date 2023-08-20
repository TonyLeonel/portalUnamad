@extends('layouts.portal')

@section('titulo', 'Comunicados')

@section('js')
  <script src="{{ asset('js/portal/comunicados.js') }}" type="text/javascript"></script>
@endsection

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
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
<div class="breadcrumbs fw-breadcrumbs sp-brd fl-wrap image_bar">
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
<section class="gray-bg small-padding fl-wrap">    
    <div class="container">    
        @php
        $izquierda = array();
        $centro = array();
        $derecha = array();
        $contador = 1;

        foreach ($comunicados as $comunicado) {
            if($contador == 1){
                $izquierda[] = $comunicado;
            } elseif($contador == 2) {
                $centro[] = $comunicado;
            } else {
                $derecha[] = $comunicado;
            }
            
            if($contador >= 3)
                $contador = 1;
            else
                $contador++;
        }        
        @endphp 
        <!--Listado-->
        <div class="row">
            <!--izquierda-->
            <div class="col-md-4">
                @foreach ($izquierda as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time {{ ($comunicado->fecha_fin->lt($ahora) ? 'vencido' : '') }}" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach
            </div>       
            <!--centro-->
            <div class="col-md-4">
                @foreach ($centro as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time {{ ($comunicado->fecha_fin->lt($ahora) ? 'vencido' : '') }}" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach
            </div>    
            <!--derecha-->
            <div class="col-md-4">
                @foreach ($derecha as $comunicado)
                <article class="com_item">
                    <div class="com_imagen">
                        <a href="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_link" target="_blank">
                            <img src="{{ asset($comunicado->imagen) }}" alt="Comunicado" loading="lazy">                        
                            <div class="com_overlay"></div>
                        </a>
                        <div class="com_time {{ ($comunicado->fecha_fin->lt($ahora) ? 'vencido' : '') }}" style="bottom: 10px; left: 10px;">{{ $comunicado->created_at->format('d/m/y') }} - {{ $comunicado->fecha_fin->format('d/m/y') }}</div>                       
                        <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('comunicados/detalle/'.$comunicado->id) }}" class="com_imagen_btn tolt" data-microtip-position="left" data-tooltip="Compartir" style="top: 10px; right: 10px;"><span><i class="fal fa-random"></i></span></a>                        
                    </div>                    
                </article>
                @endforeach    
            </div>    
        </div>
        <div class="row pt-4">
            <div class="col-12">
                {{ $comunicados->links('secciones.paginacion') }}
            </div>
        </div>
    </div>
</section>
@endsection