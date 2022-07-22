// for dropdown menu
$('.prog-dropdown').click(function() {
    $('nav .menu-items .prog-show').toggleClass("show");
})

const body = document.querySelector("body");
const sidebarToggle = body.querySelector(".sidebar-toggle");
const sidebar = body.querySelector("nav");

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})

