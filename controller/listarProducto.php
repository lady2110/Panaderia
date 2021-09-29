<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>Galeria de Productos</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <a href="index.php" style="margin-left: 400px;">
                    <img src="/images/home.png" width="50px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/historia.php">Nuestra empresa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="nuestraempresa.html" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servicios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="rostro.html">Panaderia</a>
                                <a class="dropdown-item" href="ojos.html">Pasteleria</a>
                                <a class="dropdown-item" href="labios.html">Postres</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./controller//listarProducto.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion.html">Inicie Sección</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <div class="container mt-3">
        <div class="row">
            
            <?php

include_once '../conexion.php';
include_once '../producto.php';

$conexion = new Conexion();
$db = $conexion->getConexion();

$producto = new Producto($db);
$objPro = $producto->getPro();
$listaPro = $objPro->num_rows;

while ($row = mysqli_fetch_row($objPro)) {
    ?>
                     
                     <div class="col-lg-4  col-md-6  col-sm-12">
                        <div class="card">
                            <img src="/images/<?php echo $row[4]; ?>" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row[1]; ?></h5>
                                <p class="card-text">
                                    Precio $: <?php echo $row[2]; ?>
                                </p>
                                <a href="#" class="btn btn-primary">Comprar ahora!!!</a>
                            </div>
                        </div>
                    </div>
                <?php
                } //fin while
                ?>


            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>