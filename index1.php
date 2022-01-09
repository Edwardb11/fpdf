<?php
require('./fpdf/fpdf.php');
class PDFCabecera extends FPDF
{
    // Cabeza
    function Header()
    {

        $this->Image('./logo.png', 160, 8, 33);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Listado de estudiantes', 0, 0, 'C');
        $this->Ln(20);
    }

    function Footer()
    {

        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pag. ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


$pdf = new PDFCabecera();

$pdf->AliasNbPages();

$pdf->AddPage();


$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0, 0,  "Fecha", 0, 1, 'L');
$pdf->SetFont('Times', '', 12);
$pdf->Cell(0, 10,  date('d/m/Y'), 0, 1, 'L');
$pdf->Ln(20);



$nombres = array(
    "Edward Brito ",
    "Miguel Etralin",
    "Julio Ureña",
    "Marcos Matías",
    "Argenis González",
    "Ericssón Reyes",
    "Enmanuel Ruiz",
    "Luisa Mariel",
    "Omar Malena",
    "Luz Mariel",
    "Yessica Villavizar",
    "Iván Pimentel ",
    "Yudermi Hernandez",
    "Francisco Herrera",
    "Robert Jiménez",
    "Karla Acevedo",
    "Jhonny De León",
    "Joan Gabriel",
    "Luis Genao",
    "Michelle Mari",
    "José Daniel",
    "Metellus Hans",
    "Samuel Duran"
);

foreach ($nombres as $value) {
    $pdf->Cell(80, 10, utf8_decode($value), 0, 1);
}


$pdf->Output();