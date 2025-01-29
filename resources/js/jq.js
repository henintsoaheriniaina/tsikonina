$(document).ready(function () {
    let menuVisible = false;
    $("#toggleMenu").on("click", function () {
        if (menuVisible) {
            $("#menu").slideUp(300, function () {
                menuVisible = false;
            });
        } else {
            $("#menu").slideDown(300, function () {
                menuVisible = true;
            });
        }
    });
    $(document).on("click", function (e) {
        if (
            !$(e.target).closest("#menu").length &&
            !$(e.target).closest("#toggleMenu").length
        ) {
            $("#menu").slideUp(300, function () {
                menuVisible = false;
            });
        }
    });

    $("#mobileMenuOpen").click(function () {
        $("#mobileMenu").animate({ right: 0 }, 500);
        $("#menu").slideUp(300, function () {
            menuVisible = false;
        });
    });
    $("#mobileMenuClose").click(function () {
        $("#mobileMenu").animate({ right: "-100%" }, 500);
        $("#menu").slideUp(300, function () {
            menuVisible = false;
        });
    });
    $("#toggleSearch").click(function () {
        $("#searchForm").animate({ width: "toggle" }, 350);
    });
    $("#closeSearch").click(function () {
        $("#searchForm").animate({ width: "toggle" }, 350);
    });
});
