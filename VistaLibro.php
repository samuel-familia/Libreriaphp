<?php    
    include 'php/LibrosRepositorio.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Vistalibro.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/FinalProyect/Index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/FinalProyect/Libros.php">Biblioteca <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/FinalProyect/Autores.php">Autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/FinalProyect/Contacto.php">Contactos</a>
            </li>
          </ul>
        </div>
      </nav>
<br>
<br>
<h1 class="display-4 container"> <b> Datos de los libros </b></h1>

<br>
<br>
<?php

 for ($x=0;$x<$numfilas;$x++) {
  $fila = $result->fetch_object();
  $id = $_GET['id'];
  if($fila->id_titulo == $id){
  ?>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4> Nombre original:</h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-5">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->titulo?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4> Traduccion español:</h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-3">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->latino?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4>Avance: </h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-3">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->avance?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4>Tipo de libro: </h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-3">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->tipo?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>
      
      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4>Fecha de publicacion: </h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-3">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->fecha_pub?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-3">            
            <form class="form-inline">
                <div class="form-group">
                  <label for="inputPassword6"> <h4>Precio: </h4></label>
                  </small>
                </div>
            </form>
          </div>
          <div class="col-3">
            <form class="form-inline">
                <div class="form-group">
                <input type="text" value="<?= $fila->precio?>" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                     <small id="passwordHelpInline" class="text-muted">
                    </small>
                  </div>
                </form>
          </div>
        </div>
      </div>
         
      
</body>
<?php  
}    
    }
?>  