<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body class="text-center">
    

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
<H2 class="display-4"> Registro</H2>
<br>

<form action="php/contacto.php" class=" container">

    <div class="form-group row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-6">
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder='Ejemplo: "sami1234@gmail.com"'>
        </div>
      </div>
<br>
    <div class="form-group row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder='Ejemplo: "Juan"'>
        </div>
      </div>
      <br>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="inputPassword">
      </div>
    </div>


    <div class="form-group row">
        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Asunto</label>
        <div class="col-sm-6">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group row">
        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Comentario</label>
        <div class="col-sm-6">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    <div class="container">
            <div class="col-6">
                <a href="#" class="btn btn-primary">Guardar</a>
            </div>      
            <br>  
            <div class="col-6">
                <a href="#" class="btn btn-danger">Salir</a>
            </div>        
    </div>
           
        
         

  </form>
</body>
</html>