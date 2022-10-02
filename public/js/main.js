$(document).ready(function(){
    $("#template-carousel").owlCarousel({
        items: 1,
        margin: 8,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
        responsive: {
            768: {
                items: 3,
                slideBy: 2,
            },
            992: {
                items: 4,
                slideBy: 2,
            },
            1400: {
                items: 5,
                slideBy: 2,
            }
        },
        
    });

    // Review Carousel
    $("#review-carousel").owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        mouseDrag: false,
        pullDrag: false,
        touchDrag: false,
    });

    // Cv list Modal display
    $('#cvlist-table').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10,],
        "ordering": false,
        "responsive": true,
        language: {
            search: '',
            searchPlaceholder: "Search for CV",
            emptyTable: "You have no CV to display"
        },
    })

    // Payment Modal Display
    $('#payment-table').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10,],
        "ordering": false,
        "responsive": true,
        language: {
            search: '',
            searchPlaceholder: "Search for transactions",
            emptyTable: "You have no transactions to display"
        },
    })

    $('button[type=submit]').attr('disabled',false)
    $('form').on('submit', function(e){
        $(this).find('button[type=submit]').attr('disabled',true)
    })
});
  