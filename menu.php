<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
header( 'Content-type: text/html; charset=utf-8' );
require('config.php');

if(!session_id())
	session_start();
$sessionId = session_id();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
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
	<!-- Header -->
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
				<li><?php include('buscador.php') ?>
				</li>
			</ul>
		</nav>
</div>
</body>
