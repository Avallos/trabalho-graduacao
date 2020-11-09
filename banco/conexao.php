<?php 

$host = "localhost";
$user = "root";
$senha = "";
$dbname = "tranjato";

$conn = new mysqli($host, $user, $senha, $dbname);
if($conn){


}
if(mysqli_connect_errno()){

	die("não foi possivel conectar no banco de dados".$conn->error);
	exit();
}

	mysqli_set_charset($conn, "utf8");

?>
