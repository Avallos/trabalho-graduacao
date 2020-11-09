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
$funcionario = $_POST["funcionario"];
$numero = $_POST["numero"];
$data = date("y-m-d");
        
$result = $conn->query("SELECT * FROM enderecosf WHERE rua='$endereco' AND cep='$cep' AND numero='$numero';");
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
                        window.location.href='../view/cadastroEnderecoFuncionario.php';
                        });
                </script>";
}else{

if($funcionario == "0"){
    
    echo "<script>
                swal({
                      title: 'Por favor selecione o Funcionario',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroEnderecoFuncionario.php';
                        });
                </script>";
    
}else{

$sql = "INSERT INTO enderecosf(rua, bairro, cidade, estado, cep, numero, id_funcionario, dataCriacao) VALUES ('$endereco', '$bairro', '$cidade', '$estado', '$cep', '$numero', '$funcionario', '$data')" ;

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
                        window.location.href='../view/funcionarios.php';
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