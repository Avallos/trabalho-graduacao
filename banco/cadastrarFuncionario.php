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

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$carteiraTrabalho = $_POST["carteiraTrabalho"];
$dataNascimento = $_POST["dataNascimento"];
$salario = $_POST["salario"];
$data = date("y-m-d");
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$numero = $_POST["numero"];
$telefone = $_POST["telefone"];
        
$result = $conn->query("SELECT * FROM funcionarios WHERE cpf='$cpf';");
$rows = $result->num_rows;
        
if($rows >= "1"){
    echo "<script>
                swal({
                      title: 'Funcionario já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroFuncionario.php';
                        });
                </script>";
}else{

$sql = "INSERT INTO funcionarios(nomef, cpf, carteiraTrabalho, dataNascimento, salario, dataCriacao) VALUES ('$nome', '$cpf', '$carteiraTrabalho', '$dataNascimento', '$salario', '$data')" ;

    if($conn->query($sql)){
        
        $sqllast = "select id_funcionario FROM funcionarios ORDER BY id_funcionario DESC LIMIT 1";
        $ultimo = $conn->query($sqllast);
        $last = $ultimo->fetch_object();
        $id = $last->id_funcionario;
        
        $sqlendereco = "INSERT INTO enderecosf(rua, bairro, cidade, estado, cep, numero, id_funcionario, dataCriacao) VALUES ('$rua', '$bairro', '$cidade', '$estado', '$cep', '$numero', '$id', '$data')";
        $conn->query($sqlendereco);
        
        $sqltelefone = "INSERT INTO telefonesf(numero, id_funcionario, dataCriacao) VALUES ('$telefone', '$id', '$data')" ;
        $conn->query($sqltelefone);
        
        echo "<script>
                swal({
                      title: 'Funcionario cadastrado com sucesso',
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
        
    ?>
        </body>
</html>