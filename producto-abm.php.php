<?php 
include 'conexion.php.php';

if($_GET['op']=='eliminar'){
    $codigo= $_GET['id'];
    $sql= " delete from productos where codigo=" . $codigo;

}else{
    $codigo=$_GET['txtCodigo'];
    $descripcion=$_GET['txtDescripcion'];
    $stock=$_GET['txtStock'];
    $barra=$_GET['txtBarra'];
    $precio=$_GET['txtPrecio'];
    if($_GET['op']=="agregar"){
        $sql=" insert into productos (descripcion, stock, barra, precio) values ('$descripcion','$stock', '$barra', '$precio')";
    }else if($_GET['op']=="editar"){
        $sql=" update productos set descripcion = '$descripcion', stock= '$stock', barra='$barra', precio='$precio' where codigo='$codigo'";

    }

}
$datos= mysqli_query($conexionDB,$sql);
header('Location:producto-lista.php') 

?>