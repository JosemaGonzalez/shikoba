/**
 * Created by Josema on 04/10/2017.
 */
$(document).ready(function () {

    $(".dropdown-button").dropdown({ hover: true });
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left",drop);
    $('.button-collapse').sideNav();
    $(".modal").modal();
    $('#dia select').material_select();
    $( window ).on("load resize",function() {
        //buscador en diario
        $("#horasSelect_chosen").css("min-width","100");
        $("#busq .row").css("margin-bottom","0");
        $("#horasSelect_chosen").css("width","110%");
        $("#appbundle_diarioaulaconvivencia > div > div").css("width","100%");
        $("#appbundle_diarioaulaconvivencia #appbundle_diarioaulaconvivencia_actitud").css("display","block ");
        $("#horasSelect_chosen .chosen-choices").css("min-height","50");
        $("#horasSelect_chosen  .chosen-choices").css("background-color","none");
        $("#horasSelect_chosen  .chosen-choices").css("background-image","none");
        $("#horasSelect_chosen .chosen-choices").css("border","0");
        if ($(window).width() < "600") {
            $("#botonbus button").css("margin-top","0");
        }
        //fin buscador
        let $nav = $(".navbar-fixed");
        $('.navbar-fixed img').height($nav.height());
        $('.navaltu').height($('.nav-wrapper').height());
    });
    //Gestion alumnos twig
    $('#contenedorUpload').on('change', 'input:file', function () {
        if ($(this).val()) {
            $('#contenedorUpload button:submit').removeAttr('disabled');
        }
    });
    $('#botonImportar').on('click', function () {
        $('#contenedorUpload .loader').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500)
    })
    $('#usuario_form div').addClass("input-field");
    $('#usuario_form ul>li').remove();
});
