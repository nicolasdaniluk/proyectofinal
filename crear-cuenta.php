<html lang="en" dir="ltr">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Proyecto X</title>
  <body>

    <?php
      require_once('navbar.php'); 
      require_once('funciones.php');
//En caso de estar logueado, crear pag de bienvenida ↓
    if (estaLogueado()) {
            header('location:bienvenida.php');
        exit;}   //<--- Si no funca, ver exit
//Variables a persistir↓
    $name = '';
    $email = '';
    $errores = [];
//Validaciones ↓
    if ($_POST) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $errores = validar($_POST,'avatar');
            if (empty($errores)) {
                $usuario = crearUsuario($_POST, 'avatar');
                $errores = guardarImagen('avatar',$usuario['email'] );
                if (count($errores) == 0) {
                    guardarUsuario($usuario, 'avatar');
                    header('location:bienvenida.php');
                    exit;
                }
            }
        }

    ?>
    <div class="caja">
    <div class="formulario">
      <form method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Crear cuenta</legend>
          <div class="row">
          <div class="col-sm-6">
            <div class="form-group <?= isset($errores['name']) ? 'has-error' : null ?>">
              <label class="campo">Nombre:</label>
              <input type="text" class="form-control" name="name" value="<?=$name?>">
              <span class="help-block" style="<?= !isset($errores['name']) ? 'display: none;' : ''; ?>">
                <b class="glyphicon glyphicon-exclamation-sign"></b>
                <?= isset($errores['name']) ? $errores['name'] : ''; ?>
              </span>             
            </div>
          <div class="col-sm-6">
            <div class="form-group <?= isset($errores['email']) ? 'has-error' : null ?>">
              <label class="campo">Email:</label>
              <input class="form-control" type="text" name="email" value="<?=$email?>">
              <span class="help-block" style="<?= !isset($errores['email']) ? 'display: none;' : ''; ?>">
                <b class="glyphicon glyphicon-exclamation-sign"></b>
                <?= isset($errores['email']) ? $errores['email'] : ''; ?>
              </span>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
              <label class="campo">Contraseña:</label>
              <input class="form-control" type="password" name="pass" value="">
              <span class="help-block" style="<?= !isset($errores['pass']) ? 'display: none;' : ''; ?>">
                <b class="glyphicon glyphicon-exclamation-sign"></b>
                <?= isset($errores['pass']) ? $errores['pass'] : ''; ?>
              </span>
                </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
              <label class="campo">Repetir Contraseña:</label>
              <input class="form-control" type="password" name="rpass" value="">
              <span class="help-block" style="<?= !isset($errores['pass']) ? 'display: none;' : ''; ?>">
                <b class="glyphicon glyphicon-exclamation-sign"></b>
                <?= isset($errores['pass']) ? $errores['pass'] : ''; ?>
              </span>
                </div>
          </div>
        </div>
        </div>
          <div class="col-xs-6">
            <div class="form-group <?= isset($errores['avatar']) ? 'has-error' : null ?>">
              <label for="name" class="campo">Imagen:</label>             
              <input class="form-control" type="file" name="avatar" value="<?= isset($_FILES['avatar']) ? $_FILES['avatar']['name'] : null ?>">             
              <span class="help-block" style="<?= !isset($errores['avatar']) ? 'display: none;' : '' ; ?>">
                <b class="glyphicon glyphicon-exclamation-sign"></b>
                <?= isset($errores['avatar']) ? $errores['avatar'] : '' ;?>
              </span>
            </div>
          </div>
        <p>
        <button type="submit">¡Crear cuenta!</button>
        <br><br>
          <label class="campo"><a href="login.php">¡Ya tengo cuenta!</a></label>
      </p>
        </div>
        </fieldset>
     
      
    </div>
  </div>
</form>
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
