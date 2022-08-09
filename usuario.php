<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Tablero de Gestión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
	<!-- title -->
	<title>SECØDE_QR</title>
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="./assets/img/logo.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">


    </head>
    <body>

    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar Usuario</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="IdN" placeholder="Identificación Usuario">
                                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Identificación</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Genero</th>
                                        <th>Telefono</th>
                                    </tr>
                                </thead>

                                <tbody>
                             <h1>Tablero de gestión</h1>
                             <br>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdN']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Genero']?></th>
                                                <th><?php  echo $row['Telefono']?></th>      
                                                <th><a href="actualizar.php?IdN=<?php echo $row['IdN'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?IdN=<?php echo $row['IdN'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>