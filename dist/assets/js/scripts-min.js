var i,acc=document.getElementsByClassName("accordion");for(i=0;i<acc.length;i++)acc[i].addEventListener("click",function(){this.classList.toggle("active"),this.parentElement.classList.toggle("active");var e=this.nextElementSibling;e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"});const hamburger=document.querySelector(".hamburger"),mobileMenu=document.querySelector(".mobile-navbar");hamburger.addEventListener("click",function(){hamburger.classList.toggle("is-active"),mobileMenu.classList.toggle("is-active")});var headerTechData=document.querySelector(".tech-details-popup"),buttonTechData=document.querySelector(".btn-tech-details");buttonTechData.addEventListener("mouseenter",function(){headerTechData.classList.remove("hide")}),buttonTechData.addEventListener("mouseleave",function(){headerTechData.classList.add("hide")});