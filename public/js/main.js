$(function(){
    $('#main-nav').data('size','big');
});

$(window).scroll(function(){
    var $nav = $('#main-nav');
    if ($('body').scrollTop() > 0) {
        if ($nav.data('size') == 'big') {
        	$nav.data('size','small').removeClass('nav-big').addClass('nav-small');
            // $nav.data('size','small').stop().animate({
            //     height:'40px'
            // }, 600);
        }
    } else {
        if ($nav.data('size') == 'small') {
        	$nav.data('size','big').removeClass('nav-small').addClass('nav-big');
            // $nav.data('size','big').stop().animate({
            //     height:'100px'
            // }, 600);
        }  
    }
});