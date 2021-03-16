<?php
include 'conexion.php.php';
if($_GET['op']=="agregar"){
    $codigo="0";
    $razon="";
    $nombre="";
    $direccion="";
    $telefono="0";
    $ruc="0";
    $op="agregar";

}else{
    $sql= " select * from clientes where codigo = " . $_GET['id'];
    $resultado= mysqli_query($conexionDB,$sql);
    $fila= $resultado ->fetch_assoc();
    $codigo=$fila['codigo'];
    $razon=$fila['razon'];
    $nombre=$fila['nombre'];
    $direccion=$fila['direccion'];
    $telefono=$fila['telefono'];
    $ruc=$fila['ruc'];
    $op="editar";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css.css">
    <title>Editar Cliente</title>
</head>
<body>

<header>
<?php
require_once('headerboostrap.php');

?>
</header>


<form action="cliente-abm.php" method="get">
<label for="">Codigo</label>
<input type="text" name="txtCodigo" value="<?php echo $codigo; ?>">
<br>
<label for="">Razon</label>
<input type="text" name="txtRazon" value="<?php echo $razon; ?>">
<br>
<label for="">Nombre</label> 
<input type="text" name="txtNombre" value="<?php echo $nombre; ?>">
<br>
<label for="">Direccion</label>
<input type="text" name="txtDireccion" value="<?php echo $direccion; ?>">
<br>
<label for="">Telefono</label>
<input type="text" name="txtTelefono" value="<?php echo $telefono; ?>">
<br>
<label for="">Ruc</label>
<input type="text" name="txtRuc" value="<?php echo $ruc; ?>">
<br>
<input type="hidden" name="op" value="<?php echo $op; ?>">
<input type="submit" value="Guardar">
<input type="button" value="Cancelar">

</form>
    
</body>
</html>