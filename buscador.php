<?php

echo '<form method="post" action="recetas.php">';
echo '	<div class="active-links">';
echo '		<input type="text" id="nomreceta" name="nomreceta" size="50" placeholder="Buscar receta o ingredientes" autocomplete="off" />';
echo '			<div id="signin-dropdown" align="left">';
echo '				<br><label><span>Categor&iacute;a</span>';
echo '			        <select name="categoria" id="categoria">';
$consulta=mysql_query("SELECT DISTINCT c.id as id, c.nomcategoria as nomcategoria FROM categoria c INNER JOIN diannakennedy d ON c.id = d.idcategoria WHERE d.Publico = 1 ORDER BY c.orden", $conexion);
// Voy imprimiendo el select de nomcategoria
echo "<option value='0'>Elige</option>";
while($registro=mysql_fetch_array($consulta))
{
	// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
	$registro[1]=htmlentities($registro[1]);
	echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
}
echo '					</select></label>';
echo '	';
echo '					<label><span>Ingrediente</span></label>';
echo '			        <input type="text" size="50" id="ingrediente" name="ingrediente" autocomplete="off" />';
echo '				   	<div id="suggestions" class="suggestelement"></div>';
echo '	<br>';
echo '			        <label><span>Estado</span>';
echo '  			     <select name="estados" id="estados">';
$consulta=mysql_query("SELECT DISTINCT e.id as id, e.nomestado as nomestado FROM estados e INNER JOIN diannakennedy d ON e.id = d.idestado WHERE d.Publico = 1 ORDER BY e.nomestado", $conexion);
// Voy imprimiendo el select de estado
echo "<option value='0'>Elige</option>";
while($registro=mysql_fetch_array($consulta))
{
	// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
	$registro[1]=$registro[1];
	echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
}
echo '							</select></label>';
echo '										';
echo '				           	<center><button type="submit" class="button">Buscar receta</button></center>';
echo '					        	</div>';
echo '					        </div>';
echo '					   		</form>';
