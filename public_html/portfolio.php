<?php
// Page portfolio réservée au profil Malt : non indexée, sans lien depuis le reste du site.
header('X-Robots-Tag: noindex, follow');

// À renseigner : adresse de ton profil Malt (le bouton n'apparaît que si elle est remplie).
$lien_malt = '';

// Projets affichés, dans cet ordre (clés de includes/projets-donnees.php).
$projets_retenus = ['petite-source', 'piscinelle', 'marcel-ayme', 'sigma'];

include __DIR__ . '/includes/projets-donnees.php';

$projets_par_cle = [];
foreach ($projets as $projet) {
    $projets_par_cle[$projet['cle']] = $projet;
}

function e(string $texte): string
{
    return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');
}

function points_niveau(int $niveau): string
{
    $points = '';
    for ($point = 1; $point <= 4; $point++) {
        $points .= '<span class="parcours-niveau-point' . ($point <= $niveau ? ' parcours-niveau-point-plein' : '') . '"></span>';
    }
    return $points;
}

$niveaux = [
    4 => 'Maîtrise',
    3 => "À l'aise",
    2 => 'Bases',
];

$chiffres = [
    ['valeur' => '5+', 'libelle' => "Années d'expérience"],
    ['valeur' => '20+', 'libelle' => 'Sites réalisés'],
    ['valeur' => '6', 'libelle' => 'Entreprises'],
];

$experiences = [
    [
        'periode' => '2021 – 2026',
        'duree' => '5 ans',
        'poste' => 'Développeur web',
        'entreprise' => 'Piscinelle',
        'logo' => 'piscinelle.webp',
        'ton' => 'bleu',
        'taches' => [
            'Création du site Petite-Source.com',
            "Améliorations et maintenance de Piscinelle.com et du CMS de l'entreprise",
            "Création d'un espace client en Vue.js",
            'Gestion de signatures électroniques avec Yousign',
        ],
        'technos' => ['PHP orienté objet', 'MVC', 'MySQL', 'Vue.js', 'API REST', 'Yousign'],
    ],
    [
        'periode' => '2019 – 2020',
        'duree' => '1 an',
        'poste' => 'Intégrateur-développeur',
        'entreprise' => 'Agence Webcom',
        'logo' => 'webcom.webp',
        'ton' => 'violet',
        'taches' => [
            "Améliorations et maintenance de sites d'hôtellerie et de restauration",
            'Création et mise en production de nouveaux sites',
        ],
        'technos' => ['CMS interne', 'Twig'],
    ],
    [
        'periode' => '2018 – 2019',
        'duree' => '1 an',
        'poste' => 'Intégrateur-développeur',
        'entreprise' => 'Exacompta',
        'logo' => 'exacompta.webp',
        'ton' => 'violet',
        'taches' => [
            'Améliorations des sites web du groupe',
            'Création de nouvelles pages sous Magento 1 et 2',
            'Correction de bugs, notamment sur les exports de commandes',
        ],
        'technos' => ['Magento 1 et 2', 'Symfony'],
    ],
    [
        'periode' => '2018',
        'duree' => '3 mois',
        'poste' => 'Développeur web',
        'entreprise' => 'Écurie Production',
        'logo' => 'ecurie.webp',
        'resume' => 'Maintenance et refonte de contenus de sites WordPress',
    ],
    [
        'periode' => '2017',
        'duree' => '2 mois',
        'poste' => 'Développeur front-end',
        'entreprise' => 'Pelopia',
        'logo' => 'pelopia.webp',
        'resume' => "Refonte d'éléments et création de pages sur PrestaShop",
    ],
    [
        'periode' => '2016',
        'duree' => '3 mois',
        'poste' => 'Développeur front-end',
        'entreprise' => 'Alfredo',
        'logo' => 'alfredo.webp',
        'resume' => 'WordPress et extensions, responsive design avec Bootstrap',
    ],
];

