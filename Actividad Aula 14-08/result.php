<?php
@session_start();

if (!isset($_SESSION["name"])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION["name"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
  <span class="navbar-brand mb-0 h1">Bienvenido</span>
  </div>
</nav>
<br>
  <div class="container text-center">
  <div class="row">
    <div class="col align-self-center">
    <h1>Hola, <?php echo $usuario?></h1>
    <br>
    <a class="btn btn-primary" href="cerrarsesion.php">Cerrar sesion</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </div> 
    </div> 
  </div>
  </body>
</html>