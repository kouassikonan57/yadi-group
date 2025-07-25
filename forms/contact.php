<?php
$receiving_email_address = 'Groupe@yadi.ci'; // email direct

if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  include( $php_email_form );
} else {
  die( 'Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];
$contact->to = $receiving_email_address;

$contact->smtp = array(
  'host' => getenv('SMTP_HOST'),
  'username' => getenv('SMTP_USERNAME'),
  'password' => getenv('SMTP_PASSWORD'),
  'port' => getenv('SMTP_PORT')
);

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

echo $contact->send();
?>
