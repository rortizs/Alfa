<?php

 include ("../modelos/db_user.php")
?>

<?php

if (isset($_POST['save_productp'])){
    $id_categoria = $_POST['id_categoria'];
     $nombre = $_POST['codigo'];
     $nombre = $_POST['nombre'];
     $stock = $_POST['stock'];
     $descripcion = $_POST['descripcion'];
     $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

     $query = "INSERT INTO  productos(id_categoria, codigo, nombre, stock, descripcion, imagen) 
      Values ('$id_categoria',$codigo', '$nombre', '$stock', '$descripcion', '$imagen')";
     $result = mysqli_query ($conn, $query);
     if ($result){
         echo("Query Failed");
     }

      $_SESSION['message'] = 'Producto Guardado';
      $_SESSION['message_type'] = 'info';

      header ("Location: ../vistas/crearproductos.html");

    
?>