const entete = document.querySelector('.entete');
const bouton = document.querySelector('.menu-bouton');

bouton.addEventListener('click', () => {
  const ouvert = entete.classList.toggle('menu-ouvert');
  bouton.setAttribute('aria-expanded', ouvert);
  bouton.setAttribute('aria-label', ouvert ? 'Fermer le menu' : 'Ouvrir le menu');
});