<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header( 'Content-type: text/html; charset=utf-8' );
require('config.php');

if(!session_id())
	session_start();
$sessionId = session_id();
?>

<!DOCTYPE HTML>
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
<script src="js/jquery-1.9.1.js"></script>
<script src="js/responsive_videos.js"></script>
<script src="js/menu.js"></script>

</head>
<body>
	<!-- Header -->
	<div id="header">

		<!-- Logo -->
		<div id="logo">
			<img src="images/logo-01.png" usemap="#Map">
			<map name="Map">
				<area shape="rect" coords="42,21,363,91" href="index.php">
				<area shape="rect" coords="704,15,792,85"
					href="http://www.conabio.gob.mx" target="_blank">
			</map>
</div>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li class="current"><a href="index.php">Inicio</a></li>
				<li><a href="qs_dk.php">&iquest;Qui&eacute;n es DK?</a></li>
				<li><a href="quinta.php">Quinta</a></li>
				<li><a href="proyecto.php">Proyecto</a></li>
				<li><a href="recursos.php">Recursos</a></li>
				<li><?php include('buscador.php') ?>
				</li>
			</ul>
		</nav>
</div>
