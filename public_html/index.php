<?php
$titre_page = 'Kevin Léonard - Développeur web full-stack PHP et freelance';
$titre_partage = 'Kevin Léonard - Développeur web full-stack PHP';
$description_page = "Développeur full-stack PHP avec plus de 5 ans d'expérience. Disponible en CDI et pour des missions freelance : création, refonte et correction de sites web.";
$adresse_page = '/';
include 'includes/entete.php';
include 'includes/projets-donnees.php';

$cles_accueil = ['dream-and-swim', 'petite-source', 'piscinelle', 'footinho', 'sigma', 'rolling-deck'];
$projets_par_cle = array_column($projets, null, 'cle');
$projets_accueil = array_filter(array_map(fn($cle) => $projets_par_cle[$cle] ?? null, $cles_accueil));

$blocs_chiffres = [
    [
        'ton' => 'bleu',
        'titre' => 'Parcours',
        'chiffres' => [
            ['valeur' => '5+', 'libelle' => "Années d'expérience"],
            ['valeur' => '6', 'libelle' => 'Entreprises : stages, alternance, CDI'],
            ['valeur' => '20+', 'libelle' => 'Sites réalisés : en entreprise, pour des clients, en perso'],
        ],
    ],
    [
        'ton' => 'violet',
        'titre' => "Ce que j'ai réalisé",
        'chiffres' => [
            ['valeur' => '10+', 'libelle' => 'Sites vitrines sur mesure'],
            ['valeur' => '4', 'libelle' => 'Sites WordPress'],
            ['valeur' => '4', 'libelle' => 'Boutiques en ligne'],
            ['valeur' => '1', 'libelle' => 'Espace client'],
        ],
    ],
];

$accroches = [
    [
        'surtitre' => 'Vous recrutez ?',
        'titre' => 'Un développeur full-stack, en full remote ou autour de Cherbourg.',
        'texte' => "À l'aise en équipe comme en autonomie, je m'intègre vite et je livre.",
        'lien' => 'Voir mon parcours →',
        'adresse' => '/parcours.php',
    ],
    [
        'surtitre' => 'Vous avez un projet ?',
        'titre' => 'Un site à créer, à refaire ou à corriger ?',
        'texte' => 'Un seul interlocuteur, du premier échange à la mise en ligne, partout en France.',
        'lien' => 'Voir les services et tarifs →',
        'adresse' => '/services.php',
    ],
];
?>
<main>
  <section class="home-presentation">
    <div class="home-presentation-contenu">
      <svg class="home-orbe" width="132" height="132" viewBox="0 0 132 132" aria-hidden="true">
        <defs><linearGradient id="orbe" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#3B82F6"/><stop offset="1" stop-color="#38B6FF"/></linearGradient></defs>
        <ellipse cx="66" cy="66" rx="58" ry="22" fill="none" stroke="url(#orbe)" stroke-width="3" transform="rotate(-35 66 66)"/>
        <ellipse cx="66" cy="66" rx="58" ry="22" fill="none" stroke="url(#orbe)" stroke-width="3" transform="rotate(35 66 66)"/>
        <ellipse cx="66" cy="66" rx="58" ry="22" fill="none" stroke="url(#orbe)" stroke-width="3" transform="rotate(90 66 66)"/>
        <text x="66" y="76" text-anchor="middle" font-family="monospace" font-weight="700" font-size="30" fill="#7CC8FF">&lt;/&gt;</text>
        <circle cx="14" cy="50" r="5" fill="#2EE6A6"/>
        <circle cx="112" cy="96" r="5" fill="#A56BFF"/>
      </svg>
      <div class="home-pastilles">
        <span class="etiquette <?= $disponibilite_classe ?>"><span class="etiquette-point"></span><?= $disponibilite_texte ?></span>
        <span class="home-pastille-vert">CDI · Missions freelance</span>
      </div>
      <h1 class="home-titre">Kevin<br><span class="mot-accent">Léonard</span></h1>
      <span class="home-metier">Développeur full-stack PHP</span>
      <p class="home-intro">Bonjour, je suis Kevin. Mon parcours m'a progressivement mené vers l'informatique, puis vers la création de sites web. Un domaine en perpétuelle évolution, où il y a toujours quelque chose à apprendre : c'est devenu ma passion et mon objectif professionnel.</p>
      <p class="home-intro">Développeur full-stack PHP depuis plus de 5 ans, j'ai fait de cette curiosité mon métier. Aujourd'hui, je cherche un poste en CDI ou des missions freelance pour créer ou corriger des sites web.</p>
      <div class="home-actions">
        <a class="bouton" href="/projets.php">Voir mes projets</a>
        <a class="bouton bouton-secondaire" href="/services.php">Travailler avec moi</a>
      </div>
    </div>
  </section>

  <section class="home-chiffres">
    <?php foreach ($blocs_chiffres as $bloc): ?>
    <div class="home-chiffres-bloc home-chiffres-bloc-<?= $bloc['ton'] ?>">
      <span class="home-chiffres-titre"><?= $bloc['titre'] ?></span>
      <ul class="home-chiffres-liste">
        <?php foreach ($bloc['chiffres'] as $chiffre): ?>
        <li class="home-chiffre">
          <span class="home-chiffre-valeur"><?= $chiffre['valeur'] ?></span>
          <span class="home-chiffre-libelle"><?= $chiffre['libelle'] ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </section>

  <section class="home-accroches">
    <?php foreach ($accroches as $accroche): ?>
    <div class="home-accroche">
      <span class="home-accroche-surtitre"><?= $accroche['surtitre'] ?></span>
      <h2 class="home-accroche-titre"><?= $accroche['titre'] ?></h2>
      <p class="home-accroche-texte"><?= $accroche['texte'] ?></p>
      <a class="home-lien" href="<?= $accroche['adresse'] ?>"><?= $accroche['lien'] ?></a>
    </div>
    <?php endforeach; ?>
  </section>

  <div class="home-projets-entete">
    <h2 class="home-section-titre">Ce que j'ai construit</h2>
    <a class="home-lien" href="/projets.php">Tous les projets →</a>
  </div>

  <ul class="projets-liste">
    <?php foreach ($projets_accueil as $projet): ?>
    <li class="projet">
      <div class="projet-image">
        <img src="/images/<?= $projet['image'] ?>" alt="Capture du site <?= $projet['nom'] ?>" width="800" height="500" loading="lazy">
        <span class="projet-statut projet-statut-<?= $projet['statut'] ?>"><?= $statuts[$projet['statut']] ?></span>
      </div>
      <div class="projet-contenu">
        <h3 class="projet-titre"><?= $projet['nom'] ?></h3>
        <p class="projet-texte"><?= $projet['texte'] ?></p>
        <span class="projet-technos"><?= $projet['technos'] ?></span>
        <?php if ($projet['adresse'] !== ''): ?>
        <a class="projet-lien" href="<?= $projet['adresse'] ?>" target="_blank" rel="noopener"><?= $projet['lien'] ?></a>
        <?php endif; ?>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>

  <section class="invitation">
    <div class="invitation-bloc">
      <h2 class="invitation-titre">Un projet, un poste ? Discutons-en.</h2>
      <a class="bouton" href="/contact.php">Me contacter →</a>
    </div>
  </section>
</main>
<?php include 'includes/pied-de-page.php'; ?>