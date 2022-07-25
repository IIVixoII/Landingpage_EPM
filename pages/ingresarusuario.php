<?php
include('../setup.php');

$sql = "INSERT INTO usuario (correoUsu,clave,nombreUsu) VALUES ('".$_POST['correoUsu']."','".$_POST['clave']."','".$_POST['nombreUsu']."')";
echo $sql;
    mysqli_query(conectar(),$sql);
    header('Location:dashboard.php');
?>