<?php
// Charger le fichier .env
require_once __DIR__ . '/../load_env.php';
load_env(__DIR__ . '/../.env');

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

// Récupération de l’email soumis
$email = $_POST['email'] ?? '';

// Sécurité : valider le format d’email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'Invalid email address';
  exit;
}

// Informations d’envoi
$contact->to = getenv('SMTP_TO');
$contact->from_name = $email;
$contact->from_email = $email;
$contact->subject = "New Subscription: $email";

// Configuration SMTP
$contact->smtp = array(
  'host' => getenv('SMTP_HOST'),
  'username' => getenv('SMTP_USERNAME'),
  'password' => getenv('SMTP_PASSWORD'),
  'port' => getenv('SMTP_PORT')
);

// Corps du message
$contact->add_message($email, 'New subscriber email');

// Réponse
$result = $contact->send();

// Répondre avec "OK" pour validate.js
if (strpos($result, 'successfully') !== false) {
  echo 'OK';
} else {
  echo $result;
}
?>
