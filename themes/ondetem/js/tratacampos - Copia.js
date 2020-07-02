if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

(function ($) {
  Drupal.behaviors.trocaestado = {
    attach: function (context, settings) {
			 
			 	$("#edit-field-pais-value").change(function(){
		
				var pais = $("#edit-field-pais-value");
				var estado = $("#edit-field-estado-value");
				var troca_estado = $(".form-item-field-estado-value");
				
				var conteudo_pais = $( "#edit-field-pais-value" ).val();
				var conteudo_estado = $( "#edit-field-estado-value" ).val();
				
				//if ((conteudo_pais != "Todos" ) && (conteudo_pais != "Brasil" ) && (conteudo_estado == "Todos" ) ){
				if  ((conteudo_pais == "Brasil")  || (conteudo_pais == "") ){
					troca_estado.show();
					$("#edit-field-estado-value").focus();
					}
				else {			
					troca_estado.hide();
					$("#edit-field-cidade-value").focus();
					
					}	
				});
			
			
			} //attach:
		 
        } // behaviors.
})(jQuery);