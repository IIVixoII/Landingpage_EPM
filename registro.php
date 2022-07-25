<?php
include('setup.php');	

$sql = "INSERT INTO correo (nombre,email,tema,mensaje) VALUES ('".$_POST['nombre']."','".$_POST['email']."','".$_POST['tema']."','".$_POST['mensaje']."')";

	mysqli_query(conectar(),$sql);

	header("Location:index.php");
?>