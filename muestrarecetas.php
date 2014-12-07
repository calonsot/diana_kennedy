<?php 
include('menu.php');
$URL = $_GET["urlreceta"];
$nombrereceta = $_GET["nombrereceta"];	
$filtro =  isset($_GET["filtro"])? $_GET["filtro"]: "" ;
?>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<p>&nbsp;</p>		               		    				
			        
			        <div class='micaja2'>
	               		<div class='izq2'>
	               			<div class='micontenido2'>
			               	
			               	<?php
								// PDF resultado
								//echo "<embed src='".$URL."' style='position:relative;top:10px;bottom:0px;'>";
								//echo "<embed width='100' height='100' src='".$URL."' frameborder='0'></embed>";
			               		if (!empty($URL))
			               		{
				               		echo "<h3>Receta - ".$nombrereceta."<h3>";
				               	    echo "<p>&nbsp;</p>";
									echo "<object data='".$URL."' type='application/pdf' width='100' height='100'>";
			  						echo "<p>Usted no tiene instalado el plugin. Puede descargar la receta en formato PDF <a href='".$URL."'>".$nombrereceta.".</a></p>";
			  						echo "</object>";
		  						}
		  						else
		  						{
		  							echo "<h3>Receta - ".$nombrereceta." | Próximamente<h3>";
		  						}
							?>
							</div>	
						</div>			
						<div class='der2'>
							<div class='micontenido2'>						
							<?php															
								$ingredientes = mysql_query("SELECT ingredientelocal FROM diannakennedy WHERE recetanombre = '".$nombrereceta."'", $conexion);
								$listaingrediente = mysql_result($ingredientes,0);	
								if (!empty($listaingrediente))
								{
									echo "<br><p><b>Ingredientes</b></p>";									
									$lista=explode(",", $listaingrediente);
									foreach ($lista as $valor) {
 									   echo "<a target='_blank' href='http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=".trim($valor)."'>".$valor."</a><br>";
									}
								}
							?>	
							</div>						
						</div>
					</div>
				</div>               
			</section>			

		<?php include('footer.php') ?>

