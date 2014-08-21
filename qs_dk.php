<!DOCTYPE HTML>
<?php
header( 'Content-type: text/html; charset=iso-8859-1' );
require('config.php');
?>

<html>
	<head>
		<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/menu.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
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
							<li><a href="index.php">Inicio</a></li>
							<li class="current"><a href="qs_dk.php">¿Quién es DK?</a></li>
							<li><a href="quinta.php">Quinta</a></li>
							<li><a href="proyecto.php">Proyecto</a></li>
							<li><a href="recursos.php">Recursos</a></li>
							<li> <form method="post" action="recetas.php">	
						        
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
									   	<div id="suggestions"></div>	   			

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
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
					<h2>&iquest;Qui&eacute;n es Diana Kennedy?</h2>
					<p>Frase</p>
				</header>
					<div class="row double">
						<div class="6u">
							<div id="content">

								<!-- Content -->
							
									<article>
										<span class="image featured"><img src="images/diana_kennedy.jpg" alt="" /></span>
										
										<h3>Diana (Southwood) Kennedy</h3>
										<p>Durante sus m&aacute;s de 50 a&ntilde;os en este pa&iacute;s <strong>Diana Kennedy</strong> se ha percatado del cambio cultural, la p&eacute;rdida y desuso de ingredientes por diversas causas y el abandono del campo mexicano. Esto ha ocasionado el olvido de algunos platillos y lo que es peor, la desaparici&oacute;n de ciertas formas hort&iacute;colas producidas localmente. <strong>Diana</strong> ha registrado una gran variedad de ingredientes aut&oacute;ctonos y ha difundido a trav&eacute;s de sus libros, la comida mexicana tradicional poniendo &eacute;nfasis en la conservaci&oacute;n y utilizaci&oacute;n de ingredientes nativos.</p>

<p><strong>Diana Kennedy</strong> naci&oacute; el 3 de marzo de 1923 en Loughton, Essex, en el sureste del Reino Unido. A los 19 a&ntilde;os form&oacute; parte del Women's Timber Corps (WTC) una organizaci&oacute;n civil brit&aacute;nica creada durante la Segunda Guerra Mundial para trabajar en manejo forestal ya que muchos hombres se hab&iacute;an ido a la Guerra. En 1953 emigr&oacute; a Canad&aacute; donde vivi&oacute; tres a&ntilde;os.</p>

<p>Su primera visita a M&eacute;xico el 13 de octubre de 1957, sucedi&oacute; cuando vino a casarse con Paul P. Kennedy, corresponsal del New York Times para M&eacute;xico y Centroam&eacute;rica. Despu&eacute;s de vivir algunos a&ntilde;os en Nueva York, en 1969 regres&oacute; a M&eacute;xico para viajar e investigar mas profundamente las cocinas regionales y sus mercados, para preparar sus clases y su primer libro &ldquo;The Cuisines of Mexico&rdquo;, publicado en Nueva York.</p>

<p>Desde entonces, motivada por el editor de cocina del New York Times, Craig Clayborne, <strong>Diana</strong> se dedic&oacute; a investigar sobre la cocina mexicana y a publicar sus hallazgos. A la fecha ha publicado m&aacute;s de una docena de libros sobre la cocina mexicana convirti&eacute;ndose en una de las principales autoridades sobre el tema.</p>

