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
        <link href="../public/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
            crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
        </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="menu.html">MENÚ</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearusuario.html">Crear Usuario</a><a class="nav-link" href="tablausuario.html">Tabla Usuarios</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                Proveedores
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearproveedor.html">Crear Proveedores</a><a class="nav-link" href="tablaproveedor.html">Tabla Proveedores</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            >
                            Permisos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearpermisos.html">Crear Permisos</a><a class="nav-link" href="tablapermiso.html">Tabla Permisos</a></nav>
                        </div> 
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                >
                                Permiso Usuario 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearpermisousuario.html">Permiso de Usuarios</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            Categorías
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="crearcategoria.html">Crear
                                    Categoría</a><a class="nav-link" href="tablacategoria.html">Tabla Categoría</a></nav>
                        </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                            >
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="../vistas/crearproductos.html">Crear Producto</a><a class="nav-link" href="../vistas/tablaproducto.html">Tabla Producto</a></nav>
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
   if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE id=$id";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre= $row['nombre'];
        $no_documento= $row['no_documento'];
        $direccion= $row['direccion'];
        $telefono= $row['telefono'];
        $email= $row['email'];
        $cargo= $row['cargo'];
        $username= $row['username'];
        $password= $row['password'];
        $imagen= $row['imagen'];
        $estado= $row['estado'];
        $password2= $row['password2'];
    }
}

?>
<form action="../modelos/edit_user_proceso.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data" >
                        <h4 class="mb-3">Ingresar datos a modificar </h4>
                                            <form class="needs-validation" novalidate>
                                                <div class="row">

                                                
        
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-user-edit"></i>
                                                        <label for="nombre">Nombre Completo</label>
                                                       
                                                        <input type="text" name="nombre" class="form-control"
                                                            placeholder="" autofocus value="<?php echo $nombre; ?>">
                                                          
                                                          
                                                        <div class="invalid-feedback">
                                                            Se requiere un nombre válido.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-passport"></i>
                                                        <label for="no_documento">No. Documento</label>
                                                        <input type="text" name="no_documento" class="form-control"
                                                            placeholder="" autofocus  value="<?php echo $no_documento; ?>">
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


                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-male"></i>
                                                        <label for="cargo">Cargo</label>
                                                        <input type="text" name="cargo" class="form-control"
                                                            placeholder="" autofocus value="<?php echo $cargo; ?>">
                                                        <div class="invalid-feedback">
                                                            Se requiere un cargo válido.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <i class="fas fa-at"></i>
                                                        <label for="username">Username</label>
                                                        <input type="text" name="username" class="form-control"
                                                            placeholder="@usuario" autofocus  value="<?php echo $username; ?>">
                                                        <div class="invalid-feedback">
                                                            Se requiere un usuario válido.
                                                        </div>
                                                    </div>
                                                </div>
                                                <i class="fas fa-lock"></i>
                                                <label for="password" class="control-label">Contraseña</label>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="" autofocus value="<?php echo $password; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-lock"></i>
                                                    <label for="password2" class="control-label">Confirmar Contraseña</label>
                                                    <input type="password" name="password2" class="form-control"
                                                        placeholder="" autofocus value="<?php echo $password2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <i class="far fa-image"></i>
                                                    <label for="imagen" class="control-label">Imagen</label>
                                                    <img height="50px"src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
                                                    <input type="file" 
                                                     name="imagen" class="form-control" placeholder=""
                                                        autofocus >
                                                </div>
                                                <div class="form-group">
                                                    <i class="fas fa-battery-three-quarters"></i>
                                                    <label for="estado" class="control-label">Estado</label>
                                                    <input type="text" name="estado" class="form-control" placeholder=""
                                                        autofocus value="<?php echo $estado; ?>">
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