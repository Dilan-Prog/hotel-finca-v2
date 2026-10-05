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

// ── Filtro de fechas → mensaje de WhatsApp ──
const bookingForm = document.querySelector('[data-wa-form]');
const field = (name) => bookingForm?.querySelector(`[data-field="${name}"]`);

if (bookingForm) {
  const llegada = field('llegada');
  const salida = field('salida');
  const iso = (d) => d.toISOString().slice(0, 10);
  const today = iso(new Date());
  llegada.min = today;
  salida.min = today;
  llegada.addEventListener('change', () => {
    if (!llegada.value) return;
    const next = new Date(llegada.value + 'T00:00:00');
    next.setDate(next.getDate() + 1);
    salida.min = iso(next);
    if (salida.value && salida.value <= llegada.value) salida.value = '';
  });
}

const fmtDate = (v) => v.split('-').reverse().join('/');

function bookingDetails() {
  const parts = [];
  const ll = field('llegada')?.value;
  const sa = field('salida')?.value;
  const ad = field('adultos')?.value;
  const ni = field('ninos')?.value;
  if (ll) parts.push(`Llegada: ${fmtDate(ll)}`);
  if (sa) parts.push(`Salida: ${fmtDate(sa)}`);
  if (ll && sa) {
    const nights = Math.round((new Date(sa) - new Date(ll)) / 86400000);
    if (nights > 0) parts.push(`${nights} noche${nights > 1 ? 's' : ''}`);
  }
  if (ad) parts.push(`Adultos: ${ad}`);
  if (ni && ni !== '0') parts.push(`Niños: ${ni}`);
  return { parts, hasDates: Boolean(ll || sa) };
}

function addBookingToLink(link) {
  if (!bookingForm) return true;
  const isSubmit = link.hasAttribute('data-wa-submit');
  const { parts, hasDates } = bookingDetails();
  const ll = field('llegada')?.value;
  const sa = field('salida')?.value;
  if (isSubmit && ll && sa && sa <= ll) {
    alert('La fecha de salida debe ser posterior a la de llegada.');
    return false;
  }
  // Los demás botones solo agregan datos si el visitante ya eligió fechas.
  if (!parts.length || (!isSubmit && !hasDates)) return true;
  const url = new URL(link.href);
  const base = url.searchParams.get('text') || '';
  url.searchParams.set('text', `${base} Datos de mi estancia: ${parts.join(', ')}.`);
  link.href = url.toString();
  return true;
}

document.addEventListener('click', (e) => {
  const waLink = e.target.closest('a[href*="wa.me"]');
  if (waLink && !waLink.dataset.waBase) {
    waLink.dataset.waBase = waLink.href;
  }
  if (waLink) {
    waLink.href = waLink.dataset.waBase; // evita duplicar datos en clics repetidos
    if (!addBookingToLink(waLink)) {
      e.preventDefault();
      return;
    }
  }
  if (e.target.closest('a[href*="wa.me"]')) {
    trackConversion('whatsapp');
    return;
  }
  if (e.target.closest('a[href^="tel:"]')) {
    trackConversion('llamada');
  }
});
