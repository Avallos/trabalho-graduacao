<!-- Edit Modal -->
          <div class="modal fade" id="updateModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Cliente</h4>
                </div>
                <div class="modal-body">
                  <form action="../banco/updateCliente.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                      
                        <input id="id" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="id"  required="required" type="hidden">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nome" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="nome"  required="required" type="text">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razaoSocial">Razão Social <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="razaoSocial" name="razaoSocial" required="required" class="form-control col-md-7 col-xs-12">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnpj">CNPJ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="cnpj" name="cnpj" required="required" data-validate-length-range="8,20" class="cnpj form-control col-md-7 col-xs-12">
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

