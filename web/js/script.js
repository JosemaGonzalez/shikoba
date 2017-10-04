/**
 * Created by Josema on 04/10/2017.
 */
$(document).ready(function () {
    $(".dropdown-button").dropdown({ hover: true });
    let drop = $(".dropdown-button").width();
    $(".dropdown-content").css("margin-left",drop);
    $('.button-collapse').sideNav();
    $( window ).on("load resize",function() {
        let $nav = $(".navbar-fixed");
        $('.navbar-fixed img').height($nav.height());
        $('.navaltu').height($('.nav-wrapper').height());
    });
});
