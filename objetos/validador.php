<?php

class validador {
  static public function validarSignin($data, $archivo, $repo) {
      $errores = [];
      $name = trim($_POST['name']);
      $email = strtolower(trim($_POST['email']));
      $pass = trim($_POST['pass']);
      $rpass = trim($_POST['rpass']);
      $repositorio=$repo;
      // Valido cada campo del formulario y por cada error genero una posición en el array de errores ($errores) que inicialmente estaba vacío
      if ($name == '') { // Si el nombre está vacio
          $errores['name'] = "Completa tu nombre";
      }
      if ($email == '') { // Si el email está vacio
          $errores['email'] = "Completa tu email";
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          // Si el email no es un formato valido
          $errores['email'] = "Error con formato no válido.";
      }
      elseif ($repositorio->existeEmail($email)) {
        // Si el email ya está registrado vacio
          $errores['email'] = "Este email ya existe.";
      }
      if ($pass == '' || $rpass == '') {
        // Si la contraseña o repetir contraseña está(n) vacio(s)
          $errores['pass'] = "Por favor completa tus passwords";
      }
      elseif ($pass != $rpass) {
          $errores['pass'] = "Tus contraseñas no coinciden";
      }
      if($_FILES[$archivo]['name'] != ''){
          if ($_FILES[$archivo]['error'] != UPLOAD_ERR_OK) { // Si no subieron ninguna imagen
              $errores['avatar'] = "ERROR en la subida de la foto";
          } else {
              $ext = strtolower(pathinfo($_FILES[$archivo]['name'], PATHINFO_EXTENSION));
              if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg'&& $ext != 'PNG' && $ext != 'JPEG'&& $ext != 'JPG') {
                  $errores['avatar'] = "Formatos admitidos: JPG o JPEG o PNG";
              }
          }
      }
      return $errores;
  }

  static public function validarLogin($data,$repositorio) {
      $arrayDeErroresADevolver = [];
      $email = strtolower(trim($data['email']));
      $pass = trim($data['pass']);
      $repo=$repositorio;
      if ($email == '') {
          $arrayDeErroresADevolver['email'] = 'Completá tu email';
      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $arrayDeErroresADevolver['email'] = 'Formato de email inválido';
      }
      elseif (!$repo->existeEmail($email)) {
          $arrayDeErroresADevolver['email'] = 'Este email no está registrado';
      // Si el mail existe, me guardo al usuario dueño del mismo
      // $usuario = existeEmail($email);
      } else {
        $usuario=$repo->traerPorEmail($email);
        $objpass=$usuario->getPass();
        var_dump($usuario);
        var_dump($objpass);
        var_dump($pass);
        var_dump('Nuevo mash->'.password_hash('123' ,PASSWORD_DEFAULT).'<-');
        echo 'Verificado->'.password_verify($pass,$objpass).'<-';
          // Pregunto si coindice la password escrita con la guardada en la DB
        if (!password_verify($pass,$objpass)) {
            $arrayDeErroresADevolver['pass'] = "Credenciales incorrectas";
        }
      }
      return $arrayDeErroresADevolver;
  }
}
