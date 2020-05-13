<?php

include ("db_user.php");


if (isset($_POST['save_permiso'])){
     $id = $_POST['id'];
     $nombre_permiso = $_POST['nombre_permiso'];


     $query = "INSERT INTO  permisos (id, nombre_permiso) 
    VALUES ('$id', '$nombre_permiso')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Permiso Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: crearpermisos.html");
}

?>