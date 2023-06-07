
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
        pauseOnAction: false
        // smoothHeight: true
    });

    

    var fechaActual = new Date();
    var fecha2000 = new Date(2000, 6, 5);
    var diferenciaAnios = fechaActual.getFullYear() - fecha2000.getFullYear();
    $("#counter-target").attr("data-counter-target", diferenciaAnios);
    console.log(diferenciaAnios);

    new Counter('.counter');

});


// Función para actualizar los tamaños en el documento HTML
// function actualizarTamaños() {
//     var screenWidth = screen.width;
//     var screenHeight = screen.height;

//     var windowWidth = window.innerWidth;
//     var windowHeight = window.innerHeight;

//     var pageWidth = document.documentElement.scrollWidth;
//     var pageHeight = document.documentElement.scrollHeight;

//     var x = document.getElementById("screen");
//     x.innerHTML = "Pantalla del dispositivo: ancho: " + screenWidth + ", altura: " + screenHeight + ".";

//     var y = document.getElementById("window");
//     y.innerHTML = "Ventana del navegador: ancho: " + windowWidth + ", altura: " + windowHeight + ".";

//     var z = document.getElementById("page");
//     z.innerHTML = "Página web: ancho: " + pageWidth + ", altura: " + pageHeight + ".";
// }
// actualizarTamaños();
// window.onresize = actualizarTamaños;



// var images = document.getElementsByClassName('thumbnail');
// new simpleParallax(images,{
//     orientation: 'up',
//     scale: 2, // Ajusta el valor según el efecto de parallax deseado
//     // orientation: 'up',
//     // delay: 1,
//     // transition: 'cubic-bezier(0,0,0,1)'
    
// });
// $('.img-holder').imageScroll();
$('.img-holder').imageScroll({
    coverRatio: 0.5
});


// window.addEventListener('load', function() {
//     // Mostrar el contenido una vez que se haya cargado completamente
//     var flexsliderElements = document.getElementsByClassName('flexslider');
//     for (var i = 0; i < flexsliderElements.length; i++) {
//       flexsliderElements[i].style.display = 'block';
//     }
//   });
// window.addEventListener('load', function() {
//     var flexsliderElement = document.querySelector('.flexslider');
//     flexsliderElement.classList.add('show');
//   });
