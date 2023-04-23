
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');
const navLinksLi = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('nav-active');
  
  navLinksLi.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = '';
    } else {
      link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
    }
  });
  
  burger.classList.toggle('toggle');
});
// Add an "active" class to the current button (highlight it)
var navbar = document.getElementsByClassName("navbar")[0];
var links = navbar.getElementsByTagName("a");
for (var i = 0; i < links.length; i++) {
	links[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
// Toggle menu icon when clicked
var menuIcon = document.querySelector('.menu-icon');
menuIcon.addEventListener('click', function() {
	this.classList.toggle('active');
});
// Make the cards responsive
window.addEventListener('resize', function() {
  var cards = document.querySelectorAll('.card');
  var containerWidth = document.querySelector('.card-container').offsetWidth;
  var isSmallScreen = containerWidth <= 768;
  
  if (isSmallScreen) {
    cards.forEach(function(card) {
      card.style.width = '100%';
    });
  } else {
    cards.forEach(function(card) {
      card.style.width = 'calc(33.33% - 20px)';
    });
  }
});
