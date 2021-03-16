<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");

}else{

    //echo "<h1> BIENVENIDO $sesion </h1><br>";

    //echo "<a href='salir.php'>Salir</a>";
}

?>
<?php
include 'conexion.php.php';
if(isset($_GET['txtBuscar'])){
    $condicion= " where nombre like '%". $_GET['txtBuscar'] . "%'";

}else{
    $condicion="";

}

$sql= " select * from clientes" . $condicion;
$resultado= mysqli_query($conexionDB, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Factura</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<header>
<?php
    require_once('headerboostrap.php');
?>
</header>
<main> 
  <br>

<form>
  <div class="row">
    <div class="col">
      <input type="text" name="txtRazon" class="form-control" placeholder="RAZÓN SOCIAL" value="">
    </div>
    <div class="col">
      <input type="text" name="txtNombre" class="form-control" placeholder="NOMBRE DE FANTASIA" value="">
    </div>
    <div class="col">
      <input type="number" name="txtRuc" class="form-control" placeholder="RUC" value="">
    </div>
    <div class="col">
      <input type="text" name="txtDireccion" class="form-control" placeholder="DIRECCION" value="">
    </div>
    <div class="col">
      <input type="text" name="txtTelefono" class="form-control" placeholder="TELEFONO" value="">
    </div>
    <div class="col">
      <input type="text" name="txtCodigo" class="form-control" placeholder="CODIGO DE CLIENTE" value="">
    </div>
  </div> <br>
  <a href="modalcliente.php">Buscar Cliente</a>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Buscar Cliente

</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="contenedor">
<section class="titulo">
<h1>Clientes</h1>
<form action="clientes.php" method="get">
<section class="Buscador">
<input type="text" name="txtBuscar" value="">
<input type="submit" value="Buscar">
</section>





<a href="cliente-form.php?op=agregar&id=0"> Agregar Nuevo Cliente</a>
</form>
</section>
<section class="lista"> 
<table>
<thead>

<tr>
<th>Codigo</th>
<th width=130>Razon Social</th>
<th width=200>Nombre de Fantasia</th>
<th width=200>Direccion</th>
<th width=200>Ruc</th>
<th>Operaciones</th>
</tr>


</thead>
<tbody>
<?php
while($fila =$resultado->fetch_assoc()){


?>
<tr>
<td><?php echo $fila ['codigo']; ?></td>
<td><?php echo $fila ['razon']; ?></td>
<td><?php echo $fila ['nombre']; ?></td>
<td><?php echo $fila ['direccion']; ?></td>
<td><?php echo $fila ['ruc'];  ?></td>
<td>
<a href="cliente-form.php?op=editar&id=<?php echo $fila ['codigo']; ?>">EDITAR</a>
<a href="cliente-abm.php?op=eliminar&id=<?php echo $fila ['codigo']; ?>">ELIMINAR</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>  

</section>


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
</html>