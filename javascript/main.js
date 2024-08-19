function appvalidation() {
    var name = document.getElementById("n").value;
    var department = document.getElementById("d").value;
    var doctor =document.getElementById("doctor").value;
    var email = document.getElementById("e").value;

    if (name==""||doctor=="" ||  email == "" ||department=="") {
        alert("error");
        return false;
    }

    alert("successfully sent");
    return true;
}



let menu = document.querySelector('#menu-btn');
let links = document.querySelector('.header .links');
menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    links.classList.toggle('active');
}
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".home_slider", {
loop:true,
spaceBetween: 30,
centeredSlides: true,
autoplay: {
    delay: 2500,
    disableOnInteraction: false
},
pagination: {
    el: ".swiper-pagination",
    clickable: true
},
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
},
on: {
    autoplayTimeLeft(s, time, progress) {
    progressCircle.style.setProperty("--progress", 1 - progress);
    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
}
});




