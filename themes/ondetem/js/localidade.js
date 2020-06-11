if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

(function($) {
       Drupal.behaviors.localidade = {
         attach: function(context, settings) {
			 
			 if (Drupal.settings.localidade) {
			
					var conteudo_pais = $( "#edit-field-my-country-value option:selected" ).text();
					var conteudo_estado = $( "#edit-field-my-state-value option:selected" ).text();
					
					var pais = $("#edit-field-my-country-value");
					var estado = $("#edit-field-my-state-value");
					var cidade = $("#edit-field-my-city-value");
				
                    // Como os combos vem totoalmente preenchidos
					// Ajusta o conteúdo na primeira carga conforme o que está selecionado em País.
                    // Retirando os estados e cidades que não pertencem ao país. 					
                    var exclui_estado;
					var exclui_cidade;
                										
					for (var i = 0; i < Drupal.settings.localidade.length; i++) {
						if  ((Drupal.settings.localidade[i]['pais'] != conteudo_pais)  && (conteudo_pais != "Todos" )) {  
								exclui_estado = Drupal.settings.localidade[i]['estado'];
								exclui_cidade = Drupal.settings.localidade[i]['cidade'];
								$('#edit-field-my-state-value option[value="' + exclui_estado + '"]').remove();
								$('#edit-field-my-city-value option[value="' + exclui_cidade + '"]').remove();
							}
							
						if  ((Drupal.settings.localidade[i]['estado'] != conteudo_estado)  && (conteudo_estado != "Todos" )) {  
								exclui_cidade = Drupal.settings.localidade[i]['cidade'];
								$('#edit-field-my-city-value option[value="' + exclui_cidade + '"]').remove();
							}
							
					}	
									
					// TROCA PAÍS
					pais.on('change', function() {
                        
                        // guarda conteúdo do filtro
						var conteudo_pais = $( "#edit-field-my-country-value option:selected" ).text();
						var conteudo_estado = $( "#edit-field-my-state-value option:selected" ).text();
						var conteudo_cidade = $( "#edit-field-my-city-value option:selected" ).text();
							
						// Limpa filtro estado e cidade						
						$('#edit-field-my-state-value option').remove();
						$('#edit-field-my-city-value option').remove();

						// Adiciona a palavra Todos a estado e cidade
                        $('#edit-field-my-city-value').append('<option value>Todos</option>');
						$('#edit-field-my-state-value').append('<option value>Todos</option>');

						var estado;
						var cidade;
						var estadoaux;
						var cidadeaux;
											
						for(var i = 0; i < Drupal.settings.localidade.length; i++) {
						    
						if  ((Drupal.settings.localidade[i]['pais'] == conteudo_pais)  || (conteudo_pais == "Todos" )) {   
								
								//Carrega Estado
								estado = '<option value="' + Drupal.settings.localidade[i]['estado'] +'">'+Drupal.settings.localidade[i]['estado'] + '</option>';
								
								if (estado != estadoaux) {
									$('#edit-field-my-state-value').append(estado);
									//console.log(Drupal.settings.localidade[i]['estado'])
								}	
								estadoaux = estado;
															
								//Carrega cidade
								cidade = '<option value="' + Drupal.settings.localidade[i]['cidade'] +'">'+Drupal.settings.localidade[i]['cidade'] + '</option>';
								if (cidade != cidadeaux) {
									$('#edit-field-my-city-value').append(cidade);
									//console.log(Drupal.settings.localidade[i]['cidade'])
								}	
								cidadeaux = cidade;
							}	
						}
			
					});
					
					// TROCA ESTADO
					
					estado.on('change', function() {
							
   						var conteudo_pais = $( "#edit-field-my-country-value option:selected" ).text();						
						var conteudo_estado = $( "#edit-field-my-state-value option:selected" ).text();
						var conteudo_cidade = $( "#edit-field-my-city-value option:selected" ).text();
						
							$('#edit-field-my-city-value option').remove();
							$('#edit-field-my-city-value').append('<option value selected="selected">Todos</option>');
							
							var cidade;
							var cidadeaux;
												
							for(var i = 0; i < Drupal.settings.localidade.length; i++) {
								
								if  ((Drupal.settings.localidade[i]['estado'] == conteudo_estado) || (conteudo_estado == "Todos" ) ) {   
								    									
									//Carrega cidade
									cidade = '<option value="' + Drupal.settings.localidade[i]['cidade'] +'">'+Drupal.settings.localidade[i]['cidade'] + '</option>';
					
									if ( ( (cidade != cidadeaux) && (conteudo_estado != "Todos" ) ) || 
									     ( (cidade != cidadeaux) && (conteudo_estado == "Todos" ) && (Drupal.settings.localidade[i]['pais'] == conteudo_pais ) ) ||
										 ( (cidade != cidadeaux) && (conteudo_estado == "Todos" ) && (conteudo_pais == "Todos") ) )
									    {
										$('#edit-field-my-city-value').append(cidade);
									}
							
									cidadeaux = cidade;
								}	
							
							}

					});
					
		        }	
			}
		 
        }
	})(jQuery);
	
