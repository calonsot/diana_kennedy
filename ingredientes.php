<?php 
include('menu.php');
?>			
	<!-- Main -->
	<section class="wrapper style1">
		<div class="container">
			<p>&nbsp;</p>		               		    				
	        <h3>Ingredientes</h3>
			<?php															
				$ingredientes = mysql_query("SELECT nombre FROM ingredientes ORDER BY nombre", $conexion);
				while($row=mysql_fetch_array($ingredientes))						
				{							
 					echo "<p><a target='_blank' href='http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=".trim($row['nombre'])."'>".$row['nombre']."</a></p>";
				}
			?>	
		</div>               
	</section>			

	<?php include('footer.php') ?>
