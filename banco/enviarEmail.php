<?php

	require 'sendgrid-php/vendor/autoload.php';

	$sendgrid = new SendGrid("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");
	$email = new SendGrid\Email();

	$email->addTo("douglas.golf@hotmail.com")
	      ->setFrom("tranjato@gmail.com")
	      ->setSubject("Recuperar Senha Tranjato.")
	      ->setHtml("<p>Sua senha é: ****</p>");

	if($sendgrid->send($email)){
        echo "foi";
    }

?>
