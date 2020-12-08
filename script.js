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
const menu = document.querySelector(".menu-items-container");
const listItems = document.querySelector(".list-items");
const listItem = document.querySelectorAll(".list-item");

const menuAnimation=()=>{for(let i=0; i<listItem.length; i++){
    if(listItem[i].style.transform===(""))
    { listItem[i].style.transform=("translateY("+[i]*50+"px)");}
   else{listItem[i].style.transform=("");}
}}

const handleClick=()=>{hamburger.classList.toggle("active");
menu.classList.toggle("active");
menuAnimation();
}

hamburger.addEventListener('click', handleClick);

//social media scroll

