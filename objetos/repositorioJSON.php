<?php
 class repositorio {
   private conexion;

   public function __construct(){
     // ver nombre DB
    $dsn = 'mysql:host=localhost;dbname=woodsales;charset=utf8mb4;port=3306';
    $username = 'root';
    $password = 'root';
    $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
     try {
       $conexion = new PDO ($dsn, $username, $password, $options);
       $this->conexion = $conexion;
     }catch(PDOException $e){
       echo "Error de conexión";
       exit;
     }
   }

   public function traerTodos() {
       // Traigo la data de todos los usuarios de 'usuarios.json'
       $todosJson = file_get_contents('usuarios.json');
       // Esto me arma un array con todos los usuarios
       $usuariosArray = explode(PHP_EOL, $todosJson);
       // Saco el último elemento que es una línea vacia
       array_pop($usuariosArray);
       // Creo un array vacio, para guardar los usuarios
       $todosPHP = [];
       // Recorremos el array y generamos por cada usuario un array del usuario
       foreach ($usuariosArray as $usuario) {
           $todosPHP[] = json_decode($usuario, true);
       }
       return $todosPHP;
   }

   public function crearUsuario($data, $imagen) {
new ususario($data['name'],$data['email'],$data['pass'])

     $usuario = [
         'id' => traerUltimoID(),
         'name' => $data['name'],
         'email' => $data['email'],
         'pass' => password_hash($data['pass'], PASSWORD_DEFAULT),
         'foto' => 'img/' . $data['email'] . '.' . pathinfo($_FILES[$imagen]['name'], PATHINFO_EXTENSION)
     ];
    return $usuario;
 }

    public function traerUltimoID(){
     // me traigo todos los usuarios
     $usuarios = traerTodos();
     if (count($usuarios) == 0) {
         return 1;
     }
     // En caso de que haya usuarios agarro el ultimo usuario
     $elUltimo = array_pop($usuarios);
     // Pregunto por le ID de ese ultimo usuario
     $id = $elUltimo['id'];
     // A ese ID le sumo 1, para asignarle el nuevo ID al usuario que se esta registrando
     return $id + 1;
 }

    public function existeEmail($email){
     // Traigo todos los usuarios
     $todos = traerTodos();
     // Recorro ese array
     foreach ($todos as $unUsuario) {
         // Si el mail del usuario en el array es igual al que me llegó por POST, devuelvo al usuario
         if ($unUsuario['email'] == $email) {
             return $unUsuario;
         }
     }
     return false;
 }

    public function guardarImagen($laImagen){
     $errores = [];
        if ($_FILES[$laImagen]['error'] == UPLOAD_ERR_OK) {
           // Capturo el nombre de la imagen, para obtener la extensión
           $nombreArchivo = $_FILES[$laImagen]['name'];
           // Obtengo la extensión de la imagen
           $ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
           // Capturo el archivo temporal
           $archivoFisico = $_FILES[$laImagen]['tmp_name'];
           // Pregunto si la extensión es la deseada
           if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' ||$ext == 'JPG' || $ext == 'JPEG' || $ext == 'PNG') {
               // Armo la ruta donde queda gurdada la imagen
               $dondeEstoyParado = dirname(__FILE__);
               $rutaFinalConNombre = $dondeEstoyParado . '/img/' . $_POST['email'] . '.' . $ext;
               // Subo la imagen definitivamente
               move_uploaded_file($archivoFisico, $rutaFinalConNombre);
           } else {
               $errores['imagen'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
           }
       } else {
           // Genero error si no se puede subir
           $errores['imagen'] = 'Error al subir la imagen';
       }
     return $errores;
 }

    public function guardarUsuario($data, $imagen){
     $usuarioJSON = json_encode($data);
     // Inserta el objeto JSON en nuestro archivo de usuarios
     file_put_contents('usuarios.json', $usuarioJSON.PHP_EOL, FILE_APPEND);
     // Devuelvo al usuario para poder auto loguearlo después del registro
     return $usuario;
 }


    public function traerPorId($id){
     // me traigo todos los usuarios
     $todos = traerTodos();
     // Recorro el array de todos los usuarios
     foreach ($todos as $usuario) {
         if ($id == $usuario['id']) {
             return $usuario;
         }
     }
     return false;
 }
    public function getDato($id,$dato){
      $usu= traerPorId($id);
      foreach ($usu as $key => $val) {
       if ($dato == $key) {
           return $val;
       }
   }
 }
}
