<?php

include "fpdf.php";
$koneksi = new mysqli("localhost","root","","dbpenjualan");

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);


// BARU

$pdf->Cell(190,7,'Utama Karya Mebel',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Abece No. 80 Kodamar, jakarta Utara.',0,1,'C');
$pdf->Ln(3);
$pdf->Cell(190,7,'Laporan Data Pelanggan',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(40,6,'Nama',1,0);
$pdf->Cell(50,6,'Email',1,0);
$pdf->Cell(30,6,'Telepon',1,0);
$pdf->Cell(50,6,'Alamat',1,1);

$no = 1;
$ambil = $koneksi->query("SELECT * FROM tb_pelanggan order by id_pelanggan ASC");
while($row = $ambil->fetch_assoc()){
	$pdf->Cell(10,6,$no++,1,0);
	$pdf->Cell(40,6,$row['nama_pelanggan'],1,0);
	$pdf->Cell(50,6,$row['email_pelanggan'],1,0);
	$pdf->Cell(30,6,$row['telepon_pelanggan'],1,0);
	$pdf->Cell(50,6,$row['alamat_pelanggan'],1,1);
}

$pdf->Output();
?>












<!-- // LAMA
$pdf->Cell(0,5,'CV. Primakom Sragen','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Alamat : Jl. Blabla','0','1','C',false);
$pdf->Cell(0,2,'Code By Biva','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Laporan Data Pelanggan','0','1','L',false);
$pdf->Ln(3);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(35,6,'Email',1,0,'C');
$pdf->Cell(37,6,'Nama',1,0,'C');
$pdf->Cell(35,6,'Telepon',1,0,'C');
$pdf->Cell(40,6,'Alamat',1,0,'C');
$pdf->Ln(2);
$no = 0;
$ambil = $koneksi->query("SELECT * FROM tb_pelanggan order by id_pelanggan ASC");
while($data = $ambil->fetch_assoc()){
	$no++;
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(8,4,$no,1,0,'C');
	$pdf->Cell(35,4,$data['email_pelanggan'],1,0,'L');
	$pdf->Cell(37,4,$data['nama_pelanggan'],1,0,'L');
	$pdf->Cell(35,4,$data['telepon_pelanggan'],1,0,'L');
	$pdf->Cell(40,4,$data['alamat_pelanggan'],1,0,'L');
}

$pdf->Output();
?> -->
