<?php

include ("db_user.php");


if (isset($_POST['save_producto'])){
     $nombre= $_POST['nombre'];
     $codigo = $_POST['codigo'];
     $stock= $_POST['stock'];
     $descripcion= $_POST['descripcion'];
     $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

     $query = "INSERT INTO  productos(nombre, codigo , stock, descripcion, imagen) 
      Values ('$nombre', '$codigo', '$stock', '$descripcion', '$imagen')";
     $result = mysqli_query ($conn, $query);
     if ($result){
         echo("Query Failed");
     }

      $_SESSION['message'] = 'Producto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearproductos.html");
    }
    
?>