<?php 
        header( 'Content-type: text/html; charset=utf-8' );
	require('config.php');
	
?>
<html>
<head>
<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="css/style-mobile.css">
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
<script src="js/responsive_videos.js"></script>
<script src="js/menu.js" charset="utf-8"></script>

</head>
<body>
	<div id="header">

		<!-- Logo -->
		<div id="logo">
        <span class="ldk"><a href="index.php"><img src="images/logo-01.png"></a></span>
        <span class="lconabio"><a href="http://www.conabio.gob.mx/" target="_blank"><img src="images/logo-02.png"></a></span>

		</div>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li class="current"><a href="index.php">Inicio</a></li>
				<li><a href="qs_dk.php">&iquest;Qui&eacute;n es DK?</a></li>
				<li><a href="quinta.php">Quinta</a></li>
				<li><a href="proyecto.php">Proyecto</a></li>
				<li><a href="recursos.php">Recursos</a></li>
				<?php
					$navigator_user_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']):'';
					if(
					stristr($navigator_user_agent, "iphone")or
					stristr($navigator_user_agent, "ipad")or
					stristr($navigator_user_agent, "kindle") or
					stristr($navigator_user_agent, "symbian") or
					stristr($navigator_user_agent, "android")
					) 
					{
					echo '<li><a href="buscadormobile.php">Buscar receta</a></li>';
					}
				?>			
			</ul>
		</nav>
</div>
<?php

echo '<br><br><form method="post" action="recetas.php">';
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
echo '					   		</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
?>
</body>
</html>
