$( document ).ready(function() {
      
});

function guardar() {
    if(confirm("Esta seguro que desea guardar?")){

        if(!validar("#form_usuario")) {
            return;
        }

        if(elUsuario == 0) {
            if($("#password").val() == '' | $("#password_confirmed").val() == '') {
                alerta('Ingrese una contraseña', false);
                return;
            }
        }

        $("#cargando_pagina").show();

        var permisos = [];
        //pagina
        $("input.pagina_check").each(function() {
            var id_check = $(this).attr('id').replace('pagina_check_','');
            if($(this).is(':checked')){
                permisos.push({
                    elemento: 'PAGINA',
                    elemento_id: id_check
                });
            }
        });
        //publicacion
        $("input.publicacion_check").each(function() {
            var id_check = $(this).attr('id').replace('publicacion_check_','');
            if($(this).is(':checked')){
                permisos.push({
                    elemento: 'PUBLICACION',
                    elemento_id: id_check
                });
            }
        });
        //comunicado
        $("input.comunicado_check").each(function() {
            var id_check = $(this).attr('id').replace('comunicado_check_','');
            if($(this).is(':checked')){
                permisos.push({
                    elemento: 'COMUNICADO',
                    elemento_id: id_check
                });
            }
        });        

        $.ajax({
            type: (elUsuario != 0 ? "PUT" : "POST"),
            url: default_server+(elUsuario != 0 ? '/json/usuarios/'+elUsuario : '/json/usuarios'),
            data: {
                dni: $("#dni").val(),
                nombre: $("#nombre").val(),
                apaterno: $("#apaterno").val(),
                amaterno: $("#amaterno").val(),
                telefono: $("#telefono").val(),
                direccion: $("#direccion").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                password_confirmation: $("#password_confirmed").val(),
                tipo: $("#tipo").val(),
                permisos: permisos,         
                estado: ($("#estado").is(':checked') ? 1 : 0 )
            },
            success: function(result){  
                alerta(result.message, true); 
                location.href = default_server+'/admin/usuarios';
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