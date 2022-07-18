var menuList = document.getElementById('menuList');
menuList.style.maxHeight = '0px';

function togglemenu() {
    if (menuList.style.maxHeight == '0px') {
        menuList.style.maxHeight = '50rem'
    } else {
        menuList.style.maxHeight = '0px'
    }
}


var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});

window.addEventListener("scroll", function() {
    const header = this.document.querySelector('header');
    header.classList.toggle('sticky', this.window.scrollY > 0);
});


window.addEventListener("scroll", () => {
        const sections = document.querySelectorAll("section");
        const scrollY = window.pageYOffset;

        sections.forEach(current => {
            let sectionHeight = current.offsetHeight;
            let sectionTop = current.offsetTop - 50;
            let id = current.getAttribute("id");

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document.querySelector(".navigation a[href*=" + id + "]").classList.add("active");
            } else {
                document.querySelector(".navigation a[href*=" + id + "]").classList.remove("active");
            }
        })


    })
    // const li = document.querySelectorAll("links");
    // const sec = document.querySelectorAll("section");

// function activeMenu() {
//     let len = sec.length;
//     while (--len && window.scrollY + 97 < sec[len].offsetTop) {}
//     li.forEach(ltx => ltx.classList.remove("active"));
//     li[len].classList.add("active");
// };

// activeMenu();
// window.addEventListener("scroll", activeMenu);