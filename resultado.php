
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resultado</title>
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
    
    <form action="enviar.php" method="POST">
        <center>
        <div class="form-group">
            <div class="col-md-6">
            <label class="control-label" for="nome">Asunto</label>
            <input name="asunto" class="form-control" placeholder="asunto" type="text" required>
            </div>
        </div>
        <br>

        <div class="form-group">
            <div class="col-md-6">
            <label class="control-label" for="nome">Email</label>
            <input name="email_paciente" class="form-control" placeholder="Email para enviar los resultados" type="email" required>
            </div>
        </div>
        <br>

        <div class="form-group">
            <div class="col-md-4">
            <label class="control-label" for="nome">Resultado</label>
            <textarea name="resultado" rows="20" cols="60"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
            <button type="submit" name="enviar" class="btn btn-primary btn-md btn-block info">Enviar por Email </button>
            </div>
        </div>   

        </center>
    </form>
  
  </body>
</html>