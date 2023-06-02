
$( document ).ready(function() {
    
    $('#externo-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        slidesToShow: 4,
        dots: true,
        arrows: false,
        centerMode: true,
        variableWidth: false,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]

    });

    $('.flexslider').flexslider({
        animation: "fade",
        slideshowSpeed: 3000,
        touch: true,
        video:	true,
        controlNav: false,
        animationSpeed: 1000,
        // smoothHeight: true
    });
});

// Función para actualizar los tamaños en el documento HTML
function actualizarTamaños() {
    // Obtener el tamaño de la pantalla del dispositivo
    var screenWidth = screen.width;
    var screenHeight = screen.height;

    // Obtener el tamaño de la ventana del navegador
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    // Obtener el tamaño de toda la página web
    var pageWidth = document.documentElement.scrollWidth;
    var pageHeight = document.documentElement.scrollHeight;

    // Actualizar los mensajes en el documento HTML
    var x = document.getElementById("screen");
    x.innerHTML = "Pantalla del dispositivo: ancho: " + screenWidth + ", altura: " + screenHeight + ".";

    var y = document.getElementById("window");
    y.innerHTML = "Ventana del navegador: ancho: " + windowWidth + ", altura: " + windowHeight + ".";

    var z = document.getElementById("page");
    z.innerHTML = "Página web: ancho: " + pageWidth + ", altura: " + pageHeight + ".";
}
  
// Llamar a la función para actualizar los tamaños al cargar la página
actualizarTamaños();

// Llamar a la función actualizarTamaños cada vez que se redimensione la ventana del navegador
window.onresize = actualizarTamaños;



// var images = document.getElementsByClassName('thumbnail');
// new simpleParallax(images,{
//     orientation: 'up',
//     scale: 2, // Ajusta el valor según el efecto de parallax deseado
//     // orientation: 'up',
//     // delay: 1,
//     // transition: 'cubic-bezier(0,0,0,1)'
    
// });