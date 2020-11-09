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
                    <h2>Cadastro Veiculos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form action="../banco/cadastrarVeiculo.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="placa">Placa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="placa" class="placa form-control col-md-7 col-xs-12" name="placa"  required="required" type="text">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marca">Marca <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input placeholder="Ford" type="text" id="marca" name="marca" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">Modelo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input placeholder="FH460" type="text" id="modelo" name="modelo" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoVeiculo">Tipo do Veiculo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select required="required" name="tipoVeiculo" id="tipoVeiculo" class="form-control col-md-7 col-xs-12">
                                <option selected="" value="">Selecione o Tipo de Veiculo</option>
                                <option value="Carroceria">Carroceria</option>
                                <option value="Báu">Báu</option>
                                <option value="Refrigerado">Refrigerado</option>
                              </select>
                            </div>
                          </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ano">Ano <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input placeholder="1999" type="text" id="ano" name="ano" required="required" class="ano form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                    
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
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