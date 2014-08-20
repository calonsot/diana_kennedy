<?php 
$conexion = @mysql_connect("localhost", "root", "") or die ("Fallo en el establecimiento de la conexión");
mysql_select_db('autocompletar') or die("Error en la selección de la base de datos");
mysql_query("SET NAMES 'utf8'");
?> 