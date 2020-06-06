<?php

include ("db_user.php");


if (isset($_POST['save_permisousuario'])){
        $id_usuario = $_POST['id_usuario'];
        $id_permiso = $_POST['id_permiso'];

        $validar = "SELECT * FROM permisos_usuario WHERE id_usuario = $id_usuario AND id_permiso = $id_permiso";
        $res = mysqli_query ($conn, $validar);
        if ($res) {
            $row_cnt = $res->num_rows;
            if($row_cnt > 0) {
                echo 'permiso existente';
                session_start();
                header ("Location: ../vistas/crearpermisousuario.php");
                $_SESSION['mensaje'] = 'Permiso Existente';
            } else {
                $query = "INSERT INTO  permisos_usuario (id_usuario, id_permiso) 
        VALUES ('$id_usuario', $id_permiso)";
         $result = mysqli_query ($conn, $query);
         if (!$result){
             die("Query Failed");
         }

         $_SESSION['mensaje'] = '';
   
         header ("Location: ../vistas/tablapermisousuario.php");
            }
        }

        /* $query = "INSERT INTO  permisos_usuario (id_usuario, id_permiso) 
        VALUES ('$id_usuario', $id_permiso)";
         $result = mysqli_query ($conn, $query);
         if (!$result){
             die("Query Failed");
         }

         $_SESSION['message'] = 'Permiso Usuario Guardado';
         $_SESSION['message_type'] = 'info';
   
         header ("Location: ../vistas/tablapermisousuario.php"); */
   }
   
   ?>