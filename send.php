<?php
  require 'vendor/autoload.php';
  
  Dotenv::load(__DIR__);

  define("SENDGRID_USERNAME", $_ENV['SENDGRID_USERNAME']);
  define("SENDGRID_PASSWORD", $_ENV['SENDGRID_PASSWORD']); 

  $sendgrid   = new SendGrid(SENDGRID_USERNAME, SENDGRID_PASSWORD);
  $mail       = new SendGrid\Mail();

  $recipients = array("alpha@mailinator.com", "beta@mailinator.com", "zeta@mailinator.com");
  $names      = array("Alpha", "Beta", "Zeta");

  $mail-> setFrom("from@mailinator.com")->
          setSubject('[sendgrid-php-batch-email]')->
          setTos($recipients)->
          addSubstitution("%name%", $names)->
          setText("Hey %name, we have an email for you")->
          setHtml("<h1>Hey %name%, we have an email for you</h1>");

  $result = $sendgrid->smtp->send($mail);

  echo $result;
?>
