const inputs = document.querySelectorAll(".input-field");


inputs.forEach((inp) => {
<<<<<<< HEAD



if (inp.value != ""){
    return  inp.classList.add("active");
}
inp.addEventListener("focus", () => {
    inp.classList.add("active")
});
inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
});
=======
    if (inp.value !== ""){
        inp.classList.add("active")
    }
    inp.addEventListener("focus", () => {
        inp.classList.add("active")
    });
    inp.addEventListener("blur", () => {
        if (inp.value !== "") return;
        inp.classList.remove("active");
    });
>>>>>>> 2eca682a4e4d258dd4adeb77e98870034ad7acdc

});


const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");


toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});

const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

function moveSlider() {
    let index = this.dataset.value;
    let currentImage = document.querySelector(`.img-${index}`);
    images.forEach(img => img.classList.remove("show"));
    currentImage.classList.add("show");

    const textSlider = document.querySelector(".text-group");
    textSlider.style.transform = `translateY(${-(index-1)*2.2}rem)`;


    bullets.forEach(bull => bull.classList.remove("active"));
    this.classList.add("active");
};



bullets.forEach((bullet) => {
    bullet.addEventListener("click", moveSlider);
});