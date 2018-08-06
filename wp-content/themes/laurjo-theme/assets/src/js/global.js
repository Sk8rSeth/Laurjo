$( document ).ready(function() {

    if ($( window ).width() < 750) {
        $('.is-active').removeClass('is-active');
        $('body').removeClass('menu-active');
        $('.menu-text').text('menu');
    };

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

    // if ($('body').width() < 325) {
    //     // $('.navbar').css('z-index', '12');
    //     $('.logo').css('z-index', '12');
    //     $('.overlay').css('z-index', '23');
    //     $('.sidebar').css('z-index', '34');
    // };

});
