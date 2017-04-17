<?php 
	
	//recibir datos de usuario
	$usuario = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$nombre = $_REQUEST["nombre"];
	$apaterno = $_REQUEST["apaterno"];
	$amaterno = $_REQUEST["amaterno"];
	$edad = $_REQUEST["edad"];
	
	//include


	require_once("./conexion.php");
	//el proceso de ingresar datos
	
	//validar el usuario [user] no exista


	//$validacion = mysql_query("SELECT NombreUsser FROM ussers WHERE NombreUsuario LIKE '". $usuario ."'");
	$sql = "SELECT * FROM ussers";

	$result = mysqli_query($conn,$sql);

	$totalfilas = mysqli_num_rows ($result);//el primer datp seria [0]

	

	if($totalfilas[0]!=0){
		//el ususario existe en la base de datos
		?>
			<script type ="text/javascript">
				alert("el usuuario ya está registrado en la base de datoos");
			</script>
		<?php
	}else{
		$registro = mysqli_query($conn,"INSERT INTO ussers (idUsser, NombreUsser,contrasenia, nombre, apellidoPaterno, apellidoMaterno, edad) VALUES (NULL, '$usuario','$password','$nombre','$apaterno','$amaterno','$edad')");//true = si se registro, false = en caso contrario
		if($registro){
			?>
			<script type ="text/javascript">
				alert("se ha podido registrar al usuario");
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alter("no se ha podido registrar al usuario"<link rel="stylesheet" href="../principal.html">);
			</script>
			<?php

		}
	}

	
 ?>
 