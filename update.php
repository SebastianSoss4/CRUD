<?php

include("conexion.php");
$con=conectar();

$IdN=$_POST['IdN'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Genero=$_POST['Genero'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE usuarios SET  Nombres='$Nombres',Apellidos='$Apellidos',Genero='$Genero',Telefono='$Telefono' WHERE IdN='$IdN'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>