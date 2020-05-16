<?php
     include ("db_user.php");

     if(isset($_GET['id'])){
       $id= $_GET['id'];
       $query = "SELECT * FROM productos WHERE id=$id";
       $result=mysqli_query($conn, $query);
       if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_array($result);
           $codigo = $row['codigo'];
           $nombre = $row['nombre'];
           $stock = $row['stock'];
           $descripcion = $row['descripcion'];
           $imagen= $row['imagen'];
       }
     }


     if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $id_categoria = $_GET['id_categoria'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $stock= $_POST['stock'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
      
      
        $query = "UPDATE productos set codigo = '$codigo', nombre = '$nombre', stock = '$stock', descripcion = '$descripcion',
        imagen = '$imagen'  
       WHERE id=$id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Producto Actualizado';
        $_SESSION['message_type'] = 'success';
        header('Location: ../vistas/tablaproductos.php');
      }



?>


<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre">
           </div>
           <div class="form-group">
          <input name="no_documento" type="text" class="form-control" value="<?php echo $no_documento; ?>" placeholder="No. Documento">
           </div>
           <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Direccion">
           </div>
           <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Teléfono">
           </div>
           <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Email">
           </div>
         
            
              <button class="btn btn-info" name="update">
               Actualizar
              </button>
      </form>
      </div>
    </div>
  </div>
</div>