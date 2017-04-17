
<?php


	require("conexion.php");

	$username=$_REQUEST["username"];
	$pass=$_REQUEST["password"];



	$sql2 = mysqli_query($conn,"SELECT * FROM ussers WHERE NombreUsser LIKE '$username'");
	if($f2 = mysqli_fetch_array ($sql2)){
		if($pass==$f2['contrasenia']){
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>href= 'Secion.html'</script>";
		
		}
	}




	$sql=mysqli_query($conn,"SELECT * FROM ussers WHERE NombreUsser='$username'");
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['contrasenia']){
			header("Location: ../Secion.html");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>href='../princial.html'</script>";
			header("Location: ../princial.html");
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>href='../princial.html'</script>";
		header("Location: ../princial.html");

	}



		


?>