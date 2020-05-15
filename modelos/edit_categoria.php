<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detalles MH</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">MENÚ</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      
                        
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Crear Usuarios</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearusuario.php">Crear Usuario</a><a class="nav-link" href="tablausuario.php">Tabla Usuarios</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                Proveedores
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearproveedor.php">Crear Proveedores</a><a class="nav-link" href="tablaproveedor.php">Tabla Proveedores</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            >
                            Permisos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearpermisos.php">Crear Permisos</a><a class="nav-link" href="tablapermiso.php">Tabla Permisos</a></nav>
                        </div> 
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                       
                        DETALLES MH
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETALLES MH</h1>
<?php
     include ("db_user.php");

     if(isset($_GET['id'])){
       $id= $_GET['id'];
       $query = "SELECT * FROM categorias WHERE id=$id";
       $result=mysqli_query($conn, $query);
       if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_array($result);
           $nombre_categoria = $row['nombre_categoria'];
           $descripcion = $row['descripcion'];
           $estado_categoria= $row['estado_categoria'];
           
       }
     }


     if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $nombre_categoria = $_POST['nombre_categoria'];
        $descripcion = $_POST['descripcion'];
        $estado_categoria = $_POST['estado_categoria'];

       
      
        $query = "UPDATE categorias set nombre_categoria = '$nombre_categoria', descripcion = '$descripcion', estado_categoria = '$estado_categoria',
        WHERE id=$id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Categoría Actualizada';
        $_SESSION['message_type'] = 'success';
        header('Location: crearcategoria.html');
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
           <div class="form-group">
          <input name="cargo" type="text" class="form-control" value="<?php echo $cargo; ?>" placeholder="Cargo">
           </div>
           <div class="form-group">
          <input name="password" type="password" class="form-control" value="<?php echo $password; ?>" placeholder="Contraseña">
           </div>
           <div class="form-group">
          <input name="imagen" type="text" class="form-control" value="<?php echo $imagen; ?>" placeholder="Imagen">
           </div>
           <div class="form-group">
          <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Estado">
           </div>
           <div class="form-group">
          <input name="password2" type="password" class="form-control" value="<?php echo $password2; ?>" placeholder="Contraseña 2">
           </div>
            
              <button class="btn btn-info" name="update">
               Actualizar
              </button>
      </form>
      </div>
    </div>
  </div>
</div>
