<?php
include 'conexion.php.php';
if($_GET['op']=="agregar"){
    $codigo="0";
    $descripcion="";
    $stock="0";
    $barra="0";
    $precio="0";
    $op="agregar";

}else{
    $sql= " select * from productos where codigo = " . $_GET['id'];
    $resultado= mysqli_query($conexionDB,$sql);
    $fila= $resultado ->fetch_assoc();
    $codigo=$fila['codigo'];
    $descripcion=$fila['descripcion'];
    $stock=$fila['stock'];
    $barra=$fila['barra'];
    $precio=$fila['precio'];
    $op="editar";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css.css">
    <title>Editar Producto</title>
</head>
<body>

<header>
<?php
require_once('headerboostrap.php');

?>
</header>


<form action="producto-abm.php.php" method="get">
<label for="">Codigo</label>
<input type="text" name="txtCodigo" value="<?php echo $codigo; ?>">
<br>
<label for="">Stand</label>
<input type="text" name="txtBarra" value="<?php echo $barra; ?>">
<br>
<label for="">Descripcion</label>
<input type="text" name="txtDescripcion" value="<?php echo $descripcion; ?>">
<br>
<label for="">Precio</label>
<input type="text" name="txtPrecio" value="<?php echo $precio; ?>">
<br>
<label for="">Stock</label>
<input type="text" name="txtStock" value="<?php echo $stock; ?>">
<br>
<input type="hidden" name="op" value="<?php echo $op; ?>">
<input type="submit" value="Guardar">
<input type="button" value="Cancelar"> 

</form>
    
</body>
</html>