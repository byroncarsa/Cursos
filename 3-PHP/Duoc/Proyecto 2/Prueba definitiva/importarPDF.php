<?php
require('fpdf/fpdf.php');

	$hostname='localhost';
	$database = 'empresa';
	$username = 'root';
	$password = '';

	$con = new PDO('mysql:host='.$hostname.';dbname='.$database,$username, $password);


	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(80);
	$pdf->Cell(20,10,'Colaboradores',0,1,'C');
	$pdf->Cell(80);
	$pdf->Cell(20,10,'---------------------------------------------',0,1,'C');


	$pdf->SetFont('Times', 'B', 15);
	$pdf->Cell(30, 8, 'Rut', 0,0,'C');
	$pdf->Cell(30, 8, 'Nombres', 0,0,'C');
	$pdf->Cell(60, 8, 'Apellidos', 0,0,'C');
	$pdf->Cell(35, 8, 'Fecha Nacimiento', 0,0,'C');
	$pdf->Ln();
	//$pdf->Ln();

	$query = "SELECT * FROM colaborador";

	$resultado = $con->query($query); 
	$pdf->SetFont('Times', 'B', 12);				
				

		foreach($resultado as $row)				
		{
			$pdf->LN();
			$pdf->Cell(30,8,$row['rut'],0,0,'C');
			$pdf->Cell(33,8,$row['nombres'],0,0,'C');
			$pdf->Cell(30,8,$row['apellidoPaterno'],0,0,'C'); 
			$pdf->Cell(30,8,$row['apellidoMaterno'],0,0,'C'); 
			$pdf->Cell(30,8,$row['fechaNacimiento'],0,0,'C');
			

			

		}

	$pdf->AddPage();
	$pdf->SetFont('Times','B',16);
	$pdf->Cell(80);
	$pdf->Cell(20,10,'Colaboradores',0,1,'C');
	$pdf->Cell(80);
	$pdf->Cell(20,10,'---------------------------------------------',0,1,'C');



	$pdf->SetFont('Times', 'B', 15);
	$pdf->Cell(55, 8, 'Correo Institucional', 0,0,'C');
	$pdf->Cell(58, 8, 'Correo Personal', 0,0,'C');
	$pdf->Cell(43, 8, 'Fono Fijo', 0,0,'C');
	$pdf->Cell(30, 8, 'Fono Movil', 0,0,'C');
	$pdf->Ln();

	$query = "SELECT * FROM colaborador";

	$resultado = $con->query($query); 
					
	$pdf->SetFont('Times', 'B', 12);				

		foreach($resultado as $row)				
		{
			$pdf->LN();

			$pdf->Cell(57,8,$row['correoInstitucional'],0,0,'C');  
			$pdf->Cell(57,8,$row['correoPersonal'],0,0,'C');  
			$pdf->Cell(41,10,$row['fonoFijo'],0,0,'C'); 
			$pdf->Cell(33,10,$row['fonoMovil'],0,0,'C'); 

		}

	$pdf->AddPage();
	$pdf->SetFont('Times','B',16);
	$pdf->Cell(80);
	$pdf->Cell(20,10,'Colaboradores',0,1,'C');
	$pdf->Cell(80);
	$pdf->Cell(20,10,'---------------------------------------------',0,1,'C');


	$pdf->SetFont('Times', 'B', 13);
	$pdf->Cell(55, 8, 'Direccion', 0,0,'C');
	$pdf->Cell(40, 8, 'Id Region', 0,0,'C');
	$pdf->Cell(40, 8, 'id Provincia', 0,0,'C');
	$pdf->Cell(40, 8, 'Id Comuna', 0,0,'C');
	$pdf->Ln();

	$query = "SELECT * FROM colaborador";

	$resultado = $con->query($query); 
					
	$pdf->SetFont('Times', 'B', 12);				

		foreach($resultado as $row)				
		{
			$pdf->LN();

			$pdf->Cell(57,8,$row['direccion'],0,0,'C');  
			$pdf->Cell(50,8,$row['reg_id'],0,0,'C');  
			$pdf->Cell(41,10,$row['pro_id'],0,0,'C'); 
			$pdf->Cell(33,10,$row['com_id'],0,0,'C'); 

		}


	$pdf->AddPage();
	$pdf->SetFont('Times','B',16);
	$pdf->Cell(80);
	$pdf->Cell(20,10,'Colaboradores',0,1,'C');
	$pdf->Cell(80);
	$pdf->Cell(20,10,'--------------------------------------------',0,1,'C');	

	$pdf->SetFont('Times', 'B', 15);
	$pdf->Cell(55, 8, 'Fecha Contrato', 0,0,'C');
	$pdf->Cell(40, 8, 'Tipo Contrato', 0,0,'C');
	$pdf->Cell(50, 8, 'Nombre Foto', 0,0,'C');
	$pdf->Ln();


	$query = "SELECT * FROM colaborador";

	$resultado = $con->query($query); 
					
	$pdf->SetFont('Times', 'B', 12);				

		foreach($resultado as $row)				
		{
			$pdf->LN();

			$pdf->Cell(57,8,$row['fechaContrato'],0,0,'C');  
			$pdf->Cell(50,8,$row['tipoContrato'],0,0,'C');  
			$pdf->Cell(41,10,$row['nombreFoto'],0,0,'C'); 
			

		}

$pdf->Output();
?> 