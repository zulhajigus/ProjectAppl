<?php 
// memanggil library FPDF 
require('fpdf/fpdf.php'); 
// intance object dan memberikan pengaturan halaman PDF 
$pdf = new FPDF('l','mm','A5'); 
// membuat halaman baru 
$pdf->AddPage(); 
// setting jenis font yang akan digunakan 
$pdf->SetFont('Arial','B',16); 
// mencetak string 
$pdf->Cell(190,7,'PEMERINTAH SINGKAWANG UTARA',0,1,'C'); 
$pdf->SetFont('Arial','B',12); 
$pdf->Cell(190,7,'DAFTAR USER',0,1,'C'); 
 
// Memberikan space kebawah agar tidak terlalu rapat 
$pdf->Cell(10,7,'',0,1); 
 
$pdf->SetFont('Arial','B',10); 
$pdf->Cell(10,6,'Id',1,0); 
$pdf->Cell(35,6,'Nama Lengkap',1,0);
$pdf->Cell(40,6,'Email',1,0);
$pdf->Cell(65,6,'Password',1,0); 
$pdf->Cell(30,6,'Jenis_kelamin',1,0); 
$pdf->Cell(10,6,'Umur',1,1); 
 
$pdf->SetFont('Arial','',10); 
 
include 'koneksi.php'; 
$siswa = mysqli_query($con, "select * from siswa"); 
while ($row = mysqli_fetch_array($siswa)){ 
 $pdf->Cell(10,6,$row['id'],1,0); 
 $pdf->Cell(35,6,$row['nama_lengkap'],1,0); 
 $pdf->Cell(40,6,$row['email'],1,0); 
 $pdf->Cell(65,6,$row['password'],1,0);
 $pdf->Cell(30,6,$row['jenis_kelamin'],1,0); 
 $pdf->Cell(10,6,$row['umur'],1,1); 
} 
 
$pdf->Output(); 
?>