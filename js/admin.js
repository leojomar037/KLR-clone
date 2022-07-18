const body = document.querySelector("body");
const sidebarToggle = body.querySelector(".sidebar-toggle");
const sidebar = body.querySelector("nav");



sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})