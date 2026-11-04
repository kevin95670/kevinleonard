<?php
$titre_page = 'Parcours et CV - Kevin Léonard';
$titre_partage = 'Parcours et CV - Kevin Léonard';
$description_page = "Développeur full-stack PHP avec 5 ans d'expérience : expériences, compétences et formations. Téléchargez mon CV.";
$adresse_page = '/parcours.php';
include 'includes/entete.php';

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
    1 => 'Notions',
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
    [
        'ton' => 'vert',
        'titre' => 'Notions',
        'elements' => [
            ['nom' => 'Java', 'niveau' => 1],
            ['nom' => 'Android', 'niveau' => 1],
        ],
    ],
];

$formations = [
    ['periode' => '2018 – 2020', 'titre' => 'ECV Digital', 'texte' => 'Mastère spécialisé en développement web', 'logo' => 'ecv.webp'],
    ['periode' => '2016 – 2017', 'titre' => 'Université Paris 13', 'texte' => 'Licence 3 Informatique', 'logo' => 'up13.webp'],
    ['periode' => '2014 – 2016', 'titre' => 'Université Paris 13', 'texte' => 'DUT Informatique', 'logo' => 'up13.webp'],
];

$qualites = [
    ['titre' => 'Organisation', 'texte' => 'Je structure et priorise pour livrer des projets fiables, dans les délais.'],
    ['titre' => 'Adaptabilité', 'texte' => "Je m'intègre vite à de nouveaux environnements techniques et méthodes de travail."],
    ['titre' => 'Curiosité', 'texte' => "Toujours en veille, j'explore de nouvelles technologies pour élargir mes compétences."],
];
?>
<main>
  <section class="parcours-presentation">
    <div class="parcours-presentation-contenu">
      <span class="parcours-surtitre">Parcours · CV</span>
      <h1 class="parcours-titre">5 ans à construire des <span class="mot-accent">boutiques</span> et des outils métier.</h1>
      <p class="parcours-texte">Développeur full-stack PHP, formé en informatique puis en développement web, avec plusieurs années en autonomie complète.</p>
      <div class="parcours-liens">
        <a class="bouton" href="/documents/CV-Kevin-Leonard-developpeur-web.pdf" target="_blank" rel="noopener">Télécharger mon CV (PDF)</a>
        <a class="bouton bouton-secondaire" href="https://github.com/kevin95670" target="_blank" rel="noopener">GitHub</a>
        <a class="bouton bouton-secondaire" href="https://www.linkedin.com/in/kevin-leonard95670/" target="_blank" rel="noopener">LinkedIn</a>
      </div>
    </div>
  </section>

  <section class="parcours-experiences">
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
          <span class="parcours-experience-periode"><?= $experience['periode'] ?></span>
          <span class="parcours-experience-duree"><?= $experience['duree'] ?></span>
        </div>
        <div class="parcours-experience-contenu">
          <div class="parcours-experience-entete">
            <?php if (!empty($experience['logo'])): ?>
            <span class="parcours-logo"><img src="/images/<?= $experience['logo'] ?>" alt="" width="104" height="104" loading="lazy"></span>
            <?php endif; ?>
            <h3 class="parcours-experience-titre"><?= $experience['poste'] ?> · <?= $experience['entreprise'] ?></h3>
          </div>
          <?php if ($detaillee): ?>
          <ul class="parcours-experience-taches">
            <?php foreach ($experience['taches'] as $tache): ?>
            <li><?= $tache ?></li>
            <?php endforeach; ?>
          </ul>
          <ul class="parcours-experience-technos">
            <?php foreach ($experience['technos'] as $techno): ?>
            <li class="parcours-techno"><?= $techno ?></li>
            <?php endforeach; ?>
          </ul>
          <?php else: ?>
          <p class="parcours-experience-resume"><?= $experience['resume'] ?></p>
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
      <div class="parcours-groupe parcours-groupe-<?= $groupe['ton'] ?>">
        <h3 class="parcours-groupe-titre"><?= $groupe['titre'] ?></h3>
        <ul class="parcours-groupe-liste">
          <?php foreach ($groupe['elements'] as $element): ?>
          <li class="parcours-element">
            <span class="parcours-element-nom"><?= $element['nom'] ?></span>
            <span class="parcours-niveau" role="img" aria-label="Niveau : <?= $niveaux[$element['niveau']] ?>"><?= points_niveau($element['niveau']) ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
    <ul class="parcours-legende">
      <?php foreach ($niveaux as $niveau => $libelle): ?>
      <li><span class="parcours-niveau" aria-hidden="true"><?= points_niveau($niveau) ?></span><?= $libelle ?></li>
      <?php endforeach; ?>
    </ul>
    <p class="parcours-actuel">
      <span class="parcours-actuel-etiquette">En ce moment</span>
      <span>Je me forme au CI/CD pour automatiser les tests et les déploiements, et à React.</span>
    </p>
  </section>

  <section class="parcours-details">
    <div class="parcours-bloc">
      <h2 class="parcours-bloc-titre">Formations</h2>
      <ul class="parcours-bloc-liste">
        <?php foreach ($formations as $formation): ?>
        <li class="parcours-ligne">
          <?php if (!empty($formation['logo'])): ?>
          <span class="parcours-logo"><img src="/images/<?= $formation['logo'] ?>" alt="" width="88" height="88" loading="lazy"></span>
          <?php endif; ?>
          <div class="parcours-ligne-contenu">
            <span class="parcours-ligne-periode"><?= $formation['periode'] ?></span>
            <h3 class="parcours-ligne-titre"><?= $formation['titre'] ?></h3>
            <p class="parcours-ligne-texte"><?= $formation['texte'] ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="parcours-bloc">
      <h2 class="parcours-bloc-titre">Ma façon de travailler</h2>
      <ul class="parcours-bloc-liste">
        <?php foreach ($qualites as $qualite): ?>
        <li class="parcours-ligne">
          <div class="parcours-ligne-contenu">
            <h3 class="parcours-ligne-titre"><?= $qualite['titre'] ?></h3>
            <p class="parcours-ligne-texte"><?= $qualite['texte'] ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="invitation">
    <div class="invitation-bloc">
      <h2 class="invitation-titre">Un poste à pourvoir ? Écrivez-moi.</h2>
      <div class="invitation-actions">
        <a class="bouton" href="mailto:<?= $email_contact ?>"><?= $email_contact ?></a>
        <a class="bouton bouton-secondaire" href="https://www.linkedin.com/in/kevin-leonard95670/" target="_blank" rel="noopener">LinkedIn</a>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/pied-de-page.php'; ?>