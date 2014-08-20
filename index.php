<!DOCTYPE HTML>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header( 'Content-type: text/html; charset=utf-8' );
require('config.php');
?>

<html>
	<head>
		<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
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
		</script>
	</head>
	<body><!-- Header -->
			<div id="header">
						
			  <!-- Logo -->                    
              <div id="logo">
                <img src="images/logo.png" usemap="#Map">
                <map name="Map">
                  <area shape="rect" coords="36,5,357,75" href="index.php">
                  <area shape="rect" coords="674,3,762,73" href="http://www.conabio.gob.mx" target="_blank">
                </map>
              </div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.php">Inicio</a></li>
							<li><a href="qs_dk.php">&iquest;Qui&eacute;n es DK?</a></li>
							<li><a href="quinta.php">Quinta</a></li>
							<li><a href="proyecto.php">Proyecto</a></li>
							<li><a href="recursos.php">Recursos</a></li>							
							<li>
						        <form method="post" action="recetas.php">	
						        
						        <div class="active-links">
						        	
						        	<input type="text" id="nomreceta" name="nomreceta" size="50" placeholder="Buscar receta o ingredientes" />                                    	       
						               
						        	<div id="signin-dropdown" align="left">        		
						        	            
										<label><span>Categor&iacute;a</span></label>
								        <select name="categoria" id="categoria">
								            <?php 
								            	$consulta=mysql_query("SELECT DISTINCT c.id as id, c.nomcategoria as nomcategoria FROM categoria c INNER JOIN diannakennedy d ON c.id = d.idcategoria WHERE d.Publico = 1 ORDER BY c.orden", $conexion);	
												// Voy imprimiendo el select de nomcategoria
												echo "<option value='0'>Elige</option>";	
												while($registro=mysql_fetch_array($consulta))
												{
													// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
													$registro[1]=htmlentities($registro[1]);
													echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
												}
											?>
										</select>
										
										<br>
							         	<label><span>Ingrediente</span></label>
								        <input type="text" size="50" id="ingrediente" name="ingrediente" />
									   	<div id="suggestions" class="suggestelement"></div>	   			

								        <label><span>Estado</span></label>
								        <select name="estados" id="estados">
								            <?php 
								            	$consulta=mysql_query("SELECT DISTINCT e.id as id, e.nomestado as nomestado FROM estados e INNER JOIN diannakennedy d ON e.id = d.idestado WHERE d.Publico = 1 ORDER BY e.nomestado", $conexion);	
												// Voy imprimiendo el select de estado
												echo "<option value='0'>Elige</option>";	
												while($registro=mysql_fetch_array($consulta))
												{
													// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
													$registro[1]=htmlentities($registro[1]);
													echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
												}
											?>
										</select>

										<br><br>

							           	<right><button type="submit" class="button">Buscar receta</button></right>

						        	</div>
						        </div>
						   		
						   		</form>
						    </li>						
						</ul>
			  </nav>



	    </div> 	

	</div>

		
			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>&quot;La cocina encuentra su riqueza en los ingredientes&quot;</h2>
				</header>
			</section>


								
		

		<!-- Posts -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row">
                    <h3>Los ingredientes de la cocina tradicional mexicana</h3>
                    <p>
                    La cocina tradicional mexicana es una manifestaci&oacute;n cultural muy antigua que tiene como base los <a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosPlantas.html">productos agr&iacute;colas que se domesticaron en M&eacute;xico</a>. Entre las que destacan el ma&iacute;z, la calabaza, el frijol, y el chile, entre otros m&aacute;s. Adem&aacute;s, cada uno de ellos contiene una diversidad gen&eacute;tica muy amplia resultante del proceso de selecci&oacute;n artificial, que ha sucedido desde hace miles de a&ntilde;os y contin&uacute;a hasta la fecha. Por lo que existen <a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">razas adaptadas</a> a las diversas condiciones de suelos, lluvia y temperatura, del pa&iacute;s, con distintos colores, aromas y sabores que le brindan a nuestra cocina un caleidoscopio extraordinario de platillos.</p>

                    <p>Recientemente, la <a href="http://www.biodiversidad.gob.mx/usos/cocinaTradicional.html">cocina tradicional mexicana</a> fue reconocida por la UNESCO como patrimonio inmaterial de la humanidad. Sin embargo, muchos de los ingredientes originales se est&aacute;n perdiendo. La importaci&oacute;n de productos agr&iacute;colas de otros pa&iacute;ses, el desarrollo de variedades h&iacute;bridas y transg&eacute;nicas, el cambio en la cultura alimenticia y el desconocimiento de los ingredientes originales son algunas de las razones de esta lamentable p&eacute;rdida.</p>
                    </div>                


                    <!--<div class="row">
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s2.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s3.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s4.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                    </div>
                      -->
                    
			  </div>
				</div>
			</section>
			
		<!-- CTA -->
			<nav id="nav">
            </nav>

		<!-- Footer -->
		<div id="footer">
        
		<!-- Copyright -->
					<div class="copyright">
					&copy; 2014 Comisi&oacute;n Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)
                    </div>        
        
        <!-- Icons -->
					<ul class="icons">
						<li><a href="http://www.facebook.com/pages/Comision-Nacional-para-el-Conocimiento-y-uso-de-la-Biodiversidad/208239404119?v=wall" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                      <li><a href="http://twitter.com/conabio" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="http://www.youtube.com/biodiversidadmexico" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
						<li><a href="https://soundcloud.com/conabio" class="icon fa-soundcloud" target="_blank"><span class="label">SoundCloud</span></a></li>
					</ul>

		
			</div>

	</body>
</html>
