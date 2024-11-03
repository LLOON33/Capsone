<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FIRE CAR CONTROL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/icono.png" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--Themify Icon -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/green.css" id="color-opt">
</head>
<body>
       <!-- STRAT NAVBAR -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
    <div class="container">
        <a class="navbar-brand">Datos de vehiculos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto" id="navbar-navlist">
                <li class="nav-item">
                    <a data-scroll class="nav-link" href="http://localhost/FCC/Capsone/Hola_mundo/login.php" >Cerrar Sesion</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto" id="navbar-navlist">
                <li class="nav-item">
                    <a data-scroll class="nav-link" href="http://localhost/FCC/Capsone/Hola_mundo/index.php" >Inicio</a>
                </li>
            </ul>
            <div>
                <ul class="text-right list-unstyled list-inline mb-0 nav-social">
                    <li class="list-inline-item text-white nav-number"><i class="ti-mobile"></i> <span>+56 9 8435 7965</span></li>
                    <li class="list-inline-item"><a href="" class="facebook"><i class="ti-facebook"></i></a></li>
                </ul>
                <!-- end ul -->
            </div>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<section class="bg-login d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-4">
                    <div class="text-center page-heading">
                                <h1 class="text-white">Datos de vehiculos</h1>
                            </div> 
                    <div class=" table bg-white p-4 rounded">
                       <?php
                       include "modelo/conexion.php";
                       include "controlador/eliminar_car.php"
                       ?> 
                        <div class="text-center">
                                <div class=" table col-lg-12 mt-3 mb-4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>   
                                            <th scope="col">Patente</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Año</th>
                                            <th scope="col">Kilometraje actual</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Fecha de ingreso</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $sql=$conexion->query("select * from vehiculos");
                                        while($datos = $sql->fetch_object()) {?>
                                            <tr>
                                                <td><?= $datos->id?></td>
                                                <td><?= $datos->patente?></td>
                                                <td><?= $datos->tipo?></td>
                                                <td><?= $datos->modelo?></td>
                                                <td><?= $datos->anno?></td>
                                                <td><?php echo "$datos->kilometraje_actual"?></td>
                                                <td><?= $datos->estado?></td>
                                                <td><?= $datos->fecha_ingreso?></td>
                                                <td><a href="modificar_vehiculo.php?id=<?=$datos->id?>"><i class="bi bi-pencil-square"></i></a></td>
                                                <td><a href="vehiculo.php?id=<?=$datos->id?>"><i class="bi bi-trash-fill"></i></a></td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    </table>
                                    <button class="btn btn-primary w-100" ><a href="http://localhost/FCC/Capsone/Hola_mundo/vehiculos_reg.php"> Agregar vehiculo</a></button>
                                </div>
                            </div><!-- end row -->
                        </form><!-- end form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>