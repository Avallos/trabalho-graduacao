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
$email = $_POST["email"];
$razaoSocial = $_POST["razaoSocial"];
$cpf = $_POST["cpf"];
$cnpj = $_POST["cnpj"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$numero = $_POST["numero"];
$telefone = $_POST["telefone"];
$data = date("y-m-d");


$result = $conn->query("SELECT * FROM clientes WHERE cpf='$cpf' OR cnpj='$cnpj';");
$rows = $result->num_rows;
        
if($rows >= "1"){
    echo "<script>
                swal({
                      title: 'Cliente já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroCliente.php';
                        });
                </script>";
}else{

$sql = "INSERT INTO clientes(nome, razaoSocial, cpf, cnpj, email, dataCriacao) VALUES ('$nome', '$razaoSocial', '$cpf', '$cnpj', '$email', '$data')" ;

    if($conn->query($sql)){
        
        $sqllast = "select id FROM clientes ORDER BY id DESC LIMIT 1";
        $ultimo = $conn->query($sqllast);
        $last = $ultimo->fetch_object();
        $id = $last->id;
        
        $sqlendereco = "INSERT INTO enderecos(endereco, bairro, cidade, estado, cep, numero, id_cliente, dataCriacao) VALUES ('$rua', '$bairro', '$cidade', '$estado', '$cep', '$numero', '$id', '$data')";
        $conn->query($sqlendereco);
        
        $sqltelefone = "INSERT INTO telefones(numero, id_cliente, dataCriacao) VALUES ('$telefone', '$id', '$data')" ;
        $conn->query($sqltelefone);
        
        echo "<script>
                swal({
                      title: 'Cliente cadastrado com sucesso',
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


    
?>
        </body>
</html>