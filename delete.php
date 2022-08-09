<?php

include("conexion.php");
$con=conectar();

$IdN=$_GET['IdN'];

$sql="DELETE FROM usuarios  WHERE IdN='$IdN'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
