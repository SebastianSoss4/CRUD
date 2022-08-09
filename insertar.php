<?php
include("conexion.php");
$con=conectar();

$IdN=$_POST['IdN'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Genero=$_POST['Genero'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO usuarios VALUES('$IdN','$Nombres','$Apellidos','$Genero','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>