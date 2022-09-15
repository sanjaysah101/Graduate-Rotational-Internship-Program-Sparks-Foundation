const hamburgerIcon = document.querySelector("#hamburgerIcon");
const navbarlist = document.querySelector(".navbarlist");
hamburgerIcon.addEventListener("click", function(){
    navbarlist.classList.toggle("active")
});
