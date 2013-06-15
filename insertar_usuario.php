<?php
	include 'config.php';

	$rut = $_POST["usu_rut"];
	$nombre = $_POST["usu_nombre"];
	$paterno = $_POST["usu_paterno"];
	$materno = $_POST["usu_materno"];
	$nac = $_POST["usu_nac"];
	$tipo = $_POST["usu_tipo"];
	$sexo = $_POST["usu_sexo"];
	$civil = $_POST["usu_correo"];
	$fono = $_POST["usu_fono"];

	// Hay campos en blanco
	if($usu_rut == '' ) 
	{
		echo "Faltan campos por completar";
	}

	$sql = mysql_query('SELECT per_rut FROM personas WHERE per_rut="'.$en_per_rut.'"');/*validamos administrador*/
	if($f= mysql_fetch_array($sql))
	{
		$query = ("INSERT INTO  ('usu_rut', 'usu_nombre', 'usu_paterno' = '$paterno', 'usu_materno' = '$materno', 'usu_nac' = '$nac'
						'usu_tipo' = '$tipo', 'usu_sexo' = '$sexo', 'usu_correo' = '$correo', usu_fono = '$fono'()

				VALUES ('$rut',  '$nombre',  '$per_paterno',  '$per_materno',  '$per_nac',  
				'$per_civil',  '$en_per_fono',  '$en_per_correo',  '$per_disiplina',  '$per_region',  
				'$per_media',  '$per_superior', '$per_web',  '$per_video', 0 ); ");
	  	mysql_query($query);
	   	header("Location: ../listo.php");
	}
?>