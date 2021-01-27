//contact form inputs animation
const form = document.querySelector(".main__form");
const inputs = Array.from(document.querySelectorAll(".main__form-input,.main__form-input--message"));

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

//contact form validation
//--form-inputs
const userName = form.querySelector(".main__form-input--name");
const email = form.querySelector(".main__form-input--email");
const subject = form.querySelector(".main__form-input--subject");
const textMessage = form.querySelector(".main__form-input--message");

//--functions
const createAlert = (input, message) => {
    const Alert = input.parentNode.querySelector(".main__form-alert");
    Alert.innerHTML = message;
}

const resetAlert = (input) => {
    const Alert = input.parentNode.querySelector(".main__form-alert");
    Alert.innerHTML = "";
    Alert.classList.add("is-hidden")
}

const showValidIcon = (input) => {
    const validIcon = input.parentNode.querySelector(".input__icon--valid");
    validIcon.classList.remove("is-hidden")
}

const hideValidIcon = (input) => {
    const validIcon = input.parentNode.querySelector(".input__icon--valid");
    validIcon.classList.add("is-hidden");
}

const showInvalidIcon = (input) => {
    const invalidIcon = input.parentNode.querySelector(".input__icon--invalid");
    invalidIcon.classList.remove("is-hidden");
}

const hideInvalidIcon = (input) => {
    const invalidIcon = input.parentNode.querySelector(".input__icon--invalid");
    invalidIcon.classList.add("is-hidden");
}

const setValid =(input)=>{
    hideInvalidIcon(input);
    showValidIcon(input);
    resetAlert(input);
}

const setInvalid =(input, message)=>{
    hideValidIcon(input);
    showInvalidIcon(input);
    createAlert(input, message)
}

const isEmpty = (value) => {
    if (value === "") return true;
    return false;
}

const checkIfEmpty = (input, message) => {
    if (isEmpty(input.value.trim())) {
        setInvalid(input, message);
        return true;
    } else {
        setValid(input);
        return false;
    }
}

const checkIfOnlyLetters =(input, message)=>{
    if (/^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+$/.test(input.value)){
        setValid(input);
        return true;
    }else{
        setInvalid(input, message);
        return false;
    }
}

const checkEmailSyntax = (input, message) => {
    if (/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(input.value)){
        setValid(input);
        return true;
    }else{
        setInvalid(input, message);
        return false;
    }
};

const TextLengthCounter = (input) => {
    const textLength=input.value.length;
    const maxLength=input.maxLength;
    const counter = form.querySelector(".main__form-counter");
    counter.innerHTML=`${textLength}/${maxLength}`;
};

//--validate-inputs
const validateUserName = () => {
    if(checkIfEmpty(userName, "To pole nie może być puste")) return;
    if(!checkIfOnlyLetters(userName, "To pole może zawierać tylko litery")) return;
    return true;
};

const validateEmail = () => {
    if(checkIfEmpty(email, "To pole nie może być puste")) return;
    if(checkEmailSyntax(email,"Wpisz poprawny adres e-mail")) return;
    return true;
};

const validateSubject = () => {
    if(checkIfEmpty(subject, "To pole nie może być puste")) return;
    return true;
}
const validateTextMessage = () => {
    if(checkIfEmpty(textMessage, "To pole nie może być puste")) return;
    return true;
};

//--event-listeners
userName.addEventListener("input", (e)=>{validateUserName();});
userName.addEventListener("focusout", (e)=>{if (isEmpty(userName.value.trim())) {setInvalid(userName, "To pole nie może być puste");return}});
email.addEventListener("input", (e)=>{validateEmail()});
email.addEventListener("focusout", (e)=>{if (isEmpty(email.value.trim())) {setInvalid(email, "To pole nie może być puste");return}});
subject.addEventListener("input", (e)=>{validateSubject();});
subject.addEventListener("focusout", (e)=>{if (isEmpty(subject.value.trim())) {setInvalid(subject, "To pole nie może być puste");return}});
textMessage.addEventListener("focusout", (e)=>{if (isEmpty(textMessage.value.trim())) {setInvalid(textMessage, "To pole nie może być puste");return}});
textMessage.addEventListener("input", (e)=>{validateTextMessage();});
textMessage.addEventListener("keyup", e=>{TextLengthCounter(textMessage);})

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

window.addEventListener('scroll', invisible, false)

//hero header scroll
const header = document.querySelector(".main__hero-header");
window.addEventListener("scroll", function () {
    let value = window.scrollY;
    header.style.top = ("calc( 50% - " + value * 0.5 + "px)");
    header.style.letterSpacing = ("calc( 0.5em + " + value * 0.01 + "em)");
    header.style.opacity = ("calc( 1 - " + value * 0.005 + ")")
});

