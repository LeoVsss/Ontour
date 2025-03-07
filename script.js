const inputs = document.querySelectorAll('.input');
const button = document.querySelector('.login__button');

const handleFocus = ({ target }) => {
  const span = target.previousElementSibling;
  span.classList.add('span-active');
}

const handleFocusOut = ({ target }) => {
  if (target.value === '') {
    const span = target.previousElementSibling;
    span.classList.remove('span-active');
  }
}

const handleChange = () => {
  const [username, password] = inputs;

  if (username.value && password.value.length >= 8) {
    button.removeAttribute('disabled');
  }
}

inputs.forEach((input) => input.addEventListener('focus', handleFocus));
inputs.forEach((input) => input.addEventListener('focusout', handleFocusOut));
inputs.forEach((input) => input.addEventListener('input', handleChange));







//---- Carrossel ---//

const carousel = document.querySelector(".carousel2"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper2 i");


let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
 
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; 
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}




//Viagens Internacionais

const carousel2 = document.querySelector(".carousel3"),

arrowIcons2 = document.querySelectorAll(".wrapper3 i");


let isDragStart2 = false, isDragging2 = false, prevPageX2, prevScrollLeft2, positionDiff2;

const showHideIcons2 = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel2.scrollWidth - carousel2.clientWidth; // getting max scrollable width
    arrowIcons2[0].style.display = carousel2.scrollLeft == 0 ? "none" : "block";
    arrowIcons2[1].style.display = carousel2.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons2.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel2.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons2(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide2 = () => {
    // if there is no image left to scroll then return from here
    if(carousel2.scrollLeft - (carousel2.scrollWidth - carousel2.clientWidth) > -1 || carousel2.scrollLeft <= 0) return;

    positionDiff2 = Math.abs(positionDiff2); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff2;

    if(carousel2.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel2.scrollLeft += positionDiff2 > firstImgWidth / 3 ? valDifference : -positionDiff2;
    }
    // if user is scrolling to the left
    carousel2.scrollLeft -= positionDiff2 > firstImgWidth / 3 ? valDifference : -positionDiff2;
}

const dragStart2 = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel2.scrollLeft;
}

const dragging2 = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart2) return;
    e.preventDefault();
    isDragging = true;
    carousel2.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX2;
    carousel2.scrollLeft = prevScrollLeft2 - positionDiff2;
    showHideIcons();
}

const dragStop2 = () => {
    isDragStart2 = false;
    carousel2.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel2.addEventListener("mousedown", dragStart2);
carousel2.addEventListener("touchstart", dragStart2);

document.addEventListener("mousemove", dragging2);
carousel2.addEventListener("touchmove", dragging2);

document.addEventListener("mouseup", dragStop2);
carousel2.addEventListener("touchend", dragStop2);








  $('.control-monteseupc').click(function () {
    $('.control-monteseupc')
    .not(this) // exclui o elemento clicado
    .removeClass('active');
    
    $(this)
    .toggleClass('active');
  })

  


  




