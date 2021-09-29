<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Historia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap');    .cuerpos{
        float: left;
        margin-top: 20px;
        margin-left: 10px;
        text-align: center;
        font-family: 'Gluten', cursive;
    }
    a{
        font-family: 'Gluten', cursive;
    }
    .informacion{
        margin-top: 40pc;
        width: 100%;
        height: 400px;
        background-image:url("images/fondo.png");
    }
    .redes, .contacto, .horario{
        width: 24%;;
        height: 300px;
        float: left;
        margin-top: 50px;
        margin-left: 7%;
        font-family: 'Gluten', cursive;
        color: white;
        text-align: center;
    }
    .titulo{
        font-family: 'Gluten', cursive;
        text-align: center;
    }
    .texto, .imagen, .mision, .vision{
        width: 50%;
        height: 200px;
        float: left;
        font-family: 'Gluten', cursive;
        text-align: center;
    }
    </style>
</head>
<body style="background:#FAE5D3">
    <div id="contenedor" >
        <div id="banner">
            <img src="images/banner.png" style="width:100%; height: 250px">
        </div>
        <div class="BarraNavegacion">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <a href="index.php" style="margin-left: 400px;">
                    <img src="images/home.png" width="50px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="historia.php">Nuestra empresa</a>
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
                            <a class="nav-link"  href="./controller//listarProducto.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion.html">Inicie Sección</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="titulo">
            <h1>Historia</h1>
        </div>
        <div class="cuerpo">
            <div class="texto">
                <h3>
                Iniciamos en el año 2020 con pandequesos santarrosano, en medio de la pandemia COVID-19, 
                por la oportunidad que se dio de un local desocupado y muy bien ubicado, poco a poco todo se fue dando, 
                comenzamos comprando algunas máquinas, y posicionando las ventas en el local, tiendas y supermercados.
                <br>
                Expandiendonos hasta tener gran variedad en nuestros productos
                </h3>
            </div>
            <div class="imagen">
                <img src="images/imagen1.jpg" width="600px", height="300px">
            </div>
        </div>
        <div class="cuerpo" style="margin-top: 350px;">
            <div class="mision">
                <h2>Misión</h2>
                <h3>
                En Panaderia MyE nos dedicamos a la elaboración y distribución de productos de panadería,
                 comprometidos con nuestros clientes en brindarles productos de gran calidad y sabor, con un servicio amable y oportuno.
                </h3>
            </div>
            <divc class="vision">
                <h2>Visión</h2>
                <h3>
                Nuestro propósito en el 2023 es ser una empresa posicionada en el mercado, caracterizada por brindar productos de calidad e innovación, 
                ofreciendo una experiencia excepcional de producto y servicio al cliente.
                </h3>
            </divc>
        </div>
        <div class="informacion">
            <div class="redes">
                <h2>Redes Sociales</h2>
                <img src="images/facebook.png" style="width: 50px; height:50px"><h2>FACEBOOK</h2>
                <img src="images/instagram.png" style="width: 50px; height:50px"><h2>INSTRAGRAM</h2>
            </div>
            <div class="contacto">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1402.092171473039!2d-75.56953142432347!3d6.301060003878885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f2604a9a52f%3A0xd27da03066a27ccd!2sCl.%20104%20%2368a20%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1632795133583!5m2!1ses!2sco" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="horario">
            <h2>Contáctenos</h2>
            <h4>Lun - Vie: 7:00 am - 7:00 pm
                Sabados: 7:00 am - 5:00 pm</h4>
            <h2>Domicilio</h2>
            <img src="images/repartidor.png" style="width: 50px; height:50px">
            <h4>3122278893</h4>
            <h4>3122269457</h4>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
</body>
</html>