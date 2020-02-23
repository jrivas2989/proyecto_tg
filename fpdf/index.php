<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Salto de línea
        $this->Ln(10);

        //Agregando imagen al reporte
        $this->Image('logo-1.png',50,15,25);

        // Arial bold 15
        $this->SetFont('Arial','B',12);

        // Movernos a la derecha
        $this->Cell(90);

        // Título
        $this->Cell(100,10,'Reporte de Casos Recibidos',0,0,'C');

        // Salto de línea
        $this->Ln(20);
        // Movernos a la derecha
        $this->Cell(30);

        $this->Cell(50, 10, 'Nombre del cliente:', 1, 0, 'C', 0);
        $this->Cell(50, 10, 'Titulo del caso:', 1, 0, 'C', 0);
        $this->Cell(80, 10, 'Descripcion del problema:', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Fecha:', 1,1, 'C', 0);
        
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

require 'conexion.php';
$consulta = "SELECT * FROM ticket";
$resultado = $mysqli->query($consulta);

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(30);
    $pdf->Cell(50, 10, $row['nombre_cliente'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['title'], 1, 0, 'C', 0);
    $pdf->Cell(80, 10, $row['description'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['created_at'], 1, 1, 'R', 0);
}

// Salto de línea
$pdf->Ln(30);

// Movernos a la derecha
$pdf->Cell(100);

// Firma
$pdf->Cell(80,10,'Autorizado por:',0,0,'C');

// Salto de línea
$pdf->Ln(10);

// Movernos a la derecha
$pdf->Cell(100);

// Firma
$pdf->Cell(80,10,'___________________________',0,0,'C');

$pdf->Output();

?>
