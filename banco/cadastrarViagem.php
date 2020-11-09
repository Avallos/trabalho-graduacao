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
$cliente = $_POST["cliente"];
$endereco = $_POST["endereco"];
$veiculo = $_POST["veiculo"];
$motorista = $_POST["motorista"];
$dataInicio = $_POST["dataInicio"];
$kmTotal = $_POST["kmTotal"];
$pedagio = $_POST["pedagio"];
$combustivel = $_POST["combustivel"];
$valor = $_POST["valor"];

$pedagio = str_replace(',', '', $pedagio);
$combustivel = str_replace(',', '', $combustivel);
$valor = str_replace(',', '', $valor);
        
        

$sql = "INSERT INTO viagens(id_veiculo, id_funcionario, id_destino, kmTotal, dataInicio, id_cliente, pedagio, combustivel, valor) VALUES ('$veiculo', '$motorista', '$endereco', '$kmTotal', '$dataInicio', '$cliente', '$pedagio' , '$combustivel' , '$valor')" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Viagem cadastrada com sucesso',
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