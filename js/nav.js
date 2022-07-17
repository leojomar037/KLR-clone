let btn = document.querySelector(".btn");
let sidebar = document.querySelector(".sidebar");
let list = document.querySelectorAll(".list");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}

for(let i=0;i<list.length;i++){
    list[i].onclick= function(){
        sidebar.classList.remove("active");
    }
}
