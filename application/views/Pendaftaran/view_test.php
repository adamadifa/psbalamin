<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data Hasil Test </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Update Hasil Test </h4>
					</div>
					<div class="modal-body1">
						
					</div>
					
				</div>
			</div>
		</div>
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="<?php echo $class1;?>"><a href="<?php echo base_url(); ?>pendaftaran/view_test/1"><i class="fa fa-user"></i> Data Hasil Test Tingkat Tsanawiyah</a></li>
              <li class="<?php echo $class2;?>"><a href="<?php echo base_url(); ?>pendaftaran/view_test/2" ><i class="fa fa-user"></i> Data Hasil Test Tingkat Mualimin</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
				<div class="tab-pane active" id="tab_1">
		
					<br><br>
					
					<form class="form-horizontal" method="post" action = "<?php echo base_url() ?>pendaftaran/view_test/<?php echo $this->uri->segment(3); ?>">
						<div class="form-group">
						  <label class="col-sm-2 control-label">Nama Pendaftar</label>
						   <div class="col-sm-4">
								<input type="text"  class="form-control" value="<?php echo $v_nama; ?>" name="nama_pendaftar" >
						   </div>
						</div>
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
					<table class="table table-condensed table-hover" id="example2">

						<thead>
						<tr>
							<th>NO</th>
							<th>No Daftar</th>
							<th>Tgl Daftar</th>
							<th>NISN</th>
							<th>Nama Lengkap</th>
							<th>No HP</th>
							<th>Gelombang</th>
							
							<th>Aksi</th>

						</tr>
						</thead>
						<tbody>
						<?php
						$no=1;
						foreach ($listkonfirmasi->result() as $r){

						?>
						
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $r->no_daftar; ?></td>
							<td><?php echo DateToIndo2($r->tgl_daftar); ?></td>
							<td><?php echo $r->nisn; ?></td>
							
							<td><?php echo $r->nama_lengkap; ?></td>
							<td><?php echo $r->nohp; ?></td>
							<td><?php echo $r->gelombang; ?></td>
							
							<td>
								<?php 
								if($r->hasiltest == ""){
								?>
									<a href="#" class="update_hasiltest btn btn-xs btn-warning" data-id="<?php echo $r->no_daftar; ?>"  > Belum di Proses</a>
								<?php
								}elseif($r->hasiltest == "Diterima"){
								?>
									<a href="#" class="update_hasiltest btn btn-xs btn-success" data-id="<?php echo $r->no_daftar; ?>">Diterima</a>
								<?php
								}elseif($r->hasiltest == "Ditolak"){
								?>
								
									<a href="#" class="update_hasiltest btn btn-xs btn-danger" data-id="<?php echo $r->no_daftar; ?>">Ditolak</a>
								
								<?php
								}
								?>
							</td>
							

						</tr>
						<?php
						$no++;
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
    <div class="box-footer">
          Footer
    </div>
</div>
