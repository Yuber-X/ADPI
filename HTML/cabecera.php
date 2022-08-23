<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="*.cabecera.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>

    <title>ADPI</title>
    
    
</head>
<body>

<!--  HEADER  -->

<div class="fondo_header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top modify-nav barra_contenedor">
        <a class="navbar-brand titulo" href="index.php"> <em><em>ADPI</em></em></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav posicionar" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto posicionar">
                <li class="nav-item active">
                    <a class="nav-link" href="helper.php">Contacto </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="mostrarCarrito.php"> Carrito(<?php echo (empty($_SESSION['CARRITO'] ))?0: count($_SESSION['CARRITO']);
                    ?>) </a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<!--  MENU  -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse menu_nav" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto menu_horizontal">
      <li class="nav-item active">
        <a class="nav-link" href="#">Case</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Catalogo.php">Componentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Monitores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Perifericos</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">