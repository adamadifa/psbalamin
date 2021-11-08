<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data Rekapitulasi Penerimaan Siswa Baru </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
	   <form class="form-horizontal" method="post" action = "<?php echo base_url() ?>pendaftaran/rekap_daftar/">
		
			<div class="form-group">
			  <label class="col-sm-2 control-label">Tahun Ajaran</label>
			   <div class="col-sm-3">
					<select name="ta" class="form-control">
						<option value="<?php echo $ta; ?>"><?php echo $v_ta; ?></option>
						<?php
							
							foreach($gelombang->result() as $g){
								
								echo "<option>$g->tahun_ajaran</option>";
								
							}
						?>
					
					
					</select>
			   </div>
			   <div class="col-sm-3">
					<button type="submit" name="submit" class="btn btn-danger">Cari</button>
				</div>
			</div>
			
		</form>
		<div class="row">
		<div class="col-md-4">
			<table class="table table-bordered">
				<tr>
					<td colspan="4" align="center"><b>Jumlah Pendaftar</b></td>
					
				</tr>
				<tr>
					<td><b>Gelombang</b></td>
					<td><b>1</b></td>
					<td><b>2</b></td>
					<td><b>Total</b></td>
				</tr>
				
				<tr>
					<td>Tsanawiyah</td>
					<td><?php echo $jmltsn1; ?></td>
					<td><?php echo $jmltsn2; ?></td>
					<td><?php $jmltsn = $jmltsn1 + $jmltsn2; echo $jmltsn; ?></td>
					
				</tr>
				<tr>
					<td>Mu'alimin</td>
					<td><?php echo $jmlmln1; ?></td>
					<td><?php echo $jmlmln2; ?></td>
					<td><?php $jmlmln = $jmlmln1 + $jmlmln2;  echo $jmlmln;?></td>
				</tr>
				<tr>
					<td><b>Total</b></td>
					<td><?php echo $jmltsn1 + $jmlmln1; ?></td>
					<td><?php echo $jmltsn2 + $jmlmln2; ?></td>
					<td><?php echo $jmltsn1 + $jmltsn2 + $jmlmln1 + $jmlmln2; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-bordered">
				
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td><b>L</b></td>
					<td><b>P</b></td>
					<td><b>Total</b></td>
				</tr>
				
				<tr>
					<td>Tsanawiyah</td>
					<td><?php echo $jmltsnL; ?></td>
					<td><?php echo $jmltsnP; ?></td>
					<td><?php echo $jmltsnL + $jmltsnP; ?></td>
				</tr>
				<tr>
					<td>Mu'alimin</td>
					<td><?php echo $jmlmlnL; ?></td>
					<td><?php echo $jmlmlnP; ?></td>
					<td><?php echo $jmlmlnL + $jmlmlnP; ?></td>
				</tr>
				<tr>
					<td><b>Total</b></td>
					<td><?php echo $jmltsnL + $jmlmlnL; ?></td>
					<td><?php echo $jmltsnP + $jmlmlnP; ?></td>
					<td><?php echo $jmltsnL + $jmltsnP  + $jmlmlnL  + $jmlmlnP; ?></td>
				</tr>
			</table>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4">
			<table class="table table-bordered">
				<tr>
					<td colspan="4" align="center"><b>Konfirmasi Pembayaran</b></td>
					
				</tr>
				
				<tr>
					<td><b>Tingkat</b></td>
					<td><b>TSN</b></td>
					<td><b>MLN</b></td>
					<td><b>Total</b></td>
				</tr>
				<tr>
					<td>Sudah konfirmasi</td>
					<td><?php echo $jmlktsn; ?></td>
					<td><?php echo $jmlkmln; ?></td>
					<td><?php echo $jmlktsn + $jmlkmln; ?></td>
				</tr>
				<tr>
					<td>Belum Konfirmasi</td>
					<td><?php $bktsn =  $jmltsn - $jmlktsn; echo $bktsn; ?></td>
					<td><?php $bkmln = $jmlmln - $jmlkmln; echo $bkmln; ?></td>
					<td><?php echo $bktsn + $bkmln; ?></td>
				</tr>
				<tr>
					<td><b>Total</b></td>
					<td><?php echo $jmltsn; ?></td>
					<td><?php echo $jmlmln; ?></td>
					<td><?php echo $jmltsn + $jmlmln; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-bordered">
				<tr>
					<td colspan="4" align="center"><b>Verifikasi Pembayaran</b></td>
					
				</tr>
				
				<tr>
					<td><b>Tingkat</b></td>
					<td><b>TSN</b></td>
					<td><b>MLN</b></td>
					<td><b>Total</b></td>
				</tr>
				<tr>
					<td>Sudah Diverifikasi</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Belum Diverifikasi</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><b>Total</b></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
		
		
		</div>
    </div>
    <div class="box-footer">
          Footer
    </div>
</div>
