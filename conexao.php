<?php 

$host = "localhost";
$user = "techbo56_douglas";
$senha = "tg_douglas";
$dbname = "techbo56_tranjato";

$conn = new mysqli($host, $user, $senha, $dbname);
if($conn){


}
if(mysqli_connect_errno()){

	die("não foi possivel conectar no banco de dados".$conn->error);
	exit();
}

	mysqli_set_charset($conn, "utf8");

?>
