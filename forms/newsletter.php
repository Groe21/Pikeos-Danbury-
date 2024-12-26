<?php
  /**
  * Requiere la biblioteca "PHP Email Form"
  * La biblioteca "PHP Email Form" está disponible solo en la versión pro de la plantilla
  * La biblioteca debe ser subida a: vendor/php-email-form/php-email-form.php
  * Para más información y ayuda: https://bootstrapmade.com/php-email-form/
  */

  // Reemplaza contact@example.com con tu dirección de correo electrónico real
  $receiving_email_address = 'guerreroemilio001@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( '¡No se puede cargar la biblioteca "PHP Email Form"!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['email'];
  $contact->from_email = $_POST['email'];
  $contact->subject = "Nueva Suscripción: " . $_POST['email'];

  // Descomenta el siguiente código si deseas usar SMTP para enviar correos electrónicos. Necesitas ingresar tus credenciales SMTP correctas
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['email'], 'Correo Electrónico');

  echo $contact->send();
?>
