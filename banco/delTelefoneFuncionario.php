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

$id = $_GET['id'];
$data = date("y-m-d");


$sql = "UPDATE telefonesf SET dataDel='$data' WHERE id_telefonef = '$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Telefone Deletado',
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
    



    
?>
        </body>
</html>