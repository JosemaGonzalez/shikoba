/**
 * Created by Josema on 04/10/2017.
 */
$(document).ready(function () {
    //botones navegacion
    $(".dropdown-button").dropdown({hover: true});
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left", drop);
    //activador barra lateral
    $('.button-collapse').sideNav();
    //ventanas modales
    $(".modal").modal();
    //quitado el label del buscador datatables
    $('#DataTables_Table_0_filter label').remove();
    //selector diario form
    $('#appbundle_diarioaulaconvivencia_actitud').material_select();
    $('#appbundle_diarioaulaconvivencia label').css("color", "white");

    $(window).on("load resize", function () {
        //estilo material para un selector en sanciones form
        $('#idTipo div').addClass("input-field");
        $('#idTipo div').material_select();
        //estilo al paginador de datatable
        $("#DataTables_Table_0_paginate").addClass("col s12 l8 right");
        //select mostrar datatables
        $('#DataTables_Table_0_length select').css("display", "block");
        $('#DataTables_Table_0_length').addClass("col s4 l2");
        $('#DataTables_Table_0_length').css("width", "10%");
        //estilo al filtro datatables
        $('#DataTables_Table_0_filter').addClass("col s8 l3");
        //quitado linea negra en el datatable
        $("table.dataTable.no-footer").css("border", "0");
        $("table.dataTable thead th, table.dataTable thead td").css("border-bottom", "0");
        //movido el buscador datatables a la izquierda
        $('.dataTables_filter').css("float", "left");
        //buscador en diario
        $("#horasSelect_chosen").css("min-width", "100");
        //boton buscar movido
        $("#busq .row").css("margin-bottom", "0");
        //selector de chosen dado ancho
        $("#horasSelect_chosen").css("width", "110%");
        //configuracion del chosen
        $("#appbundle_diarioaulaconvivencia > div > div").css("width", "100%");
        $(".chosen-container").css("width", "100%");
        $("#appbundle_diarioaulaconvivencia #appbundle_diarioaulaconvivencia_actitud").css("display", "block ");
        $("#horasSelect_chosen .chosen-choices").css("min-height", "50");
        $("#horasSelect_chosen  .chosen-choices").css("background-color", "none");
        $("#horasSelect_chosen  .chosen-choices").css("background-image", "none");
        $("#horasSelect_chosen .chosen-choices").css("border", "0");
        $("#diarioAulaForm .chosen-search-input").css("width", "93%");
        $("#diarioAulaForm #appbundle_diarioaulaconvivencia div").addClass("input-field");
        if ($(window).width() < "600") {
            //accion al click en los paginadores del datatable
            $("#DataTables_Table_0_paginate a").on("click", function () {
                $("#DataTables_Table_0 th,#DataTables_Table_0 td").css("padding", "15px 18px");
                $("#DataTables_Table_0").css("border-bottom", "0");
            });
            $("#DataTables_Table_0 th,#DataTables_Table_0 td").css("padding", "15px 18px");
            $("#DataTables_Table_0").css("border-bottom", "0");
            //estilo boton buscar en resolucion movil
            $("#botonbus button").css("margin-top", "1%");
            $("#botonbus .bus2").css("margin-top", "-4%");
            $('#DataTables_Table_0_length').css("width", "33.3333%");
            $(".dataTables_filter").css("margin-top", "0");

        }
        //estilo banner para que tenga siempre la altura que lo contiene
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
    });
    //estilo material para un selector
    $('#usuario_form div').addClass("input-field");
    $('#usuario_form ul>li').remove();


});
