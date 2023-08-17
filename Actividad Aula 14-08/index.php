<?php
@session_start();

if (isset($_SESSION["name"])) {
  header("Location: result.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = ($_POST["name"] === "Jeremy" && $_POST["password"] === "12345");

    if ($usuario_valido) {
        $_SESSION["name"] = $_POST["name"];
        header("Location: result.php");
        exit();
    } else {
        $mensaje_error = '<script>alert("Usuario o Contraseña incorrecta")</script>';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
  <span class="navbar-brand mb-0 h1">Inicio de Sesión</span>
  </div>
</nav>
<br>
    <div class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <form action="" method="POST">
  <div class="mb-3">
    <?php if (isset($mensaje_error)) { ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php } ?>
    <label  for="exampleInputEmail1"  class="form-label">Nombre</label>
    <input placeholder="Nombre" class="form-control" id="name" name="name" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label  for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input placeholder="Contraseña" type="password" class="form-control"  id="password" name="password" require>
  </div>
  <button type="submit" class="btn btn-primary" value="submit">Acceder</button>
</form>
</div>
  </body>
</html>