<?php 
session_start();
if(!isset($_SESSION["nome"])){
		header("location: index.php");
		}
include("../banco/conexao.php");
?>