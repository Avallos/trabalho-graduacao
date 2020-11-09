<?php
include("conexao.php");

$emailUser = $_POST["email"];

$result = $conn->query("SELECT senha FROM login WHERE email = '$emailUser'");
$rows = $result->num_rows;

    if($rows >= "1"){
        $obj = $result->fetch_object();
        $senha = $obj->senha;
        
        require 'sendgrid-php/vendor/autoload.php';

        $sendgrid = new SendGrid("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");
        $email = new SendGrid\Email();

        $email->addTo($emailUser)
              ->setFrom("tranjato@gmail.com")
              ->setSubject("Recuperar Senha Tranjato.")
              ->setHtml("<p>Sua senha é: </p>". $senha);

        if($sendgrid->send($email)){
            echo "<script> location.href='../view/avisoSenha.php'; </script>";
        }
      

    }else{
        
        echo "<script>
                alert('Email não Cadastrado.');
                location.href='../view/recuperarSenha.php';
            </script>";
        
    }

?>