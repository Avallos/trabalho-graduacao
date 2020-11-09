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
                <h3>CLIENTES <small>Tabela de informações dos clientes.</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informações </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="cadastroCliente.php"><i class="fa fa-plus btn btn-success"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div style="overflow: auto;" class="x_content">
                    <table id="clientetable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th hidden>id</th>
                          <th>Nome</th>
                          <th>Razão Social</th>
                          <th>CPF</th>
                          <th>CNPJ</th>
                          <th>E-Mail</th>
                          <th>Data Criação</th>
                          <th>Ação</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM clientes WHERE dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                if($resultado == "0"){
                                    echo 'hfghhfh';
                                }
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id; ?></td>
                                    <td><?php echo $obj->nome; ?></td>
                                    <td><?php echo $obj->razaoSocial; ?></td>
                                    <td><?php echo $obj->cpf; ?></td>
                                    <td><?php echo $obj->cnpj; ?></td>
                                    <td><?php echo $obj->email; ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($obj->dataCriacao)); ?></td>
                                    <td><center><button class="btn btn-success editbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletCliente(<?php echo $obj->id ; ?>)"><i class="fa fa-close"></i></button></center></td>
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
                      <li><a href="cadastroEndereco.php"><i class="fa fa-plus btn btn-success"></i></a>
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
                          <th>Ação</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr style= "white-space: nowrap;">
                            <?php
                                $cliente = ("SELECT * FROM clientes INNER JOIN enderecos ON clientes.id = enderecos.id_cliente WHERE clientes.dataDel IS NULL AND enderecos.dataDel IS NULL ;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_endereco; ?></td>
                                    <td><?php echo $obj->nome; ?></td>
                                    <td><?php echo $obj->endereco; ?></td>
                                    <td><?php echo $obj->bairro; ?></td>
                                    <td><?php echo $obj->cidade; ?></td>
                                    <td><?php echo $obj->estado; ?></td>
                                    <td><?php echo $obj->numero; ?></td>
                                    <td><?php echo $obj->cep; ?></td>
                                    <td style="width: 15%;"><button class="btn btn-success endbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletEndereco(<?php echo $obj->id ; ?>)"><i class="fa fa-close"></i></button></td>
                                    
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
                      <li><a href="cadastroTelefone.php"><i class="fa fa-plus btn btn-success"></i></a>
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
                                $cliente = ("SELECT * FROM clientes INNER JOIN telefones ON clientes.id = telefones.id_cliente WHERE clientes.dataDel IS NULL AND telefones.dataDel IS NULL;");
                                $resultado = $conn->query($cliente);
                                while ($obj = $resultado->fetch_object()){  ?>
                                    <td hidden><?php echo $obj->id_telefone; ?></td>
                                    <td><?php echo $obj->nome; ?></td>
                                    <td><?php echo $obj->numero; ?></td>
                                    <td><center><button class="btn btn-success telbtn" type="button"><i class="fa fa-edit"></i></button><button class="btn btn-danger" type="button" onClick="deletTelefone(<?php echo $obj->id_telefone ; ?>)"><i class="fa fa-close"></i></button></center></td>
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
            include("modal/updateClienteModal.php");
            include("modal/updateEnderecoModal.php");  
            include("modal/updateTelefoneModal.php");  
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
            $('#clientetable').DataTable( {
                "language": {
                    "decimal":        "",
                    "emptyTable":     "Tabela Vazia",
                    "info":           "Motrando _START_ de _END_ de _TOTAL_ Entradas",
                    "infoEmpty":      "Mostrando 0 de 0 de 0 entradas",
                    "infoFiltered":   "(filtrado um total de _MAX_ entradas)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrando _MENU_ entradas",
                    "loadingRecords": "Carregando...",
                    "processing":     "Processando...",
                    "search":         "Procurar:",
                    "zeroRecords":    "Nada Encontrado",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "ultimo",
                        "next":       "Proximo",
                        "previous":   "Anterior"
                    }
                },
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            } );
        } );
        
        
    </script>
    
    <script>
    function deletCliente(id) {
            swal({
              title: "Deseja realmente deletar este Cliente?",
              icon: "warning",
              buttons: ["Não", "Sim"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                location.href = '../banco/delCliente.php?id='+ id;
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
                location.href = '../banco/delEndereco.php?id='+ id;
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
                location.href = '../banco/delTelefone.php?id='+ id;
              } else {

              }
            });
        }  
    </script>
      
    <script>
    $(document).ready(function(){
        $('.editbtn').on('click', function() {
            
            $('#updateModal').modal('show');
            
                $tr = $(this).closest('tr');
                
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
            
            console.log(data);
            
            $('#id').val(data[0]);
            $('#nome').val(data[1]);
            $('#razaoSocial').val(data[2]);
            $('#cpf').val(data[3]);
            $('#cnpj').val(data[4]);
            $('#email').val(data[5]);
        });
        
    });
    
        
    $(document).ready(function(){
        $('.endbtn').on('click', function() {
            
            $('#enderecoModal').modal('show');
            
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
        $('.telbtn').on('click', function() {
            
            $('#telefoneModal').modal('show');
            
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