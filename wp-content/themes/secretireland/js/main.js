document.addEventListener('DOMContentLoaded', function() {
  var navItems = document.querySelectorAll('.main-navigation a');
  if(navItems.length > 0) {
    var niTitle = [];
    navItems.forEach(function(elem) {
      niTitle.push(elem.innerHTML);
      elem.addEventListener('click', function() {
        sessionStorage.setItem('NIState', niTitle.indexOf(elem.innerHTML));
      });
    });
  }
  // bind to the onload event
  window.addEventListener('load', function() {
    navItems[sessionStorage.getItem('NIState')].setAttribute('class', 'selected');
  });
});
