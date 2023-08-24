
$( document ).ready(function() {
    
    var $slick = $('.slider_principal').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        cssEase: 'ease-in',
        infinite: true,
        speed: 1000,
        dots: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });

    $(".slider-progress-bar").addClass("act-slider");
    $slick.on("beforeChange", function (event, slick) {
        $(".slider-progress-bar").removeClass("act-slider");
    });
    $slick.on("afterChange", function (event, slick) {
        $(".slider-progress-bar").addClass("act-slider");
    });
          

    //   Slick ------------------
    /*
    var sbp = $('.swiper-button-prev'),
        sbn = $('.swiper-button-next');
    $('.single-slider').slick({
        slidesToShow: 1,
        arrows: false,
        fade: false,
        dots: true,
        adaptiveHeight: true,
    });
    $('.single-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
        arrows: false,
        centerMode: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]

    });
    $('.half-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
        arrows: false,
        centerMode: false,
        variableWidth: false,
        responsive: [{
                breakpoint: 1224,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },
            {
                breakpoint: 564,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]

    });
    $('.testimonials-slider').slick({
        infinite: true,
        slidesToShow: 3,
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
    $('.compare-slider').slick({
        infinite: false,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        centerMode: false,
        variableWidth: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        }]
    });
    $('.listing-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
        arrows: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        dots: true,
        adaptiveHeight: true,
        asNavFor: '.slider-nav'

    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
    });
    sbp.on("click", function () {
        $(this).closest(".carousel-wrap").find('.carousel').slick('slickPrev');
    });
    sbn.on("click", function () {
        $(this).closest(".carousel-wrap").find('.carousel').slick('slickNext');
    });
    var $slick = $('.slideshow-container');
    $slick.slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        cssEase: 'ease-in',
        infinite: true,
        speed: 1000,
        dots: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });
    $(".slider-progress-bar").addClass("act-slider");
    $slick.on("beforeChange", function (event, slick) {
        $(".slider-progress-bar").removeClass("act-slider");
    });
    $slick.on("afterChange", function (event, slick) {
        $(".slider-progress-bar").addClass("act-slider");
    });
    $('.hero-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        dots: false,
        arrows: false,
    });  
    */
    

    
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

    


    

    var fechaActual = new Date();
    var fecha2000 = new Date(2000, 6, 5);
    var diferenciaAnios = fechaActual.getFullYear() - fecha2000.getFullYear();
    $("#counter-target").attr("data-counter-target", diferenciaAnios);
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
