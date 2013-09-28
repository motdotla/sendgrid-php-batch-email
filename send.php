<?php
  require 'vendor/autoload.php';
  
  Dotenv::load(__DIR__);

  define("SENDGRID_USERNAME", $_ENV['SENDGRID_USERNAME']);
  define("SENDGRID_PASSWORD", $_ENV['SENDGRID_PASSWORD']); 
  define("TO", $_ENV['TO']);

  $sendgrid   = new SendGrid(SENDGRID_USERNAME, SENDGRID_PASSWORD);
  $mail       = new SendGrid\Mail();

  $mail-> addTo(TO)->
          setFrom(TO)->
          setSubject('[send-film] delivery')->
          setText('Email has been delivered');

  $result = $sendgrid->smtp->send($mail);

  echo $result;
?>
