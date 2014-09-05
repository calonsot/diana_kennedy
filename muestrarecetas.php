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
			</section>			

		<?php include('footer.php') ?>

