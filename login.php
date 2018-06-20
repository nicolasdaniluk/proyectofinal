<?php

  require_once('funciones.php');

  if (autenticador->estaLogueado()) {
        header('location:bienvenida.php');
    exit;}


  // Variables para persistencia
  $email = '';
  // Array de errores vacío
  $errores = [];

  // Si envían algo por $_POST
  if ($_POST) {
    $email = trim($_POST['email']);
    $errores = validarLogin($_POST);
    if (empty($errores)) {
      $usuario = traerPorEmail($email);
      loguear($usuario);

      // Seteo la cookie
      if (isset($_POST["recordar"])) {
          setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
      }
      exit;
    }
  }

?>
<html lang="en" dir="ltr">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <!--fontawesome -->
    <script type="text/javascript" src="fontawesome/js/fontawesome-all.js"></script>
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
    <title>Tienda | log in</title>
  <body>

        <?php include_once('navbar.php')  ?>

        <div class="caja">
          <div class="formulario">
          <form  method="post" enctype="multipart/form-data">
              <fieldset>
                <legend><h2>Ingresar</h2></legend>
                <div class="data-form">

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
                </div>
              </fieldset>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input class="checkbox" type="checkbox" name="recordar">
                    Recordar
                  </div>
                </div>
              </div>
            <button class="campo" type="submit">Enviar</button>
          </form>
        </div>
      </div>

  </body>
  <footer>
      <ul>
        <li><a href="faq.php">FAQ |</a></li>
        <li><a href="singin.php">Crear cuenta |</a></li>
        <li><a href="login.php">Iniciar sesión</a></li>
      </ul>
      <ul class="redesfoot">
        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-tumblr-square"></a></i></li>
      </ul>
  </footer>
</html>
