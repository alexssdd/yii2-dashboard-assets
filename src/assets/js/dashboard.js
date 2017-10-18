/* Load page progress
 ----------------------------*/
$(window).load(function(){
    NProgress.done();
});

$(document).ready(function() {
    NProgress.start();
});

/* Load pjax progress
 ----------------------------*/
$(document).on('pjax:start', function() { NProgress.start(); });
$(document).on('pjax:end',   function() { NProgress.done();  });


/* Aside
 ----------------------------*/
// Small menu
$('#aside-toggle').click(function () {
    $("body").toggleClass("aside-mini");
});

// Drop Down Menu
$('.main-menu__item_dropdown').click(function() {
    $(this).children('ul').slideToggle("fast");
});

// Aside footer menu dropdown
$('.aside-footer-menu__link_dropblock').click(function() {
    if ($(this).parent().hasClass('active')) {
        $(this).parent().removeClass('active');
    } else {
        $('.aside-footer-menu__list').find('.active').removeClass('active');
        $(this).parent().addClass('active');
    }
});