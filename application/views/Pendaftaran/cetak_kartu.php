<?php

$url = base_url();
if(empty($pendaftar['foto'])){
	
	$foto = "user.jpg";
}else{
	
	$foto = $pendaftar['foto'];
}

if($pendaftar['tingkat'] == 1){
	$tingkat ="Tsanawiyah";
}else{
	$tingkat ="Mu'alimin";
}

$pdf = new FPDF('L','mm','A5');
$pdf->Addpage();
    
$pdf->SetFont('Arial','B',11);

$pdf->image($url.'/assets/images/logopersis.png',4,8,20);
$pdf->image($url.'/assets/images/logopersis.png',105,8,20);
// Title
$pdf->Cell(90,5,'Penerimaan Santri Baru',0,0,'C');
$pdf->Cell(90,5,'              Penerimaan Santri Baru',0,1,'C');

$pdf->Cell(90,5,$tingkat.' Persis Al Amin',0,0,'C');
$pdf->Cell(90,5,'               '.$tingkat.' Persis Al Amin',0,1,'C');

$pdf->Cell(90,5,'Tahun Ajaran '.$pendaftar['tahun_ajaran'],0,0,'C');
$pdf->Cell(90,5,'            Tahun Ajaran '.$pendaftar['tahun_ajaran'],0,1,'C');

$pdf->image($url.'upload/foto_siswa/'.$foto,37,28,30);
$pdf->image($url.'upload/foto_siswa/'.$foto,140,28,30);
// Line break
$pdf->Ln(42);
$pdf->SetFont('Arial','',11);

$pdf->Cell(40,5,'Nomor Pendaftaran',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['no_daftar'],1,0,'L');

$pdf->Cell(15,5,'',0,0,'L');

$pdf->Cell(40,5,'Nomor Pendaftaran',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['no_daftar'],1,1,'L');



$pdf->Cell(40,5,'Nama Lengkap',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['nama_lengkap'],1,0,'L');

$pdf->Cell(15,5,'',0,0,'L');

$pdf->Cell(40,5,'Nama Lengkap',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['nama_lengkap'],1,1,'L');



$pdf->Cell(40,5,'Asal Sekolah',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['asalsekolah'],1,0,'L');

$pdf->Cell(15,5,'',0,0,'L');


$pdf->Cell(40,5,'Asal Sekolah',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['asalsekolah'],1,1,'L');

$pdf->Cell(40,5,'Gelombang',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['gelombang'],1,0,'L');


$pdf->Cell(15,5,'',0,0,'L');


$pdf->Cell(40,5,'Gelombang',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,$pendaftar['gelombang'],1,1,'L');





$pdf->Cell(40,5,'Tanggal Test',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,DateToIndo2($pendaftar['tgl_test']),1,0,'L');

$pdf->Cell(15,5,'',0,0,'L');



$pdf->Cell(40,5,'Tanggal Test',1,0,'L');
$pdf->Cell(5,5,':',1,0,'C');
$pdf->Cell(40,5,DateToIndo2($pendaftar['tgl_test']),1,1,'L');

$pdf->Ln(8);
$pdf->Cell(90,5,'Ciamis,'.DateToIndo2(date('Y-m-d')),0,0,'R');

$pdf->Cell(15,5,'',0,0,'L');
$pdf->Cell(90,5,'Ciamis,'.DateToIndo2(date('Y-m-d')),0,1,'R');

$pdf->SetFillColor(34,139,34);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(90,5,'Pesantren Persis Al Amin',1,0,'C',true);

$pdf->Cell(12,5,'',0,0,'L');

$pdf->Cell(90,5,'Pesantren Persis Al Amin',1,1,'C',true);
$pdf->Ln(2);
$pdf->SetFont('Arial','',9);
$pdf->SetFillColor(220,220,220);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'- Kartu ini Wajib di Bawa Pada Saat Test',0,0,'C',true);
$pdf->Cell(12,5,'',0,0,'L');
$pdf->Cell(90,5,'- Kartu ini Wajib di Bawa Pada Saat Test',0,1,'C',true);
$pdf->Cell(90,5,'- Alat Tulis Untuk Test di persiapkan oleh peserta',0,0,'C',true);
$pdf->Cell(12,5,'',0,0,'L');
$pdf->Cell(90,5,'- Alat Tulis Untuk Test di persiapkan oleh peserta',0,1,'C',true);
$pdf->Cell(90,5,'- Peserta diharapkan Hadir 15 menit Sebelum Ujian dimulai',0,0,'C',true);
$pdf->Cell(12,5,'',0,0,'L');
$pdf->Cell(90,5,'- Peserta diharapkan Hadir 15 menit Sebelum Ujian dimulai',0,1,'C',true);


$pdf->output();


?>