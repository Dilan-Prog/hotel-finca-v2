const burger = document.getElementById('burger-btn');
const mobileNav = document.getElementById('mobile-nav');
const burgerIcon = document.getElementById('burger-icon');

burger.addEventListener('click', () => {
  const open = mobileNav.style.display === 'flex';
  mobileNav.style.display = open ? 'none' : 'flex';
  burgerIcon.textContent = open ? '☰' : '✕';
});
