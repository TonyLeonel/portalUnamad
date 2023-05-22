var contenido; 

$( document ).ready(function() {

    tinymce.init({        
        selector: 'textarea#contenido',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });

    window.Litepicker && (new Litepicker({
        format: "DD/MM/YYYY",
        element: document.getElementById('fecha_fin'),
        buttonText: {
            previousMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>',
            nextMonth: '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>',
        },
    }));

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
        if(validar("#form_guardar")){
            //si es nuevo validar la foto
            if(elComunicado == 0){
                if(document.getElementById('foto_principal').files.length == 0) {            
                    alerta("Ingrese una imagen principal", false);
                    return;
                }
            }

            $("#cargando_pagina").show();

            var formulario = new FormData();
            formulario.append('comunicado_categoria_id', $("#comunicado_categoria_id").val()); 
            formulario.append('titulo', $("#titulo").val()); 
            var myContent = tinymce.get("contenido").getContent();
            formulario.append('contenido', myContent);

            if(document.getElementById('foto_principal').files.length > 0) {            
                var img = $("#foto_principal")[0].files[0];
                formulario.append("file", img); 
            }

            formulario.append('fecha_fin', db_fecha($("#fecha_fin").val())); 
            formulario.append('estado', $("#estado").is(':checked') ? 1 : 0); 
                       
            $.ajax({
                type: "POST",
                url: default_server+(elComunicado != 0 ? '/json/comunicados/modificar/'+elComunicado : '/json/comunicados'),
                processData: false,
                contentType: false,
                data: formulario,
                success: function(result){  
                    alerta(result.message, true); 
                    location.href = default_server+'/admin/comunicados';
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
}