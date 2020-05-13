<?php
     include ("db_proveedor.php");

    if(isset($_GET['id'])){
       $id = $_GET ['id'];
       $query = "DELETE  FROM proveedores WHERE id= $id";
       $result =mysqli_query($conn, $query);
       if (!$result){
           die("Query Failed");

       }
       $_SESSION ['message'] = 'Proveedor Eliminado';
       $_SESSION ['message_type'] = 'dark'; 
       header("Location: tablaproveedor.html");
    }
?>