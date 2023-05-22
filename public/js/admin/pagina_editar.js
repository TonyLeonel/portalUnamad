var contenido; 

document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#contenido',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen',
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
    });
});


/*

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

document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#contenido',
        plugins: 'image,link,table',
        language: 'es_419',
        automatic_uploads: true,
        images_upload_url: '/json/administrador/imagen'
    });
});

*/


function guardar() {
    if(confirm("Esta seguro que desea guardar?")){
        if(validar("#form_guardar")){    
            var myContent = tinymce.get("contenido").getContent();
            if (myContent != '') {

                $("#cargando_pagina").show();
                $.ajax({
                    type: (laPagina != 0 ? "PUT" : "POST"),
                    url: default_server+(laPagina != 0 ? '/json/paginas/'+laPagina : '/json/paginas'),
                    data: {
                        pagina_categoria_id: $("#pagina_categoria_id").val(),
                        flag: $("#flag").val(),
                        titulo: $("#titulo").val(),
                        contenido: myContent,     
                        estado: ($("#estado").is(':checked') ? 1 : 0 )
                    },
                    success: function(result){  
                        alerta(result.message, true); 
                        location.href = default_server+'/admin/paginas';
                    },
                    error: function(error) {                
                        alerta(response_helper(error), false);        
                    },
                    complete: function() {                
                        $("#cargando_pagina").hide();   
                    }
                });
            
            }
            else {
                alerta("Ingrese un contenido",false);
            }
        }
    }
}
