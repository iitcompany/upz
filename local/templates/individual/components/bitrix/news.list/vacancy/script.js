$(document).ready(function(){
    $('.vacancy__top').click(function(){
        $(this).toggleClass('vacancy__top--open');
        $(this).parents('.vacancy__item').children('.vacancy__bottom').slideToggle();
        $(this).find('.vacancy__btn').toggleClass('open');
        return false;
    });
});
