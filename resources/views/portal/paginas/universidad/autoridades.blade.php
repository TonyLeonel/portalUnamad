@extends('layouts.portal')

@section('titulo', 'Presentación')

@section('contenido')
<!-- HEADER -->
<section class="hidden-section single-par2  " data-scrollax-parent="true">
    <div class="bg-wrap bg-parallax-wrap-gradien">
        <div class="bg par-elem " data-bg="{{ asset('img/paginas/idiomas.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    </div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>Autoridades</span></h2>
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
            <span>Presentación</span>
        </div>
        <div class="share-holder hid-share">
            <a href="javascript:void(0);" onclick="compartir(this);" data-link="{{ url('universidad/autoridades') }}"  class="share-btn">
                <i class="fas fa-share-alt"></i> Compartir
            </a> 
        </div>
    </div>
</div>
    <!-- CONTENIDO -->
<section class="gray-bg small-padding fl-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-single-main-container">
                    <div class="list-single-main-item">                        
                        <div class="pagina_contenido">
                            <h2>
                                <strong>Presentación</strong>
                            </h2>
                            <div class="col-12 center">
                                <img class="presentacion-img"src="/img/user.png" alt="">
                            </div>
                            <div class="col-12 mt-3">
                                <p>fsdjfsdk sdkfj sdkf jfsdfjskd kjsdk fksdjfkjsldk fkjskdfji sldkfjskdfj sldfkjsdkjflsdjf skdjfskdfjskd flfdskfjksdjfkd jfkdjfsielsdkfjsdk sdkfhjksdhfs sdfhs sdjfhsjkdfksdfhkj sdfhjskdfhjksdf sdfjshfks sjdfkhsjkdfskdjfhsjkdfhskdjfhsdjf sdfjhjskd kjhjkhsdfhui uisdfb sfdbiu bsdfbiubf sdfbub sdfbiubibfebrs sudfsduibfsusdf uhsbfsfbsudfb s sufbsdf sdf df df d fsufhu sfuis </p>
                                <p>fsdjfsdk sdkfj sdkf jfsdfjskd kjsdk fksdjfkjsldk fkjskdfji sldkfjskdfj sldfkjsdkjflsdjf skdjfskdfjskd flfdskfjksdjfkd jfkdjfsielsdkfjsdk sdkfhjksdhfs sdfhs sdjfhsjkdfksdfhkj sdfhjskdfhjksdf sdfjshfks sjdfkhsjkdfskdjfhsjkdfhskdjfhsdjf sdfjhjskd kjhjkhsdfhui uisdfb sfdbiu bsdfbiubf sdfbub sdfbiubibfebrs sudfsduibfsusdf uhsbfsfbsudfb s sufbsdf sdf df df d fsufhu sfuis </p>
                                <p>fsdjfsdk sdkfj sdkf jfsdfjskd kjsdk fksdjfkjsldk fkjskdfji sldkfjskdfj sldfkjsdkjflsdjf skdjfskdfjskd flfdskfjksdjfkd jfkdjfsielsdkfjsdk sdkfhjksdhfs sdfhs sdjfhsjkdfksdfhkj sdfhjskdfhjksdf sdfjshfks sjdfkhsjkdfskdjfhsjkdfhskdjfhsdjf sdfjhjskd kjhjkhsdfhui uisdfb sfdbiu bsdfbiubf sdfbub sdfbiubibfebrs sudfsduibfsusdf uhsbfsfbsudfb s sufbsdf sdf df df d fsufhu sfuis </p>
                                <p>fsdjfsdk sdkfj sdkf jfsdfjskd kjsdk fksdjfkjsldk fkjskdfji sldkfjskdfj sldfkjsdkjflsdjf skdjfskdfjskd flfdskfjksdjfkd jfkdjfsielsdkfjsdk sdkfhjksdhfs sdfhs sdjfhsjkdfksdfhkj sdfhjskdfhjksdf sdfjshfks sjdfkhsjkdfskdjfhsjkdfhskdjfhsdjf sdfjhjskd kjhjkhsdfhui uisdfb sfdbiu bsdfbiubf sdfbub sdfbiubibfebrs sudfsduibfsusdf uhsbfsfbsudfb s sufbsdf sdf df df d fsufhu sfuis </p>                                
                            </div>
                            <div class="col-12 center">
                                <h5><strong>Hugo Dueñas Liranes, Rector</strong></h5> 
                                <span>Rector</span></br>
                                <span>rectorado@unamad.edu.pe</span>
                            </div>

                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection