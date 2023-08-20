@extends('layouts.portal')

@section('titulo', 'Centro de Idiomas - Directorio')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Centro de Idiomas</span></h2>
            <h4>Centro de formación académica de la UNAMAD.</h4>
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
            <a href="{{ url('programas/idiomas') }}">Centro de Idiomas</a>    
            <span>Directorio</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/idiomas/directorio') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="relative-padding gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                @include('secciones.menu', $menu)    
                @include('secciones.paginas.idimas_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p><img src="{{ asset('storage/BSUeGA5F4jKRiuqA6ycr93YTr2cgD0coM4tNWhJT.jpg') }}" alt="" width="100%" height="auto"></p>
                            <p>&nbsp;</p>
                            <table style="border-collapse: collapse; width: 100%;" border="1"><colgroup><col style="width: 20.1188%;"><col style="width: 80.0133%;"></colgroup>
                            <tbody>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">RUC</span></td>
                            <td>:&nbsp; 20526917295</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Dirección</span></td>
                            <td>:&nbsp; AV. Dos de Mayo N°960 - CENTRO DE FORMACIÓN ACADÉMICA UNAMAD - Ubicacion de la Oficina</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Móvil 1</span></td>
                            <td>:&nbsp; +51 974120205</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Móvil 2</span></td>
                            <td>:&nbsp; +51 975845045</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Email</span></td>
                            <td>:&nbsp; IDIOMAS@UNAMAD.EDU.PE</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Email info</span></td>
                            <td>:&nbsp; INFO.IDIOMAS@UNAMAD.EDU.PE</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Email Mesa de Partes</span></td>
                            <td>:&nbsp; MESADEPARTES.IDIOMAS@UNAMAD.EDU.PE</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Provincia</span></td>
                            <td>:&nbsp; Tambopata</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Distrito</span></td>
                            <td>:&nbsp; Tambopata</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Departamento</span></td>
                            <td>:&nbsp; Madre de Dios</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Ciudad</span></td>
                            <td>:&nbsp; Puerto Maldonado</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">País</span></td>
                            <td>:&nbsp; Perú</td>
                            </tr>
                            <tr>
                            <td><span style="color: rgb(219, 4, 85);">Continente</span></td>
                            <td>:&nbsp; América del Sur</td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection