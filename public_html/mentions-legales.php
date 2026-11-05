<?php
$titre_page = 'Mentions légales | Kevin Léonard';
$titre_partage = 'Mentions légales - Kevin Léonard';
$description_page = 'Mentions légales du site kevinleonard.fr : éditeur, hébergeur, propriété intellectuelle et données personnelles.';
$adresse_page = '/mentions-legales.php';
include 'includes/entete.php';

$editeur = [
    'Nom' => 'Kevin Léonard',
    'Statut' => 'Entrepreneur individuel (micro-entreprise), nom commercial « Kael »',
    'SIRET' => '130 509 797 00010',
    'Code APE' => '62.01Z (programmation informatique)',
    'Activité' => 'Création, développement et optimisation de sites internet',
    'Adresse' => '28 boulevard Maritime, 50110 Cherbourg-en-Cotentin',
    'Téléphone' => '<a href="tel:+33675981767">06 75 98 17 67</a>',
    'E-mail' => '<a href="mailto:kevin-leonard@orange.fr">kevin-leonard@orange.fr</a>',
    'TVA' => 'TVA non applicable, article 293 B du CGI',
    'Directeur de la publication' => 'Kevin Léonard',
];

$sections = [
    [
        'titre' => 'Hébergement',
        'paragraphes' => [
            'Ce site est hébergé par Hostinger International Ltd., 61 Lordou Vironos Street, 6023 Larnaca, Chypre.',
        ],
    ],
    [
        'titre' => 'Propriété intellectuelle',
        'paragraphes' => [
            'Les textes, le design et le code de ce site sont la propriété de Kevin Léonard. Toute reproduction sans autorisation écrite est interdite.',
            'Les captures d\'écran, noms et logos des sites présentés dans la rubrique Projets appartiennent à leurs propriétaires respectifs et sont montrés à titre de référence.',
        ],
    ],
    [
        'titre' => 'Données personnelles',
        'paragraphes' => [
            'Le formulaire de contact recueille votre nom, votre adresse e-mail, votre message, le type de projet et les options que vous cochez. Ces informations servent uniquement à répondre à votre demande et à établir un devis.',
            'Elles sont envoyées par e-mail à Kevin Léonard, responsable du traitement, et ne sont ni vendues ni cédées. Elles sont conservées le temps de traiter votre demande, puis au maximum 3 ans après le dernier échange. Si un contrat est conclu, les documents liés sont conservés pendant la durée légale.',
            'Vous pouvez demander l\'accès, la rectification, l\'effacement ou la limitation de vos données, ou vous opposer à leur traitement, en écrivant à <a href="mailto:kevin-leonard@orange.fr">kevin-leonard@orange.fr</a>. Vous pouvez aussi adresser une réclamation à la CNIL sur <a href="https://www.cnil.fr" target="_blank" rel="noopener">cnil.fr</a>.',
        ],
    ],
    [
        'titre' => 'Cookies',
        'paragraphes' => [
            'Ce site n\'utilise ni cookie publicitaire ni outil de mesure d\'audience.',
        ],
    ],
];
?>
<main>
  <section class="mentions-presentation">
    <div class="mentions-presentation-contenu">
      <h1 class="mentions-titre">Mentions légales</h1>
      <p class="mentions-texte">Les informations légales du site kevinleonard.fr.</p>
    </div>
  </section>

  <div class="mentions-contenu">
    <section class="mentions-section">
      <h2 class="mentions-section-titre">Éditeur du site</h2>
      <dl class="mentions-identite">
        <?php foreach ($editeur as $libelle => $valeur): ?>
        <div class="mentions-identite-ligne">
          <dt><?= $libelle ?></dt>
          <dd><?= $valeur ?></dd>
        </div>
        <?php endforeach; ?>
      </dl>
    </section>

    <?php foreach ($sections as $section): ?>
    <section class="mentions-section">
      <h2 class="mentions-section-titre"><?= $section['titre'] ?></h2>
      <?php foreach ($section['paragraphes'] as $paragraphe): ?>
      <p class="mentions-paragraphe"><?= $paragraphe ?></p>
      <?php endforeach; ?>
    </section>
    <?php endforeach; ?>
  </div>
</main>
<?php include 'includes/pied-de-page.php'; ?>