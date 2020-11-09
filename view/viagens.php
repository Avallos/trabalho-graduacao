<?php 
include("validar.php");
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    
    <?php include("navbar.php"); ?>  

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php include("info.php"); ?>
            <div class="page-title">
              <div class="title_left">
                <h3>VIAGENS <small>Tabela de informações das Viagens.</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroViagem.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="mototable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>id</th>
                          <th hidden>idv</th>
                          <th hidden>idf</th>
                          <th>Cliente</th>
                          <th>Destino</th>
                          <th>Veiculo</th>
                          <th>Motorista</th>
                          <th>Data de Inicio</th>
                          <th>Data de Temino</th>
                          <th>Km Rodado</th>
                          <th>Pedágio R$</th>
                          <th>Combustivel R$</th>
                          <th>Valor R$</th>
                          <th>Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $viagem = ("SELECT * FROM viagens INNER JOIN funcionarios ON viagens.id_funcionario = funcionarios.id_funcionario INNER JOIN veiculos ON viagens.id_veiculo = veiculos.id_veiculo INNER JOIN clientes ON viagens.id_cliente = clientes.id INNER JOIN enderecos ON viagens.id_destino = enderecos.id_endereco;");
                                $resultado = $conn->query($viagem);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_viagem; ?></td>
                                    <td hidden><?php echo $obj->id_veiculo; ?></td>
                                    <td hidden><?php echo $obj->id_funcionario; ?></td>
                                    <td><?php echo $obj->nome; ?></td>
                                    <td><?php echo $obj->endereco; ?>, <?php echo $obj->bairro; ?>, <?php echo $obj->cidade; ?>, <?php echo $obj->estado; ?>, <?php echo $obj->numero; ?></td>
                                    <td><?php echo $obj->placa; ?></td>
                                    <td><?php echo $obj->nomef; ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($obj->dataInicio)); ?></td>  
                                    <td><?php if(date('d/m/Y', strtotime($obj->dataTermino)) == "01/01/1970"){
                                        echo "<button class='btn btn-success' type='button' onClick='dataTermino($obj->id_viagem)'>Finalizar</button>";
                                        }else {echo date('d/m/Y', strtotime($obj->dataTermino));} ?></td> 
                                    <td><?php echo $obj->kmTotal; ?></td> 
                                    <td><?php echo number_format($obj->pedagio); ?></td> 
                                    <td><?php echo number_format($obj->combustivel); ?></td> 
                                    <td style="width: 10%;"><?php echo number_format($obj->valor);?></td>
                                    <td style="width: 10%;"><button class="btn btn-success viagembtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletViagem(<?php echo $obj->id_viagem ; ?>)"><i class="fa fa-close"></i></button></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>                
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Tranjato
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    <?php include("modal/updateViagem.php"); ?>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include("mask.php"); ?>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script>
        $(document).ready(function() {
            $('#mototable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
        
        function deletViagem(id) {
            swal({
              title: "Deseja realmente deletar esta Viagem?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delViagem.php?id='+ id;
              } else {

              }
            });
        }
        
        function dataTermino(id) {
           location.href = '../banco/dataTermino.php?id='+ id;
        }
        
        $(document).ready(function(){
            $('.viagembtn').on('click', function() {

                $('#viagemModal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                console.log(data);

                $('#id').val(data[0]);
                $('#idv').val(data[1]);
                $('#idf').val(data[2]);
                $('#dataInicio').val(data[7]);
                $('#dataTermino').val(data[8]);
                $('#kmTotal').val(data[9]);
                $('#pedagio').val(data[10]);
                $('#combustivel').val(data[11]);
                $('#valor').val(data[12]);
            });

        });
    </script>
    

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>