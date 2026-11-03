<?php
$adresse_reception = 'kevin-leonard@orange.fr';
$adresse_expediteur = 'noreply@kevinleonard.fr';

$demandes_autorisees = [
    'Site vitrine',
    'Site e-commerce',
    'Site sur mesure',
    'Landing page',
    "Refonte d'un site existant",
    "Correction d'un site existant",
    'Référencement (SEO)',
    "Maintenance d'un site",
    'Autre',
];

$reponse_json = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json');

function terminer(bool $succes, bool $reponse_json): never
{
    if ($reponse_json) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['succes' => $succes]);
    } else {
        header('Location: /contact.php?envoi=' . ($succes ? 'ok' : 'erreur'));
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    terminer(false, $reponse_json);
}

// champ piège : seuls les robots le remplissent
if (!empty($_POST['piege'])) {
    terminer(true, $reponse_json);
}

$demande = trim($_POST['demande'] ?? '');
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    !in_array($demande, $demandes_autorisees, true)
    || $nom === '' || mb_strlen($nom) > 100
    || !filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 150
    || $message === '' || mb_strlen($message) > 5000
) {
    terminer(false, $reponse_json);
}

// retire les retours à la ligne pour empêcher l'injection d'en-têtes
$nom_propre = str_replace(["\r", "\n"], ' ', $nom);

$sujet = '=?UTF-8?B?' . base64_encode('Kael : demande de devis') . '?=';

$demande_html = htmlspecialchars($demande, ENT_QUOTES, 'UTF-8');
$nom_html = htmlspecialchars($nom_propre, ENT_QUOTES, 'UTF-8');
$email_html = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$message_html = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$corps = <<<HTML
<div style="background:#f4f6fb;padding:24px;font-family:Arial,Helvetica,sans-serif;color:#0c1426;">
  <div style="max-width:560px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;">
    <div style="background:#070b16;padding:20px 24px;">
      <p style="margin:0;color:#38b6ff;font-size:13px;letter-spacing:1px;text-transform:uppercase;">Kael</p>
      <h1 style="margin:6px 0 0;color:#e8ecf7;font-size:20px;">Nouvelle demande de devis</h1>
    </div>
    <div style="padding:24px;">
      <p style="margin:0 0 4px;color:#6b7690;font-size:13px;">Type de projet</p>
      <p style="margin:0 0 18px;font-size:16px;font-weight:bold;">$demande_html</p>
      <p style="margin:0 0 4px;color:#6b7690;font-size:13px;">Nom</p>
      <p style="margin:0 0 18px;font-size:16px;">$nom_html</p>
      <p style="margin:0 0 4px;color:#6b7690;font-size:13px;">Email</p>
      <p style="margin:0 0 18px;font-size:16px;"><a href="mailto:$email_html" style="color:#3b82f6;">$email_html</a></p>
      <p style="margin:0 0 8px;color:#6b7690;font-size:13px;">Message</p>
      <div style="background:#f4f6fb;border-left:4px solid #38b6ff;padding:14px 16px;font-size:15px;line-height:1.6;">$message_html</div>
    </div>
  </div>
</div>
HTML;

$en_tetes = [
    'From' => "Site Kevin Léonard <$adresse_expediteur>",
    'Reply-To' => $email,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=UTF-8',
];

$envoye = mail($adresse_reception, $sujet, $corps, $en_tetes);

terminer($envoye, $reponse_json);