
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
        animation: "slide",
        slideshowSpeed: 3000,
        touch: true,
        video:	true,
        controlNav: false,
        animationSpeed: 1000,
        // smoothHeight: true
    });
});
