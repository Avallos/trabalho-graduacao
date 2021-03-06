<!-- footer content -->
        <footer>
          <div class="pull-right">
            Tranjato
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

<!-- Mask -->
    <script type="text/javascript" src="../build/mask/dist/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
          $('.date').mask('00/00/0000');
          $('.time').mask('00:00:00');
          $('.date_time').mask('00/00/0000 00:00:00');
          $('.cep').mask('00000-000');
          $('.cnh').mask('00000000000');
          $('.cdt').mask('000.00000.00-0');
          $('.ano').mask('0000');
          $('.placa').mask('SSS-0000');
          $('.house').mask('00000');
          $('.phone').mask('0000-0000');
          $('.phone_with_ddd').mask('(00) 0000-0000');
          $('.phone_us').mask('(000) 000-0000');
          $('.mixed').mask('AAA 000-S0S');
          $('.cpf').mask('000.000.000-00', {reverse: true});
          $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
          $('.money').mask('000.000.000.000.000,00', {reverse: true});
          $('.money2').mask("#,##0.00", {reverse: true});
          $('.km').mask("#.##", {reverse: true});
          $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
              'Z': {
                pattern: /[0-9]/, optional: true
              }
            }
          });
          $('.ip_address').mask('099.099.099.099');
          $('.percent').mask('##0,00%', {reverse: true});
          $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
          $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
          $('.fallback').mask("00r00r0000", {
              translation: {
                'r': {
                  pattern: /[\/]/,
                  fallback: '/'
                },
                placeholder: "__/__/____"
              }
            });
          $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
        
        var SPMaskBehavior = function (val) {
          return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
          onKeyPress: function(val, e, field, options) {
              field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

        $('.fone').mask(SPMaskBehavior, spOptions);
     </script>