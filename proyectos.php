<?php 

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagenes/monitor_computer_13900.png" />
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/portafolio.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>PORTAFOLIO</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Portafolio personalizado.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="https://nvillafane05.github.io/portafolio/" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/login.php" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Registro para ingresar al sistema.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="https://nvillafane.000webhostapp.com/authentication/" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/sitio.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>Sitio Web </h2>
                    </div>
                    <div class="col-12 py-3">
                        <p> Sitio web funcional .</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="http://nvillafane05.github.io/sitio_responsivo_web/" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php";?>
</body>

</html>