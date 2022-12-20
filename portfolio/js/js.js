//animations
function reveal() {
    let reveals = document.querySelectorAll(".reveal");

    for (let i = 0; i < reveals.length; i++) {
        let windowHeight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;

        if (elementTop <= windowHeight - 110) {
            reveals[i].classList.add("active");
        } else if (elementTop >= windowHeight) {
            reveals[i].classList.remove("active");
        }
    }
}

// commence à observer pour resize
resize_ob.observe(document.querySelector("#header_id"));

window.addEventListener("scroll", reveal);
window.addEventListener("DOMContentLoaded", reveal);
window.addEventListener("resize", reveal);

//ajuste hauteur body
const resize_ob = new ResizeObserver(function(entries) {
    // accède au premier élément de l'array
    let rect = entries[0].contentRect;

    let width = rect.width;
    let height = rect.height;

    let body = document.getElementById("body_id");
    body.style.marginTop = ((-45 - height).toString()) + "px";
});