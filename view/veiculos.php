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
            <div class="page-title">
              <div class="title_left">
                <h3>VEICULOS <small>Tabela de informações dos Veiculos.</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações </h2>
                      
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroVeiculo.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="veiculotable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>idv</th>
                          <th>Placa</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th>Tipo do Veiculo</th>
                          <th>Ano</th>
                          <th>Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM veiculos WHERE dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_veiculo; ?></td>
                                    <td><?php echo $obj->placa; ?></td>
                                    <td><?php echo $obj->marca; ?></td>
                                    <td><?php echo $obj->modelo; ?></td>
                                    <td><?php echo $obj->tipoVeiculo; ?></td>
                                    <td><?php echo $obj->ano; ?></td>  
                                    <td><center><button class="btn btn-success veiculobtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletVeiculo(<?php echo $obj->id_veiculo ; ?>)"><i class="fa fa-close"></i></button></center></td>  
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
      
      <?php 
            include("modal/updateVeiculo.php");
            
        ?>
      

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
            $('#veiculotable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
        
        $(document).ready(function(){
            $('.veiculobtn').on('click', function() {

                $('#veiculoModal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                console.log(data);

                $('#idv').val(data[0]);
                $('#placa').val(data[1]);
                $('#marca').val(data[2]);
                $('#modelo').val(data[3]);
                $('#tipoVeiculo').val(data[4]);
                $('#ano').val(data[5]);
            });

        });
        
        function deletVeiculo(id) {
            swal({
              title: "Deseja realmente deletar este Veiculo?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delVeiculo.php?id='+ id;
              } else {

              }
            });
        }
    </script>
    

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>