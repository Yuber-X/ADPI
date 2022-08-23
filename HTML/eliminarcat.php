<?php
include 'cn.php';
$id=$_GET['id'];
$sql="DELETE from categorias where ID='".$id."'";
mysqli_query($conexion, $sql);