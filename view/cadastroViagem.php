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
                    <h2>Cadastro Viagens </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form action="../banco/cadastrarViagem.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cliente">Cliente <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select onChange="getStates(this);" id="cliente" class="form-control col-md-7 col-xs-12" name="cliente" required="required" >
                                    <option value="0">Selecione o Cliente</option>
                                    <?php
                                        $getCliente = $_GET['getCliente'];
                                        $cliente = ("SELECT nome, id FROM clientes WHERE dataDel IS NULL ORDER BY nome ASC;");
                                        $clienteresultado = $conn->query($cliente);
                                        while ($obj = $clienteresultado->fetch_object()){  ?>
                                            <option <?php if ($getCliente==$obj->id){ echo "SELECTED";} ?> value="<?php echo $obj->id;?>"><?php echo $obj->nome; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Endereco">Endereço <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="endereco" class="form-control col-md-7 col-xs-12" name="endereco" required="required" >
                                    <option value="0">Selecione o Endereço</option>
                                    <?php
                                        
                                        
                                        $cliente = ("SELECT * FROM enderecos WHERE id_cliente ='$getCliente';");
                                        $clienteresultado = $conn->query($cliente);
                                        while ($obj = $clienteresultado->fetch_object()){  ?>
                                            <option value="<?php echo $obj->id_endereco;?>"><?php echo $obj->endereco; ?>, <?php echo $obj->bairro; ?>, <?php echo $obj->cidade; ?>, <?php echo $obj->estado; ?>, <?php echo $obj->numero; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <?php if(isset($getCliente)){ ?>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="veiculo">Veiculo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="veiculo" class="form-control col-md-7 col-xs-12" name="veiculo" required="required" >
                                    <option value="0">Selecione o Veiculo</option>
                                    <?php
                                        $veiculo = ("SELECT id_veiculo, placa FROM veiculos ORDER BY id_veiculo ASC;");
                                        $veiculoresultado = $conn->query($veiculo);
                                        while ($obj = $veiculoresultado->fetch_object()){  ?>
                                            <option value="<?php echo $obj->id_veiculo; ?>"><?php echo $obj->placa; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motorista">Motorista <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="motorista" class="form-control col-md-7 col-xs-12" name="motorista" required="required" >
                                    <option value="0">Selecione o Motorista</option>
                                    <?php
                                        $funcionario = ("SELECT * FROM funcionarios INNER JOIN motoristas ON funcionarios.id_funcionario = motoristas.id_funcionario ORDER BY nomef ASC;");
                                        $funcionarioresultado = $conn->query($funcionario);
                                        while ($obj = $funcionarioresultado->fetch_object()){  ?>
                                            <option value="<?php echo $obj->id_funcionario; ?>"><?php echo $obj->nomef; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataInicio">Data Inicio<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" id="dataInicio" name="dataInicio" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kmTotal">Km Percorrido<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="kmTotal" name="kmTotal" required="required" class="km form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pedagio">Custo Pedágio<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="pedagio" name="pedagio" required="required" class="money2 form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataInicio">Custo Combustivel<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="combustivel" name="combustivel" required="required" class="money2 form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor">Valor Cobrado<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="valor" name="valor" required="required" class="money2 form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="enviar" type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                      </div>
                        <?php } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      
      
      <?php include("footer.php"); ?>
      
      <Script Language="JavaScript"> 
        function getStates(what) { 
           if (what.selectedIndex != '') { 
              var cliente = what.value; 
              document.location=('cadastroViagem.php?getCliente=' + cliente); 
           } 
        } 
      </Script>
	
  </body>
</html>