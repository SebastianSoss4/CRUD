<?php 
    include("conexion.php");
    $con=conectar();

$IdN=$_GET['IdN'];

$sql="SELECT * FROM usuarios WHERE IdN='$IdN'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Identifiación" value="<?php echo $row['IdN']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="IdN" placeholder="Identificación" value="<?php echo $row['IdN']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero" value="<?php echo $row['Genero']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>