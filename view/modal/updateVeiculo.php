<!-- Edit Modal -->
          <div class="modal fade" id="veiculoModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Veiculo</h4>
                </div>
                <div class="modal-body">
                    <form action="../banco/updateVeiculo.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                        
                        <input id="idv" name="idv" type="hidden">

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

