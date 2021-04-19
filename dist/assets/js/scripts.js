var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var accWrap = this.parentElement;
    accWrap.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    }
    });
}
const hamburger = document.querySelector(".hamburger"),
      mobileMenu = document.querySelector('.mobile-navbar');

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
});
var headerTechData = document.querySelector(".tech-details-popup"),
    buttonTechData = document.querySelector('.btn-tech-details');

buttonTechData.addEventListener("mouseenter", function() {
    headerTechData.classList.remove("hide");
});

buttonTechData.addEventListener("mouseleave", function() {
    headerTechData.classList.add("hide");
});