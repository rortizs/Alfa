<?php
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<!-- <body>
<br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar Sesión</h5>
            <form class="form-signin" action="../modelos/validacion.php">
              <div class="form-label-group">
                <label for="inputUser">Usuario</label>
                <input type="text" name="username" id="inputUser" class="form-control" placeholder="Ingresar Usuario" required autofocus>
              </div>
              <br>
              <div class="form-label-group">
                <label for="inputPassword">Contraseña</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Ingreasr Contraseña" required>
              </div>

              <hr>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body> -->
<body class="bg-dark">
  <br><br><br>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3></div>
                                    <div class="card-body">
                                    <form action="" method="POST">
                                            <div class="form-group">
                                                <label class="control-label">Usuario</label>
                                                       <input type="text" name="username" class="form-control"
                                                       placeholder="Ingrese su usuario." autofocus>
                                                </div> 
                                            <div class="form-group">
                                              <label class="control-label">Contraseña</label>
                                              <input class="form-control" name="password"  type="password" placeholder="Ingrese su Contraseña" />
                                            </div>

              <button class="btn btn-primary btn-block text-uppercase" type="submit">Entrar</button>

              <div class="text-center">
                <?php
                  if(isset($errorLogin)){
                    echo $errorLogin;
                  }
                ?>
              </div>
                                        
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><span><strong>Detalles H&M</strong></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>

