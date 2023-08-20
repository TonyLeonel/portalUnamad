@extends('layouts.portal')

@section('titulo', 'Oficina de Cooperación y Relaciones Internacionales -  Personal Administrativo')

@section('contenido')
<!-- HEADER -->
<section class="relative-padding hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/header_default.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Oficina de Cooperación y Relaciones Internacionales - Personal Administrativo</span></h2>
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
            <a href="{{ url('oficinas/cooperacion') }}">Oficina de Cooperación y Relaciones Internacionales</a>    
            <span>Personal Administrativo</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('oficinas/cooperacion/personal') }}"  class="share-btn">
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
                @include('secciones.paginas.coperacion_info')                            
            </div>
            <div class="col-md-8">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: justify; line-height: normal; background: white; mso-background-themecolor: background1;"><span style="color: rgb(53, 152, 219);"><strong>PERSONAL ADMINISTRATIVO</strong></span></p>
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: justify; line-height: normal; background: white; mso-background-themecolor: background1;">&nbsp;</p>
                            <table class="MsoTableGrid" style="width: 640px; margin-left: -0.25pt; border-collapse: collapse; border: none; height: 141px;" border="1" width="568" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr style="height: 37px;">
                            <td style="width: 211.547px; border: 1pt solid windowtext; background: rgb(30, 183, 9); padding: 0cm 5.4pt; height: 37px;" width="217">
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><strong style="mso-bidi-font-weight: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">APELLIDOS Y NOMBRES</span></strong></p>
                            </td>
                            <td style="width: 120px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; background: rgb(30, 183, 9); padding: 0cm 5.4pt; height: 37px;" width="100">
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><strong style="mso-bidi-font-weight: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">CARGO</span></strong></p>
                            </td>
                            <td style="width: 167.266px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; background: rgb(30, 183, 9); padding: 0cm 5.4pt; height: 37px;" width="167">
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><strong style="mso-bidi-font-weight: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">E-MAIL</span></strong></p>
                            </td>
                            <td style="width: 78.6875px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; background: rgb(30, 183, 9); padding: 0cm 5.4pt; height: 37px;" width="84">
                            <p class="MsoNormal" style="margin-bottom: 0cm; text-align: center; line-height: normal;" align="center"><strong style="mso-bidi-font-weight: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">CELULAR</span></strong></p>
                            </td>
                            </tr>
                            <tr style="height: 46px;">
                            <td style="width: 211.547px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 46px;" width="217">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">Téc. Sonia Ocola Portocarrero</span></p>
                            </td>
                            <td style="width: 120px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 46px;" width="100">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">Secretaria </span></p>
                            </td>
                            <td style="width: 167.266px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 46px;" width="167">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">socola@unamad.edu.pe</span></p>
                            </td>
                            <td style="width: 78.6875px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 46px;" width="84">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">982348359</span></p>
                            </td>
                            </tr>
                            <tr style="height: 58px;">
                            <td style="width: 211.547px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 58px;" width="217">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span lang="EN-US" style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1; mso-ansi-language: EN-US;">Bach. Gertson Akhiles Gaona Mendoza</span></p>
                            </td>
                            <td style="width: 120px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 58px;" width="100">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">Auxiliar Administrativo</span></p>
                            </td>
                            <td style="width: 167.266px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 58px;" width="167">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">ggaonam@unamad.edu.pe</span></p>
                            </td>
                            <td style="width: 78.6875px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 58px;" width="84">
                            <p class="MsoNormal" style="margin-bottom: 0cm; line-height: normal;"><span style="font-family: 'Garamond',serif; color: black; mso-themecolor: text1;">944141493</span></p>
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