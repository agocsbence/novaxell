var headerTechData = document.querySelector(".tech-details-popup"),
    buttonTechData = document.querySelector('.btn-tech-details');

buttonTechData.addEventListener("mouseenter", function() {
    headerTechData.classList.remove("hide");
});

buttonTechData.addEventListener("mouseleave", function() {
    headerTechData.classList.add("hide");
});