<?php

include ("db_user.php");



if (isset($_POST['save_proveedor'])){
     $nombre = $_POST['nombre'];
     $numero_documento = $_POST['numero_documento'];
     $direccion = $_POST['direccion'];
     $telefono = $_POST['telefono'];
     $email = $_POST['email'];


     $query = "INSERT INTO  proveedores(nombre, numero_documento, direccion, telefono, email) 
    VALUES ('$nombre', '$numero_documento', '$direccion', '$telefono', '$email')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Proveedor Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearproveedor.html");
}

?>
                     
      