var checkToggleMenu = true;
$(document).ready(function () {
    $("#headerMenu").click(function () {
        if (checkToggleMenu) {
            updateChangeMenuHiding();
        }
        else {
            updateChangeMenuShowing();
        }
    });

    $(window).resize(function () {
        var width = $(window).width();
        if (width < 1260) {
            $("#search").hide();
            updateChangeMenuHiding();

        }
        else {
            $("#search").show();
            updateChangeMenuShowing();
        };

        if (width < 700) {
            $("#login").show();
            $("#searchSeccondButton").show();
            $("#miniSearch").show();
        }
        else {
            $("#login").hide();
            $("#miniSearch").hide();
            $("#searchSeccondButton").hide();
        }
    })
});

function updateChangeMenuShowing() {
    $("#leftMenu").show();
    $(".content").removeClass("col-lg-12");
    $(".content").addClass("col-lg-10");
    checkToggleMenu = true;
};

function updateChangeMenuHiding() {
    $("#leftMenu").hide();
    $(".content").removeClass("col-lg-10");
    $(".content").addClass("col-lg-12");
    checkToggleMenu = false;
}



