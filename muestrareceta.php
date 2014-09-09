<?php 
include('menu.php');
$URL = $_GET["urlreceta"];
$nombrereceta = $_GET["nombrereceta"];	
$filtro = $_GET["filtro"];
?>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<p>&nbsp;</p>	
	                
 	               		
    				<div class='micaja2'>
	               		<div class='izq2'>
	               			<div class='micontenido2'>
			               	<h3><?php echo "Receta - ".$nombrereceta; ?></h3>
			               	<p>&nbsp;</p>	
			               	<?php
								// PDF resultado
								//echo "<embed src='".$URL."' style='position:relative;top:10px;bottom:0px;'>";
								//echo "<embed width='100' height='100' src='".$URL."' frameborder='0'></embed>";
								echo "<object data='".$URL."' type='application/pdf' width='100' height='100'>";
		  						echo "<p>Usted no tiene instalado el plugin. Puede descargar la receta en formato PDF en <a href='".$URL."'>.</a></p>";
		  						echo "</object>";
							?>
							</div>	
						</div>
						<div class='der2'>
							<div class='micontenido2'>
							<p><b>Otras recetas</b></p>
							<?php															
								$consultarec=mysql_query("SELECT URL, recetanombre, publico FROM diannakennedy WHERE ".$filtro." AND recetanombre <> '".$nombrereceta."' ORDER BY recetanombre LIMIT 5", $conexion);								
								$i = 1;
								$j = 1;
								while($registros=mysql_fetch_array($consultarec))
								{									
									$j += 1;
									if ($j <= 5)
									{
										if(!is_null($registros[0]))	
										{																											
											echo "<a href='muestrareceta.php?urlreceta=".$registros[0]."&nombrereceta=".$registros[1]."&filtro=".$filtro."' style='white-space: nowrap;'><img src='images/thumb".$i.".jpg' width='30' height='30' alt='' /> ".$registros[1]."</a><br><br>";
										}
										else
											echo "<a href='#' style='white-space: nowrap;'><img src='images/thumb".$i.".jpg' width='30' height='30' alt='' /> ".$registros[1]."<br><span style='color:gray;'>Próximamente</span></a><br><br>";
									}
									$i += 1;
								    if ($i == 4)
								    	$i = 1;
								}


								
								$ingredientes = mysql_query("SELECT ingredientelocal FROM diannakennedy WHERE recetanombre = '".$nombrereceta."'", $conexion);
								$listaingrediente = mysql_result($ingredientes,0);	
								if (!empty($listaingrediente))
								{
									echo "<br><p><b>Ingredientes</b></p>";									
									$lista=explode(",", $listaingrediente);
									foreach ($lista as $valor) {
 									   echo "<a target='_blank' href='http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=".trim($valor)."' style='white-space: nowrap;'>".$valor."</a><br>";
									}
								}
								
								
							?>	
							</div>						
						</div>
					</div>
				</div>               
			</section>			

		<?php include('footer.php') ?>

