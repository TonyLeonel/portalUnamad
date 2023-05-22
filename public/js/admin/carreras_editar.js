var contenido; 

document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#vision',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });
});
document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#mision',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });
});
document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#perfil',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });
});
document.addEventListener("DOMContentLoaded", function() {   
    tinymce.init({        
        selector: 'textarea#descripcion',
        plugins: 'image,link,table,advlist,lists',
        language: 'es_419',
        height: 600,
        automatic_uploads: true,
        toolbar: 'undo redo | formatselect | bold italic underline backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        images_upload_url: '/json/cargar/imagen'
    });
});
function guardar() {
    if(confirm("Esta seguro que desea guardar?")){

        if(!validar("#form_carrera")) {
            return;
        }

        $("#cargando_pagina").show();

        var vision = tinymce.get("vision").getContent();
        var mision = tinymce.get("mision").getContent();
        var perfil = tinymce.get("perfil").getContent();
        var descripcion = tinymce.get("descripcion").getContent();
        $.ajax({
            type: (laCarrera != 0 ? "PUT" : "POST"),
            url: default_server+(laCarrera != 0 ? '/json/carreras/'+laCarrera : '/json/carreras'),
            data: {
                nombre: $("#nombre").val(),
                abreviatura: $("#abreviatura").val(),
                facultad_id: $("#facultad").val(), 
                telefono: $("#telefono").val(),
                direccion: $("#direccion").val(), 
                correo: $("#correo").val(),
                facebook: $("#facebook").val(), 
                whatsapp: $("#whatsapp").val(),
                vision: vision,
                descripcion:descripcion,
                mision: mision,
                perfil:perfil,       
            },
            success: function(result){  
                alerta(result.message, true); 
                location.href = default_server+'/admin/carreras';
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