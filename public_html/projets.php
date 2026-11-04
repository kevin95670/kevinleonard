<?php
$titre_page = 'Projets - Kevin Léonard';
$titre_partage = 'Projets - Kevin Léonard';
$description_page = 'Boutiques en ligne, sites vitrines et outils sur mesure en PHP et WordPress : découvrez mes projets en production.';
$adresse_page = '/projets.php';
include 'includes/entete.php';
include 'includes/projets-donnees.php';
?>
<main>
  <section class="projets-presentation">
    <div class="projets-presentation-contenu">
      <span class="projets-surtitre">Réalisations</span>
      <h1 class="projets-titre">Des sites en <span class="mot-accent">production</span>, pas des maquettes.</h1>
      <p class="projets-texte">Boutiques en ligne, sites vitrines et outils sur mesure. Choisissez un type de travail pour filtrer.</p>
    </div>
  </section>

  <div class="projets-filtres" hidden>
    <?php foreach ($filtres_projets as $filtre => $libelle): ?>
    <button class="projets-filtre<?= $filtre === 'tous' ? ' projets-filtre-actif' : '' ?>" type="button" data-filtre="<?= $filtre ?>" aria-pressed="<?= $filtre === 'tous' ? 'true' : 'false' ?>"><?= $libelle ?></button>
    <?php endforeach; ?>
  </div>

  <ul class="projets-liste">
    <?php foreach ($projets as $projet): ?>
    <li class="projet<?= $projet['statut'] === 'bientot' ? ' projet-bientot' : '' ?>" data-filtres="<?= implode(' ', $projet['filtres']) ?>">
      <div class="projet-image">
        <img src="/images/<?= $projet['image'] ?>" alt="Capture du site <?= $projet['nom'] ?>" width="800" height="500" loading="lazy">
        <span class="projet-statut projet-statut-<?= $projet['statut'] ?>"><?= $statuts[$projet['statut']] ?></span>
      </div>
      <div class="projet-contenu">
        <h2 class="projet-titre"><?= $projet['nom'] ?></h2>
        <p class="projet-texte"><?= $projet['texte'] ?></p>
        <span class="projet-technos"><?= $projet['technos'] ?></span>
        <?php if ($projet['adresse'] !== ''): ?>
        <a class="projet-lien" href="<?= $projet['adresse'] ?>" target="_blank" rel="noopener"><?= $projet['lien'] ?></a>
        <?php endif; ?>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>

  <section class="projets-contact">
    <div class="projets-contact-bloc">
      <h2 class="projets-contact-titre">Un projet du même genre à confier ?</h2>
      <a class="bouton" href="/services.php">Voir les services et tarifs</a>
    </div>
  </section>
</main>
<script type="module" src="/js/projets-filtres.js"></script>
<?php include 'includes/pied-de-page.php'; ?>