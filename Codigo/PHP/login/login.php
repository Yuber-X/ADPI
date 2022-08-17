<?php 
session_start();
$message ='';

require 'database.php';
    if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT id,email,password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $result = $records->fetch(PDO::FETCH_ASSOC);
    echo $records->fetch(PDO::FETCH_ASSOC);
  
    
    if (count(array($result)) > 0 && password_verify($_POST['password'], $result['password'])){
            $_SESSION['user_id'] = $result['id'];
            echo 'ejeccutado';
            header("locaction: /login");
        }

        else{
            echo 'no ejecutado';
            $message = 'la Contraseña y el usuario no coinsiden';
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>

    <?php require 'partials/header.php' ?>


    <h1>Login</h1>

    <span>o</span> <a href="signup.php">registro</a>

        <?php if(empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif;?>

        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Introdusca su email">
            <input type="password" name="password" placeholder="introdusca su contraseña">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>