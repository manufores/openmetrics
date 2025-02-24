const div = document.querySelector('header');
let prevY = window.scrollY;
const naviLinks = document.querySelector('.nav-links');
window.addEventListener('scroll', function () {
    if (prevY > window.scrollY) {
        div.classList.remove('off');
    } else {
        div.classList.add('off');
        navLinks.classList.remove('active');
    }

    if (window.scrollY > 60) {
        div.classList.add('solid');
    } else {
        div.classList.remove('solid');
    }
    prevY = window.scrollY;
});