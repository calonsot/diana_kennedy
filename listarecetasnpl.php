<?php include('menu.php') ?>
<?php

	$filtro = isset($_GET["filtro"])? $_GET["filtro"]: "Publico = 0";			
	$sql = "SELECT URL, recetanombre, publico, libro FROM diannakennedy WHERE ".$filtro." ORDER BY recetanombre";		
	//Conexión a la base de datos 
	$con = $conexion; 	
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
				    $consulta = mysql_query($sql);
					while($row = mysql_fetch_array($consulta))
					{ 								
						if ($bandera == true)
						{
							$bandera = false;
							echo "<div class='izq'>";
							echo "<div class='micontenido'>";
							$row['recetanombre']=htmlentities($row['recetanombre']);														
							echo "<p style = 'color: #900000;'><img src='images/thumb".$i.".jpg' width='20' height='20' alt='' />&nbsp;&nbsp;&nbsp;".$row['recetanombre']."</p>";
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
							echo "<p style = 'color: #900000;'><img src='images/thumb".$i.".jpg' width='20' height='20' alt='' />&nbsp;&nbsp;&nbsp;".$row['recetanombre']."</p>";
						    echo "<p>&nbsp;&nbsp;&nbsp;Libro: ".$row['libro']."</p><br><br>";													    
						    echo "</div>";
						    echo "</div>";	
						}
		
					    $i += 1;
					    if ($i == 4)
					    	$i = 1;
					}

					echo "</div>";				
				?>                
               
			</section>			

		<?php include('footer.php') ?>
