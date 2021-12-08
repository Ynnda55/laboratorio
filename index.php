<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
                </nav>

        <div id="wrapper" class="container">


                <br>
                <br>
                
          <center>

                <form  method="POST" name="form-work" action="guardar.php">
            
                  <fieldset>
                  
                    <div class="form-group">
                      <div class="col-md-6">
                        <label class="control-label" for="nome">Nombre</label>
                        <input name="nombre" class="form-control" placeholder="Nombre del Paciente" type="text" required>
                        </div>
                      </div>
            
                    <div class="form-group">
                        <div class="col-md-6">
                          <label class="control-label" for="surname">Apellido</label>
                          <input name="apellido" class="form-control" placeholder="Apellido del Paciente" type="text"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="surname">Cedula</label>
                            <input name="cedula" class="form-control" placeholder="Cedula del Paciente" type="number"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="surname">Email</label>
                            <input name="email" class="form-control" placeholder="Gmail del Paciente" type="email"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                          <label class="control-label" for="surname">Examen Medico</label>
                          <input name="examen" class="form-control" placeholder="Nombre del Examen que se realizara el paciente" type="text"  required>
                        </div>
                    </div>
            
                      
                      <div class="form-group">
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-primary btn-md btn-block info">Guardar Datos</button>
                        </div>
                      </div>     

                      <div class="form-group">
                        <div class="col-md-6">
                          <button type="reset" class="btn btn-secondary btn-md btn-block info">Limpiar</button>
                        </div>
                      </div> 

                  </fieldset> 
                </form>

                <form method="POST" name="form-work" action="solicitud.php">

                    <fieldset>

                    <div class="form-group">
                        <div class="col-md-6">
                          <button type="submit" class="btn btn-primary btn-md btn-block info">Ver Solicitudes</button>
                        </div>
                      </div>  

                    </fieldset>

                </form>

                <form method="POST" name="form-work" action="resultado.php">

                    <fieldset>

                        <div class="form-group">
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-md btn-block info">Resultado y enviar</button>
                            </div>
                        </div>  

                    </fieldset>
                </form>




          </center>
      </div>
    




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>
