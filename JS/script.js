

    let slideIndex = 1;
    function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    if (slideIndex > slides.length) {slideIndex = 1;}
    if (slideIndex < 1) {slideIndex = slides.length;}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";

    setTimeout(function() {
        slideIndex++;
    },8000);
}


let textIndex = 1;
function textSlides() {
    showSlides();
    let slides = document.getElementsByClassName("texte-animated");
    if (textIndex > slides.length) {textIndex = 1;}
    if (textIndex < 1) {textIndex = slides.length;}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[textIndex-1].style.display = "block";

    setTimeout(function() {
        textIndex++;
        textSlides();
    },8000);
}
textSlides();
