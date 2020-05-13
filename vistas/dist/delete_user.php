<?php
     include ("db_user.php");

    if(isset($_GET['id'])){
       $id = $_GET ['id'];
       $query = "DELETE  FROM usuarios WHERE id= $id";
       $result =mysqli_query($conn, $query);
       if (!$result){
           die("Query Failed");

       }
       $_SESSION ['message'] = 'Usuario Eliminado';
       $_SESSION ['message_type'] = 'dark'; 
       header("Location: crearusuario.html");
    }
?>