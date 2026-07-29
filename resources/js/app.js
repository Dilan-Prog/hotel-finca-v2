const burger = document.getElementById('burger-btn');
const mobileNav = document.getElementById('mobile-nav');
const burgerIcon = document.getElementById('burger-icon');

burger.addEventListener('click', () => {
  const open = mobileNav.style.display === 'flex';
  mobileNav.style.display = open ? 'none' : 'flex';
  burgerIcon.textContent = open ? '☰' : '✕';
});

function trackConversion(tipo) {
  if (window.RankProTracking && typeof window.RankProTracking.trackConversion === 'function') {
    window.RankProTracking.trackConversion(tipo);
  }
}

document.addEventListener('click', (e) => {
  if (e.target.closest('a[href*="wa.me"]')) {
    trackConversion('whatsapp');
    return;
  }
  if (e.target.closest('a[href^="tel:"]')) {
    trackConversion('llamada');
  }
});
