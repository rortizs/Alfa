<?php include ("db_user.php")
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
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                             >
                             Producto
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearproductos.php">Crear Producto</a><a class="nav-link" href="tablaproducto.php">Tabla Producto</a></nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                Categorías
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearcategoria.php">Crear Categoría</a><a class="nav-link" href="tablacategoria.php">Tabla Categoría</a></nav>
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

    
                                                <div class="container-fluid">
                                                    <div class="row">
                                                       <div class="col-md-10">
                                                
                                                          <?php if (isset($_SESSION['message'])){ ?>
                                                                 <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                                                                 <?= $_SESSION['message'] ?>
                                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                       <span aria-hidden="true">&times;</span>
                                                                 </button>
                                                                 </div>
                                                          <?php session_unset();} ?> 
                                                          <div class="card card-body">
                                                          <form action="save_producto.php" method="POST">
                                                          <div class="col-md-8 order-md-1">
                              <h4 class="mb-3">Ingresar datos para la creacion de Productos</h4>
                              <form class="needs-validation" novalidate>
                                <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="nombre">Nombre del Producto</label>
                                    <input type="text" name="nombre" class="form-control"
                                                                       placeholder="" autofocus>
                                    <div class="invalid-feedback">   
                                   Se requiere un nombre válido.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="numero_documento">Codigo</label>
                                    <input type="text" name="numero_documento" class="form-control"
                                                                       placeholder="" autofocus>
                                    <div class="invalid-feedback">   
                                   Se requiere un codigo válido.
                                    </div>
                                  </div>
                                </div>
                                                                <div class="form-group">
                                                                <label for="direccion" class="control-label">Stock</label>
                                                                       <input type="text" name="direccion" class="form-control"
                                                                       placeholder="" autofocus>
                                                                </div> 
                                                                
                                                                <div class="form-group">
                                                                <label for="telefono" class="control-label">Descripcion</label>
                                                                       <input type="text" name="telefono" class="form-control"
                                                                       placeholder="" autofocus>
                                                                </div> 
                                                                <div class="form-group">
                                                                <label for="email" class="control-label">Imagen</label>
                                                                       <input type="text" name="email" class="form-control"
                                                                       placeholder="" autofocus>
                                                                </div> 
                                                                
                             
                               
                                   
                                                                 
                                                                     <input type="submit" class="btn btn-dark btn-block"
                                                                     name="save_producto" value="Guardar">
                                                              </form>
                                                              
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