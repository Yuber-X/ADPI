<?php
include 'cn.php';
$id=$_GET['id'];
$sql="DELETE from productos where ProductoID='".$id."'";
mysqli_query($conexion, $sql);