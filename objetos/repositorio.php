<?php
 class repositorio {
   private conexion;//???

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
       echo "Error de conexión".$e->getMessage();
       exit;
     }
   }

   public function traerTodos() {
     global $db;
     $consulta = $db->prepare("SELECT * FROM usuario");
     $consulta->execute();
     $tMUFA = $consulta->fetchAll(PDO::FETCH_ASSOC);
     $usuarios = [];
     foreach ($tMUFA as $mUFA) {
       $usuarios[] = new Usuario($mUFA["id"], $mUFA["nombre"], $mUFA["pass"], $mUFA["mail"], $mUFA["tipo"],$mUFA["avatar"] )
       }
       return $usuarios;
   }//chekear si no esta inutilisado

   public function crearUsuario($data, $imagen) {

     $foto='img/' . $data['email'] . '.' . pathinfo($_FILES[$imagen]['name'], PATHINFO_EXTENSION);
     $usuario= new ususario(default,$data['name'],$data['email'],$data['pass'],$foto,default);

    return $usuario;
 }


    public function existeEmail($email){

     global $db;
     $consulta = $db->prepare("SELECT email FROM usuario WHERE email = :email");
     $consulta->execute([':email'=>$email]);
     $mUFA = $consulta->fetch(PDO::FETCH_ASSOC);

      if ($mUFA==NULL) {
        return NULL;
        //el mail no existe
      }
      else {
        return TRUE;
        //el mail  existe
      }
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
               $errores['imagen'] = 'El formato tiene que ser JPG, JPEG,o PNG';
           }
       } else {
           // Genero error si no se puede subir
           $errores['imagen'] = 'Error al subir la imagen';
       }
     return $errores;
 }

    public function guardarUsuario($data, $imagen){
      global $db;

      $nombre = $usuario->getNombre();
      $email=$usuario->getMail();
      $contra=$usuario->getPass();
      $foto=$usuario->getAvatar();

      $consulta = $db->prepare("INSERT into usuarios values(default,:nombre,:mail,:contra,:foto, default)");
      $consulta->execute(':nombre'=>$nombre,':mail'=>$mail,':contra'=>$contra, ':foto'=>$foto);

 }


    public function traerPorId($id){
      global $db;
      $consulta = $db->prepare("SELECT * FROM usuario WHERE id = :id");
      $consulta->execute([':id'=>$id]);
      $mUFA = $consulta->fetch(PDO::FETCH_ASSOC);
      $usuario = new Usuario($mUFA["id"], $mUFA["nombre"], $mUFA["pass"], $mUFA["mail"], $mUFA["tipo"],$mUFA["avatar"]);

      return $usuario;
 }
   public function traerPorEmail($email){
     global $db;
     $consulta = $db->prepare("SELECT * FROM usuario WHERE email = :email");
     $consulta->execute([':email'=>$email]);
     $mUFA = $consulta->fetch(PDO::FETCH_ASSOC);
     $usuario = new Usuario($mUFA["id"], $mUFA["nombre"], $mUFA["pass"], $mUFA["mail"], $mUFA["tipo"],$mUFA["avatar"]);

     return $usuario;
  }

    public function getDato($id,$dato){
      global $db;
      $consulta = $db->prepare("SELECT :dato FROM usuario WHERE id = :id");
      $consulta->execute([':id'=>$id, ':dato'=>$dato]);
      $mUFA = $consulta->fetch(PDO::FETCH_ASSOC);
      return $mUFA;
    }


}
