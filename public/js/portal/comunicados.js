var tabla;
var ahora = new Date();

$( document ).ready(function() {

    tabla = $("#t_comunicados").DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 50,
        "order": [],
        "ajax": {
            "url":  default_server+"/comunicados/lista",
            "type": "GET",
            "data": function ( d ) {
             },
            "error": default_error_handler
        },
        "columns": [            
            { "data": "categoria.nombre", "searchable": false, "orderable": false,
                render: function ( data, type, full ) {                      
                    return data;
                }        
            },
            { "data": "titulo",
                render: function ( data, type, full ) {                      
                    return '<div title="'+data+'">'+textoMax(data,30)+'</div>';
                }        
            },
            { "data": "created_at","searchable": false, className: "w-1",
                render: function ( data, type, full ) {                      
                    return dis_fecha(data);
                }        
            },
            { 
                "data": null,
                "searchable": false, "orderable": false, className: "w-1",
                    render: function ( data, type, full ) {   
                    var res = '<div class="btn-list flex-nowrap">'+
                                '<a class="btn btn-white btn-icon" href="'+default_server+'/comunicados/detalle/'+full.id+'" title="Ver">Ver</a>'+
                            '</div>';
                    return res;
                }
            }
        ],
        "dom": default_datatable_dom,
        "language": default_datatable_language,
        "initComplete" : default_datatable_buttons
    }); 

    $('#categoria_select').on('change', function() {
        tabla.ajax.reload();
    });    
    
});