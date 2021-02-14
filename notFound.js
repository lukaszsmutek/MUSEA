//hamburger
const hamburger = document.querySelector(".header__hamburger-container");
const menu = document.querySelector(".header__menu-container");
const listItems = document.querySelector(".header__menu");
const listItem = document.querySelectorAll(".header__menu-item-wrapper");
const showMenu = (i) => {
    listItem[i].style.transform = ("translateY(" + [i] * 50 + "px)");
}
const hideMenu = (i) => {
    listItem[i].style.transform = ("");
}
const menuAnimation = () => {
    for (let i = 0; i < listItem.length; i++) {
        if (listItem[i].style.transform === ("")) {
            showMenu(i);
        } else {
            hideMenu(i);
        }
    }
}

const handleClick = () => {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
    //hide menu if area outside is clicked
    document.onclick = (e) => {
        if (menu.contains(e.target) || hamburger.contains(e.target)) {
            return
        } else {
            hamburger.classList.remove("active");
            menu.classList.remove("active");
            for (let i = 0; i < listItem.length; i++) {
                hideMenu(i);
            }
        }
    }
    menuAnimation();
}

hamburger.addEventListener('click', handleClick);

//social media scroll
const container = document.querySelector(".social-media__icons");
const visible = () => {
    container.classList.remove("scroll");
}
let isScroll;
const invisible = () => {
    container.classList.add("scroll");
    window.clearTimeout(isScroll);
    isScroll = setTimeout(visible, 200);
}

window.addEventListener('scroll', invisible, false);