/**
 * Created by maze on 24/04/17.
 */

//Spinner loader intro

$(window).bind("load", function () {

    "use strict";
    //ruleta al entrar cargando
    $('.loaderIntro').fadeOut(1000);
    $('.containerLoader').fadeOut(1000);

});

$(document).ready(function () {

    $('.containerLoader img').css('height', $(window).height() - 1).css('width', $(window).width());


    //esto esta en el index borrar cuando sea necesario
    $('.wall').css('min-height', $(window).height());
    $('.overlay').css('min-height', $(window).height());

    $(window).on('resize', function () {
        $('.wall').css('min-height', $(window).height());
        $('.overlay').css('min-height', $(window).height());

    });




});