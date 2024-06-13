document.addEventListener("DOMContentLoaded", function() {
    console.log("Script loaded");
  
    // Get all nav links
    const navLinks = document.querySelectorAll('.menu-links .nav-link a');
    console.log(navLinks);
  
    // Function to remove active class from all links
    function removeActiveClass() {
      navLinks.forEach(link => {
        link.parentElement.classList.remove('active');
      });
    }
  
    // Function to add active class to the clicked link
    function setActiveClass(event) {
      removeActiveClass();
      event.target.parentElement.classList.add('active');
      console.log(event.target);
    }
  
    // Add click event listener to all nav links
    navLinks.forEach(link => {
      link.addEventListener('click', setActiveClass);
    });
  
    // Function to set active link based on the current URL
    function setActiveLinkBasedOnURL() {
      const currentURL = window.location.href;
      navLinks.forEach(link => {
        if (currentURL.includes(link.href)) {
          link.parentElement.classList.add('active');
        }
      });
    }
  
    // Set the active link based on the current URL when the page loads
    setActiveLinkBasedOnURL();
  });