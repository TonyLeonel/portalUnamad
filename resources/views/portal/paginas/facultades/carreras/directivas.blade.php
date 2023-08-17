@extends('layouts.portal')

@section('titulo', 'Directivas')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
   <div class="bg-wrap bg-parallax-wrap-gradien">
      <div class="bg par-elem " data-bg="{{ asset('img/pabellonb3.jpg') }}"
         data-scrollax="properties: { translateY: '30%' }"></div>
   </div>
   <div class="container">
      <div class="section-title center-align big-title">
         <h2><span>{{$carrera->nombre}}</span></h2>
         <h4>Carrera Profesional de {{$carrera->nombre}} de la UNAMAD.</h4>
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
         <span>{{$carrera->nombre}}</span>
      </div>
      <div class="share-holder hid-share">
         <a href="javascript:void(0);" onclick="compartir_this();" class="share-btn">
            <i class="fas fa-share-alt"></i> Compartir
         </a>
      </div>
   </div>
</div>
<!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
   <div class="container">
      <div class="row">
         <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            @include('secciones.paginas.menu')
         </div>
         <div class="col-12 col-sm-8 col-md-8 col-lg-8">
            <div class="list-single-main-container">
               <div class="list-single-main-item">
                  <div class="pagina_contenido">
                     <div class="row">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                           <div class="container">
                              <h2 style="padding-bottom: 50px;">
                                 <strong style="color: rgb(237, 20, 91);padding-bottom:40px">Directivas</strong>
                              </h2>
                              <div class="module-under-development">
                                 <div class="gear"></div>
                                 <p class="message">Módulo en desarrollo</p>
                                 <p class="sub-message">Estamos trabajando para brindarte una experiencia increíble. ¡Vuelve pronto!</p>
                             </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
