<?php
     include ("db_user.php");

     if(isset($_GET['id'])){
       $id= $_GET['id'];
       $query = "SELECT * FROM permisos WHERE id=$id";
       $result=mysqli_query($conn, $query);
       if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_array($result);
           $nombre_permiso = $row['nombre_permiso'];
       }
     }


     if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombre_permiso = $_POST['nombre_permiso'];
      
      
        $query = "UPDATE permisos set id = '$id', nombre_permiso = '$nombre_permiso',  
       WHERE id=$id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Permiso Actualizado';
        $_SESSION['message_type'] = 'success';
        header('Location: tablapermiso.html');
      }



?>


<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit_permiso.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="id" type="text" class="form-control" value="<?php echo $id; ?>" placeholder="Id">
           </div>
           <div class="form-group">
          <input name="nombre_permiso" type="text" class="form-control" value="<?php echo $nombre_permiso; ?>" placeholder="Nombre permiso">
           </div>
         
            
              <button class="btn btn-info" name="update">
               Actualizar
              </button>
      </form>
      </div>
    </div>
  </div>
</div>