<p><strong>Diana</strong> es una incansable viajera. Ha recorrido el pa&iacute;s de Chihuahua a Yucat&aacute;n, en toda clase de transporte, visitando los m&aacute;s rec&oacute;nditos y coloridos mercados de M&eacute;xico y recolectando el conocimiento de cocineras y cocineros de pueblos y ciudades a trav&eacute;s del lenguaje culinario.</p>
									</article>
                                       
						
							</div>
						</div>
						<div class="6u">
						  <div id="sidebar">

								<!-- Sidebar -->
							
							<section>
							  <h3>Libros</h3>
                                        <table class="header">
										  <tr>
										    <td width="15%" valign="top">A&ntilde;o</td>
										    <td width="30%" valign="top">Ingl&eacute;s</td>
										    <td width="15%" valign="top">A&ntilde;o</td>
										    <td width="30%" valign="top">Espa&ntilde;ol</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1972, 1986</strong></td>
										    <td valign="top">The Cuisines of Mexico</td>
										    <td valign="top"><strong>1991</strong></td>
										    <td valign="top">Las Cocinas de M&eacute;xico</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1975, 1991</strong></td>
										    <td valign="top">The Tortilla Book</td>
										    <td valign="top">&nbsp;</td>
										    <td valign="top">&nbsp;</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1978, 1990</strong></td>
										    <td valign="top">Recipes from the Regional Cooks of Mexico</td>
										    <td valign="top">&nbsp;</td>
										    <td valign="top">&nbsp;</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1989, 2008</strong></td>
										    <td valign="top">The Art of Mexican Cooking</td>
										    <td valign="top"><strong>1993</strong></td>
										    <td valign="top">El Arte de la Cocina Mexicana</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1990</strong></td>
										    <td valign="top">Mexican Regional Cooking</td>
										    <td valign="top">&nbsp;</td>
										    <td valign="top">Cocina regional mexicana</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1998</strong></td>
										    <td valign="top">My Mexico: A Culinary Odyssey with More Than 300 Recipes</td>
										    <td valign="top"><strong>2001</strong></td>
										    <td valign="top">M&eacute;xico-Una Odisea Culinaria</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>1998, 1999</strong></td>
										    <td valign="top">Nothing Fancy: Recipes and Recollections of Soul-Satisfying Food</td>
										    <td valign="top"><strong>2006</strong></td>
										    <td valign="top">Recetas del Alma</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>2000</strong></td>
										    <td valign="top">The Essential Cuisines of Mexico</td>
										    <td valign="top"><strong>2003</strong></td>
										    <td valign="top">Lo Esencial de las Cocinas Mexicanas</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>2003</strong></td>
										    <td valign="top">From my Kitchen: Techniques and Ingredients</td>
										    <td valign="top">&nbsp;</td>
										    <td valign="top">&nbsp;</td>
									      </tr>
										  <tr>
										    <td valign="top"><strong>2010</strong></td>
										    <td valign="top">Oaxaca al gusto: An Infinite Gastronomy</td>
										    <td valign="top"><strong>2008</strong></td>
										    <td valign="top">Oaxaca al gusto: El mundo infinito de su gastronom&iacute;a</td>
									      </tr>
										  <tr>
										    <td colspan="4" valign="top"><span class="image fit"><img src="images/libros.png"/></span></td>
									      </tr>
								      </table>
                            </section>

							</div>
						</div>
					</div>
                    
                    
                    			<article>
                                    <h3>Reconocimientos</h3>
									  		<p class="hanging-indent"><strong>1971</strong> Medalla de Plata de la Secretaría de Turismo de México por su promoción de la cultura mexicana a través de la comida.</p>
                                            <p class="hanging-indent"><strong>1980</strong> Presea especial Amando Farga Font de la Asociación de Escritores de la Comida Mexicana.</p>
                                            <p class="hanging-indent"><strong>1981</strong> La Orden del Águila Azteca del Gobierno de México.</p>
                                            <p class="hanging-indent"><strong>1984</strong> El Premio del Molcajete de Jade de la Secretaría de Turismo de México y la cadena de Hoteles Holiday Inn.</p>
                                            <p class="hanging-indent"><strong>1991</strong> Presea especial Amando Farga Font de la Asociación de Restauranteros de México.</p>
                                            <p class="hanging-indent"><strong>1992</strong> Nombrada Investigadora Académica por la Sociedad Mexicana de Gastronomía.</p>
                                            <p class="hanging-indent"><strong>1995</strong> Reconocimiento del Instituto Cultural Domecq.</p>
                                            <p class="hanging-indent"><strong>2000</strong> Medalla de Oro de la Asociación de Restauranteros de México.</p>
                                            <p class="hanging-indent"><strong>2001</strong> Medalla de plata de la CANIRAC (Cámara Nacional de la Industria Alimenticia y de Restaurantes de México).</p>
                                            <p class="hanging-indent"><strong>2001</strong> Mención honorífica en La Feria de Puebla por la Secretaría de Cultura y de Turismo.</p>
                                            <p class="hanging-indent"><strong>2002</strong> Miembro de la Orden del Imperio Británico por el Gobierno Británico por ampliar las relaciones culturales entre México y el Reino Unido.</p>
                                            <p class="hanging-indent"><strong>2003</strong> Presea especial de Life Achievement de la Asociación Internacional de Profesionales de la Cocina.</p>
                                            <p class="hanging-indent"><strong>2003</strong> Reconocimiento por su trabajo con alimentos sustentables por el Monterey Bay Aquarium.</p>
                                            <p class="hanging-indent"><strong>2011</strong> Reconocimiento de la Fundación James Beard Foundation – Libro de Cocina del Año “Oaxaca al Gusto”.</p>
                                            <p class="hanging-indent"><strong>2012</strong> Medalla de Oro del Vatel Club de México.</p>
                                            <p class="hanging-indent"><strong>2013</strong> El Molcajete de Plata por la Asociación Mexicana de Gastronomía, Cofradía de Gourmets de la Zona Rosa y el Club de Industriales.</p>
                                            <p class="hanging-indent"><strong>2013</strong> a la fecha, un sinnúmero de reconocimientos por institutos gastronómicos de todo el país.</p>
                                            <p class="hanging-indent"><strong>?</strong> Reconocimiento del Club de la Buena Mesa, Guadalajara, Jalisco.</p>
                  				</article>

                </div>
			</section>			

		<!-- Footer -->
<div id="footer">
        
		<!-- Copyright -->
					<div class="copyright">
					&copy; 2014 Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)
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