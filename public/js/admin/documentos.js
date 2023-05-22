
var edit_carpeta_id = 0;
var base_carpeta_id = 0;
var edit_archivo_id = 0;
var mover_tipo = '';

$( document ).ready(function() {

});

//------------------------------------------------------------CARPETA

function agregar_carpeta(carpeta_base, nombre_base) {
    edit_carpeta_id = 0;
    base_carpeta_id = carpeta_base;
    $("#titulo_editar_carpeta").html("Nueva carpeta"); 
    limpiar('#form_editar_carpeta');
    $("#padre_carpeta").val(nombre_base);
    $("#nombre_carpeta").val('');
    $("#alias_carpeta").val('');
    $('#estado_carpeta').prop('checked', true);
    $("#editar_carpeta").modal("show");
}

function modificar_carpeta(datos) {
    var carpeta = to_json(datos.dataset.json);
    if(carpeta){
        edit_carpeta_id = carpeta.id;
        $("#titulo_editar_carpeta").html("Modificar carpeta"); 
        limpiar('#form_editar_carpeta');
        $("#padre_carpeta").val('-');
        $("#nombre_carpeta").val(carpeta.nombre);
        $("#alias_carpeta").val(carpeta.alias);
        $('#estado_carpeta').prop('checked', (carpeta.estado == 1));
        $("#editar_carpeta").modal("show");
    }   
}

