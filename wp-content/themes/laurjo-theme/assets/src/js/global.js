jQuery( document ).ready(function($) {
    $(document).foundation();

    if ($( window ).width() < 750) {
        $('.is-active').removeClass('is-active');
        $('body').removeClass('menu-active');
        $('.menu-text').text('menu');
    }

    $('button.hamburger').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('body').toggleClass('menu-active');
        $('.mobile-nav').toggleClass('is-active');
        $('#overlay').toggleClass('is-active');
        if ($(this).hasClass('is-active')) {
            $('.menu-text').text('collapse');
        } else {
            $('.menu-text').text('menu');
        }
    });

    $('.page_item_has_children').hover(
      function() {
        $( this ).find('.children');
      }, function() {
        $( this ).find('.children');
      }
    );

    if ($(window).width() < 640) {
        $('.mobile-case-study ').on('click', '.image-link', function() {
            $('.modal-container').find('img').attr('src', $(this).data('image'));
            var popup = new Foundation.Reveal($('#modal-reveal'));
            popup.open();
        });
    }

    // var im = $('.image-link');
    // var mc = new Hammer(im);
    // if (Foundation.MediaQuery.is('small only')) {
    //     mc.on('panleft',function(ev){
    //         im.fancybox();
    //     });
    // }

    if (Foundation.MediaQuery.atLeast('medium')) {
        var rellax = new Rellax('.rellax');

        var imagesCon = $('.images-container').height();
        console.log(imagesCon);
        if (imagesCon) {
            $('body').css('height',imagesCon);
        }
    }



    //init the image fade in
    setTimeout(function(){
        AOS.init({
            duration: 1200,
        });
    },1000);

});
