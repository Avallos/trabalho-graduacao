<!-- Edit Modal -->
          <div class="modal fade" id="endfuncionariomodal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Funcionario</h4>
                </div>
                <div class="modal-body">
                  <form action="../banco/updateEndFuncionario.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                        
                        <input id="ide" name="ide" type="hidden">
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rua">Rua <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input placeholder="13 de Maio" id="rua" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="rua"  required="required" type="text">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input placeholder="Conceição" type="text" id="bairro" name="bairro" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade">Cidade <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input placeholder="Campinas" type="text" id="cidade" name="cidade" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select required="required" name="estado" id="estado" class="form-control col-md-7 col-xs-12">
                                <option selected="" value="">Selecione o Estado</option>
                                <option value="Acre">Acre</option>
                                <option value="Alagoas">Alagoas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Maranhão">Maranhão</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Pernambuco">Pernambuco</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Tocantins">Tocantins</option>
                              </select>
                            </div>
                          </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Numero <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input placeholder="99999" type="text" id="numero" name="numero" required="required" class="house form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="cep" name="cep" required="required" class="cep form-control col-md-7 col-xs-12">
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

