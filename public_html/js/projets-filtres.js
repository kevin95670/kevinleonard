const filtres = document.querySelector('.projets-filtres');
const boutons = filtres.querySelectorAll('.projets-filtre');
const projets = document.querySelectorAll('.projet');

const duree = 200;
const mouvementReduit = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
let minuterie;

function masquerLesSortants() {
  projets.forEach((projet) => {
    if (projet.classList.contains('projet-disparition')) {
      projet.hidden = true;
      projet.classList.remove('projet-disparition');
    }
  });
}

projets.forEach((projet) => {
  projet.addEventListener('animationend', () => {
    projet.classList.remove('projet-apparition');
  });
});

filtres.hidden = false;

filtres.addEventListener('click', (evenement) => {
  const bouton = evenement.target.closest('.projets-filtre');
  if (!bouton) {
    return;
  }

  const choix = bouton.dataset.filtre;
  clearTimeout(minuterie);

  boutons.forEach((autre) => {
    const actif = autre === bouton;
    autre.classList.toggle('projets-filtre-actif', actif);
    autre.setAttribute('aria-pressed', actif);
  });

  projets.forEach((projet) => {
    const doitEtreVisible = choix === 'tous' || projet.dataset.filtres.split(' ').includes(choix);

    if (doitEtreVisible) {
      projet.classList.remove('projet-disparition');
      if (projet.hidden) {
        projet.hidden = false;
        if (!mouvementReduit) {
          projet.classList.add('projet-apparition');
        }
      }
    } else if (!projet.hidden) {
      projet.classList.remove('projet-apparition');
      projet.classList.add('projet-disparition');
    }
  });

  if (mouvementReduit) {
    masquerLesSortants();
  } else {
    minuterie = setTimeout(masquerLesSortants, duree);
  }
});