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

$endereco = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$cliente = $_POST["cliente"];
$numero = $_POST["numero"];
$data = date("y-m-d");

$result = $conn->query("SELECT * FROM enderecos WHERE endereco='$endereco' AND cep='$cep' AND numero='$numero';");
$rows = $result->num_rows;
        
if($rows >= "1"){
    echo "<script>
                swal({
                      title: 'Endereço já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroEndereco.php';
                        });
                </script>";
}else{

if($cliente == "0"){
    
    echo "<script>
                swal({
                      title: 'Por favor selecione o Cliente',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroEndereco.php';
                        });
                </script>";
    
}else{

$sql = "INSERT INTO enderecos(endereco, bairro, cidade, estado, cep, numero, id_cliente, dataCriacao) VALUES ('$endereco', '$bairro', '$cidade', '$estado', '$cep','$numero', '$cliente', '$data')" ;

    if($conn->query($sql)){
        echo "<script>
                swal({
                      title: 'Endereço cadastrado com sucesso',
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
}

}
    
?>
        </body>
</html>