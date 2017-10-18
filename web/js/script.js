/**
 * Created by Josema on 04/10/2017.
 */
$(document).ready(function () {

    $(".dropdown-button").dropdown({hover: true});
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left", drop);
    $('.button-collapse').sideNav();
    $(".modal").modal();
    $('#DataTables_Table_0_filter label').remove();

    //selector diario form
    $('#appbundle_diarioaulaconvivencia_actitud').material_select();
    $('#appbundle_diarioaulaconvivencia label').css("color", "white");

    $(window).on("load resize", function () {
        $("#DataTables_Table_0_paginate a").on("click", function () {
            $(".paginate_button.current").addClass("btn blue darken-4 waves-effect waves-light z-depth-3");
            $(".paginate_button").addClass("btn blue darken-2 waves-effect waves-light z-depth-3");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
        });
        $(".paginate_button.current").addClass("btn blue darken-4 waves-effect waves-light z-depth-3");
        $(".paginate_button").addClass("btn blue darken-2 waves-effect waves-light z-depth-3");
        $(".paginate_button.current").removeClass("paginate_button current");
        $(".paginate_button").removeClass("paginate_button");

        //select mostrar en sanciones
        $('#DataTables_Table_0_length select').css("display", "block");
        $('#DataTables_Table_0_length').addClass("col s4 l2");
        $('#DataTables_Table_0_length').css("width", "10%");
        $('#DataTables_Table_0_filter').addClass("col s8 l3");

        $("table.dataTable thead th, table.dataTable thead td").css("border-bottom", "0");
        $('.dataTables_filter').css("float", "left");
        //$('#DataTables_Table_0_length lebel').empty();
        //buscador en diario
        $("#horasSelect_chosen").css("min-width", "100");
        $("#busq .row").css("margin-bottom", "0");
        $("#horasSelect_chosen").css("width", "110%");
        $("#appbundle_diarioaulaconvivencia > div > div").css("width", "100%");
        $("#appbundle_diarioaulaconvivencia #appbundle_diarioaulaconvivencia_actitud").css("display", "block ");
        $("#horasSelect_chosen .chosen-choices").css("min-height", "50");
        $("#horasSelect_chosen  .chosen-choices").css("background-color", "none");
        $("#horasSelect_chosen  .chosen-choices").css("background-image", "none");
        $("#horasSelect_chosen .chosen-choices").css("border", "0");
        $("#diarioAulaForm .chosen-search-input").css("width", "93%");
        $("#diarioAulaForm #appbundle_diarioaulaconvivencia div").addClass("input-field");
        if ($(window).width() < "600") {
            $("#botonbus button").css("margin-top", "1%");
            $("#botonbus .bus2").css("margin-top", "-4%");
            $('#DataTables_Table_0_length').css("width", "33.3333%");
            $(".dataTables_filter").css("margin-top", "0");

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
