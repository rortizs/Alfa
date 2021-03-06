<?php include ("../modelos/db_user.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Detalles MH</title>
    <link rel="icon" type="image/png" href="../public/assets/img/globo-title.png"/>
    <link href="../public/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" >

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="../vistas/menu.php">MENÚ</a><button class="btn btn-link btn-sm order-1 order-lg-0"
            id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="../modelos/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-users"></i>
                            Usuarios                            
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearusuario.html"><i class="fas fa-user-plus"></i>Crear
                                    Usuario</a><a class="nav-link" href="../vistas/tablausuario.php"><i class="fas fa-table"></i>Tabla Usuarios</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-briefcase"></i>Proveedores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearproveedor.html"><i class="fas fa-wallet"></i>Crear
                                    Proveedores</a><a class="nav-link" href="../vistas/tablaproveedor.php"><i class="fas fa-table"></i>Tabla Proveedores</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-chess-board"></i> Permisos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearpermisos.html"><i class="fas fa-plus-square"></i>Crear
                                    Permisos</a><a class="nav-link" href="../vistas/tablapermiso.php"><i class="fas fa-table"></i>Tabla Permisos</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-user-shield"></i>   Permiso Usuario
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                                    href="../vistas/crearpermisousuario.php"><i class="fas fa-user-plus"></i>Crear
                                    Permiso Usuario</a><a class="nav-link" href="../vistas/tablapermisousuario.php"><i class="fas fa-table"></i>Tabla Permiso Usuario</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-tags"></i>Categorías
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearcategoria.html"><i class="fas fa-tag"></i>Crear
                                    Categoría</a><a class="nav-link" href="../vistas/tablacategoria.php"><i class="fas fa-table"></i>Tabla Categoría</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-gifts"></i>Producto
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearproductos.html"><i class="fas fa-gift"></i>Crear
                                    Producto</a><a class="nav-link" href="../vistas/tablaproducto.php"><i class="fas fa-table"></i>Tabla Producto</a></nav>
                        </div>
                    </div>
                    <div style="position: absolute;bottom: 0;width: -webkit-fill-available;" class="sb-sidenav-footer">
                        DETALLES MH
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">DETALLES MH</h1>


                        <?php
   if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query = "SELECT * FROM proveedores WHERE id=$id";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre= $row['nombre'];
        $numero_documento= $row['numero_documento'];
        $direccion= $row['direccion'];
        $telefono= $row['telefono'];
        $email= $row['email'];
        
    }
}

?>



      <form action="../modelos/edit_prov_proceso.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
      <h4 class="mb-3">Ingresar datos a modificar </h4>
                                            <form class="needs-validation" novalidate>
                                                <div class="row">

                                                
        
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-user-edit"></i>
                                                        <label for="nombre">Nombre</label>
                                                       
                                                        <input type="text" name="nombre" class="form-control"
                                                            placeholder="" autofocus value="<?php echo $nombre; ?>">
                                                          
                                                          
                                                        <div class="invalid-feedback">
                                                            Se requiere un nombre válido.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-passport"></i>
                                                        <label for="numero_documento">No. Documento</label>
                                                        <input type="text" name="numero_documento" class="form-control"
                                                            placeholder="" autofocus  value="<?php echo $numero_documento; ?>">
                                                        <div class="invalid-feedback">
                                                            Se requiere un número de documento válido.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <i class="far fa-address-card"></i>
                                                    <label for="direccion" class="control-label">Dirección</label>
                                                    <input type="text" name="direccion" class="form-control"
                                                        placeholder="Eje. Ciudad" autofocus value="<?php echo $direccion; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <i class="fas fa-phone-square-alt"></i>
                                                    <label for="telefono" class="control-label">Teléfono</label>
                                                    <input type="text" name="telefono" class="form-control"
                                                        placeholder="" autofocus value="<?php echo $telefono; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-envelope"></i>
                                                    <label for="email" class="control-label">E-mail</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="ejemplo@gmail.com" autofocus value="<?php echo $email; ?>">
                                                </div>


                                                
                                             
                                                <center>
                                                <button class="btn btn-dark" name="update">
                                                 Actualizar
                                                 </button>
                                                 </center>
                                               
              <br></br>
      </form>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html> 
