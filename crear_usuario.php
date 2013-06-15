<?php 
	require("../php/cabecera_folders.php")
 ?>
 <html>
 <head>
 	<meta charset="UTF-8" />
 	<title><?php echo $tipo; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
 </head>
 <body>
 		<div id="wrapper-contenido">
 			<form action = "insertar_usuario.php" method="post">
	 			<h3>Crear Paciente</h3>
	 			<label>RUT:</label><br/>
				<input type = "text" class = "campo" name="usu_nombre"><br/>

	 			<label>Nombre:</label><br/>
				<input type = "text" class = "campo" name="usu_nombre"><br/>

				<label>Paterno:</label><br/>
				<input type = "text" class = "campo" name="usu_paterno"><br/>

				<label>Materno:</label><br/>
				<input type = "text" class = "campo" name="usu_materno"><br/>

				<label>Fecha Nacimiento:</label><br/>
				<input type = "date" class = "campo" name="usu_nac"><br/>

				<label>Sexo:</label><br/>
				<input type="radio" name="usu_sexo" value="Masculino"> Masculino<br>
				<input type="radio" name="usu_sexo" value="Femenino" checked> Femenino<br>

				<br/>
				<label>Correo:</label><br/>
				<input type = "mail" class = "campo" name="usu_correo"><br/>

				<label>Fono:</label><br/>
				<input type = "number" class = "campo" name="usu_fono"><br/>

				<input type="submit"  class = "boton" value="Ingresar" />
			</form>
 		</div>
 		<footer id="wrapper-pie">
 			<p>Bastardos Soft © 2013 Dr.Misi Lab.</p>
 		</footer>
 	</div>
 </body>
 </html>

