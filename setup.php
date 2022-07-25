<?php

function conectar()
{
    $con=mysqli_connect("epm.cmopdi1rna0q.us-east-1.rds.amazonaws.com","root","proyectoepm","epm");
    return $con;
}

?>
