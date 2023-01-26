const btn = document.querySelector("button.mobile-menu-button");
const links = document.querySelectorAll(".link");
const menu = document.querySelector(".mobile-menu");
const nav = document.querySelector('.nav-bar');

const faqs = document.querySelectorAll(".faq");



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
    const faq_icon_plus = document.querySelector(`.faq-icon-plus-${i}`);
    const faq_icon_min = document.querySelector(`.faq-icon-min-${i}`);
    const faq_text = document.querySelector(`.faq-text-${i}`);
    faqs[i].addEventListener("click", () => {
        faq_icon_plus.classList.toggle("hidden");
        faq_icon_min.classList.toggle("hidden");
        faq_text.classList.toggle("hidden");
    })
}