function guardar_carpeta() 
{
    if(validar('#form_editar_carpeta'))
    {
        $("#editar_carpeta").modal("hide");
        $("#cargando_pagina").show();

        if(edit_carpeta_id == 0)//nuevo
        {
            $.ajax({
                type: "POST",
                url: default_server+"/json/carpetas",
                data: {
                    carpeta_id: base_carpeta_id,
                    nombre: $("#nombre_carpeta").val(),
                    alias: $("#alias_carpeta").val(),                    
                    estado: ($("#estado_carpeta").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    document.location.reload();
                },
                error: function(error) {                
                    $("#cargando_pagina").hide();   
                    alerta(response_helper(error), false);
                }
            });
        }
        else
        {
            $.ajax({
                type: "PUT",
                url: default_server+"/json/carpetas/"+edit_carpeta_id,
                data: {                   
                    nombre: $("#nombre_carpeta").val(),
                    alias: $("#alias_carpeta").val(),                    
                    estado: ($("#estado_carpeta").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    document.location.reload();
                },
                error: function(error) {                
                    $("#cargando_pagina").hide();   
                    alerta(response_helper(error), false);            
                }
            });
        }
    }    
}

function mover_carpeta(iditem) {
    mover_tipo = 'CARPETA';
    edit_carpeta_id = iditem;    
    $("#loading_mover").show();  
    $("#mover_modal").modal("show");
    $.ajax({
        type: "GET",
        url: default_server+"/json/carpetas",
        data: { },
        success: function(result){  
            var carpetas = result.carpetas;
            var html_render = render_carpetas(carpetas);
            $("#carpetas_mover").html(html_render);
        },
        error: function(error) {                
            alerta(response_helper(error), false);
        },
        complete: function() {                
            $("#loading_mover").hide();
        }
    });   
}

function render_carpetas(items) {
    var html_data = ''
    for (let i = 0; i < items.length; i++) {
        html_data += '<li><a href="javascript:void(0);" onclick="guardar_mover('+items[i].id+');"><span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-filled icon-tabler-folder text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path></svg></span>'+items[i].nombre+'</a>';
        if(items[i].hijos.length > 0){
            html_data += '<ul>'+render_carpetas(items[i].hijos)+'</ul>';
        }            
        html_data += '</li>';       
    }
    return html_data;
}

function guardar_mover(iddestino) {
    if(confirm('Esta seguro que desea mover a esta carpeta destino?'))
    {
        $("#mover_modal").modal("hide");
        $("#cargando_pagina").show();

        $.ajax({
            type: "PATCH",
            url: default_server+"/json/"+(mover_tipo == "CARPETA" ? "carpetas/"+edit_carpeta_id : "archivos/"+edit_archivo_id),
            data: { carpeta_id: iddestino },
            success: function(result){  
                alerta(result.message, true); 
                document.location.reload();
            },
            error: function(error) {                
                $("#cargando_pagina").hide();   
                alerta(response_helper(error), false);            
            }
        });
    }
}


function eliminar_carpeta(iditem) {
    if(confirm('Esta seguro que desea eliminar?'))
    {
        $("#cargando_pagina").show();
        $.ajax({
            type: "DELETE",
            url: default_server+"/json/carpetas/"+iditem,        
            success: function(result){  
                alerta(result.message, true); 
                document.location.reload();
            },
            error: function(error) {                
                $("#cargando_pagina").hide();   
                alerta(response_helper(error), false);            
            }
        });
    }
}

//------------------------------------------------------------ARCHIVO

function agregar_archivo(carpeta_base, nombre_base) {
    edit_archivo_id = 0;
    base_carpeta_id = carpeta_base;

    $("#titulo_editar_archivo").html("Nuevo archivo"); 
    limpiar('#form_editar_archivo');
    $("#padre_archivo").val(nombre_base);
    $("#nombre_archivo").val('');
    $("#alias_archivo").val('');
    $("#enlace_archivo").val('');
    $('#estado_archivo').prop('checked', true);
    $('#destacado_archivo').prop('checked', false);    
    $("#editar_archivo").modal("show");
}

function modificar_archivo(datos) {
    var archivo = to_json(datos.dataset.json);
    if(archivo){
        edit_archivo_id = archivo.id;
        $("#titulo_editar_archivo").html("Modificar archivo"); 
        limpiar('#form_editar_archivo');
        $("#padre_archivo").val('-');
        $("#nombre_archivo").val(archivo.nombre);
        $("#alias_archivo").val(archivo.alias);
        $("#enlace_archivo").val(archivo.enlace);
        $('#estado_archivo').prop('checked', (archivo.estado == 1));
        $('#destacado_archivo').prop('checked', (archivo.destacado == 1));  
        $("#editar_archivo").modal("show");
    }   
}

function guardar_archivo() 
{
    if(validar('#form_editar_archivo'))
    {
        $("#editar_archivo").modal("hide");
        $("#cargando_pagina").show();

        if(edit_archivo_id == 0)//nuevo
        {
            $.ajax({
                type: "POST",
                url: default_server+"/json/archivos",
                data: {
                    carpeta_id: base_carpeta_id,
                    nombre: $("#nombre_archivo").val(),
                    alias: $("#alias_archivo").val(),   
                    enlace: $("#enlace_archivo").val(),                  
                    estado: ($("#estado_archivo").is(':checked') ? 1 : 0 ),
                    destacado: ($("#destacado_archivo").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    document.location.reload();
                },
                error: function(error) {                
                    $("#cargando_pagina").hide();   
                    alerta(response_helper(error), false);
                }
            });
        }
        else
        {
            $.ajax({
                type: "PUT",
                url: default_server+"/json/archivos/"+edit_archivo_id,
                data: {                   
                    nombre: $("#nombre_archivo").val(),
                    alias: $("#alias_archivo").val(),   
                    enlace: $("#enlace_archivo").val(),                  
                    estado: ($("#estado_archivo").is(':checked') ? 1 : 0 ),
                    destacado: ($("#destacado_archivo").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    document.location.reload();
                },
                error: function(error) {                
                    $("#cargando_pagina").hide();   
                    alerta(response_helper(error), false);            
                }
            });
        }
    }    
}

function mover_archivo(iditem) {
    mover_tipo = 'ARCHIVO';
    edit_archivo_id = iditem;    
    $("#loading_mover").show();  
    $("#mover_modal").modal("show");
    $.ajax({
        type: "GET",
        url: default_server+"/json/carpetas",
        data: { },
        success: function(result){  
            var carpetas = result.carpetas;
            var html_render = render_carpetas(carpetas);
            $("#carpetas_mover").html(html_render);
        },
        error: function(error) {                
            alerta(response_helper(error), false);
        },
        complete: function() {                
            $("#loading_mover").hide();
        }
    });
}

function eliminar_archivo(iditem) {
    if(confirm('Esta seguro que desea eliminar?'))
    {
        $("#cargando_pagina").show();
        $.ajax({
            type: "DELETE",
            url: default_server+"/json/archivos/"+iditem,        
            success: function(result){  
                alerta(result.message, true); 
                document.location.reload();
            },
            error: function(error) {                
                $("#cargando_pagina").hide();   
                alerta(response_helper(error), false);            
            }
        });
    }
}

