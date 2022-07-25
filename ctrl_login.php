<?php

include("setup.php");

//echo $_POST['frmusuario']."-".$_POST['frmclave']

$sql="select * from usuario where correoUsu='".$_POST['frmnombre']."' and clave='".$_POST['frmclave']."'";
$result=mysqli_query(conectar(),$sql);
$num=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($num!=0)
{
	session_start();
	$_SESSION['user']=$datos['correoUsu'];
	header('Location:pages/dashboard.php');
}else{
	header('Location:login.php?error');
}
?>