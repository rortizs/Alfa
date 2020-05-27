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
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        DETALLES MH
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"><i class="fas fa-users-cog"></i>Permiso Usuario</h1>
                    <hr>
                    <div class="col-md-12">
                        <table style="width: 100%;" class="table table-stripedd">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Id_Usuario</th>
                                    <th>Id_Permiso</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                       $query = "SELECT * FROM permisos_usuario";
                       $result = mysqli_query($conn, $query);
                       
                       while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['id_usuario'] ?></td>
                                    <td><?php echo $row['id_permiso'] ?></td>
                                    <td>
                                    <a href="../modelos/edit_user.php?id=<?php echo $row['id']?>" class="btn btn-dark">
                                        <i class="fas fa-edit"></i>

                                        </a>
                                        
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></i>
                                               
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
                                                        ¿Está seguro que quiere eliminar el permiso del usuario?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="../modelos/delete_user.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-block">ELIMINAR<i class="fas fa-trash"></i></i>
                                        
                                        </a>
                                                      <button type="button" class="btn btn-dark btn-block" data-dismiss="modal"><i class="fas fa-arrow-left"></i>Regresar</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../public/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>
    <script src="../public/assets/demo/chart-area-demo.js"></script>
    <script src="../public/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
    </script>
    <script src="../public/assets/demo/datatables-demo.js"></script>
</body>

</html>