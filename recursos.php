<?php include('menu.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
    	$( 'body' ).responsiveVideo();
    	
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
</script>

			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
						<h2>Recursos</h2>
				</header>
                
                
                
                <h3>Videos C<span style="font-variant:small-caps; font-size:120%">onabio</span></h3>
                         
                    <div class="row double">
						<div class="6u">
							<div id="miniaturas">
								<ul style="padding-left:20px">
								<li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>En busca de los ingredientes y las recetas tradicionales</strong> (20 min | 30 min)</li>
                                <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>Rancho Quinta Diana, árboles y cultivos</strong> (20 min | 27 min)</li>
                                <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>El chile, pilar de la comida tradicional mexicana</strong> (20 min | 25 min)</li>
								</ul>
                                <a href="//www.youtube.com/embed/n6Vr1DUtcpg?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/n6Vr1DUtcpg/default.jpg"></a>
                                <a href="//www.youtube.com/embed/RTNVUllmYFU?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/RTNVUllmYFU/default.jpg"></a>
                                <a href="//www.youtube.com/embed/0YmCo-Wsms8?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/0YmCo-Wsms8/default.jpg"></a>
                                <a href="//www.youtube.com/embed/ftdgaewlQt4?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/ftdgaewlQt4/default.jpg"></a>
                                <a href="//www.youtube.com/embed/blV-jV5Uk2E?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/blV-jV5Uk2E/default.jpg"></a>
                                <a href="//www.youtube.com/embed/n6Vr1DUtcpg?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/n6Vr1DUtcpg/default.jpg"></a> 
						  </div>
						</div>
						<div class="6u">
                          <div id="contenedor">
								<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
						  	</div>
                            
                           <script type="text/javascript">
						  function cambio (url){
							  document.getElementById('contenedor').innerHTML='<iframe width="400" height="225" src="' +  url + '" frameborder="0" allowfullscreen></iframe>';
							  return false;
						  }
						  </script>
						</div>
					</div>
                    
                    <p><hr></p>

				
                    	<h3>Otros videos</h3>
                         
                    <div class="row double">
						<div class="6u">
							<div id="miniaturas2">
								<p><strong>Cocina y cultura. Diana Kennedy</strong></p>
                                <a href="//www.youtube.com/embed/RTNVUllmYFU?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/RTNVUllmYFU/default.jpg"></a>
                                <a href="//www.youtube.com/embed/0YmCo-Wsms8?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/0YmCo-Wsms8/default.jpg"></a>
                                <a href="//www.youtube.com/embed/ftdgaewlQt4?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/ftdgaewlQt4/default.jpg"></a>
                                <a href="//www.youtube.com/embed/blV-jV5Uk2E?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/blV-jV5Uk2E/default.jpg"></a>     
						  </div>
						</div>
						<div class="6u">
                          <div id="contenedor2">
								<iframe width="400" height="225" src="http://www.youtube.com/embed/RTNVUllmYFU?rel=0" frameborder="0" allowfullscreen></iframe>	
						  </div>
                            
                           <script type="text/javascript">
						  function cambio2 (url){
							  document.getElementById('contenedor2').innerHTML='<iframe width="400" height="225" src="' +  url + '" frameborder="0" allowfullscreen></iframe>';
							  return false;
						  }
						  </script>
						</div>
					</div>

                    
                   <p><hr></p>

                    			 
								  <h3><a href="http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=Diana%20Kennedy" target="_blank">Galería</a></h3>
                           		  <h3>Ligas relacionadas</h3>
                                    	<ul style="padding-left:20px">
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">Alimentos</a></li>
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosOrig.html">Centros de domesticaci&oacute;n</a></li>
										  <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="https://www.academia.edu/2547625/Comida_cultura_y_modernidad_en_Mexico._Perspectivas_antropologicas_e_historicas" target="_blank">Comida, cultura y modernidad en México. Perspectivas antropológicas e históricas</a></li>
                                        </ul>
                    
                    
				</div>
			</section>			

		<?php include('footer.php') ?>
