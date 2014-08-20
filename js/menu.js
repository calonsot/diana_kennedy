		$(document).ready(function () {
			
			//Mostramos u ocultamos el panel de busqueda avanzada
			$('.active-links').click(function () {			
				$('#suggestions').fadeIn(1).html("limpia");
				$('#suggestions').fadeOut(1);
		        if ($('#signin-dropdown').is(":visible")) {
		            $('#signin-dropdown').hide()
					$('#session').removeClass('active');
		        } else {
		            $('#signin-dropdown').show()
					$('#session').addClass('active');
		        }
				return false;
		    });
			
			$('#signin-dropdown').click(function(e) {		
		        e.stopPropagation();
		    });
		    
		    $(document).click(function() {    	
		        $('#signin-dropdown').hide();
				$('#session').removeClass('active');		
		    });

			//Al escribir dentro del input con id="service"
			$('#ingrediente').keypress(function(e){
			    //Obtenemos el value del input
			    var service = $(this).val();
			    var dataString = 'ingrediente='+service+String.fromCharCode(e.keyCode);	      

			    //Le pasamos el valor del input al ajax
			    $.ajax({
			        type: "POST",
			        url: "autocomplete.php",
			        data: dataString,
			        success: function(data) {

			            //Escribimos las sugerencias que nos manda la consulta
			            $('#suggestions').fadeIn(1000).html(data);
			            //Al hacer click en alguna de las sugerencias
			            $('.suggestelement').click(function(e)
			            {		            
				            //Obtenemos la id unica de la sugerencia pulsada	                    
				            var id = $(this).attr('id');	                    
				            //Editamos el valor del input con data de la sugerencia pulsada
				            $('#ingrediente').val($('#'+id).attr('data'));
				            //Hacemos desaparecer el resto de sugerencias
				            $('#suggestions').fadeOut(100);
				            //Mostramos
				            //alert('Has seleccionado el '+id+' '+$('#'+id).attr('data'));
							return false;
			            });              
			        }
			    });
			});

		});