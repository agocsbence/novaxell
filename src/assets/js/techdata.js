const headerTechData = document.querySelector(".tech-details-popup"),
      buttonTechData = document.querySelector('.btn-tech-details');

buttonTechData.addEventListener("mouseover", function() {
    headerTechData.classList.toggle("hide");
});