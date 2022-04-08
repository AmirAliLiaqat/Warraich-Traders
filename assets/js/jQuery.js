$(document).ready(function() {
    // $('body').on("click", ".dashboard_main_li_1", function() {
    //     $(".dashboard_sub_navbar").slideDown(2000)
    // });
    // $(window).click(".dashboard_main_li_1", function() {
    //     $(".dashboard_sub_navbar").slideToggle();
    // });

    /************* Code for dashboard toggle **************/
    $(".toggle_btn").click(function() {
        $(".toggle_menu").slideToggle();
    });

    /************* Code for sildebar menu **************/
    $(".dashboard_main_li_1").click(function() {
        $(".dashboard_sub_navbar_1").slideToggle();
    });
    $(".dashboard_main_li_2").click(function() {
        $(".dashboard_sub_navbar_2").slideToggle();
    });
    $(".dashboard_main_li_3").click(function() {
        $(".dashboard_sub_navbar_3").slideToggle();
    });
    $(".dashboard_main_li_4").click(function() {
        $(".dashboard_sub_navbar_4").slideToggle();
    });
    $(".dashboard_main_li_5").click(function() {
        $(".dashboard_sub_navbar_5").slideToggle();
    });

    /************* Code for dashboard card **************/
    $(".toggle_plus_1").click(function() {
        $(".toggle_card_1").slideToggle();
    });
    $(".toggle_plus_2").click(function() {
        $(".toggle_card_2").slideToggle();
    });
    $(".toggle_plus_3").click(function() {
        $(".toggle_card_3").slideToggle();
    });
    $(".toggle_plus_4").click(function() {
        $(".toggle_card_4").slideToggle();
    });
    $(".toggle_plus_5").click(function() {
        $(".toggle_card_5").slideToggle();
    });
    $(".toggle_plus_6").click(function() {
        $(".toggle_card_6").slideToggle();
    });
    $(".toggle_plus_7").click(function() {
        $(".toggle_card_7").slideToggle();
    });
    $(".toggle_plus_8").click(function() {
        $(".toggle_card_8").slideToggle();
    });
    $(".toggle_plus_9").click(function() {
        $(".toggle_card_9").slideToggle();
    });
    $(".toggle_plus_10").click(function() {
        $(".toggle_card_10").slideToggle();
    });
    $(".toggle_plus_11").click(function() {
        $(".toggle_card_11").slideToggle();
    });
    $(".toggle_plus_12").click(function() {
        $(".toggle_card_12").slideToggle();
    });
});
