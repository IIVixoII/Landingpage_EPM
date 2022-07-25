<?php

include("setup.php");

$sql="select * from baliza_alerta";
$result=mysqli_query(conectar(),$sql);
while($datos=mysqli_fetch_array($result))
{
    ?>
    <img src="<?php echo  $datos['acuseCaptura'];?>"><br>
<?php
}
?>