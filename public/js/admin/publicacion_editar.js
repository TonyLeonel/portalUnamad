var contenido; 

document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#contenido',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });
});

function seleccionar_imagen() {
    document.getElementById("foto_principal").click();
}

function cambio_imagen(input) {
    var imagenes = input.files;
    if (FileReader && imagenes && imagenes.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("imagen_principal").src = fr.result;
        }
        fr.readAsDataURL(imagenes[0]);
    } else {
        document.getElementById("imagen_principal").src = default_imagen;        
    }
}


function guardar() {
    if(confirm("Esta seguro que desea guardar?")){
        if(!validar("#form_guardar")){
            return;
        }

        var myContent = tinymce.get("contenido").getContent();
        if (myContent == '') {
            alerta("Ingrese un contenido",false);
            return;
        }

        if(laPublicacion == 0){
            if(document.getElementById('foto_principal').files.length == 0) {            
                alerta("Ingrese una imagen principal", false);
                return;
            }
        }

        $("#cargando_pagina").show();

        var formulario = new FormData();
        formulario.append('publicacion_categoria_id', $("#publicacion_categoria_id").val()); 
        formulario.append('titulo', $("#titulo").val()); 
        formulario.append('resumen', $("#resumen").val());        
        var myContent = tinymce.get("contenido").getContent();
        formulario.append('contenido', myContent);

        if(document.getElementById('foto_principal').files.length > 0) {            
            var img = $("#foto_principal")[0].files[0];
            formulario.append("file", img); 
        }

        formulario.append('estado', $("#estado").is(':checked') ? 1 : 0); 

        $.ajax({
            type: "POST",
            url: default_server+(laPublicacion != 0 ? '/json/publicaciones/modificar/'+laPublicacion : '/json/publicaciones'),
            processData: false,
            contentType: false,
            data: formulario,
            success: function(result){  
                alerta(result.message, true); 
                location.href = default_server+'/admin/publicaciones';
            },
            error: function(error) {                
                alerta(response_helper(error), false);        
            },
            complete: function() {                
                $("#cargando_pagina").hide();   
            }
        });               
           
    }
}
