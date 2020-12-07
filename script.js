//contact form
const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }

}
inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});

//hamburger

const hamburger = document.querySelector("#hamburger-menu-container");
const handleClick=()=>{hamburger.classList.toggle("active");}

hamburger.addEventListener('click', handleClick);