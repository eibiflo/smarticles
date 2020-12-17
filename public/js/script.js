
/*

    var headerCarousel = $('.owl-carousel');
    headerCarousel.owlCarousel({
        dotsContainer: '#carousel-custom-dots',
        dotsClass: '.owl-dot',
        dotsEach: true
    });

    var action = false, clicked = false;
    var Owl = {

        init: function() {
            Owl.carousel();
        },

        carousel: function() {
            var owl;
            $(document).ready(function() {

                owl = $('.owlExample').owlCarousel({
                    items 	   : 1,
                    autoWidth  : true,
                    center	   : false,
                    nav        : true,
                    rewindNav  : false,
                    dots       : true,
                    loop       : true,
                    margin     : 10,
                    dotsContainer: '.test',
                    navText: ['prev','next'],
                    itemsDesktop: [1199, 1],

                });

                $('.owl-next').on('click',function(){
                    action = 'next';
                });

                $('.owl-prev').on('click',function(){
                    action = 'prev';
                });

                $('.bookmarks').on('click', 'li', function(e) {
                    owl.trigger('to.owl.carousel', [$(this).index(), 300]);
                });
            });
        }
    };

    $(document).ready(function() {
        Owl.init();
    });


*/


var _0xC91A = $('.header-carousel');
if (_0xC91A.length) {
    $('.header-carousel').not('#thumbnails').each(function () {
        var _0xCFEE = $(this).data('max-items');
        var _0xD15E = _0xCFEE;
        if (_0xCFEE > 1) {
            _0xD15E = _0xCFEE - 1
        }
        ;
        var _0xD102 = _0xCFEE;
        if (_0xCFEE > 3) {
            _0xD102 = _0xCFEE - 2
        }
        ;
        var _0xD04A = 1;
        var _0xCEDA = $(this).data('autoplay');
        var _0xCF36 = $(this).data('center');
        var _0xCF92 = $(this).data('item-margin');
        $(this).owlCarousel({
            smartSpeed: 450,
            nav: true,
            loop: true,
            autoplay: false,
            center: _0xCF36,
            navText: false,
            margin: _0xCF92,
            lazyLoad: true,
            rtl:  false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: _0xD04A
                },
                480: {
                    items: _0xD102
                },
                768: {
                    items: _0xD15E
                },
                992: {
                    items: _0xCFEE
                }
            },
            dotsContainer: '#carousel-custom-dots',
            dotsClass: '.owl-dot',
            dotsEach: true
        });
        var _0xD0A6 = $('.owl-carousel');
        $('.owl-dot').on('click', function () {
            _0xD0A6.trigger('to.owl.carousel', [$(this).index(), 300]);
            $('.owl-dot').removeClass('active');
            $(this).addClass('active')
        })
    });
}