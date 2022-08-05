<?php
include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InversoftSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./main.css">

    <!-- Fuentes del panel -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Estilo de la carpeta css -->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <!-- Nested Row within Card Body -->

            <div class="row">


                    <div class="p-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-3">Crea una cuenta!</h1>
                        </div>
                        <form action="salmon.php" method="post" class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">

                                                                                  <!-- ↓aca esta la variable ApellidoP↓-->
                                    <input type="text" class="form-control form-control-user" name="ApellidoP"
                                        placeholder="Apellido paterno">
                                </div>
                                <div class="col-sm-6">
                                                                                   <!-- ↓aca esta la variable ApellidoM↓-->
                                    <input type="text" class="form-control form-control-user" name="ApellidoM"
                                        placeholder="Apellido materno">
                                </div>
                            </div>
                            <div class="form-group">
                                                                                      <!-- ↓aca esta la variable correo-->
                                <input type="email" class="form-control form-control-user" name="correo"
                                    placeholder="Correo electronico">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                   <!-- ↓aca esta la passwd↓-->
                                    <input type="password" name="passwd"
                                        id="exampleInputPassword" placeholder="Contraseña">
                                </div>
                                <div class="col-sm-6">                                         <!-- ↓aca esta la variable passwr↓-->
                                    <input type="password" class="form-control form-control-user" name="paswsr" placeholder="Repita su contraseña">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <input type="submit" name="" value="Registrate">
                            </div>
                            </form>
                            <hr>
                            <div class="d-flex justify-content-center d-grid gap-2 col-6 mx-auto">
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Registrate con Google
                            </a>
                          </div>
                          <hr>
                          <div class="d-flex justify-content-center ">
                            <a href="index.html" class="btn btn-facebook btn-user btn-block d-grid gap-2 col-6 mx-auto">
                                <i class="fab fa-facebook-f fa-fw"></i> Registrate con facebook
                            </a>
                          </div>
                          </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="PanelSesion.html">Ya tienes una cuenta? Inicia sesion!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./js/sb-admin-2.min.js"></script>
</body>
</html>
