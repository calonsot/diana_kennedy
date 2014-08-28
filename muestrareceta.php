<?php 
include('menu.php');
$URL = $_GET["urlreceta"];
$nombrereceta = $_GET["nombrereceta"];	
?>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
			<p>&nbsp;</p>	
	                <p>&nbsp;</p>	
	                <header>
							<h3><?php echo "Receta - ".$nombrereceta; ?></h3>
					</header>
        
 	               	<div>
 	               	<p>&nbsp;</p>	
    				<p>&nbsp;</p>	
	               	<?php
						// PDF resultado
						//echo "<embed src='".$URL."' style='position:relative;top:10px;bottom:0px;'>";
						//echo "<embed width='100' height='100' src='".$URL."' frameborder='0'></embed>";
						echo "<object data='".$URL."' type='application/pdf' width='100' height='100'>";
  						echo "<p>It appears you don't have a PDF plugin for this browser. You can <a href='".$URL."'>click here to download the PDF file.</a></p>";
  						echo "</object>";
					?>
					</div>
					
				</div>                
               
			</section>			

		<?php include('footer.php') ?>

