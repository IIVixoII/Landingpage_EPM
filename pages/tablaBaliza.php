<?php
include("../setup.php");
?>
<table width="35%">
    <tr>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Captura</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ver Imagen</th>
    </tr>
    <?php
    $sql="SELECT * FROM baliza_alerta ORDER BY idAcuses DESC";
    $result=mysqli_query(conectar(),$sql);
    while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $mostrar['idAcuses']?></td>
    <td><?php echo $mostrar['horaCaptura']?></td>
    <td><button  onclick="verCaptura('<?php echo $mostrar['acuseCaptura']?>')"><img src="../images/ojo.ico" width="20" heights="20" /></button></td>
    <?php
    }
    ?>
    </tr>
</table>