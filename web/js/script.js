/**
 * Created by Josema on 04/10/2017.
 */
//Spinner loader intro
//activar cuando todos esten terminados
/*
 var tmrReady = setInterval(isPageFullyLoaded, 200);

 function isPageFullyLoaded() {
 if (document.readyState == "complete") {
 $('.loaderIntro').fadeOut(1000);
 $('.containerLoader > .row').css("display","block");
 clearInterval(tmrReady);
 }
 }*/

$(document).ready(function () {
    if (document.readyState == "complete") {
        var puntos = $("#punto > span").text();
        var punto = $("#punto span");
        if (puntos == 0) {
            punto.addClass("green white-text btn-large btn btn-floating");
        }
        else if (puntos > 0 && puntos <= 5) {
            punto.addClass("amber black-text btn-large pulse btn btn-floating");
        }
        else if (puntos > 5 && puntos <= 7) {
            punto.addClass("orange black-text btn-large pulse btn btn-floating");
        }
        else if (puntos > 7 && puntos <= 8) {
            punto.addClass("red white-text btn-large pulse btn btn-floating");
        }
        else if (puntos > 9 && puntos <= 10) {
            punto.addClass("red darken-3 white-text btn-large pulse btn btn-floating");
        }
    }
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Limpiar', // text for clear-button
        canceltext: 'Cancelar', // Text for cancel-button
        autoclose: true, // automatic close timepicker
        ampmclickable: false, // make AM PM clickable
        aftershow: function () {
        } //Function for after opening timepicker
    });
    //botones navegacion
    $(".dropdown-button").dropdown({hover: true});
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left", drop);
    //activador barra lateral
    $('.button-collapse').sideNav();
    //ventanas modales
    $(".modal").modal();
    //margen botones paginador en tablas
    $("#DataTables_Table_0_paginate a").on("click", function () {
        $("#DataTables_Table_0_paginate a").css("margin", "0 0.2%");

    });
    //quitado el label del buscador datatables
    $('#DataTables_Table_0_filter label').remove();
    //selector diario form
    $('#appbundle_diarioaulaconvivencia_actitud').material_select();
    $('#appbundle_diarioaulaconvivencia label').css("color", "white");
    $(window).on("click load", function () {
        if ($(window).width() < "991") {
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
            $(".dataTables_filter").css("margin-top", "0");

        }
        //margen botones paginador en tablas
        $("#DataTables_Table_0_paginate a").on("click", function () {
            $("#DataTables_Table_0_paginate a").css("margin", "0.3% 0.2%");
        });
    });

    //acciones cuando carga la pagina
    //acciones cuando se redimensiona la pagina
    $(window).on("load resize", function () {

        //iniciador select carnets admin
        $("#carnetFilterPuntos").material_select();
        //altura para el fondo en login
        $('#fondo,.back').css('min-height', $("main").height() + 15);

        //clase para estilo partes conducta
        $("#parte_form_idConducta label").addClass("altura");
        //pongo la hora correcta
        var tiempo = new Date();
        var fecha = tiempo.getDay() + "/" + tiempo.getMonth() + "/" + tiempo.getFullYear();
        var hora = tiempo.getHours();
        var minuto = tiempo.getMinutes();
        let comhoras = new String(hora);
        let comminutos = new String(minuto);
        if (comhoras.length == 1) {
            hora = "0" + hora;
        }
        if (comminutos.length == 1) {
            minuto = "0" + minuto;
        }
        $("#HoraSalidaAula").val(hora + ":" + minuto);
        $("#HoraLlegadaJefatura").val(hora + ":" + minuto);
        //oculto un icono que no tiene porque estar ahi
        $('.caret').css("display", "none");
        //estilo material para un selector en sanciones form
        $('#sancion_form_idTipo').material_select();
        $('#horasAC > select').material_select();
        //select tipo de partes
        $('#parte_form_Formato').material_select();
        $('#parte_form_idTipo').material_select();
        //select finales de form de partes
        $('#formu > div >div').addClass("col s6");
        $('#formu > div >div:last').removeClass("col s6");
        $('#formu > div >div:last').addClass("input-field col s12");
        //cajas finales despues del select que van todas
        // juntas y hay que darle estilos y clases
        $('#sancion_form').attr("style", "margin-top: 7px;");
        $('#sancion_form > div').addClass("input-field");
        $('#sancion_form').addClass("col s12 m6");
        //caja de observaciones
        $('#sancion_form_Observaciones').attr("data-length", "200");
        $('#sancion_form_Observaciones').characterCounter();
        //estilo al paginador de datatable
        $("#DataTables_Table_0_paginate").addClass("col s12 m8 right");
        $("#DataTables_Table_0_info").addClass("col s12 m4 left");
        $("#DataTables_Table_0_paginate a").css("margin", "0.3% 0.2%");
        //select mostrar datatables
        $('#DataTables_Table_0_length select').css("display", "block");
        $('#DataTables_Table_0_length').addClass("col s4 m3 l2");
        //estilo al filtro datatables
        $('#DataTables_Table_0_filter').addClass("col s8 m6 l3");
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
        $(".chosen-drop").css("opacity", "0");
        $('.chosen-container,.chosen-single').on("click", function () {
            $(".chosen-drop").toggleClass('animated slideInDown');
            $(".chosen-drop").css("opacity", "1");
        });

        $(".chosen-container").css("height", "40px");
        $(".chosen-container > a").css("height", "40px");
        $(".chosen-container > a > span").css("height", "40px");
        $(".chosen-container > a > span").css("font-size", "16px");
        $("#appbundle_diarioaulaconvivencia #appbundle_diarioaulaconvivencia_actitud").css("display", "block ");
        $(".chosen-choices").css("min-height", "50");
        $(".chosen-choices").css("background-color", "none");
        $(".chosen-choices").css("background-image", "none");
        $(".chosen-choices").css("border", "0");
        //$(".chosen-search-input").css("width", "93%");
        $("#diarioAulaForm #appbundle_diarioaulaconvivencia div").addClass("input-field");
        if ($(window).width() < "991") {
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
            $(".dataTables_filter").css("margin-top", "0");

        }
        if ($(window).width() > "991") {
            //dimension select al lado de busqueda
            $('#DataTables_Table_0_length').css("width", "10%");
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
