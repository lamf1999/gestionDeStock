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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" href="img/LOGO.png">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="estilo.css.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/LOGO.png">
    <link rel="stylesheet" href="estilo.css.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=a0dbcecc-3a58-4182-af98-d9faf3a6127a"> </script>
<!-- End of  Zendesk Widget script -->

    <title>Clientes</title>
</head>
<body>
<header>
<?php
require_once('headerboostrap.php');

?>
</header>
<br>
<br>
<br>


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
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">MENSAJE IMPORTANTE</strong>
    <small class="text-muted">Hace 1 minuto</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Que tengas un estupendo dia, Orlando!!
  </div>
</div>
<section>
  <footer class="footer text-xs-center">
    <div class="container">
    <p>Copyright (c) 2020 LAMF
All Rights Reserved
 
This product is protected by copyright and distributed under
licenses restricting copying, distribution, and decompilation.</p>

    </div>
  
  </footer>
  
  </section>
     
</body>
</html>