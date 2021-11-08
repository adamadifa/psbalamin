 <form class="form-horizontal" method="post" action = "<?php echo base_url(); ?>pendaftaran/update_hasiltest">
    <div class="box-body">
		
		
		<table class="table table-bordererd">
			<tr>
				<td>Tangal Daftar</td>
				<td>:</td>
				<td><?php echo $pendaftar['no_daftar']; ?></td>
				<input type="hidden" name="no_daftar" value="<?php echo $pendaftar['no_daftar']; ?>">
				<input type="hidden" name="tingkat" value="<?php echo $pendaftar['tingkat']; ?>">
			</tr>
			<tr>
				<td>Tangal Daftar</td>
				<td>:</td>
				<td><?php echo DateToIndo2($pendaftar['tgl_daftar']); ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><?php echo $pendaftar['nama_lengkap']; ?></td>
			</tr>
			<tr>
				<td>Hasil Test</td>
				<td>:</td>
				<td>
					<select class="form-control" name="hasiltest">
						<option value=""><?php echo $hasiltest; ?></option>
						<option value="Diterima">Diterima</option>
						<option value="Ditolak">Ditolak</option>
					</select>
				</td>
			</tr>
			
		</table>
		<div class="box-footer">
		  <button type="submit" name="submit" class="btn btn-primary">Proses</button>
		</div>
  </form>