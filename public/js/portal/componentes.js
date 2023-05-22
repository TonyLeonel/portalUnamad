function activar(item) {
    $(".nav_pills .nav_pills_item").each(function() {
        var id_text = $(this).attr('id');
        var id_item = id_text.replace('nav_','');
        if(id_item == item) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    $(".collapse_container .collapse_item").each(function() {
        var id_text = $(this).attr('id');
        if(id_text == item) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
}