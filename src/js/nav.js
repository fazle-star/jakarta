  // Hamburger Menu
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');

  hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      hamburger.classList.toggle('transform');
      hamburger.classList.toggle('rotate-90');
  });
;