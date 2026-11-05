<?php
$titre_page = 'Création de site web à Cherbourg : tarifs | Kevin Léonard';
$titre_partage = 'Services et tarifs - Kevin Léonard';
$description_page = 'Site vitrine, boutique, landing page, refonte ou correction de site : tarifs dès 300 €, premier échange gratuit, partout en France à distance.';
$adresse_page = '/services.php';
include 'includes/entete.php';
include 'includes/services-donnees.php';

$offres = [
    [
        'vedette' => true,
        'etiquette' => 'Ma spécialité',
        'ton' => 'vert',
        'titre' => 'Site vitrine',
        'avant' => 'À partir de',
        'prix' => '500 €',
        'apres' => '',
        'texte' => 'Un site clair et rapide, que vous pouvez modifier vous-même. Réalisé le plus souvent avec WordPress, ou avec une autre technologie si elle convient mieux.',
        'points' => [
            "Design sur mesure ou à partir d'un modèle existant",
            'Adapté aux mobiles',
            'Bases du référencement',
            "Prise en main de l'administration",
        ],
        'demande' => 'Site vitrine',
    ],
    [
        'etiquette' => 'Vente en ligne',
        'ton' => 'bleu',
        'titre' => 'Site e-commerce',
        'avant' => 'À partir de',
        'prix' => '900 €',
        'apres' => '',
        'texte' => 'Une boutique en ligne pour vendre vos produits : catalogue, panier et paiement sécurisé, avec la solution la mieux adaptée à votre activité.',
        'points' => [
            'Catalogue et gestion des produits',
            'Paiement en ligne sécurisé',
            "Livraison et frais d'expédition",
            'Prise en main de la gestion des commandes',
        ],
        'demande' => 'Site e-commerce',
    ],
    [
        'etiquette' => 'Selon votre besoin',
        'ton' => 'violet',
        'titre' => 'Site ou application sur mesure',
        'avant' => 'À partir de',
        'prix' => '1 500 €',
        'apres' => '',
        'texte' => 'Quand un CMS ne suffit pas : espace client, back-office, connexion à des API.',
        'points' => [
            'Cadrage du besoin',
            'Technologies choisies selon votre projet',
            'Espace client et back-office',
            'Connexion à vos outils',
        ],
        'bouton' => 'Décrire mon projet',
        'demande' => 'Site sur mesure',
    ],
    [
        'etiquette' => 'Une seule page',
        'ton' => 'bleu',
        'titre' => 'Landing page',
        'avant' => 'À partir de',
        'prix' => '300 €',
        'apres' => '',
        'texte' => 'Une page unique pensée pour un seul objectif : présenter une offre ou recueillir des demandes de devis.',
        'points' => [
            'Message centré sur un objectif',
            "Formulaire de contact ou bouton d'action",
            'Rapide et adaptée aux mobiles',
        ],
        'demande' => 'Landing page',
    ],
    [
        'etiquette' => 'Refonte · Correction · SEO',
        'ton' => 'violet',
        'titre' => 'Site existant',
        'avant' => '',
        'prix' => '',
        'apres' => '',
        'texte' => 'Votre site est déjà en ligne mais doit être refait, réparé ou mieux référencé. On commence par un devis, puis je peux en assurer le suivi.',
        'points' => [
            'Refonte : nouveau design, en conservant votre contenu et votre référencement',
            'Correction : bug, page cassée, formulaire en panne',
            'Référencement (SEO) : audit et optimisations',
            'Migration vers un nouvel hébergement ou une version à jour',
        ],
        'bouton' => 'Décrire mon site',
        'demande' => '',
    ],
];

$mention_tarifs = 'Tarifs indicatifs, nets de taxes (TVA non applicable, article 293 B du CGI). Le nom de domaine et l\'hébergement sont ajoutés au devis, puis renouvelés et facturés chaque année. Un devis précis, avec le périmètre et le prix, vous est remis avant tout engagement.';

$etapes = [
    [
        'titre' => 'On discute',
        'texte' => 'Votre besoin, vos délais, votre budget. Par téléphone ou en visio, ou en face à face autour de Cherbourg.',
        'duree' => 'Gratuit · 30 minutes',
    ],
    [
        'titre' => 'Je chiffre',
        'texte' => 'Une proposition claire, avec le périmètre et le prix.',
        'duree' => 'Sous 2 jours ouvrés',
    ],
    [
        'titre' => 'Je construis',
        'texte' => "Maquette, validation, développement. Je vous donne un point d'avancement à chaque étape clé : pas besoin de me relancer.",
        'duree' => 'À partir de 5 jours ouvrés',
    ],
    [
        'titre' => 'On met en ligne',
        'texte' => 'Livraison, prise en main, suivi si vous le souhaitez.',
        'duree' => '2 à 5 jours ouvrés',
    ],
];

