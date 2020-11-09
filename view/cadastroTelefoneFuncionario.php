<?php 
include("validar.php");
?>
<!DOCTYPE html>
<html lang="en">
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
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    
    <?php include("navbar.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastro Telefones</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form action="../banco/cadastrarTelefone.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cliente">Cliente <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="funcionario" class="form-control col-md-7 col-xs-12" name="cliente" required="required" >
                                    <option value="0">Selecione o Cliente</option>
                                    <?php
                                        $cliente = ("SELECT nomef, id_funcionario FROM funcionarios ORDER BY nomef ASC;");
                                        $resultado = $conn->query($cliente);
                                        while ($obj = $resultado->fetch_object()){  ?>
                                            <option value="<?php echo $obj->id_funcionario; ?>"><?php echo $obj->nomef; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="telefone" class="fone form-control col-md-7 col-xs-12" name="telefone" required="required" type="text">
                            </div>
                        </div>
                        
                        
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="enviar" type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include("footer.php"); ?> 
	
  </body>
</html>