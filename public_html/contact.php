<?php
$titre_page = 'Contact - Kevin Léonard';
$titre_partage = 'Contact - Kevin Léonard';
$description_page = "Un projet de site web ? Écrivez-moi, je vous réponds rapidement.";
$adresse_page = '/contact.php';
include 'includes/entete.php';
include 'includes/services-donnees.php';

$retours = [
    'ok' => 'Message envoyé, je vous réponds vite.',
    'erreur' => "Le message n'a pas pu être envoyé. Vérifiez les champs.",
];
$envoi = $_GET['envoi'] ?? '';
$retour = $retours[$envoi] ?? '';

$demandes = [
    'Nouveau site' => ['Site vitrine', 'Site e-commerce', 'Site sur mesure', 'Landing page'],
    'Site existant' => ["Refonte d'un site existant", "Correction d'un site existant", 'Référencement (SEO)', "Maintenance d'un site"],
];
$toutes_les_demandes = array_merge(['Autre'], ...array_values($demandes));
$demande_choisie = $_GET['demande'] ?? '';
if (!in_array($demande_choisie, $toutes_les_demandes, true)) {
    $demande_choisie = '';
}

$options_proposees = array_values(array_filter($options, fn($option) => empty($option['libre'])));
$libelles_options = array_column($options_proposees, 'libelle');
$options_choisies = array_intersect((array) ($_GET['options'] ?? []), $libelles_options);
$suivi_choisi = isset($_GET['suivi']);
$suivi = $formules[0];
?>
<main class="contact">
  <div class="contact-contenu">
    <section class="contact-presentation">
    <span class="etiquette <?= $disponibilite_classe ?>"><span class="etiquette-point"></span><?= $disponibilite_texte ?></span>
      <h1 class="contact-titre">Un projet ? <span class="mot-accent">Écrivez-moi.</span></h1>
      <p class="contact-texte">Dites-moi en quelques lignes ce dont vous avez besoin. Je réponds généralement sous 2 jours ouvrés.</p>
      <ul class="contact-liens">
        <li><a class="contact-lien" href="tel:<?= $telephone_lien ?>"><span><?= $telephone_affichage ?></span><span class="contact-lien-fleche">→</span></a></li>
        <li><a class="contact-lien" href="https://www.linkedin.com/in/kevin-leonard95670/" target="_blank" rel="noopener"><span>LinkedIn</span><span class="contact-lien-fleche">→</span></a></li>
        <li><a class="contact-lien" href="https://github.com/kevin95670" target="_blank" rel="noopener"><span>GitHub</span><span class="contact-lien-fleche">→</span></a></li>
        <li><a class="contact-lien" href="/documents/CV-Kevin-Leonard-developpeur-web.pdf" target="_blank" rel="noopener"><span>Télécharger mon CV (PDF)</span><span class="contact-lien-fleche">→</span></a></li>
      </ul>
    </section>

    <form class="contact-formulaire" action="/envoi-contact.php" method="post">
      <div class="contact-champ">
        <label class="contact-champ-libelle" for="demande">Votre demande</label>
        <select class="contact-champ-saisie" id="demande" name="demande" required>
          <option value="" disabled<?= $demande_choisie === '' ? ' selected' : '' ?>>Type de projet</option>
          <?php foreach ($demandes as $groupe => $types): ?>
          <optgroup label="<?= $groupe ?>">
            <?php foreach ($types as $type): ?>
            <option<?= $demande_choisie === $type ? ' selected' : '' ?>><?= $type ?></option>
            <?php endforeach; ?>
          </optgroup>
          <?php endforeach; ?>
          <option<?= $demande_choisie === 'Autre' ? ' selected' : '' ?>>Autre</option>
        </select>
      </div>
      <fieldset class="contact-choix" id="complements">
        <legend class="contact-champ-libelle">Compléments souhaités <span class="contact-facultatif">(facultatif)</span></legend>
        <?php foreach ($options_proposees as $option): ?>
        <label class="contact-case">
          <input type="checkbox" name="options[]" value="<?= $option['libelle'] ?>"<?= in_array($option['libelle'], $options_choisies, true) ? ' checked' : '' ?>>
          <span><?= $option['libelle'] ?> <span class="contact-case-prix"><?= $option['prix'] ?></span></span>
        </label>
        <?php endforeach; ?>
        <label class="contact-case">
          <input type="checkbox" name="suivi" value="oui"<?= $suivi_choisi ? ' checked' : '' ?>>
          <span><?= $suivi['titre'] ?> mensuel <span class="contact-case-prix"><?= $suivi['prix'] ?> <?= $suivi['apres'] ?></span></span>
        </label>
      </fieldset>
      <div class="contact-formulaire-ligne">
        <div class="contact-champ">
          <label class="contact-champ-libelle" for="nom">Nom</label>
          <input class="contact-champ-saisie" id="nom" name="nom" type="text" autocomplete="name" maxlength="100" required>
        </div>
        <div class="contact-champ">
          <label class="contact-champ-libelle" for="email">Email</label>
          <input class="contact-champ-saisie" id="email" name="email" type="email" autocomplete="email" maxlength="150" required>
        </div>
      </div>
      <div class="contact-champ">
        <label class="contact-champ-libelle" for="message">Décrivez-moi votre projet</label>
        <textarea class="contact-champ-saisie contact-champ-message" id="message" name="message" rows="6" maxlength="5000" placeholder="Ce que vous souhaitez, vos délais, votre budget si vous en avez un…" required></textarea>
      </div>
      <div class="contact-piege" aria-hidden="true">
        <label for="piege">Laissez ce champ vide</label>
        <input id="piege" name="piege" type="text" tabindex="-1" autocomplete="off">
      </div>
      <button class="bouton" type="submit">Envoyer le message</button>
      <p class="contact-retour<?= $envoi === 'erreur' ? ' contact-retour-erreur' : '' ?>" role="status" aria-live="polite"><?= $retour ?></p>
      <p class="contact-mention">Ces informations servent uniquement à vous répondre. <a href="/mentions-legales.php">Mentions légales</a></p>
    </form>
  </div>
</main>
<script type="module" src="/js/contact-formulaire.js"></script>
<?php include 'includes/pied-de-page.php'; ?>