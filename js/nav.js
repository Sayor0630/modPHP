// Get all the navigation links
var navLinks = document.querySelectorAll('.navigation a');

// Loop through the links and add event listeners
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener('click', function() {
    // Remove the 'active' class from all links
    for (var j = 0; j < navLinks.length; j++) {
      navLinks[j].classList.remove('active');
    }
    // Add the 'active' class to the clicked link
    this.classList.add('active');
  });
}
