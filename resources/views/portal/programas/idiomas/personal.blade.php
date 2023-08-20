@extends('layouts.portal')

@section('titulo', 'Centro de Idiomas - Personal administrativo')

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
            <span>Personal administrativo</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/idiomas/personal') }}"  class="share-btn">
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
                            <table style="border-collapse: collapse; width: 100%;" border="1"><colgroup><col style="width: 33.2903%;"><col style="width: 33.2903%;"><col style="width: 33.2903%;"></colgroup>
                                <tbody>
                                <tr>
                                <td style="text-align: center;"><img src="{{ asset('storage/T1y5rSKOeNkhiWgP6dOOgDZUfUFPdfHdyGesVYcR.jpg') }}" alt="" width="70%" height="auto"></td>
                                <td style="text-align: center;"><img src="{{ asset('storage/A3jL9wIDYw6n3xyX315iYyWvyBjK0FxCsQ1Y5N8E.png') }}" alt="" width="70%" height="auto"></td>
                                <td style="text-align: center;"><img src="{{ asset('storage/A3jL9wIDYw6n3xyX315iYyWvyBjK0FxCsQ1Y5N8E.png') }}" alt="" width="70%" height="auto"></td>
                                </tr>
                                <tr>
                                <td style="text-align: center;">
                                <p style="text-align: center;">&nbsp;</p>
                                <p style="text-align: center;"><strong>M.Sc. TATIANA CARMEN HUAMANI CALLOAPAZA</strong></p>
                                <p style="text-align: center;"><span style="color: rgb(219, 4, 85);">DIRECTORA DEL CENTRO DE IDIOMAS</span></p>
                                <p style="text-align: center;">&nbsp;</p>
                                <ul>
                                <li style="text-align: left;">thuamani@unamad.edu.pe</li>
                                <li style="text-align: left;">www.unamad.edu.pe</li>
                                <li style="text-align: left;">967 296 971</li>
                                <li style="text-align: left;">Puerto Maldonado</li>
                                </ul>
                                </td>
                                <td>
                                <p style="text-align: center;">&nbsp;</p>
                                <p style="text-align: center;"><strong>Bach. PAUL ANTHONY VALENCIA VELA</strong></p>
                                <p style="text-align: center;"><span style="color: rgb(219, 4, 85);">ESPECIALISTA INFORMÁTICO</span></p>
                                <p style="text-align: center;">&nbsp;</p>
                                <ul>
                                <li style="text-align: left;">pvalenciav@unamad.edu.pe</li>
                                <li style="text-align: left;">975 845 045</li>
                                <li style="text-align: left;">Puerto Maldonado</li>
                                </ul>
                                </td>
                                <td>
                                <p style="text-align: center;">&nbsp;</p>
                                <p style="text-align: center;"><strong>Bach. FERNANDO FLORES CONDORI</strong></p>
                                <p style="text-align: center;"><span style="color: rgb(219, 4, 85);">ESPECIALISTA INFORMÁTICO</span></p>
                                <p style="text-align: center;">&nbsp;</p>
                                <ul>
                                <li style="text-align: left;">ffloresc@unamad.edu.pe</li>
                                <li style="text-align: left;">974 120 205</li>
                                <li style="text-align: left;">Puerto Maldonado</li>
                                </ul>
                                </td>
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