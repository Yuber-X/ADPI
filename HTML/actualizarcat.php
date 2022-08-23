
        <?php

include 'cn.php';

$id = $_POST['txtid'];
$name=$_POST['txtcat'];




            if ($name != null   ) {

            $sql2 = "UPDATE categorias SET Nombres= '$name' where IDproductos = '$id' ";
            mysqli_query($conexion, $sql2);
        }


?>