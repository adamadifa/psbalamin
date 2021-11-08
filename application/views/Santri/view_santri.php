<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data Calon Santri</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
         <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
	<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="<?php echo $class1;?>"><a href="<?php echo base_url(); ?>santri/view_santri/1"><i class="fa fa-user"></i> Data Calon Santri Tsanawiyah</a></li>
          <li class="<?php echo $class2;?>"><a href="<?php echo base_url(); ?>santri/view_santri/2" ><i class="fa fa-user"></i>  Data Calon Santri Mu'alimin</a></li>
          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
            <?php echo anchor('santri/inputsantri/'.$this->uri->segment(3),'<i class="fa fa-plus"></i> Tambah Data Santri',array('class'=>'btn btn-sm btn-danger')) ?>
            <br>
            <br>
            <form class="form-horizontal" method="post" action = "<?php echo base_url() ?>santri/view_santri/<?php echo $this->uri->segment(3); ?>">
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
			<table class="table table-condensed table-stipred" id="example2">
                <thead>
				<tr>
					<th>NO</th>
					<th>Tanggal Daftar</th>
					<th>NISN</th>
					<th>Nama Lengkap</th>
					<th>Tgl Lahir</th>
					<th>No HP</th>
					<th>Gel</th>
					<th>TA</th>
					<th>Aksi</th>

                </tr>
				</thead>
				<tbody>
                <?php
                $no=1;
                foreach ($listdaftar->result() as $r){

                ?>
                <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo DateToIndo2($r->tgl_daftar); ?></td>
                        <td><?php echo $r->nisn; ?></td>
                        <td><a href="<?php echo base_url();?>pendaftaran/detail_pendaftar/<?php echo $r->no_daftar; ?>"><?php echo $r->nama_lengkap; ?></a></td>
						<td><?php echo DateToIndo2($r->tgl_lahir); ?></td>
						<td><?php echo $r->nohp; ?></td>
						<td><?php echo $r->gelombang; ?></td>
						<td><?php echo $r->tahun_ajaran; ?></td>
                        <td>
                                <?php echo anchor('santri/edit_pendaftar/'.$r->nisn,'<i class="fa fa-edit"></i>',array('class'=>'btn btn-xs btn-primary')); ?>
								
                                <a href='#' data-href='<?php echo base_url(); ?>santri/hapus_daftar/<?php echo $r->no_daftar; ?>/<?php echo $this->uri->segment(3); ?>' data-toggle='modal' data-target='#myModal' title='Hapus' class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></a> 
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
