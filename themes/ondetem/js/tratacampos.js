if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

(function($) {
       Drupal.behaviors.customToggler = {
         attach: function(context) {		
					var pais = $("#edit-field-pais-value"); 
					var estado = $("#edit-field-estado-value");
					var troca_estado = $(".form-item-field-estado-value");
					//var dia = $( ".date-display-single" ).html();		
					
					pais.on('change', function() {
						
						var conteudo_pais = $( "#edit-field-pais-value option:selected" ).text();
						var conteudo_estado = $( "#edit-field-estado-value option:selected" ).text();
						
						if ((conteudo_pais != "Todos" ) && (conteudo_pais != "Brasil" ) && (conteudo_estado == "Todos" ) ){
							troca_estado.hide();
							}
						else {
							troca_estado.show();
							}	
						});
					
					//$(".date-display-single").html(function(index, text) {
					//return text.replace("<br><br><br>","");
				    //});
			}
        }
})(jQuery);