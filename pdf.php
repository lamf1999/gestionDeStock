<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/hola.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REPORTE DE PRODUCTOS',0,0,'C');
    // Salto de línea
    $this->Ln(30);
    $this->Cell(90, 10, 'DESCRIPCION', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'PRECIO', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'STOCK', 1, 1, 'C', 0); 

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode( 'Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion.php.php';

$consulta = " select * from productos ";
$resultado= mysqli_query($conexionDB, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
while($row= $resultado->fetch_assoc()){
    $pdf->Cell(90, 10, $row['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['stock'], 1, 1, 'C', 0);
    


}



$pdf->Output();
?>