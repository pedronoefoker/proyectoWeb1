<?php
	
	$serverDB= "localhost"; 
	$userDB = "root";
	$passDB = "";
	$DB = "tiendaonline";
	$conn = mysqli_connect($serverDB,$userDB,$passDB,$DB) or die ("No se ha podido conectar a la Base de Datos");;


	//$con = mysql_connect("localhost", "root", "","tiendaonline") or die ("No se ha podido conectar a la Base de Datos");
	

?>