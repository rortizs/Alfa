<?php
     include ("db_user.php");

    if(isset($_GET['id'])){
       $id = $_GET ['id'];
       $query = "DELETE  FROM permisos WHERE id= $id";
       $result =mysqli_query($conn, $query);
       if (!$result){
           die("Query Failed");

       }
       $_SESSION ['message'] = 'permiso Eliminado';
       $_SESSION ['message_type'] = 'dark'; 
       header("Location: tablapermiso.html");
    }
?>