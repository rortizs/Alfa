<?php

include ("db_user.php");

if (isset($_POST['save_producto'])){
     $codigo = $_POST['codigo'];
     $nombre = $_POST['nombre'];
     $stock = $_POST['stock'];
     $descripcion = $_POST['descripcion'];

     $imagen = $_FILES['imagen']['name'];
     $archivo = $_FILES['imagen']['tmp_name'];
     $ruta='../public/assets/img';
     
     $ruta=$ruta .'/'.$imagen;
     
     move_uploaded_file($archivo,$ruta);

     $query = "INSERT INTO  productos(codigo, nombre, stock, descripcion, imagen) 
      Values ('.$codigo.', '.$nombre.', '.$stock.', '.$descripcion.', '.$ruta.')";
     $result = mysqli_query ($conn, $query);
     if ($result){
         echo("Query Failed");
     }

      $_SESSION['message'] = 'Producto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearproductos.html");

    }
?>