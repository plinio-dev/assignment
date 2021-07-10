<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  $numerodiospiti = $_POST['numerodiospiti'];

  try{
    $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'x.dvotion.x@gmail.com'; // Gmail address which you want to use as SMTP server
       $mail->Password = '---------'; // Gmail address Password
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
       $mail->Port = '587';

       $mail->setFrom('x.dvotion.x@gmail.com'); // Gmail address which you used as SMTP server
       $mail->addAddress('v.motta@makemark.it'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Messaggio di prova per assignment';
    $mail->Body = "<h3>Data del checkin : $checkin <br>Data del checkout: $checkout <br>Numero di ospiti : $numerodiospiti</h3>";

    $mail->send();
    $alert = '<div class="alert-msg">
                <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
