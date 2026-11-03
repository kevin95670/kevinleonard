const formulaire = document.querySelector('.contact-formulaire');
const retour = document.querySelector('.contact-retour');
const bouton = formulaire.querySelector('.bouton');

const messages = {
  ok: 'Message envoyé, je vous réponds vite.',
  erreur: "Le message n'a pas pu être envoyé. Vérifiez les champs.",
};

function afficherRetour(succes) {
  retour.textContent = succes ? messages.ok : messages.erreur;
  retour.classList.toggle('contact-retour-erreur', !succes);
}

formulaire.addEventListener('submit', async (evenement) => {
  evenement.preventDefault();
  bouton.disabled = true;
  retour.textContent = 'Envoi en cours…';
  retour.classList.remove('contact-retour-erreur');

  try {
    const reponse = await fetch(formulaire.action, {
      method: 'POST',
      headers: { Accept: 'application/json' },
      body: new FormData(formulaire),
    });
    const donnees = await reponse.json();
    afficherRetour(donnees.succes);
    if (donnees.succes) {
      formulaire.reset();
    }
  } catch (erreur) {
    afficherRetour(false);
  }

  bouton.disabled = false;
});