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
                <h3>FUNCIONÁRIOS <small>Tabela de informações dos Funcionários.</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroFuncionario.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="funcionariotable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>id</th>
                          <th>Nome</th>
                          <th>CPF</th>
                          <th>Carteira de Trabalho</th>
                          <th>Data de Nascimento</th>
                          <th>Salário</th>
                          <th>Deletar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM funcionarios WHERE dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_funcionario; ?></td>
                                    <td><?php echo $obj->nomef; ?></td>
                                    <td><?php echo $obj->cpf; ?></td>
                                    <td><?php echo $obj->carteiraTrabalho; ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($obj->dataNascimento)); ?></td>
                                    <td><?php echo $obj->salario; ?></td>
                                    <td><center><button class="btn btn-success funbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletFuncionario(<?php echo $obj->id_funcionario ; ?>)"><i class="fa fa-close"></i></button></center></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Endereços </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroEnderecoFuncionario.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="endtable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>id</th>
                          <th>Nome</th>
                          <th>Rua</th>
                          <th>Bairro</th>
                          <th>Cidade</th>
                          <th>Estado</th>
                          <th>Numero</th>
                          <th>CEP</th>
                          <th>Deletar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM funcionarios INNER JOIN enderecosf ON funcionarios.id_funcionario = enderecosf.id_funcionario WHERE funcionarios.dataDel IS NULL AND enderecosf.dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_enderecof; ?></td>
                                    <td><?php echo $obj->nomef; ?></td>
                                    <td><?php echo $obj->rua; ?></td>
                                    <td><?php echo $obj->bairro; ?></td>
                                    <td><?php echo $obj->cidade; ?></td>
                                    <td><?php echo $obj->estado; ?></td>
                                    <td><?php echo $obj->numero; ?></td>
                                    <td><?php echo $obj->cep; ?></td>
                                    <td style="width: 15%;"><center><button class="btn btn-success endfunbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletEndereco(<?php echo $obj->id_enderecof ; ?>)"><i class="fa fa-close"></i></button></center></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Telefones </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroTelefoneFuncionario.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="fonetable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>id</th>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>Deletar</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM funcionarios INNER JOIN telefonesf ON funcionarios.id_funcionario = telefonesf.id_funcionario WHERE funcionarios.dataDel IS NULL AND telefonesf.dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_telefonef; ?></td>
                                    <td><?php echo $obj->nomef; ?></td>
                                    <td><?php echo $obj->numero; ?></td>
                                    <td><center><button class="btn btn-success telfunbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletTelefone(<?php echo $obj->id_telefonef ; ?>)"><i class="fa fa-close"></i></button></center></td>
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
      
        
        <?php 
            include("modal/updateFuncionarioModal.php");
            include("modal/updateEndFuncionario.php");
            include("modal/updateTelFuncionario.php");
        ?>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include("mask.php") ?>
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
            $('#fonetable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
    
        $(document).ready(function() {
            $('#endtable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
        
        $(document).ready(function() {
            $('#funcionariotable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
    </script>
      
    <script>
    function deletFuncionario(id) {
            swal({
              title: "Deseja realmente deletar este Funcionario?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delFuncionario.php?id='+ id;
              } else {
                
              }
            });
        }
        
    function deletEndereco(id) {
            swal({
              title: "Deseja realmente deletar este Endereço?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delEnderecoFuncionario.php?id='+ id;
              } else {

              }
            });
        }
        
    function deletTelefone(id) {
            swal({
              title: "Deseja realmente deletar este Telefone?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delTelefoneFuncionario.php?id='+ id;
              } else {

              }
            });
        }  
    </script>
      
    <script>
        
        $(document).ready(function(){
        $('.funbtn').on('click', function() {
            
            $('#updateFuncionarioModal').modal('show');
            
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
            
            console.log(data);
            
            $('#id').val(data[0]);
            $('#nome').val(data[1]);
            $('#cpf').val(data[2]);
            $('#carteiraTrabalho').val(data[3]);
            $('#dataNascimento').val(data[4]);
            $('#salario').val(data[5]);
        });
        
    });
        
    $(document).ready(function(){
        $('.endfunbtn').on('click', function() {
            
            $('#endfuncionariomodal').modal('show');
            
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
            
            console.log(data);
            
            $('#ide').val(data[0]);
            $('#cliente').val(data[1]);
            $('#rua').val(data[2]);
            $('#bairro').val(data[3]);
            $('#cidade').val(data[4]);
            $('#estado').val(data[5]);
            $('#numero').val(data[6]);
            $('#cep').val(data[7]);
        });
        
    });
        
    $(document).ready(function(){
        $('.telfunbtn').on('click', function() {
            
            $('#telfunmodal').modal('show');
            
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
            
            console.log(data);
            
            $('#idt').val(data[0]);
            $('#nome').val(data[1]);
            $('#telefone').val(data[2]);
        });
        
    });
      
      
    </script>
    

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>