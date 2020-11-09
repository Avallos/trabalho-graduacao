<?php

include("conexao.php");
$id_viagem = $_GET['id'];
$data = date("y-m-d");


$sql = "UPDATE viagens SET dataTermino='$data' WHERE id_viagem='$id_viagem'" ;

if($conn->query($sql)){
    
    echo "<script>window.location.href='../view/viagens.php'; </script>";
}



?>