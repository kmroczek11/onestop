const bars = document.querySelector(".fa-bars");
const nav = document.querySelector(".side-nav")
const close = document.querySelector(".fa-times")

bars.addEventListener("click", function (event) {
    nav.style.display = "block"
});

close.addEventListener("click", function (event) {
    nav.style.display = "none"
});