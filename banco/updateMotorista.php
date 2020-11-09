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
$id = $_POST["idm"];
$cnh = $_POST["cnh"];
$vencimentoCnh = $_POST["vencimentoCnh"];


$sql = "UPDATE motoristas SET cnh='$cnh', vencimentoCnh ='$vencimentoCnh' WHERE id_motorista='$id'" ;

    if($conn->query($sql)){
        
        echo "<script>
                swal({
                      title: 'Motorista atualizado com sucesso',
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
    

?>
        </body>
</html>