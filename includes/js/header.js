const { doc } = require("prettier");

const menuOpener = document.getElementById("sidenav-opener"),
    menu = document.getElementById("main-sidenav"),
    marge = document.getElementById("all_page");

menuOpener.addEventListener("click", function () {
    menu.classList.toggle("c-sidenav--is-open");
    marge.classList.toggle('all_page--opener');

});

const header = document.getElementById("navbar-toggler"),
    menuHeader = document.getElementById("collapse navbar-collapse");

header.addEventListener("click", function () {
    menuHeader.classList.toggle("collapse--is--open");
});




