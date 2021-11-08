<table class="table table-striped">

    <tr>
        <td rowspan="8" width="200px" align="center"><img width="170px" height="200px" src="<?php echo base_url().$foto; ?>"></td>
        <td width="300px">NISN</td>
        <td width="5px">:</td>
        <td><?php echo $santri['nisn']; ?></td>
    </tr>
    <tr>
        <td width="300px">Nama Lengkap</td>
        <td width="5px">:</td>
        <td><?php echo $santri['nama_lengkap']; ?></td>
    </tr>
    <tr>
        <td width="300px">Tempat, Tgl Lahir</td>
        <td width="5px">:</td>
        <td><?php echo $santri['tempat_lahir'].",". DateToIndo2($santri['tgl_lahir']); ?></td>
    </tr>
    <tr>
        <td width="300px">Jenis Kelamin</td>
        <td width="5px">:</td>
        <td>
          <?php

              if($santri['jk']="L"){

                  echo "Laki - Laki";

              }else{

                  echo "Perempuan";

              }

          ?>

       </td>
    </tr>
   
    <tr>
        <td width="300px">Status Pembayaran</td>
        <td width="5px">:</td>
        <td style="color:<?php echo $color; ?>"><b><?php echo $status_bayar; ?></b></td>
    </tr>
	<tr>
        <td width="200px">No. Pendaftaran</td>
        <td width="5px">:</td>
        <td><?php echo $santri['no_daftar']; ?></td>
    </tr>
	
</table>
<table>
	<tr>
        <?php if($sb == 1){
		?>
		<td><a href="<?php echo base_url(); ?>pendaftaran/cetak_kartu/<?php echo $santri['no_daftar']; ?>" target ="_blank" class="btn btn-success"><i class="fa fa-print"></i> Cetak Kartu Ujian</a></td>
		<td><a href="<?php echo base_url(); ?>pendaftaran/cetak_formulir/<?php echo $santri['no_daftar']; ?>" target ="_blank"  class="btn btn-success"><i class="fa fa-print"></i> Cetak Formulir Pendaftaran</a></td>
		<?php
		}else{
		?>
		<td><a href="#" class="btn btn-success cetaknotif"><i class="fa fa-print"></i> Cetak Kartu Ujian</a></td>
		<td><a href="#" class="btn btn-success cetaknotif"><i class="fa fa-print"></i> Cetak Formulir Pendaftaran</a></td>
		
		<?php } ?>
    </tr>

</table>
<div class="modal fade" id="myModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Alert</h4>
			</div>
			<div class="modal-body1">
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-info"></i> Alert!</h4>
					 Maaf !! Anda Belum Bisa Mencetak Kartu Ujian Dikarenakan Belum Melakukan Pembayaran / Pembayaran Anda Masih
					 Dalam Proses Verifikasi. Silahkan Hubungin Panitia PSB!
                </div>
			
			</div>
			<div class="modal-footer">
			   
			</div>
		</div>
	</div>
</div>