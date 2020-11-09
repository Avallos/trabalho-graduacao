<?php
include("../banco/conexao.php");

$resultado = mysqli_query($conn, "SELECT valor, pedagio, combustivel FROM viagens");
$linhas = mysqli_num_rows($resultado);
$valor = "0";
$pedagio = "0";
$combustivel = "0";
 
    while($linhas = mysqli_fetch_array($resultado)){
        $valor += $linhas['valor'];
        $pedagio += $linhas['pedagio'];
        $combustivel += $linhas['combustivel'];
        
    }

    $custoTotal = $pedagio+$combustivel;
    echo $custoTotal;
    $liquida = $valor-$custoTotal;
?>


<div class="row top_tiles" style="margin: 10px 0;">
    <div class="col-md-3 col-sm-3 col-xs-6 tile">
        <span>Custos Pedágio</span>
        <h2><?php echo number_format($pedagio); ?></h2>
        <span class="sparkline_two" style="height: 160px;">
            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
          </span> 
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 tile">
        <span>Custos Combustivel</span>
        <h2><?php echo number_format($combustivel); ?></h2>
        <span class="sparkline_two" style="height: 160px;">
              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
          </span> 
      </div>
        <div class="col-md-3 col-sm-3 col-xs-6 tile">
        <span>Receita Bruta</span>
        <h2><?php echo number_format($valor); ?></h2>
        <span class="sparkline_two" style="height: 160px;">
              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
          </span> 
      </div>
        <div class="col-md-3 col-sm-3 col-xs-6 tile">
        <span>Receita Liquida</span>
        <h2 <?php if($liquida <= "0") echo "style='color: red;'" ?>><?php echo number_format($liquida); ?></h2>
        <span class="sparkline_two" style="height: 160px;">
              <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
          </span> 
      </div>

</div>