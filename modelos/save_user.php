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
     $password2 = $_POST['password2'];
     $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
     $estado = $_POST['estado'];
    $ocultar=md5($password);
    $ocultar2=md5($password2);

     $query = "INSERT INTO  usuarios(nombre, no_documento, direccion, telefono, email, cargo, username, password, password2, imagen, estado) 
    VALUES ('$nombre', '$no_documento', '$direccion', '$telefono', '$email', '$cargo', '$username', '$ocultar', '$ocultar2', '$imagen', '$estado')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Usuario Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearusuario.html");
}

?>
                     
      