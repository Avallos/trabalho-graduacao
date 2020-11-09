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


$numero = $_POST["telefone"];
$funcionario = $_POST["funcionario"];
$data = date("y-m-d");

$result = $conn->query("SELECT * FROM telefonesf WHERE numero='$numero';");
$rows = $result->num_rows;
    
if($rows >= "1"){
    echo "<script>
                swal({
                      title: 'Telefone já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroTelefoneFuncionario.php';
                        });
                </script>";
}else{

if($funcionario == "0"){
    
    echo "<script>
                swal({
                      title: 'Selecione o Funcionario',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroTelefoneFuncionario.php';
                        });
                </script>";
    
}else{

    $sql = "INSERT INTO telefonesf(numero, id_funcionario, dataCriacao) VALUES ('$numero', '$funcionario', '$data')" ;

        if($conn->query($sql)){
            echo "<script>
                    swal({
                          title: 'Telefone cadastrado com sucesso',
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