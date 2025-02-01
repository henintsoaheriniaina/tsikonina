import Alpine from "alpinejs";
import "./bootstrap";
Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    let menuVisible = false;
    const toggleMenu = document.getElementById("toggleMenu");
    const menu = document.getElementById("menu");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileMenuOpen = document.getElementById("mobileMenuOpen");
    const mobileMenuClose = document.getElementById("mobileMenuClose");
    const searchForm = document.getElementById("searchForm");
    const toggleSearch = document.getElementById("toggleSearch");
    const closeSearch = document.getElementById("closeSearch");

    function slideDown(element, duration = 300) {
        element.style.display = "block";
        element.style.height = "0px";
        let totalHeight = element.scrollHeight;
        element.style.transition = `height ${duration}ms ease-in-out`;
        setTimeout(() => (element.style.height = totalHeight + "px"), 10);

        setTimeout(() => {
            element.style.height = "";
        }, duration);
    }

    function slideUp(element, duration = 300) {
        element.style.height = element.scrollHeight + "px";
        element.style.transition = `height ${duration}ms ease-in-out`;
        setTimeout(() => (element.style.height = "0px"), 10);

        setTimeout(() => {
            element.style.display = "none";
            element.style.height = "";
        }, duration);
    }

    function animateRight(element, toValue, duration = 500) {
        element.style.transition = `right ${duration}ms ease-in-out`;
        element.style.right = toValue;
    }

    function toggleWidth(element, duration = 350) {
        if (window.getComputedStyle(element).display === "none") {
            element.style.display = "block";
            element.style.width = "0px";
            element.style.transition = `width ${duration}ms ease-in-out`;
            setTimeout(() => (element.style.width = "auto"), 10);
        } else {
            element.style.width = element.offsetWidth + "px";
            element.style.transition = `width ${duration}ms ease-in-out`;
            setTimeout(() => (element.style.width = "0px"), 10);

            setTimeout(() => (element.style.display = "none"), duration);
        }
    }

    toggleMenu.addEventListener("click", function () {
        if (menuVisible) {
            slideUp(menu);
            menuVisible = false;
        } else {
            slideDown(menu);
            menuVisible = true;
        }
    });

    document.addEventListener("click", function (e) {
        if (!menu.contains(e.target) && !toggleMenu.contains(e.target)) {
            slideUp(menu);
            menuVisible = false;
        }
    });

    mobileMenuOpen.addEventListener("click", function () {
        animateRight(mobileMenu, "0");
        slideUp(menu);
        menuVisible = false;
    });

    mobileMenuClose.addEventListener("click", function () {
        animateRight(mobileMenu, "-100%");
        slideUp(menu);
        menuVisible = false;
    });

    toggleSearch.addEventListener("click", function () {
        toggleWidth(searchForm);
    });

    closeSearch.addEventListener("click", function () {
        toggleWidth(searchForm);
    });
});
