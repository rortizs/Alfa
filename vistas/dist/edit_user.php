<?php
     include ("db_user.php");

     if(isset($_GET['id'])){
       $id= $_GET['id'];
       $query = "SELECT * FROM usarios WHERE id=$id";
       $result=mysqli_query($conn, $query);
       if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_array($result);
           $nombre = $row['nombre'];
           $no_documento = $row['no_documento'];
           $direccion = $row['direccion'];
           $telefono = $row['telefono'];
           $email = $row['email'];
           $cargo = $row['cargo'];
           $username = $row['username'];
           $contrasena = $row['contrasena'];
           $imagen = $row['imagen'];
           $estado = $row['estado'];
           $contrasena2 = $row['contrasena2'];
       }
     }


     if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $no_documento = $_POST['no_documento'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $cargo = $_POST['cargo'];
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];
        $imagen = $_POST['imagen'];
        $estado = $_POST['estado'];
        $contrasena2 = $_POST['contrasena2'];
      
        $query = "UPDATE usuarios set nombre = '$nombre', no_documento = '$no_documento', direccion = '$direccion', telefono = '$telefono',
        email = '$email', cargo = '$cargo', username = '$username', contrasena = '$contrasena', imagen = '$imagen', estado = '$estado',  
        contrasena2 = '$contrasena2' WHERE id=$id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Usuario Actualizado';
        $_SESSION['message_type'] = 'success';
        header('Location: crearusuario.html');
      }



?>

<?php include('vistas/dist/crearusuario.html'); ?>
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
           <div class="form-group">
          <input name="cargo" type="text" class="form-control" value="<?php echo $cargo; ?>" placeholder="Cargo">
           </div>
           <div class="form-group">
          <input name="contrasena" type="password" class="form-control" value="<?php echo $contrasena; ?>" placeholder="Contraseña">
           </div>
           <div class="form-group">
          <input name="imagen" type="text" class="form-control" value="<?php echo $imagen; ?>" placeholder="Imagen">
           </div>
           <div class="form-group">
          <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Estado">
           </div>
           <div class="form-group">
          <input name="contrasena2" type="password" class="form-control" value="<?php echo $contrasena2; ?>" placeholder="Contraseña 2">
           </div>
            
              <button class="btn btn-info" name="update">
               Actualizar
              </button>
      </form>
      </div>
    </div>
  </div>
</div>
