<?php
require 'database.php';

$message = '';


if(!empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO user(email,password) VALUE (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt->bindParam(':password',$password);

 if($stmt->execute())
 {
   $message = 'Successfully created new user'; 
 }
   else
   {
    $message = 'error';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgitro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php require 'partials/header.php' ?>
<?php if(!empty($message)): ?>
<p><?= $message ?></p>
<?php endif; ?>
 
<h1>Registro</h1>
<span>o</span> <a href="login.php">login</a>

<form action="signup.php" method="post">
            <input type="email" name="email" placeholder="Introdusca su email">
            <input type="password" name="password" placeholder="introdusca su contraseña">
            <input type="password" name="confirm_password" placeholder="introdusca su contraseña Nueva mente">
            <input type="submit" value="enviar">
        </form>

</body>
</html>