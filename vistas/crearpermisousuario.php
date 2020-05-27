<?php include ("../modelos/db_user.php")
?>
<html lang="es">

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
        <a class="navbar-brand" href="menu.php">MENÚ</a><button class="btn btn-link btn-sm order-1 order-lg-0"
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
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearusuario.html"><i class="fas fa-user-plus"></i>Crear
                                    Usuario</a><a class="nav-link" href="tablausuario.php"><i class="fas fa-table"></i>Tabla Usuarios</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-briefcase"></i>Proveedores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearproveedor.html"><i class="fas fa-wallet"></i>Crear
                                    Proveedores</a><a class="nav-link" href="tablaproveedor.php"><i class="fas fa-table"></i>Tabla Proveedores</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-chess-board"></i> Permisos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearpermisos.html"><i class="fas fa-plus-square"></i>Crear
                                    Permisos</a><a class="nav-link" href="tablapermiso.php"><i class="fas fa-table"></i>Tabla Permisos</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-user-shield"></i>   Permiso Usuario
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                                    href="crearpermisousuario.php"><i class="fas fa-user-plus"></i>Crear
                                    Permiso Usuario</a><a class="nav-link" href="tablapermisousuario.php"><i class="fas fa-table"></i>Tabla Permiso Usuario</a></nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-tags"></i>Categorías
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearcategoria.html"><i class="fas fa-tag"></i>Crear
                                    Categoría</a><a class="nav-link" href="tablacategoria.php"><i class="fas fa-table"></i>Tabla Categoría</a>
                            </nav>
                            </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <i class="fas fa-briefcase"></i>Productos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearproductos.html"><i class="fas fa-wallet"></i>Crear
                                    Productos</a><a class="nav-link" href="tablaproducto.php"><i class="fas fa-table"></i>Tabla Producto</a>
                            </nav>
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
                    <h1 class="mt-4"> <i class="fas fa-clipboard-check"></i>Crear Permiso Usuario</h1>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                               <!-- <?php if (isset($_SESSION['message'])){ ?>
                                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show"
                                    role="alert">
                                    <?= $_SESSION['message'] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php session_unset();} ?> -->
                                
                                <div class="card card-body">
                                    <form action="../modelos/save_permisousuario.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-md-8 order-md-1">
                                                <h4 class="mb-3"><i class="fas fa-male"></i>Ingresar datos para la creación del permiso </h4>
                                                <form class="needs-validation" novalidate>
                                                    
                                       
                                                                 <div class="input-group mb-3">
                                                               <div class="input-group-prepend">
                                                           <label class="input-group-text" for="id_usuario"> <i class="fas fa-male"></i>Usuario</label>
                                                                </div>
                                                                <select class="custom-select" name="id_usuario" id="id_usuario">
                                                           
                                                            <?php

                                                            $query_usuario = mysqli_query($conn, "SELECT id, nombre FROM usuarios");
                                                            $query_permiso = mysqli_query($conn, "SELECT id, nombre_permiso FROM permisos");
                                                            $result = mysqli_num_rows( $query_usuario);
                                                            mysqli_close($conn);
                                                            ?> 

                                                    
                                                        <option selected>Seleccione el usuario...</option>
                                                        <?php

                                                         if($result > 0){
                                                             while($usuario = mysqli_fetch_array($query_usuario)){

                                                          ?>
                                                         
                                                          <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre']; ?> </option>
                                                          <?php
                                                             }
                                                         }
                                                         ?>
                                                        </select>
                                                        
                                                         </div>

                                                         <div class="input-group mb-3">
                                                               <div class="input-group-prepend">
                                                           <label class="input-group-text" for="id_permiso"> <i class="fas fa-male"></i>Permiso</label>
                                                                </div>
                                                                <select class="custom-select" name="id_permiso" id="id_permiso">
                                                           
                                                            <?php

                                                            $result = mysqli_num_rows( $query_permiso);
                                                       
                                                            ?> 

                                                    
                                                        <option selected>Seleccione el permiso...</option>
                                                        <?php

                                                         if($result > 0){
                                                             while($permiso = mysqli_fetch_array($query_permiso)){

                                                          ?>
                                                         
                                                          <option value="<?php echo $permiso['id']; ?>"><?php echo $permiso['nombre_permiso']; ?> </option>
                                                          <?php
                                                             }
                                                         }
                                                         ?>
                                                        </select>
                                                        
                                                         </div>
                                
                                                       
                                                            <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModal"><i class="far fa-save"></i>
                                                Guardar
                                              </button>
                                              
                                              <!-- Modal -->
                                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>AVISO</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Desea guardar el Permiso del Usuario?
                                                    </div>
                                                    <div class="modal-footer">
                                                   
                                            <input type="submit" class="btn btn-dark btn-block"
                                                            name="save_permisousario" value="Guardar">
                                                      <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                </form>
    
                                            </div>
    
                                    </div>


                        
                            <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
                                crossorigin="anonymous"></script>
                            <script src="../public/js/scripts.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                                crossorigin="anonymous">
                            </script>
                            <script src="../public/assets/demo/chart-area-demo.js"></script>
                            <script src="../public/assets/demo/chart-bar-demo.js"></script>
                            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
                                crossorigin="anonymous"></script>
                            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
                                crossorigin="anonymous">
                            </script>
                            <script src="../public/assets/demo/datatables-demo.js"></script>
</body>

</html>