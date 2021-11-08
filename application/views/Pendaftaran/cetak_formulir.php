<?php

$url = base_url();


if($pendaftar['tingkat'] == 1){
	$tingkat ="TSANAWIYAH";
}else{
	$tingkat ="MUALIMIN / ALIYAH";
}

$pdf = new FPDF('P','mm',array(215,330));
$pdf->Addpage();
    
$pdf->SetFont('Arial','B',11);

$pdf->image($url.'/assets/images/logopersis.png',4,8,20);

$pdf->Cell(190,5,'PANITIA PENERIMAAN SANTRI BARU ( PSB )',0,1,'C');
$pdf->Cell(190,5,'PESANTREN PERSATUAN ISLAM AL AMIN SINDANGKASIH',0,1,'C');
$pdf->Cell(190,5,'TINGKAT '.$tingkat.' TAHUN PELAJARAN 2018/2019',0,1,'C');

$pdf->SetFont('Arial','I',9);
$pdf->Cell(190,5,'Jln. Raya Ancol No. 27 Ancol I Sindangkasih Telp.-Fax. (0265) 325285 Ciamis 46268',0,1,'C');
$pdf->Cell(190,5,'e-mail : persis80sindangkasih@gmail.com -  web : persisalamin.sch.id / persisalamin.com',0,1,'C');
$pdf->Cell(190,1,'','B',1,'L');
$pdf->Cell(190,1,'','B',0,'L');
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(135);
$pdf->Cell(32,1,'Nomor Pendaftaran','0',0,'L');
$pdf->Cell(20,1,$pendaftar['no_daftar'],'0',1,'L');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,1,'FORMULIR PENDAFTARAN','0',1,'C');
$pdf->Ln(5);

$pdf->Cell(32,1,'A. DATA PESERTA DIDIK','0',0,'L');
$pdf->Ln(4);

$pdf->SetFont('Arial','',8);
$pdf->Cell(4);
$pdf->Cell(32,5,'1.  NISN','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nisn'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'2.  Nama Lengkap','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nama_lengkap'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'3.  Tempat/Tgl Lahir','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['tempat_lahir']." / ".DateToIndo2($pendaftar['tgl_lahir']),'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'4.  Jenis Kelamin','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['jk'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'5.  Anak Ke','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['anakke'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'6.  No. KK','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nokk'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'7.  Hobi','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['hobi'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'8.  Cita - Cita','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['citacita'],'0',1,'L');

$pdf->Ln(4);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32,1,'B. DATA SEKOLAH SEBELUMNYA','0',0,'L');
$pdf->Ln(4);


$pdf->SetFont('Arial','',8);
$pdf->Cell(4);
$pdf->Cell(32,5,'1.  Jenjang','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['jenjang'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'2.  Status Sekolah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['status'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'3.  Nama Sekolah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['asalsekolah'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'4.  Alamat Sekolah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['alamatsekolah'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'5.  NPSN','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['npsn'],'0',1,'L');



$pdf->Cell(4);
$pdf->Cell(32,5,'6.  Kabupaten/Kota','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['kotasekolah'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'7.  NO. SKHUN','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['noskhu'],'0',1,'L');


$pdf->Ln(4);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32,1,'C. ALAMAT SISWA','0',0,'L');
$pdf->Ln(4);


$pdf->SetFont('Arial','',8);
$pdf->Cell(4);
$pdf->Cell(32,5,'1.  Kp/Jalan','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['alamatsiswa'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'2.  Provinsi','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['provinsi'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'3.  Kabupaten/Kota','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['kota'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'4.  Kecamatan','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['kecamatan'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'5.  Kelurahan','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['kelurahan'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'6.  No HP','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nohp'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'7.  Jarak ke Sekolah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['jarak'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'8.  Alat Transportasi','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['transportasi'],'0',1,'L');




$pdf->Ln(4);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32,1,'D. INFORMASI ORANGTUA','0',0,'L');
$pdf->Ln(4);


$pdf->SetFont('Arial','',8);
$pdf->Cell(4);
$pdf->Cell(32,5,'1.  Nama Ayah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['namaayah'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'2.  NIK Ayah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nikayah'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'3.  Pendidikan Ayah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['pddayah'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'4.  Pekerjaan Ayah','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['pekerjaanayah'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'5.  Nama Ibu','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['namaibu'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'6.  NIK Ibu','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['nikibu'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'7.  Pendidikan Ibu','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['pddibu'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'8.  Perkerjaan Ibu','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['pekerjaanibu'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'9.  Penghasilan','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['penghasilan'],'0',1,'L');





$pdf->Ln(4);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32,1,'E. BIDANG PRESTASI','0',0,'L');
$pdf->Ln(4);


$pdf->SetFont('Arial','',8);
$pdf->Cell(4);
$pdf->Cell(32,5,'1.  Bidang Prestasi','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['bidangprestasi'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'2.  Tingkat Prestasi','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['tingkatprestasi'],'0',1,'L');


$pdf->Cell(4);
$pdf->Cell(32,5,'3.  Peringkat','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['peringkatprestasi'],'0',1,'L');

$pdf->Cell(4);
$pdf->Cell(32,5,'4.  Tahun','0',0,'L');
$pdf->Cell(5,5,':','0',0,'L');
$pdf->Cell(20,5,$pendaftar['tahun'],'0',1,'L');
$pdf->Ln(8);
$pdf->Cell(150);
$pdf->Cell(32,5,'Ciamis..................................'.date("Y"),'0',1,'L');
$pdf->Ln(8);


$pdf->Cell(30);
$pdf->Cell(32,5,'Orang tua/ Wali','0',0,'L');


$pdf->Cell(100);
$pdf->Cell(32,5,'Pendaftar','0',1,'L');
$pdf->Ln(8);


$pdf->Cell(28);
$pdf->Cell(32,5,'(___________________)','0',0,'L');

$pdf->Cell(95);
$pdf->Cell(32,5,'(___________________)','0',0,'L');

$pdf->output();


?>