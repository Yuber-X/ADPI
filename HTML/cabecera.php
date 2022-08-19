<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="Index.css">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>

    <title>Index</title>
    
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php"> ADPI </a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="mostrarCarrito.php"> Carrito(<?php echo (empty($_SESSION['CARRITO'] ))?0: count($_SESSION['CARRITO']);
                ?>) </a>
            </li>

            <li class="nav-item active">
            <a class="nav-link" href="catalogo.php"> Catalogo </a>
            </li>

            <li class="nav-item active">
            <a class="nav-link" href="catalogo.php"> Iniciar Seccion </a>
            </li>

            
           
        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

        <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
</nav>

<br/>
<br/>

<div class="container">