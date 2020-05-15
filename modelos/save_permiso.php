<?php

include ("db_user.php");


if (isset($_POST['save_permiso'])){
        $nombre_permiso = $_POST['nombre_permiso'];



        $query = "INSERT INTO  permisos(nombre_permiso) 
        VALUES ('$nombre_permiso')";
         $result = mysqli_query ($conn, $query);
         if (!$result){
             die("Query Failed");
         }

         $_SESSION['message'] = 'Usuario Guardado';
         $_SESSION['message_type'] = 'info';
   
         header ("Location: ../vistas/crearpermisos.html");
   }
   
   ?>