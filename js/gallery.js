const hamBurger = document.querySelectorAll(".hamburger")[0];
const navBtns = document.getElementsByClassName("nav-btns")[0];

hamBurger.addEventListener("click" , ()=>{
    hamBurger.classList.toggle("is_active");
    navBtns.classList.toggle("is_active");

});