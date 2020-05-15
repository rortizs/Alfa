<?php

include ("db_user.php");



if (isset($_POST['save_user'])){
     $nombre = $_POST['nombre'];
     $no_documento = $_POST['no_documento'];
     $direccion = $_POST['direccion'];
     $telefono = $_POST['telefono'];
     $email = $_POST['email'];
     $cargo = $_POST['cargo'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $imagen = $_POST['imagen'];
     $estado = $_POST['estado'];
     $password2 = $_POST['password2'];
    $ocultar=password_hash($password, PASSWORD_DEFAULT);
    $ocultar2=password_hash($password2, PASSWORD_DEFAULT);

     $query = "INSERT INTO  usuarios(nombre, no_documento, direccion, telefono, email, cargo, username, password, imagen, estado, password2) 
    VALUES ('$nombre', '$no_documento', '$direccion', '$telefono', '$email', '$cargo', '$username', '$ocultar', '$imagen', '$estado', '$ocultar2')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Usuario Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: crearusuario.html");
}

?>
                     
      