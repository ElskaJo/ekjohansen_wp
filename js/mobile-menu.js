var toggle = document.querySelector('#header__nav-toggle');
var menu = document.querySelector('#menu-primary');

toggle.addEventListener('click', function(){
  if (menu.classList.contains('is-active')) {
    this.setAttribute('aria-expanded', 'false');
    menu.classList.remove('is-active');
  } else {
    menu.classList.add('is-active'); 
    this.setAttribute('aria-expanded', 'true');
  }
});