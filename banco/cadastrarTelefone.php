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
$cliente = $_POST["cliente"];
$data = date("y-m-d");
        
        
$result = $conn->query("SELECT * FROM telefones WHERE numero='$numero';");
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
                        window.location.href='../view/cadastroTelefone.php';
                        });
                </script>";
}else{

if($cliente == "0"){
    
    echo "<script>
                swal({
                      title: 'Selecione o cliente',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroTelefone.php';
                        });
                </script>";
    
}else{

    $sql = "INSERT INTO telefones(numero, id_cliente, dataCriacao) VALUES ('$numero', '$cliente', '$data')" ;

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