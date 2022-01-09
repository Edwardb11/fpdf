<?php
require("./fpdf/fpdf.php");
$fpdf = new FPDF();
$fpdf->AddPage(); //Recibe el parametro de orientacion y el tamaño en defecto viene en retrato y el tamaño en A4
//SetFont es para definir el tipo de fuente, tipo de letra(normal se deja vbacio) y tamaño
$fpdf->SetFont("Arial", "", 12);

//Este metodo añade texto como tipo tabala, los parametros que recibe son el ancho, alto,texto, y los demas son opcionales 
$fpdf->Cell(30, 5, "Hola mundo");

$fpdf->AddPage();
//Write es pa escribir  el primer parametro que recibe es alto y luego el texto
$fpdf->Write(5, "Hola");
$fpdf->Output(); //Esto le da salida al PDF  de addPage