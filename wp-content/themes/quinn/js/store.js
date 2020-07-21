$(window).scroll(function(){
    var aTop = $('.sale_info').height();
    if($(this).scrollTop() >= aTop){
        $('header').addClass('sticky');
    } else {
        $('header').removeClass('sticky');
    }
});

$(document).on('ready', function(){
    $('ul.filters .parent').on('click', function(){
        var id = $(this).attr('data-id');

        $('ul.filters .child[data-id="'+ id +'"]').toggle();
    });
});