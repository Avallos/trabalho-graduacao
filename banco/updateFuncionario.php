<!DOCTYPE html>
<html>
    <head>
        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    
    <body style="background-color: #73879C;">
<?php 

include("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$carteiraTrabalho = $_POST["carteiraTrabalho"];
$dataNascimento = $_POST["dataNascimento"];
$salario = $_POST["salario"];



$sql = "UPDATE funcionarios SET nomef='$nome', cpf='$cpf', carteiraTrabalho='$carteiraTrabalho', dataNascimento='$dataNascimento', salario='$salario' WHERE id_funcionario='$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Funcionario atualizado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/funcionarios.php';
                        });
                </script>";
        
        
    }else{
        echo "Error".$conn->error;
    }
    

?>
        </body>
</html>