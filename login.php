<?php
        require_once('navbar.php'); 
      require_once('funciones.php');
if (estaLogueado()) {
    header('location: perfil.php');
    exit;
  }
  // Variables para persistencia
  $email = '';
  // Array de errores vacío
  $errores = [];
  // Si envían algo por $_POST
  if ($_POST) {
    $email = trim($_POST['email']);
    $errores = validarLogin($_POST);
    if (empty($errores)) {
      $usuario = existeEmail($email);
      loguear($usuario);
      // Seteo la cookie
      if (isset($_POST["recordar"])) {
          setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
        }
      header('location: perfil.php');
      exit;
    }
  }
?>

<html lang="en" dir="ltr">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Proyecto X</title>
  <body>
    
    <div class="caja">
    <div class="formulario">
      <form  method="POST">
        <fieldset>
          <legend><h2>Ingresar</h2></legend>
          <div class="data-form">
      <form  method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="campo" for="name">Email:</label>
              <input class="form-control" type="text" name="email" value="<?=$email?>">
              <?php if (isset($errores['email'])): ?>
                <span style="color: red;">
                  <b class="glyphicon glyphicon-exclamation-sign"></b>
                  <?=$errores['email'];?>
                </span>
              <?php endif; ?>
                </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="campo" for="name">Contraseña:</label>
              <input class="form-control" type="password" name="pass" value="">
              <?php if (isset($errores['pass'])): ?>
                <span style="color: red;">
                  <b class="glyphicon glyphicon-exclamation-sign"></b>
                  <?=$errores['pass'];?>
                </span>
              <?php endif; ?>
                </div>
          </div>
        </div>
       </fieldset>
      <button class="campo" type="submit">Enviar</button>
      </form>
      <p>

        <br><br>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <input class="campo" type="checkbox" name="recordar">
              Recordar
            </div>
          </div>
        </div>
      </p>
    </div>
  </div>
  </body>
      <footer>
      <ul>
        <li><a href="question.php">FAQ</a></li>
          <li><a href="crear-cuenta.php">Crear cuenta</a></li>
          <li><a href="login.php">Iniciar sesión</a></li>
      </ul>
      <ul class="redesfoot">
        <li><i class="fab fa-facebook-square"></i></li>
        <li><i class="fab fa-twitter-square"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-tumblr-square"></i></li>
      </ul>
    </footer>
</html>
