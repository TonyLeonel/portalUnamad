function mostrar_ocultar(id) {
    temo=document.getElementById("a"+id);
    if(temo.dataset.elemid==0){
        $("#div_carpeta"+id).removeClass("oculto");
        $("#mas"+id).addClass("oculto");
        $("#menos"+id).removeClass("oculto");
        temo.dataset.elemid=1;
    }    
    else{
        $("#div_carpeta"+id).addClass("oculto");
        $("#menos"+id).addClass("oculto");
        $("#mas"+id).removeClass("oculto");
        temo.dataset.elemid=0;
    }    
}