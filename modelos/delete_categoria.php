<?php
     include ("db_user.php");

    if(isset($_GET['id'])){
       $id = $_GET ['id'];
       $query = "DELETE  FROM categorias WHERE id= $id";
       $result =mysqli_query($conn, $query);
       if (!$result){
           die("Query Failed");

       }
       $_SESSION ['message'] = 'Categoría Eliminada';
       $_SESSION ['message_type'] = 'dark'; 
       header("Location: crearcategoria.html");
    }
?>