$questions = [
    [
        'titre' => 'Où travaillez-vous ?',
        'reponse' => "Partout en France, à distance : appels, visio et e-mails suffisent pour mener un projet de A à Z. Je peux aussi me déplacer autour de Cherbourg pour un rendez-vous en face à face.",
    ],
    [
        'titre' => "Qui s'occupe du nom de domaine et de l'hébergement ?",
        'reponse' => "Je m'en occupe : je réserve le nom de domaine à votre nom et je mets en place l'hébergement. Leur coût annuel est ajouté au devis la première année, puis je vous envoie une facture de renouvellement chaque année avant l'échéance.",
    ],
    [
        'titre' => 'À qui appartient le site une fois livré ?',
        'reponse' => 'À vous. Une fois livré, le site et son contenu vous appartiennent.',
    ],
    [
        'titre' => 'Comment se passe le paiement ?',
        'reponse' => "Un acompte est demandé à la validation du devis, et le solde à la livraison, avant la mise en ligne définitive. Les modalités exactes sont indiquées dans le devis.",
    ],
    [
        'titre' => 'Les retouches après la livraison sont-elles comprises ?',
        'reponse' => "Oui : deux petites retouches (un texte, une image, un ajustement d'affichage) sont offertes après la livraison, sans limite de durée. Pour d'autres retouches ou de nouvelles fonctionnalités, je vous propose un devis ou un forfait de maintenance.",
    ],
    [
        'titre' => 'Quel est le délai habituel ?',
        'reponse' => 'Il dépend de la taille du projet et de la rapidité de vos retours sur les contenus. Le délai prévu est indiqué dans le devis, avant tout engagement.',
    ],
];

