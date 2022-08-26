(function(){


var allElements = document.querySelectorAll('.border-class');
var darkBorder = document.querySelector('.border-class-dark');

window.addEventListener("scroll", function () { //listener for border
    for (let i = 0; i < allElements.length; i++) {
        if (allElements[i].getBoundingClientRect().top >= window.innerHeight) {
            allElements[i].classList.remove('border-animation');
        } else {
            allElements[i].classList.add('border-animation');
        }
        }
    if (darkBorder.getBoundingClientRect().top >= window.innerHeight){
        darkBorder.classList.remove('border-animation-dark');
    }else{
        darkBorder.classList.add('border-animation-dark');
    }
    });

$('#phone').mask("+38(099)999-99-99");


})();
