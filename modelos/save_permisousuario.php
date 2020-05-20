<?php

include ("db_user.php");


if (isset($_POST['save_permisousuario'])){
        $id_usuario = $_POST['id_usuario'];
        $id_permiso = $_POST['id_permiso'];



        $query = "INSERT INTO  permisos_usuario (id_usuario, id_permiso) 
        VALUES ('$id_usuario', $id_permiso)";
         $result = mysqli_query ($conn, $query);
         if (!$result){
             die("Query Failed");
         }

         $_SESSION['message'] = 'Permiso Usuario Guardado';
         $_SESSION['message_type'] = 'info';
   
         header ("Location: ../vistas/crearpermisousuario.php");
   }
   
   ?>