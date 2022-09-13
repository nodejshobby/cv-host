$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 2,
        margin: 15,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
        responsive: {
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1400: {
                items: 5,
            }
        },
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
});
  