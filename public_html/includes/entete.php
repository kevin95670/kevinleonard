<?php
$adresse_site = 'https://kevinleonard.fr';
$adresse_complete = $adresse_site . $adresse_page;
$image_partage = $adresse_site . '/images/bg.jpg';
include __DIR__ . '/configuration.php';
$pages = [
    ['titre' => 'Projets', 'adresse' => '/projets.php'],
    ['titre' => 'Services', 'adresse' => '/services.php'],
    ['titre' => 'Parcours', 'adresse' => '/parcours.php'],
    ['titre' => 'Contact', 'adresse' => '/contact.php'],
];
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($titre_page) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description_page) ?>">
  <link rel="canonical" href="<?= $adresse_complete ?>">
  <meta property="og:title" content="<?= htmlspecialchars($titre_partage) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $adresse_complete ?>">
  <meta property="og:image" content="<?= $image_partage ?>">
  <meta property="og:description" content="<?= htmlspecialchars($description_page) ?>">
  <link rel="icon" href="/images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="/css/principal.css">
</head>
<body>
<header class="entete">
  <a class="entete-logo" href="/" aria-label="Kevin Léonard, accueil">
    <span class="entete-logo-nom">Kevin</span>
    <span class="entete-logo-trait"></span>
  </a>
  <button class="menu-bouton" type="button" aria-expanded="false" aria-controls="menu" aria-label="Ouvrir le menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav class="menu" id="menu">
    <?php foreach ($pages as $page): ?>
      <?php $page_active = $adresse_page === $page['adresse']; ?>
      <a class="menu-lien<?= $page_active ? ' menu-lien-actif' : '' ?>" href="<?= $page['adresse'] ?>"<?= $page_active ? ' aria-current="page"' : '' ?>><?= $page['titre'] ?></a>
    <?php endforeach; ?>
  </nav>
</header>