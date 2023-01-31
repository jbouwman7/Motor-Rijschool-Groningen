const btn = document.querySelector("button.mobile-menu-button");
const links = document.querySelectorAll(".link");
const menu = document.querySelector(".mobile-menu");
const nav = document.querySelector('.nav-bar');

const faqs = document.querySelectorAll(".faq");
const f_all_icon = document.querySelectorAll(`.f-icon`);
const f_all_text = document.querySelectorAll(`.f-text`);


btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    nav.classList.toggle("nav-bg");
});

links.forEach(link => {
    link.addEventListener("click", () => {
        menu.classList.add("hidden");
        nav.classList.remove("nav-bg");
    })
});

window.addEventListener('scroll', () => {
    let scroll = window.scrollY;
    let height = window.innerHeight - 5;
    if (scroll >= height) {
        nav.classList.add("nav-visible")
    } else {
        nav.classList.remove("nav-visible")
    }
})

for (let i = 0; i < faqs.length; i++) {
    const f_icon = document.querySelector(`.f-icon-${i}`);
    const f_text = document.querySelector(`.f-text-${i}`);
    faqs[i].addEventListener("click", () => {
        if (!f_icon.classList.contains('rotate-45')) {
            f_all_icon.forEach(icon => {
                icon.classList.remove("rotate-45");
            });
            f_all_text.forEach(text => {
                text.classList.add("hidden");
            });
            f_icon.classList.add("rotate-45");
            f_text.classList.remove("hidden");
        } else {
            f_icon.classList.remove("rotate-45");
            f_text.classList.add("hidden");
        }
    })
}

