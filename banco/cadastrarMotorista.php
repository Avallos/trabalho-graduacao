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


$cnh = $_POST["cnh"];
$vencimentoCnh = $_POST["vencimentoCnh"];
$funcionario = $_POST["funcionario"];


$result = $conn->query("SELECT * FROM motoristas WHERE id_funcionario = '$funcionario';");
$rows = $result->num_rows;

if($rows >= "1"){
    echo "<script>
                swal({
                      title: 'Motorista já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroMotorista.php';
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
                        window.location.href='../view/cadastroMotorista.php';
                        });
                </script>";
    
    }else{

    $sql = "INSERT INTO motoristas(id_funcionario, cnh, vencimentoCnh) VALUES ('$funcionario', '$cnh', '$vencimentoCnh')" ;

        if($conn->query($sql)){
            echo "<script>
                swal({
                      title: 'Motorista cadastrado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/motoristas.php';
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