$atouts = [
    [
        'ton' => 'bleu',
        'valeur' => '5+',
        'titre' => 'Ans comme développeur web',
        'texte' => "Boutiques en ligne, CMS et sites vitrines en production, de la création à la maintenance. Aujourd'hui, je mets cette expérience au service de vos projets.",
    ],
    [
        'ton' => 'violet',
        'valeur' => '1',
        'titre' => 'Interlocuteur',
        'texte' => 'Je fais tout moi-même, du design à la mise en ligne. Pas de sous-traitance.',
    ],
    [
        'ton' => '',
        'valeur' => '✓',
        'titre' => 'Un travail suivi',
        'texte' => 'Votre site est sauvegardé, versionné et testé avant chaque mise en ligne. Je ne laisse rien au hasard.',
    ],
];
?>
<main>
  <section class="services-presentation">
    <div class="services-presentation-contenu">
      <span class="services-surtitre">Freelance</span>
      <h1 class="services-titre">Des sites <span class="mot-accent">sur mesure</span>, livrés de A à Z.</h1>
      <p class="services-texte">Je m'occupe de la conception, du code, de la mise en ligne et du suivi. Un seul interlocuteur, du premier échange à la maintenance.</p>
    </div>
  </section>

  <section class="services-catalogue">
    <div class="services-section-entete">
      <h2 class="services-section-titre">Créer ou refaire votre site</h2>
      <p class="services-section-intro">C'est le point de départ : un prix pour votre projet, payé une seule fois, sans abonnement obligatoire. La mise en ligne est comprise : je m'occupe du nom de domaine et de l'hébergement, ajoutés au devis, puis renouvelés chaque année. Une fois le site livré, vous pouvez le garder tel quel, ou y ajouter des options et un suivi, comme expliqué plus bas.</p>
    </div>
    <ul class="services-offres">
      <?php foreach ($offres as $offre): ?>
      <li class="services-offre<?= !empty($offre['vedette']) ? ' services-offre-vedette' : '' ?>">
        <?php if (!empty($offre['etiquette'])): ?>
        <span class="services-offre-etiquette services-offre-etiquette-<?= $offre['ton'] ?? 'bleu' ?>"><?= $offre['etiquette'] ?></span>
        <?php endif; ?>
        <h3 class="services-offre-titre"><?= $offre['titre'] ?></h3>
        <p class="services-offre-prix">
          <?php if ($offre['prix'] !== ''): ?>
          <?php if ($offre['avant'] !== ''): ?><span class="services-offre-precision"><?= $offre['avant'] ?></span><?php endif; ?>
          <span class="services-offre-montant"><?= $offre['prix'] ?></span>
          <?php if ($offre['apres'] !== ''): ?><span class="services-offre-precision"><?= $offre['apres'] ?></span><?php endif; ?>
          <?php else: ?>
          <span class="services-offre-montant services-offre-montant-devis">Sur devis</span>
          <?php endif; ?>
        </p>
        <p class="services-offre-texte"><?= $offre['texte'] ?></p>
        <ul class="services-offre-points">
          <?php foreach ($offre['points'] as $point): ?>
          <li><?= $point ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="bouton<?= empty($offre['vedette']) ? ' bouton-secondaire' : '' ?>" href="/contact.php<?= $offre['demande'] !== '' ? '?demande=' . urlencode($offre['demande']) : '' ?>"><?= $offre['bouton'] ?? 'Demander un devis' ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <p class="services-mention"><?= $mention_tarifs ?></p>

  <section class="services-options">
    <div class="services-section-entete">
      <h2 class="services-section-titre">Options à la carte</h2>
      <p class="services-section-intro">Facultatives. Vous les choisissez avec votre site, ou plus tard si un besoin apparaît : une page de plus, par exemple, se commande à tout moment. Vous pouvez aussi en prendre une seule, sur un site existant, sans refaire le site. Chaque option est chiffrée dans le devis, et vous ne payez que celles que vous choisissez.</p>
    </div>
    <ul class="services-options-liste">
      <?php foreach ($options as $option): ?>
      <li class="services-option<?= !empty($option['libre']) ? ' services-option-libre' : '' ?>">
        <span class="services-option-libelle"><?= $option['libelle'] ?></span>
        <span class="services-option-prix"><?= $option['prix'] ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
    <a class="bouton bouton-secondaire services-options-bouton" href="/contact.php?demande=Autre#complements">Choisir une option</a>
  </section>

  <section class="services-maintenance">
    <div class="services-section-entete">
      <h2 class="services-section-titre">Maintenance et suivi</h2>
      <p class="services-section-intro">Facultatif aussi, une fois votre site livré (ou repris, s'il existait déjà). Avec le Suivi, vos sauvegardes et vos mises à jour sont assurées chaque mois, avec un peu de temps de modifications compris. Pour une intervention ponctuelle sans abonnement, je vous fais simplement un devis. Vous pouvez arrêter le Suivi quand vous voulez.</p>
    </div>
    <ul class="services-offres services-formules">
      <?php foreach ($formules as $formule): ?>
      <li class="services-offre">
        <h3 class="services-offre-titre"><?= $formule['titre'] ?></h3>
        <p class="services-offre-prix">
          <span class="services-offre-montant"><?= $formule['prix'] ?></span>
          <span class="services-offre-precision"><?= $formule['apres'] ?></span>
        </p>
        <ul class="services-offre-points">
          <?php foreach ($formule['points'] as $point): ?>
          <li><?= $point ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="bouton bouton-secondaire" href="/contact.php?demande=<?= urlencode("Maintenance d'un site") ?>&amp;suivi=1#complements">Choisir le Suivi</a>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="services-deroulement">
    <h2 class="services-section-titre">Comment ça se passe</h2>
    <ol class="services-etapes">
      <?php foreach ($etapes as $numero => $etape): ?>
      <li class="services-etape">
        <span class="services-etape-numero"><?= $numero + 1 ?></span>
        <h3 class="services-etape-titre"><?= $etape['titre'] ?></h3>
        <p class="services-etape-texte"><?= $etape['texte'] ?></p>
        <?php if (!empty($etape['duree'])): ?>
        <p class="services-etape-duree"><?= $etape['duree'] ?></p>
        <?php endif; ?>
      </li>
      <?php endforeach; ?>
    </ol>
  </section>

  <section class="services-questions">
    <h2 class="services-section-titre">Questions fréquentes</h2>
    <div class="services-questions-liste">
      <?php foreach ($questions as $question): ?>
      <details class="services-question">
        <summary class="services-question-titre"><?= $question['titre'] ?></summary>
        <p class="services-question-reponse"><?= $question['reponse'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="services-atouts">
    <?php foreach ($atouts as $atout): ?>
    <div class="services-atout<?= $atout['ton'] !== '' ? ' services-atout-' . $atout['ton'] : '' ?>">
      <span class="services-atout-valeur"><?= $atout['valeur'] ?></span>
      <h3 class="services-atout-titre"><?= $atout['titre'] ?></h3>
      <p class="services-atout-texte"><?= $atout['texte'] ?></p>
    </div>
    <?php endforeach; ?>
  </section>

  <section class="invitation">
    <div class="invitation-bloc">
      <h2 class="invitation-titre">Un projet, une question ? Parlons-en.</h2>
      <a class="bouton" href="/contact.php">Demander un devis →</a>
    </div>
  </section>
</main>
<?php include 'includes/pied-de-page.php'; ?>