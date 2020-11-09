<!-- Edit Modal -->
          <div class="modal fade" id="updateFuncionarioModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Funcionario</h4>
                </div>
                <div class="modal-body">
                  <form action="../banco/updateFuncionario.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                      
                        <input name="id" id="id" type="hidden">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input placeholder="Nome Sobrenome" id="nome" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="nome"  required="required" type="text">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpf">CPF <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="cpf" name="cpf" required="required" class="cpf form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="carteiraTrabalho">PIS <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="carteiraTrabalho" name="carteiraTrabalho" required="" class="cdt form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataNascimento">Data de Nascimento <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="date" id="dataNascimento" name="dataNascimento" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salario">Salário <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="salario" name="salario" required="required" class="money form-control col-md-7 col-xs-12">
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