//gallery-carousel
const carousel = document.querySelector(".main__gallery-carousel");
const slides = Array.from(carousel.children);
const nextButton = document.querySelector(".main__gallery-btn-container--next");
const prevButton = document.querySelector(".main__gallery-btn-container--prev");
const dotNav = document.querySelector(".main__gallery-nav");
const dots = Array.from(dotNav.children);
const carouselWidth = carousel.getBoundingClientRect().width;

//--organizing slides in the row
const slidePosition = (slide, index) => {
    slide.style.left = carouselWidth * index + "px";
}
slides.forEach(slidePosition);

//--move to slide
const moveToSlide = (carousel, currentSlide, targetSlide) => {
    if (targetSlide != null) {
        carousel.style.transform = "translateX(-" + targetSlide.style.left + ")";
        currentSlide.classList.remove("current-slide");
        targetSlide.classList.add("current-slide");
    }
}

//--dot-nav update
const dotNavUpdate = (currentDot, targetDot) => {
    if (targetDot != null) {
        currentDot.classList.remove("active");
        targetDot.classList.add("active");
    }
}

//--button active/inactive (opacity manipulation and setTimeout functions used for smooth transitions)
const buttonInactive = (prevButton, nextButton, slides, targetIndex) => {
    if (targetIndex === 0) {
        prevButton.style.opacity = ("0");
        setTimeout(() => {
            prevButton.classList.add("is-hidden");
        }, 200)
        nextButton.classList.remove("is-hidden");
        nextButton.style.opacity = ("1");
    } else if (targetIndex === slides.length - 1) {
        prevButton.classList.remove("is-hidden");
        nextButton.style.opacity = ("0");
        setTimeout(() => {
            nextButton.classList.add("is-hidden")
        }, 200);
    } else {
        prevButton.classList.remove("is-hidden");
        setTimeout(() => {
            prevButton.style.opacity = ("1");
        }, 200);
        nextButton.classList.remove("is-hidden");
        setTimeout(() => {
            nextButton.style.opacity = ("1");
        }, 200);
    }
}

//-------right-click move
nextButton.addEventListener("click", e => {
    const currentSlide = carousel.querySelector(".current-slide");
    const nextSlide = currentSlide.nextElementSibling;
    const currentDot = dotNav.querySelector(".active");
    const nextDot = currentDot.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide);

    moveToSlide(carousel, currentSlide, nextSlide);
    dotNavUpdate(currentDot, nextDot);
    buttonInactive(prevButton, nextButton, slides, nextIndex);
})

//-------left-click move
prevButton.addEventListener("click", e => {
    const currentSlide = carousel.querySelector(".current-slide");
    const prevSlide = currentSlide.previousElementSibling;
    const currentDot = dotNav.querySelector(".active");
    const prevDot = currentDot.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide);

    moveToSlide(carousel, currentSlide, prevSlide);
    dotNavUpdate(currentDot, prevDot);
    buttonInactive(prevButton, nextButton, slides, prevIndex);
})

//--RightArrow key
document.addEventListener("keydown", e => {
    const currentSlide = carousel.querySelector(".current-slide");
    const currentIndex = slides.findIndex(slide => slide === currentSlide);
    if (e.key !== "ArrowRight" || currentIndex === slides.length - 1) {
        return;
    } else {

        const nextSlide = currentSlide.nextElementSibling;
        const currentDot = dotNav.querySelector(".active");
        const nextDot = currentDot.nextElementSibling;
        const nextIndex = slides.findIndex(slide => slide === nextSlide);

        moveToSlide(carousel, currentSlide, nextSlide);
        dotNavUpdate(currentDot, nextDot);
        buttonInactive(prevButton, nextButton, slides, nextIndex);
    }
});

//--LeftArrow key
document.addEventListener("keydown", e => {
    const currentSlide = carousel.querySelector(".current-slide");
    const currentIndex = slides.findIndex(slide => slide === currentSlide);
    if (e.key !== "ArrowLeft" || currentIndex === 0) {
        return;
    } else {

        const currentSlide = carousel.querySelector(".current-slide");
        const prevSlide = currentSlide.previousElementSibling;
        const currentDot = dotNav.querySelector(".active");
        const prevDot = currentDot.previousElementSibling;
        const prevIndex = slides.findIndex(slide => slide === prevSlide);

        moveToSlide(carousel, currentSlide, prevSlide);
        dotNavUpdate(currentDot, prevDot);
        buttonInactive(prevButton, nextButton, slides, prevIndex);
    }
});

//--dot-nav move
dotNav.addEventListener("click", e => {
    const targetDot = e.target.closest('button');

    if (!targetDot) return;

    const currentSlide = carousel.querySelector(".current-slide");
    const currentDot = dotNav.querySelector(".active");
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];

    moveToSlide(carousel, currentSlide, targetSlide);
    dotNavUpdate(currentDot, targetDot);
    buttonInactive(prevButton, nextButton, slides, targetIndex);
})