@extends('layouts.portal')

@section('titulo', 'Centro de Idiomas')

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
            <span>Centro de Idiomas</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('programas/idiomas') }}"  class="share-btn">
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
                            <h2><strong><img src="{{ asset('storage/U8PYeBgotF3cQA9QyNt2uJH0WLBlhZ8WMUaV2dJr.jpg') }}" alt="" width="100%" height="auto"></strong></h2>
                                <h2>&nbsp;</h2>
                                <p style="text-align: justify;">&nbsp;</p>
                                <table style="border-collapse: collapse; width: 100%; height: 338.75px; border-width: 5px; border-color: rgb(255, 255, 255); margin-left: auto; margin-right: auto;" border="1"><colgroup><col style="width: 24.967%;"><col style="width: 24.967%;"><col style="width: 24.967%;"><col style="width: 24.967%;"></colgroup>
                                <tbody>
                                <tr style="height: 140.35px;">
                                <td style="height: 140.35px; border-width: 5px; border-color: rgb(255, 255, 255);"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('storage/QUf7PptkQgsZ0dWou3cmakSujJ0l3XFlnmQrkVWg.png') }}" alt="" width="80%" height="auto"></td>
                                <td style="height: 140.35px; border-width: 5px; border-color: rgb(255, 255, 255);"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('storage/qwdWUYtLXIUEwLyA4LH2z1SIzzGiLAmfkN84QGTP.png') }}" alt="" width="80%" height="auto"></td>
                                <td style="height: 140.35px; border-width: 5px; border-color: rgb(255, 255, 255);"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('storage/HIzHowlS7GuaMbMRrjospfSxM4ICkE5wj1BN99nM.png') }}" alt="" width="80%" height="auto"></td>
                                <td style="height: 140.35px; border-width: 5px; border-color: rgb(255, 255, 255);"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('storage/28SASGeOzcvK1zADvaPQs7hZAbTidC5Mzr1uYxgU.png') }}" alt="" width="80%" height="auto"></td>
                                </tr>
                                <tr style="height: 198.4px;">
                                <td style="height: 198.4px; border-width: 5px; border-color: rgb(255, 255, 255); border-style: solid; text-align: center;">
                                <p style="text-align: center;"><strong><span style="color: rgb(219, 4, 85);">INGLÉS BÁSICO</span></strong></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;">Todo lo que necesitas saber </span><span style="font-size: 10pt;">del idioma inglés con los primeros pasos y conceptos fundamentales.</span></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;"><span style="color: #db1e4a;"><a style="color: #db1e4a;" title="Matricúlate Aquí" href="https://docs.google.com/forms/d/e/1FAIpQLSePnTizXeuhsUrdFo3QuDwGXn0VpkziwQiMcsRcyMDMhuSkAg/viewform" target="_blank" rel="noopener">Matricúlate Aquí</a></span></span></p>
                                </td>
                                <td style="height: 198.4px; border-width: 5px; border-color: rgb(255, 255, 255); border-style: solid; text-align: center;">
                                <p><strong><span style="color: rgb(219, 4, 85);">PORTUGUES BÁSICO</span></strong></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;">Para seguir desarrollando tus habilidades en el ámbito del idioma portugués.&nbsp;</span></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;"><span style="color: #db1e4a;"><a style="color: #db1e4a;" title="Matricúlate Aquí" href="https://docs.google.com/forms/d/e/1FAIpQLSePnTizXeuhsUrdFo3QuDwGXn0VpkziwQiMcsRcyMDMhuSkAg/viewform" target="_blank" rel="noopener">Matricúlate Aquí</a></span></span></p>
                                </td>
                                <td style="height: 198.4px; border-width: 5px; border-color: rgb(255, 255, 255); border-style: solid; text-align: center;">
                                <p><strong><span style="color: rgb(219, 4, 85);">FRANCÉS BÁSICO</span></strong></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;">Opten un nivel mas avanzado de tus conocimientos de francés.</span></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;"><a title="Matricúlate Aquí" href="https://docs.google.com/forms/d/e/1FAIpQLSePnTizXeuhsUrdFo3QuDwGXn0VpkziwQiMcsRcyMDMhuSkAg/viewform" target="_blank" rel="noopener"><span style="color: #db1e4a;">Matricúlate Aquí</span></a></span></p>
                                </td>
                                <td style="height: 198.4px; border-width: 5px; border-color: rgb(255, 255, 255); border-style: solid; text-align: center;">
                                <p><strong><span style="color: rgb(219, 4, 85);">QUECHUA BÁSICO</span></strong></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;">Amplía y certifica tus conocimientos del idioma quechua.</span></p>
                                <p style="text-align: center;"><span style="font-size: 10pt;"><a title="Matricúlate Aquí" href="https://docs.google.com/forms/d/e/1FAIpQLSePnTizXeuhsUrdFo3QuDwGXn0VpkziwQiMcsRcyMDMhuSkAg/viewform" target="_blank" rel="noopener"><span style="color: #db1e4a;">Matricúlate Aquí</span></a></span></p>
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