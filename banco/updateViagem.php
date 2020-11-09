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
$veiculo = $_POST["idv"];
$funcionario = $_POST["idf"];
$dataInicio = $_POST["dataInicio"];
$dataTermino = $_POST["dataTermino"];
$kmTotal = $_POST["kmTotal"];
$pedagio = $_POST["pedagio"];
$combustivel = $_POST["combustivel"];
$valor = $_POST["valor"];
        
$pedagio = str_replace(',', '', $pedagio);
$combustivel = str_replace(',', '', $combustivel);
$valor = str_replace(',', '', $valor);


$sql = "UPDATE viagens SET id_veiculo='$veiculo', id_funcionario='$funcionario', kmTotal='$kmTotal', dataInicio='$dataInicio', dataTermino='$dataTermino', pedagio='$pedagio', combustivel='$combustivel', valor='$valor' WHERE id_viagem='$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Viagem atualizado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/viagens.php';
                        });
                </script>";
        
        
    }else{
        echo "Error".$conn->error;
    }
    

?>
        </body>
</html>