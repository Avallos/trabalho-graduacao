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


        $placa = $_POST["placa"];
        $modelo = $_POST["modelo"];
        $tipoVeiculo = $_POST["tipoVeiculo"];
        $ano = $_POST["ano"];
        $marca = $_POST["marca"];


        $result = $conn->query("SELECT * FROM veiculos WHERE placa = '$placa';");
        $rows = $result->num_rows;

        if($rows >= "1"){
            echo "<script>
                swal({
                      title: 'Veiculo já cadastrado',
                      icon: 'error',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/cadastroVeiculo.php';
                        });
                </script>";
        }else{

            $sql = "INSERT INTO veiculos(placa, modelo, tipoVeiculo, ano, marca) VALUES ('$placa', '$modelo', '$tipoVeiculo', '$ano', '$marca')" ;

                if($conn->query($sql)){
                    echo "<script>
                swal({
                      title: 'Veiculo cadastrado com sucesso',
                      icon: 'success',
                      buttons: {
                      confirm: 'Ok!'
                      },
                    })
                    .then((ok) => {
                        window.location.href='../view/veiculos.php';
                        });
                </script>";
                }else{
                    echo "Error".$conn->error;
                }


        }

        ?>
    </body>
</html>