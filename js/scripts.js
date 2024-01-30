// Function to make elements with a given class appear with a fade-in effect


function slideInElementsByClass(className) {
    var elements = document.getElementsByClassName(className);
    
    // Loop through each element with the specified class
    for (var i = 0; i < elements.length; i++) {
        // Add a class to the element that includes a CSS transition for sliding in
        elements[i].classList.add('show-slide');
        elements[i].style.transitionDelay = i * 0.1 + 's';
    }
}
function slideDownElementsByClass(className) {
    var elementsDown = document.getElementsByClassName(className);
    
    // Loop through each element with the specified class
    for (var i = 0; i < elementsDown.length; i++) {
        // Add a class to the element that includes a CSS transition for sliding in
        elementsDown[i].classList.add('show-slide-down');
        
    }
}
function slideUpElementsByClass(className) {
    var elementsUp = document.getElementsByClassName(className);
    
    // Loop through each element with the specified class
    for (var i = 0; i < elementsUp.length; i++) {
        // Add a class to the element that includes a CSS transition for sliding in
        elementsUp[i].classList.add('show-slide-up');
        
    }
}
function fadeInElementsByClass(className) {
    var fadeinelements = document.getElementsByClassName(className);
    
    // Loop through each element with the specified class
    for (var i = 0; i < fadeinelements.length; i++) {
        // Add a class to the element that includes a CSS transition for fading in
        fadeinelements[i].classList.add('visible');
    }
}
// Call the function to slide in elements with class 'appear' when the page is loaded
window.onload = function() {
    slideInElementsByClass('slide-in');
    fadeInElementsByClass('appear');
    slideDownElementsByClass('slide-down');
    slideUpElementsByClass('slide-up');
};
