<?php

// Inialize session
session_start();

// Include database connection settings
	require_once('conexao.php');


	$login = $_POST["login"];
	$senha =  $_POST["senha"];

	$login = ("SELECT * FROM login INNER JOIN funcionarios ON login.id_funcionario = funcionarios.id_funcionario WHERE login.login ='$login' AND login.senha = '$senha'"); 

	$result = $conn->query($login);


	if ($result->num_rows == 1) {
		/* fetch object array */
	    while ($obj = $result->fetch_object()) {
	    	
	    		$_SESSION["nome"] = $obj->nomef;
	    		$_SESSION["cpf"] = $obj->cpf;
	    		$_SESSION["carteiraTrabalho"] = $obj->carteiraTrabalho;
	    		$_SESSION["dataNascimento"] = $obj->dataNascimento;
				
	    	}
        
        echo "<script>
                location.href='../view/clientes.php';
            </script>";
    }else{
        
        echo "<script>
                alert('Login ou Senha incorreto');
                location.href='../view/index.php';
            </script>";
    }
        

	
?>