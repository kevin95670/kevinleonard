<?php
http_response_code(404);
$titre_page = 'Page introuvable | Kevin Léonard';
$titre_partage = 'Page introuvable - Kevin Léonard';
$description_page = "Cette page n'existe pas ou a été déplacée.";
$adresse_page = '/404.php';
$noindex = true;
include 'includes/entete.php';
?>
<main class="erreur">
  <div class="erreur-contenu">
    <p class="erreur-code">404</p>
    <h1 class="erreur-titre">Page <span class="mot-accent">introuvable.</span></h1>
    <p class="erreur-texte">Cette page n'existe pas ou a été déplacée. Retournez à l'accueil, ou écrivez-moi si vous cherchez quelque chose de précis.</p>
    <div class="erreur-actions">
      <a class="bouton" href="/">Retour à l'accueil</a>
      <a class="bouton bouton-secondaire" href="/contact.php">Me contacter</a>
    </div>
  </div>
</main>
<?php include 'includes/pied-de-page.php'; ?>