$competences = [
    [
        'ton' => 'bleu',
        'titre' => 'Back-end',
        'elements' => [
            ['nom' => 'PHP orienté objet', 'niveau' => 4],
            ['nom' => 'MySQL', 'niveau' => 4],
            ['nom' => 'Symfony', 'niveau' => 3],
            ['nom' => 'Laravel', 'niveau' => 2],
        ],
    ],
    [
        'ton' => 'bleu',
        'titre' => 'Front-end',
        'elements' => [
            ['nom' => 'HTML 5 · CSS 3 · SASS', 'niveau' => 4],
            ['nom' => 'Bootstrap', 'niveau' => 4],
            ['nom' => 'JavaScript / jQuery', 'niveau' => 3],
            ['nom' => 'Vue.js', 'niveau' => 2],
            ['nom' => 'React', 'niveau' => 2],
        ],
    ],
    [
        'ton' => 'violet',
        'titre' => 'CMS',
        'elements' => [
            ['nom' => 'WordPress', 'niveau' => 3],
            ['nom' => 'CMS sur mesure · Twig', 'niveau' => 3],
            ['nom' => 'WooCommerce', 'niveau' => 3],
            ['nom' => 'Magento', 'niveau' => 2],
        ],
    ],
    [
        'ton' => 'violet',
        'titre' => 'Outils',
        'elements' => [
            ['nom' => 'Git', 'niveau' => 3],
            ['nom' => 'Docker', 'niveau' => 2],
            ['nom' => 'Photoshop', 'niveau' => 2],
            ['nom' => 'CI/CD (GitHub Actions)', 'niveau' => 2],
        ],
    ],
];

$formations = [
    ['periode' => '2018 – 2020', 'titre' => 'ECV Digital', 'texte' => 'Mastère spécialisé en développement web', 'logo' => 'ecv.webp'],
    ['periode' => '2016 – 2017', 'titre' => 'Université Paris 13', 'texte' => 'Licence 3 Informatique', 'logo' => 'up13.webp'],
    ['periode' => '2014 – 2016', 'titre' => 'Université Paris 13', 'texte' => 'DUT Informatique', 'logo' => 'up13.webp'],
];
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | Kevin Léonard, développeur full-stack PHP</title>
  <meta name="description" content="Portfolio de Kevin Léonard, développeur full-stack PHP : boutiques en ligne, sites sur mesure et outils métier.">
  <meta name="robots" content="noindex, follow">
  <link rel="icon" href="/images/logo.ico?v=2" type="image/x-icon">
  <link rel="stylesheet" href="/css/portfolio.css?v=<?= filemtime(__DIR__ . '/css/portfolio.css') ?>">
</head>
<body id="top">
<header class="entete">
  <a class="entete-logo" href="#top" aria-label="Kevin Léonard, haut de page">
    <span class="entete-logo-nom">Kevin</span>
    <span class="entete-logo-trait"></span>
  </a>
  <nav class="portfolio-menu" aria-label="Sections de la page">
    <a class="menu-lien" href="#projets">Projets</a>
    <a class="menu-lien" href="#parcours">Parcours</a>
  </nav>
</header>

