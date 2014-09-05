<?php include('menu.php') ?>
<?php

	$filtro = isset($_GET["filtro"])? $_GET["filtro"]: "Publico = 0" ;		
	$sql = "SELECT URL, recetanombre, publico, libro FROM diannakennedy WHERE ".$filtro." ORDER BY recetanombre";		
	//Conexión a la base de datos 
	$con = $conexion; 	

	//Sentencia sql (sin limit) 
	$_pagi_sql = $sql; 

	//cantidad de resultados por página (opcional, por defecto 20) 
	$_pagi_cuantos = 10; 

	//cantidad de enlaces que se mostrarán como máximo en la barra de navegación
	$_pagi_nav_num_enlaces = 10;
	 
	//Decidimos si queremos que se muesten los errores de mysql
	$_pagi_mostrar_errores = true;//recomendado true sólo en tiempo de desarrollo.
	 
	//Si tenemos una consulta compleja que hace que el Paginator no funcione correctamente, 
	//realizamos el conteo alternativo.
	$_pagi_conteo_alternativo = true;//recomendado false.
	 
	//Supongamos que sólo nos interesa propagar estas dos variables
	$_pagi_propagar = array("URL","recetanombre", "publico", "libro");//No importa si son POST o GET
	 
	//Definimos qué estilo CSS se utilizará para los enlaces de paginación.
	//El estilo debe estar definido previamente
	$_pagi_nav_estilo = "paginacion";

	//definimos qué irá en el enlace a la página anterior
	$_pagi_nav_anterior = "&laquo; Anterior"; // &lt;";// podría ir un tag <img> o lo que sea
	 
	//definimos qué irá en el enlace a la página siguiente
	$_pagi_nav_siguiente = "Siguiente &raquo;"; //" &gt;";// podría ir un tag <img> o lo que sea

	$_pagi_htaccess = "";

	//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
	include("paginator.inc.php"); 
?>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
						<h4 align="center"><?php 
										      /*if ($_pagi_totalReg <=5)
												echo " <span class=fuente8><b>Se encontraron $_pagi_totalReg recetas.</b></span>";
											else
						                    	echo $_pagi_info;*/ 
						                  ?></h4>
				</header>
		                <br>
                                <br>

				<?php 					
					echo "<div class='micaja'>";

					//Leemos y escribimos los registros de la página actual 
					$i = 1;
				    $bandera = true;
					while($row = mysql_fetch_array($_pagi_result))
					{ 								
						if ($bandera == true)
						{
							$bandera = false;
							echo "<div class='izq'>";
							echo "<div class='micontenido'>";
							$row['recetanombre']=htmlentities($row['recetanombre']);														
							echo "<a href='#'><img src='images/thumb".$i.".jpg' width='46' height='46' alt='' />&nbsp;&nbsp;&nbsp;".$row['recetanombre']."</a>";
						    echo "<p>&nbsp;&nbsp;&nbsp;Libro: ".$row['libro']."</p><br><br>";							
						    echo "</div>";
						    echo "</div>";							
						}
						else
						{
							$bandera = true;
							echo "<div class='der'>";
							echo "<div class='micontenido'>";
							$row['recetanombre']=htmlentities($row['recetanombre']);							
							echo "<a href='#'><img src='images/thumb".$i.".jpg' width='46' height='46' alt='' />&nbsp;&nbsp;&nbsp;".$row['recetanombre']."</a>";
						    echo "<p>&nbsp;&nbsp;&nbsp;Libro: ".$row['libro']."</p><br><br>";													    
						    echo "</div>";
						    echo "</div>";	
						}
		
					    $i += 1;
					    if ($i == 4)
					    	$i = 1;
					}

					echo "</div>";

					if ($_pagi_totalReg >10)
					{
						//Incluimos la barra de navegación 
						echo"<center><p>".$_pagi_navegacion."</p></center>";
						//echo"<p>Mostrando Registrados ".$_pagi_info."</p>";
					}
				?>                
               
			</section>			

		<?php include('footer.php') ?>
