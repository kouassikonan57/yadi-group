<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../../../load_env.php';

load_env(__DIR__ . '/../../../.env'); // ajuste si besoin selon l'arborescence

class PHP_Email_Form
{

  public $to;
  public $from_name;
  public $from_email;
  public $subject;
  public $ajax = false;
  public $smtp = false;
  private $messages = array();

  public function add_message($content, $label = '', $length = 0)
  {
    if (!empty($content)) {
      $message = $label ? "<strong>$label:</strong> " : "";
      $message .= nl2br(htmlspecialchars($content)) . "<br>";
      $this->messages[] = $message;
    }
  }

  public function send()
  {
    $mail = new PHPMailer(true);

    try {
      if ($this->smtp) {
        $mail->isSMTP();
        $mail->Host = $this->smtp['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $this->smtp['username'];
        $mail->Password = $this->smtp['password'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $this->smtp['port'];
      }

      $mail->setFrom($this->from_email, $this->from_name);
      $mail->addAddress($this->to);
      $mail->addReplyTo($this->from_email);
      $mail->isHTML(true);
      $mail->Subject = $this->subject;
      $mail->Body = implode("\n", $this->messages);

      $mail->send();
      return 'OK';
    } catch (Exception $e) {
      return 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
}
