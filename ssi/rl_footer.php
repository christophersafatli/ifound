  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="js/out/jquery-2.1.0.min.js"></script> 
  <script src="js/out/jquery-ui.min.js"></script>
  <script src="js/out/jquery.idealforms.js"></script>
 
  <script>

    $('form.idealforms').idealforms({

      silentLoad: false,

      rules: {
        'username': 'required username ajax',
        'email': 'required email ajax',
        'password': 'required pass',
        'confirmpass': 'required equalto:password',
        'date': 'required date',
        'phone': 'required phone',
      },

      errors: {
        'username': {
          ajaxError: 'Username not available'
        },
        'email': {
          ajaxError: 'Email not available'
        },
      },
	
	// Email activation
      onSubmit: function(invalid, e) {
        e.preventDefault();
        $.ajax( {
	      type: "POST",
	      url: $('#frmInputData').attr( 'action' ),
	      data: $('#frmInputData').serialize(),
	      success: function( response ) {
		       $('#invalid')
	          .show()
	          .toggleClass('valid', ! invalid)
	          .text(invalid ? (invalid +' invalid fields') : ' An email will be sent for activation !');
	      }
	    });
	             
      }
    });

    $('form.idealforms').find('input, select, textarea').on('change keyup', function() {
      $('#invalid').hide();
    });

    $('.prev').click(function(){
      $('.prev').show();
      $('form.idealforms').idealforms('prevStep');
    });
    $('.next').click(function(){
      $('.next').show();
      $('form.idealforms').idealforms('nextStep');
    });
   
  </script>
  
</body>
</html>