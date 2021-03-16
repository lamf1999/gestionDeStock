<?php 
include 'conexion.php.php';

if($_GET['op']=='eliminar'){
    $codigo= $_GET['id'];
    $sql= " delete from clientes where codigo=" . $codigo;

}else{
    $codigo=$_GET['txtCodigo'];
    $razon=$_GET['txtRazon'];
    $nombre=$_GET['txtNombre'];
    $direcciom=$_GET['txtDireccion'];
    $telefono=$_GET['txtTelefono'];
    $ruc=$_GET['txtRuc'];
    if($_GET['op']=="agregar"){
        $sql=" insert into clientes (razon, nombre, direccion, telefono, ruc) values ('$razon','$nombre', '$direccion', '$telefono', '$ruc')";
    }else if($_GET['op']=="editar"){
        $sql=" update clientes set razon = '$razon', nombre= '$nombre', direccion='$direccion', telefono='$telefono', ruc= '$ruc' where codigo='$codigo'";

    } 

}
$datos= mysqli_query($conexionDB,$sql);
header('Location:clientes.php')

?>

<?php 
include 'conexion.php.php';

if($_GET['op']=='eliminar'){
    $codigo= $_GET['id'];
    $sql= " delete from clientes where codigo=" . $codigo;

}else{
    $codigo=$_GET['txtCodigo'];
    $razon=$_GET['txtRazon'];
    $nombre=$_GET['txtNombre'];
    $direccion=$_GET['txtDireccion'];
    $telefono=$_GET['txtTelefono'];
    $ruc=$_GET['txtRuc'];
    if($_GET['op']=="agregar"){
        $sql=" insert into clientes (razon, nombre, direccion, telefono, ruc) values ('$razon','$nombre', '$direccion', '$telefono', '$ruc')";
    }else if($_GET['op']=="editar"){
        $sql=" update clientes set razon = '$razon', nombre = '$nombre', direccion='$direccion', telefono='$telefono', ruc='$ruc' where codigo='$codigo'";

    }

}
$datos= mysqli_query($conexionDB,$sql);
header('Location:clientes.php')

?>