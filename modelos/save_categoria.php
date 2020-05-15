<?php

include ("db_user.php");



if (isset($_POST['save_categoria'])){
     $nombre_categoria = $_POST['nombre_categoria'];
     $descripcion = $_POST['descripcion'];
     $estado_categoria = $_POST['estado_categoria'];

     $query = "INSERT INTO  categorias(nombre_categoria, descripcion, estado_categoria) 
    VALUES ('$nombre_categoria', '$descripcion', '$estado_categoria')";
     $result = mysqli_query ($conn, $query);
     if (!$result){
         die("Query Failed");
     }

      $_SESSION['message'] = 'Categoría Guardada';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearcategoria.html");
}

?>
                     
      