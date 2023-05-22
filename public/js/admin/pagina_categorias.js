var tabla;
var editItem = 0;


$( document ).ready(function() {

    tabla = $("#t_categorias").DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 50,
        "order": [],
        "ajax": {
            "url":  default_server+"/json/paginas/categorias",
            "type": "GET",
            "data": function ( d ) { },
            "error": default_error_handler
        },
        "columns": [            
            { "data": "nombre",
                render: function ( data, type, full ) {                      
                    return data;
                }        
            },
            { "data": "descripcion",
                render: function ( data, type, full ) {                      
                    return '<div title="'+data+'">'+textoMax(data,30)+'</div>';
                }        
            },      
            { "data": "paginas_count", "searchable": false, className: "w-1 text-center",
                render: function ( data, type, full ) {                      
                    return data;
                }        
            },             
            { "data": "estado", "searchable": false, className: "w-1 text-center",
                render: function ( data, type, full ) {                      
                    if(data == 1)
                        return '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>';
                    else
                        return '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="3" y1="3" x2="21" y2="21" /><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83" /><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341" /></svg>';
                }        
            },  
            { 
                "data": null,
                "searchable": false, "orderable": false, className: "w-1",
                    render: function ( data, type, full ) {   
                    var res = '<div class="btn-list flex-nowrap">'+
                                '<button class="btn btn-white btn-icon" onclick="modificar('+full.id+');" title="MODIFICAR">'+
                                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>'+
                                '</button>'+
                                '<button class="btn btn-danger btn-icon" onclick="eliminar('+full.id+');" title="ELIMINAR">'+
                                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>'+
                                '</button>'+
                            '</div>';
                    return res;
                }
            }
        ],
        "dom": default_datatable_dom,
        "language": default_datatable_language,
        "initComplete" : default_datatable_buttons
    }); 
    
});

function nuevo() 
{
    editItem = 0;
    $("#titulo_editar").html("Nuevo registro"); 
    limpiar('#form_editar');
    vaciar('#form_editar');
    $('#estado').prop('checked', true);
    $("#editar").modal("show");
}

function modificar(iditem) 
{
    editItem = iditem;
    limpiar('#form_editar');
    vaciar('#form_editar');

    var data = tabla.rows().data();
    var objitem = elementId(iditem, data);
    //console.log(objitem);

    if(objitem != null)
    {        
        $("#nombre").val(objitem.nombre);
        $("#descripcion").val(safeText(objitem.descripcion));        
        $('#estado').prop('checked', (objitem.estado == 1));        
        $("#flag").val(objitem.flag);
        $("#tipo").val(objitem.tipo);
        $("#menu_id").val(objitem.menu_id);
        tipo_menu($("#tipo"),objitem.pagina_categorias_id);
        //console.log(objitem);
        $("#titulo_editar").html("Modificar registro"); 
        $("#editar").modal("show");
    }
    else
        alert("No se encontro el item");          
}


function guardar() 
{
    if(validar('#form_editar'))
    {
        $("#editar").modal("hide");
        if(editItem == 0)//nuevo
        {
            $.ajax({
                type: "POST",
                url: default_server+"/json/paginas/categorias",
                data: {
                    nombre: $("#nombre").val(),
                    descripcion: $("#descripcion").val(),                    
                    tipo: $("#tipo").val(),                    
                    menu_id: $("#menu_id").val(),                    
                    telefono: $("#telefono").val(),                    
                    correo: $("#correo").val(),                  
                    whatsapp: $("#whatsapp").val(),                       
                    facebook: $("#facebook").val(),                  
                    direccion: $("#direccion").val(),                    
                    flag: $("#flag").val(),                    
                    fuente: $("#fuente").val(),                    
                    categoria_id: $("#categoria_id").val(),                      
                    estado: ($("#estado").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    location.reload();
                },
                error: function(error) {                
                    alerta(response_helper(error), false);      
                }
            });
        }
        else
        {
            $.ajax({
                type: "PUT",
                url: default_server+"/json/paginas/categorias/"+editItem,
                data: {                   
                    nombre: $("#nombre").val(),
                    descripcion: $("#descripcion").val(),                    
                    tipo: $("#tipo").val(),                    
                    menu_id: $("#menu_id").val(),             
                    telefono: $("#telefono").val(),                    
                    correo: $("#correo").val(),                    
                    whatsapp: $("#whatsapp").val(),                       
                    facebook: $("#facebook").val(),                       
                    direccion: $("#direccion").val(),                       
                    flag: $("#flag").val(),                    
                    fuente: $("#fuente").val(),                    
                    categoria_id: $("#categoria_id").val(),                      
                    estado: ($("#estado").is(':checked') ? 1 : 0 )
                },
                success: function(result){  
                    alerta(result.message, true); 
                    location.reload();
                },
                error: function(error) {                
                    alerta(response_helper(error), false);            
                }
            });
        }
    }    
}


function eliminar(iditem) {
    if(confirm('Esta seguro que desea eliminar?'))
    {
        $.ajax({
            type: "DELETE",
            url: default_server+"/json/paginas/categorias/"+iditem,        
            success: function(result){  
                alerta(result.message, true); 
                tabla.ajax.reload();
            },
            error: function(error) {                
                alerta(response_helper(error), false);                       
            }
        });
    }
}
function tipo_menu(item,id) {
    
    if($(item).val() != 0){
        lista_categorias(id);
        $("#div_menu").removeClass("oculto");    
        $("#div_fuente").removeClass("oculto");
        $("#div_flag").removeClass("oculto");
        $("#datos_pagina").removeClass("oculto");
        $("#div_telefono").removeClass("oculto");
    }     
     else {
        $("#div_menu").addClass("oculto");
        $("#div_fuente").addClass("oculto");
        $("#div_flag").addClass("oculto");
        $("#datos_pagina").addClass("oculto");
        $("#div_telefono").addClass("oculto");
    }
}
function cambio_menu() {
    var data = tabla.rows().data();
    var objitem = elementId($("#menu_id").val(), data);
    $("#flag").val(objitem.flag);
}
function lista_categorias(id) {
    console.log(id);
    $("#categoria_id").empty() ;      
    $.ajax({
        type: "GET",
        url: default_server+"/json/paginas/categorias/lista/"+$('#menu_id').val(),        
        success: function(result){ 
            html="";  
            /* Para obtener el texto */
            var combo = document.getElementById("menu_id");
            var selected = combo.options[combo.selectedIndex].text;
            html+='<option value="0">'+selected+'</option>';   
            if(result.length>0){                                     
                result.forEach(element => {
                    html+='<option value="'+element.id+'" '+(element.id==id? 'selected' :'') +'>'+element.nombre+'</option>';                                        
                }); 
                }                          
                else{
                    var select = $("#categoria_id");
                    select.value =1;
                }  
            $("#categoria_id").append(html);

        },
        error: function(error) {                
            alerta(response_helper(error), false);      
        }
    });    
}