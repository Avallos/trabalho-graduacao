<!-- Edit Modal -->
          <div class="modal fade" id="telefoneModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Atualizar Cliente</h4>
                </div>
                <div class="modal-body">
                  <form action="../banco/updateTelefone.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Informações</span>
                      
                      
                      <input id="idt" class="form-control col-md-7 col-xs-12" name="idt" required="required" type="hidden">

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

