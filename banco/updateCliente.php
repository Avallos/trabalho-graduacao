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
$email = $_POST["email"];
$razaoSocial = $_POST["razaoSocial"];
$cpf = $_POST["cpf"];
$cnpj = $_POST["cnpj"];
$data = date("y-m-d");


$sql = "UPDATE clientes SET nome='$nome',razaoSocial='$razaoSocial', cpf='$cpf', cnpj='$cnpj', email='$email' WHERE id='$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Cliente atualizado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/clientes.php';
                        });
                </script>";
        
        
    }else{
        echo "Error".$conn->error;
    }
    

?>
        </body>
</html>