<main>
  <section class="portfolio-presentation">
    <div class="portfolio-presentation-contenu">
      <img class="parcours-photo" src="/images/profil.webp" alt="Portrait de Kevin Léonard" width="400" height="351">
      <span class="parcours-surtitre">Portfolio</span>
      <h1 class="parcours-titre">Kevin Léonard, développeur <span class="mot-accent">full-stack</span> PHP.</h1>
      <p class="parcours-texte">Depuis plus de 5 ans, je crée des boutiques en ligne, des sites sur mesure et des outils métier, du design au code.</p>
      <ul class="portfolio-chiffres">
        <?php foreach ($chiffres as $chiffre): ?>
        <li class="portfolio-chiffre">
          <span class="portfolio-chiffre-valeur"><?= e($chiffre['valeur']) ?></span>
          <span class="portfolio-chiffre-libelle"><?= e($chiffre['libelle']) ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="parcours-liens">
        <a class="bouton" href="#projets">Voir mes projets</a>
        <?php if ($lien_malt !== ''): ?>
        <a class="bouton bouton-secondaire" href="<?= e($lien_malt) ?>" target="_blank" rel="noopener">Mon profil Malt</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="portfolio-section portfolio-projets" id="projets">
    <div class="portfolio-section-entete">
      <h2 class="parcours-section-titre">Projets</h2>
    </div>
    <ul class="projets-liste">
      <?php foreach ($projets_retenus as $cle): ?>
      <?php if (!isset($projets_par_cle[$cle])) { continue; } ?>
      <?php $projet = $projets_par_cle[$cle]; ?>
      <li class="projet">
        <div class="projet-image">
          <img src="/images/<?= e($projet['image']) ?>" alt="Capture du site <?= e($projet['nom']) ?>" width="800" height="500" loading="lazy">
          <span class="projet-statut projet-statut-<?= e($projet['statut']) ?>"><?= e($statuts[$projet['statut']]) ?></span>
        </div>
        <div class="projet-contenu">
          <h3 class="projet-titre"><?= e($projet['nom']) ?></h3>
          <p class="projet-texte"><?= e($projet['texte']) ?></p>
          <span class="projet-technos"><?= e($projet['technos']) ?></span>
          <?php if ($projet['adresse'] !== ''): ?>
          <a class="projet-lien" href="<?= e($projet['adresse']) ?>" target="_blank" rel="noopener"><?= e($projet['lien']) ?></a>
          <?php endif; ?>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="portfolio-section parcours-experiences" id="parcours">
    <h2 class="parcours-section-titre">Expériences</h2>
    <ul class="parcours-experiences-liste">
      <?php foreach ($experiences as $experience): ?>
      <?php
      $detaillee = !empty($experience['taches']);
      $classes = 'parcours-experience';
      if ($detaillee) {
          $classes .= ' parcours-experience-detaillee parcours-experience-' . $experience['ton'];
      }
      ?>
      <li class="<?= $classes ?>">
        <div class="parcours-experience-dates">
          <span class="parcours-experience-periode"><?= e($experience['periode']) ?></span>
          <span class="parcours-experience-duree"><?= e($experience['duree']) ?></span>
        </div>
        <div class="parcours-experience-contenu">
          <div class="parcours-experience-entete">
            <span class="parcours-logo"><img src="/images/<?= e($experience['logo']) ?>" alt="" width="104" height="104" loading="lazy"></span>
            <h3 class="parcours-experience-titre"><?= e($experience['poste']) ?> · <?= e($experience['entreprise']) ?></h3>
          </div>
          <?php if ($detaillee): ?>
          <ul class="parcours-experience-taches">
            <?php foreach ($experience['taches'] as $tache): ?>
            <li><?= e($tache) ?></li>
            <?php endforeach; ?>
          </ul>
          <ul class="parcours-experience-technos">
            <?php foreach ($experience['technos'] as $techno): ?>
            <li class="parcours-techno"><?= e($techno) ?></li>
            <?php endforeach; ?>
          </ul>
          <?php else: ?>
          <p class="parcours-experience-resume"><?= e($experience['resume']) ?></p>
          <?php endif; ?>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="parcours-competences">
    <h2 class="parcours-section-titre">Compétences</h2>
    <div class="parcours-groupes">
      <?php foreach ($competences as $groupe): ?>
      <div class="parcours-groupe parcours-groupe-<?= e($groupe['ton']) ?>">
        <h3 class="parcours-groupe-titre"><?= e($groupe['titre']) ?></h3>
        <ul class="parcours-groupe-liste">
          <?php foreach ($groupe['elements'] as $element): ?>
          <li class="parcours-element">
            <span class="parcours-element-nom"><?= e($element['nom']) ?></span>
            <span class="parcours-niveau" role="img" aria-label="Niveau : <?= e($niveaux[$element['niveau']]) ?>"><?= points_niveau($element['niveau']) ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
    <ul class="parcours-legende">
      <?php foreach ($niveaux as $niveau => $libelle): ?>
      <li><span class="parcours-niveau" aria-hidden="true"><?= points_niveau($niveau) ?></span><?= e($libelle) ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="parcours-details portfolio-formations">
    <div class="parcours-bloc">
      <h2 class="parcours-bloc-titre">Formations</h2>
      <ul class="parcours-bloc-liste">
        <?php foreach ($formations as $formation): ?>
        <li class="parcours-ligne">
          <span class="parcours-logo"><img src="/images/<?= e($formation['logo']) ?>" alt="" width="88" height="88" loading="lazy"></span>
          <div class="parcours-ligne-contenu">
            <span class="parcours-ligne-periode"><?= e($formation['periode']) ?></span>
            <h3 class="parcours-ligne-titre"><?= e($formation['titre']) ?></h3>
            <p class="parcours-ligne-texte"><?= e($formation['texte']) ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</main>

<footer class="pied-de-page">
  <div class="pied-de-page-contenu">
    <p class="pied-de-page-droits">© <?= date('Y') ?> Kevin Léonard</p>
    <nav class="pied-de-page-liens">
      <a class="pied-de-page-lien" href="https://github.com/kevin95670" target="_blank" rel="noopener">GitHub</a>
      <a class="pied-de-page-lien" href="https://www.linkedin.com/in/kevin-leonard95670/" target="_blank" rel="noopener">LinkedIn</a>
      <a class="pied-de-page-lien" href="/mentions-legales.php">Mentions légales</a>
      <a class="pied-de-page-haut" href="#top" aria-label="Retour en haut">
        <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12 19V5M5 12l7-7 7 7" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </nav>
  </div>
</footer>
</body>
</html>