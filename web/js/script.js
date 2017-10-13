/**
 * Created by Josema on 04/10/2017.
 */
$(document).ready(function () {
    $(".dropdown-button").dropdown({ hover: true });
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left",drop);
    $('.button-collapse').sideNav();
    $(".modal").modal();
    $( window ).on("load resize",function() {
        let $nav = $(".navbar-fixed");
        $('.navbar-fixed img').height($nav.height());
        $('.navaltu').height($('.nav-wrapper').height());
    });
    //Gestion alumnos twig
    $('#contenedorUpload').on('change', 'input:file', function () {
        if ($(this).val()) {
            $('#contenedorUpload input:submit').removeAttr('disabled');
        }
    });
    $('#botonImportar').on('click', function () {
        $('#contenedorUpload .loader').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500)
    })
});
