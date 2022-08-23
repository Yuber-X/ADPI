
        <?php

include 'cn.php';

$id = $_POST['txtid'];
$name=$_POST['txtname'];
$num=$_POST['txtnum'];
$precio=$_POST['txtprec'];


            if ($name != null || $num != null || $precio != null ) {

            $sql2 = "UPDATE productos SET Nombre= '$name', CategoriaID = '$num' , Precio = '$precio' where ProductoID = '$id' ";
            mysqli_query($conexion, $sql2);
        }


?>