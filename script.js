//contact form
const inputs = document.querySelectorAll(".main__form-input,.main__form-input--textarea");

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

const hamburger = document.querySelector(".header__hamburger-container");
const menu = document.querySelector(".header__menu-container");
const listItems = document.querySelector(".header__menu");
const listItem = document.querySelectorAll(".header__menu-item");

const menuAnimation=()=>{for(let i=0; i<listItem.length; i++){
    if(listItem[i].style.transform===(""))
    { listItem[i].style.transform=("translateY("+[i]*50+"px)");}
   else{listItem[i].style.transform=("");}
}
}


const handleClick=()=>{hamburger.classList.toggle("active");
menu.classList.toggle("active");
menuAnimation();
}

hamburger.addEventListener('click', handleClick);

//social media scroll

const container=document.querySelector("#social-media-icons");
const visible=()=>{container.classList.remove("scroll");}
let isScroll;
const invisible=()=>{container.classList.add("scroll");
window.clearTimeout (isScroll);
isScroll=setTimeout(visible,200);
}


window.addEventListener('scroll',invisible,false)