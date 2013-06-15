<?php
	include 'config.php';

	$rut = $_POST["usu_rut"];
	$nombre = $_POST["usu_nombre"];
	$paterno = $_POST["usu_paterno"];
	$materno = $_POST["usu_materno"];
	$nac = $_POST["usu_nac"];
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
		if($f["usu_rut"] == $en_per_rut)
		{
			$query = ("UPDATE  `cultura`.`personas` SET  
				`PER_NOMBRE`='$per_nombre',`PER_PATERNO`='$per_paterno',`PER_MATERNO`='$per_materno',
				`PER_NAC`='$per_nac',`PER_CIVIL`='$per_civil',`PER_FONO`='$en_per_fono',
				`PER_CORREO`='$en_per_correo',`PER_DISIPLINA`='$per_disiplina',
				`PER_REGION`='$per_region',`PER_MEDIA`='$per_media',
				`PER_SUPERIOR`='$per_superior',`PER_WEB`='$per_web',
				`PER_VIDEO`='$per_video',`PER_ESTADO`= 0
			  	WHERE  `personas`.`per_rut` ='$en_per_rut';");
		   	mysql_query($query);
		   	header("Location: ../listo_actualizados.php");
		}
	}
	else{
		$query = ("INSERT INTO  `cultura`.`personas` (`PER_RUT` , `PER_NOMBRE` , `PER_PATERNO`,
				`PER_MATERNO` , `PER_NAC` , `PER_CIVIL` , `PER_FONO` , `PER_CORREO` ,
				`PER_DISIPLINA` , `PER_REGION` , `PER_MEDIA` , `PER_SUPERIOR` , `PER_WEB` ,
				`PER_VIDEO` , `PER_ESTADO` )
				VALUES ('$en_per_rut',  '$per_nombre',  '$per_paterno',  '$per_materno',  '$per_nac',  
				'$per_civil',  '$en_per_fono',  '$en_per_correo',  '$per_disiplina',  '$per_region',  
				'$per_media',  '$per_superior', '$per_web',  '$per_video', 0 ); ");
	  	mysql_query($query);
	   	header("Location: ../listo.php");
	}
?>