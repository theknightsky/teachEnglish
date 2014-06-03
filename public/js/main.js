$(function(){
    $('#main-nav').data('size','big');
});

$(window).scroll(function(){
    var $nav = $('#main-nav');
    if ($('body').scrollTop() > 0) {
        if ($nav.data('size') == 'big') {
        	$nav.data('size','small').removeClass('nav-big').addClass('nav-small');
        }
    } else {
        if ($nav.data('size') == 'small') {
        	$nav.data('size','big').removeClass('nav-small').addClass('nav-big');
        }  
    }
});