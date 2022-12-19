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

window.addEventListener("scroll", reveal);
window.addEventListener("DOMContentLoaded", (event) => {reveal()});

//ajuste hauteur body
const resize_ob = new ResizeObserver(function(entries) {
    // since we are observing only a single element, so we access the first element in entries array
    let rect = entries[0].contentRect;

    // current width & height
    let width = rect.width;
    let height = rect.height;

    let body = document.getElementById("body_id");
    body.style.marginTop = ((-45 - height).toString()) + "px";
});

// start observing for resize
resize_ob.observe(document.querySelector("#header_id"));