<!DOCTYPE HTML>
<?php
	if(!session_id())session_start();
	$sessionId = session_id();

    include 'config.php';

    $nomreceta = isset($_POST["nomreceta"])? $_POST["nomreceta"]: "";	
	$estado = isset($_POST["estados"])? $_POST["estados"]: '0';		
	$categoria = isset($_POST["categoria"])? $_POST["categoria"]: '-1';
	$ingrediente = isset($_POST["ingrediente"])? $_POST["ingrediente"]: '-1';	
	$URL = "";
	$_where = null;		

	if ($nomreceta != "")
	{
		$_where = " recetanombre like '%".$nomreceta."%'";
	}
	else
	{
		if ($estado != '0' )
		{		
			$_where = " idestado = ".$estado;
		}
		if ($categoria != '-1')
		{
			if (is_null($_where))
				$_where = $_where." idcategoria = ".$categoria;
			else
				$_where = $_where." OR idcategoria = ".$categoria;
		}
		if ($ingrediente != '')
		{
			if (is_null($_where))
				$_where = $_where." ingredientelocal like '%".$ingrediente."%'";
			else
				$_where = $_where." OR ingredientelocal like '%".$ingrediente."%'";
		}
	}

	/*if (is_null($_where))
			$_where = $_where." Publico = 1";
		else
			$_where = "(".$_where.") AND Publico = 1";*/

	$sql = "SELECT URL, recetanombre FROM diannakennedy WHERE ".$_where." ORDER BY recetanombre";		
	$consulta=mysql_query($sql, $conexion);							
	$numRecetas =mysql_num_rows($consulta);

	if ($numRecetas != 1)
	{		
		header('Location: listarecetas.php?filtro='.$_where);		
	}
	else
	{
		$registro=mysql_fetch_array($consulta);
		$URL = $registro["URL"];
		$nombrereceta = $registro["recetanombre"];
		header('Location: muestrareceta.php?urlreceta='.$URL.'&nombrereceta='.$nombrereceta);
	}
?>
