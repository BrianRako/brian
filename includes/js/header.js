
var menuOpener = document.getElementById("sidenav-opener"),
    menu = document.getElementById("main-sidenav");

menuOpener.addEventListener("click", function () {
    menu.classList.toggle("c-sidenav--is-open");

});

var header = document.getElementById("navbar-toggler"),
    menuHeader = document.getElementById("collapse navbar-collapse");

header.addEventListener("click", function () {
    menuHeader.classList.toggle("collapse--is--open");
});



