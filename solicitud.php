<?php

require 'conexion.php'; 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ver Solicitudes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Centro Medico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Regresar</a>
            </ul>
            </div>
        </div>
        <br>
    </nav>
            <br>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Email</th>
                <th scope="col">Examen Medico</th>
            </tr>
            </thead>

             <?php
             $sql = "SELECT * FROM ordenes"; 
             $result = mysqli_query($conectar,$sql);
 
             while($mostrar=mysqli_fetch_array($result)){
             ?>

            <tbody>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellido'] ?></td>
                <td><?php echo $mostrar['cedula'] ?></td>
                <td><?php echo $mostrar['email'] ?></td>
                <td><?php echo $mostrar['examen'] ?></td>
            </tr>
            </tbody>
            <?php
            }

            ?>
        </table>

  </body>
</html>