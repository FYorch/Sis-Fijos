<?php
require('../fpdf185/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    #$this->Imagenes('MiLogo.png',10,8,33);
    // Arial bold 15
    
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(40);
    

    $this->SetDrawColor(127, 140, 141 );#borde celda
    $this->SetTextColor(55, 49, 47); #color texto
    $this->SetFillColor(153,255,100);#color fondo
    // Título
    $this->Cell(118,0,'Usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(20);

  

    $this->SetFont('Arial','B',9); 
    $this->SetX(2);
    $this->Cell(7,10,'#',1,0,'C',0);
    $this->Cell(23,10,'Nombre',1,0,'C',0);
    $this->Cell(27,10,'Apellido Paterno',1,0,'C',0);
    $this->Cell(30,10,'Apellido Materno',1,0,'C',0);
    $this->Cell(45,10,'Correo',1,0,'C',0);
    $this->Cell(20,10,'Usuario',1,0,'C',0);
    $this->Cell(25,10,'Contraseña',1,0,'C',0);
    $this->Cell(23,10,'Tipo Usuario',1,1,'C',0);
   
    #$pdf->Cell(60,10,'id_usuario',0,1,'C');
    #$pdf->Cell(60,10,'tx_nombre',0,1,'C');
    #$pdf->Cell(60,10,'tx_apellidoPaterno',0,1,'C');
    #$pdf->Cell(60,10,'tx_apellidoMaterno',0,1,'C');
    #$pdf->Cell(60,10,'tx_correo',0,1,'C');
    #$pdf->Cell(60,10,'tx_username',0,1,'C');
}

// Pie de página
function Footer()
{
    
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina').$this->PageNo().'/{nb}',0,0,'C');
}
}

#require ("conexion.php");
$con = new mysqli('localhost','root','','html');
$consulta = "SELECT * FROM tbl_users";
$resultado = mysqli_query($con,$consulta);



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',10);


while($row=$resultado->fetch_assoc()){

    # $pdf->Cell(80,10,$row['Imprimiendo línea número '],1,0,C,1);
    #$pdf->Cell(80,10,$row['Imprimiendo línea número '],1,0,C,1);
    #$pdf->Cell(80,10,$row['Imprimiendo línea número '],1,0,C,1);
    
    $pdf->SetDrawColor(127, 140, 141 );#borde celda

    $pdf->SetX(2);

    $pdf->Cell(7,10,$row['id_usuario'],1,0,'C',0);
    $pdf->Cell(23,10,$row['tx_nombre'],1,0,'C',0);
    $pdf->Cell(27,10,$row['tx_apellidoPaterno'],1,0,'C',0);
    $pdf->Cell(30,10,$row['tx_apellidoMaterno'],1,0,'C',0);
    $pdf->Cell(45,10,$row['tx_correo'],1,0,'C',0);
    $pdf->Cell(20,10,$row['tx_username'],1,0,'C',0);
    $pdf->Cell(25,10,$row['tx_password'],1,0,'C',0);
    $pdf->Cell(23,10,$row['id_tipousuario'],1,1,'C',0);
}
  
    
$pdf->Output();
?>