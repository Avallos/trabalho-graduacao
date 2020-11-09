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
$id = $_POST["idv"];
$placa = $_POST["placa"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$tipoVeiculo = $_POST["tipoVeiculo"];
$ano = $_POST["ano"];


$sql = "UPDATE veiculos SET placa='$placa', marca='$marca', modelo='$modelo', tipoVeiculo='$tipoVeiculo', ano='$ano' WHERE id_veiculo='$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Veiculo atualizado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/veiculos.php';
                        });
                </script>";
        
        
    }else{
        echo "Error".$conn->error;
    }
    

?>
        </body>
</html>