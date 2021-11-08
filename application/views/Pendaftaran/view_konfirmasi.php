<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data Konfirmasi Pembayaran Pendaftaran</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="<?php echo $class1;?>"><a href="<?php echo base_url(); ?>pendaftaran/view_konfirmasi/1"><i class="fa fa-user"></i> Data Konfirmasi Pembayaran Tsanawiyah</a></li>
              <li class="<?php echo $class2;?>"><a href="<?php echo base_url(); ?>pendaftaran/view_konfirmasi/2" ><i class="fa fa-user"></i>  Data Konfirmasi Pembayaran Mu'alimin</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
				<div class="tab-pane active" id="tab_1">
		
					<br><br>
					<form class="form-horizontal" method="post" action = "<?php echo base_url() ?>pendaftaran/view_konfirmasi/<?php echo $this->uri->segment(3); ?>">
						<div class="form-group">
						  <label class="col-sm-2 control-label">Nama Pendaftar</label>
						   <div class="col-sm-4">
								<input type="text" value="<?php echo $v_nama; ?>"  class="form-control" name="nama_pendaftar" >
						   </div>
						</div>
						<div class="form-group">
						  <label class="col-sm-2 control-label">Periode</label>
						   <div class="col-sm-3">
								<input type="text" id="single_cal1" value="<?php echo $v_dari; ?>"  name="dari"  class="form-control" placeholder="Dari" >
						   </div>
						   <div class="col-sm-3">
								<input type="text" id="single_cal2" value="<?php echo $v_sampai; ?>"  name="sampai"  class="form-control" placeholder="Sampai" >
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
							<th>Tgl Bayar</th>
							<th>Nama Lengkap</th>
							<th>Dari Bank</th>
							<th>No. Rek</th>
							<th>Pemilik</th>
							<th>Bank Tujuan</th>
							<th>Jml Bayar</th>
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
							<td><?php echo $r->tgl_bayar; ?></td>
							<td><?php echo $r->nama_lengkap; ?></td>
							<td><?php echo $r->dari_bank; ?></td>
							<td><?php echo $r->norek; ?></td>
							<td><?php echo $r->namapemilik; ?></td>
							<td><?php echo $r->bank_tujuan; ?></td>
							<td align="right"><?php echo $r->jml_bayar; ?></td>
							<td>
								<?php 
								if($r->status_bayar == "0"){
									echo anchor('pendaftaran/update_konfirmasi/'.$r->no_daftar.'/'.$r->tingkat,'Belum di Verifikasi',array('class'=>'btn btn-xs btn-danger')); 
								}else{
									echo anchor('pendaftaran/hapus_konfirmasi/'.$r->no_daftar.'/'.$r->tingkat,'Sudah di Verifikasi',array('class'=>'btn btn-xs btn-success')); 
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
