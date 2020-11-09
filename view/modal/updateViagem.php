<!-- Edit Modal -->
          <div class="modal fade" id="viagemModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Viagem</h4>
                </div>
                <div class="modal-body">
                    <form action="../banco/updateViagem.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                        
                        <input type="hidden" id="id" name="id">
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="veiculo">Veiculo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="idv" class="form-control col-md-7 col-xs-12" name="idv" required="required" >
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
                            <select id="idf" class="form-control col-md-7 col-xs-12" name="idf" required="required" >
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataTermino">Data Término<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" id="dataTermino" name="dataTermino" required="required" class="form-control col-md-7 col-xs-12">
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
                          <button id="enviar" type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        <!-- Edit Modal -->

