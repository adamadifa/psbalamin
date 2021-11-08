<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $foto; ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $pendaftar['nama_lengkap']; ?></h3>

              <p class="text-muted text-center"><?php echo $pendaftar['no_daftar']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Tempat Lahir</b> <a class="pull-right"><?php echo $pendaftar['tempat_lahir']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="pull-right"><?php echo DateToIndo2($pendaftar['tgl_lahir']); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="pull-right"><?php echo $pendaftar['jk']; ?></a>
                </li>
              </ul>

              <a href="<?php echo base_url(); ?>pendaftaran/cetak_formulir/<?php echo $pendaftar['no_daftar']; ?>" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Formulir</a>
              <a href="<?php echo base_url(); ?>pendaftaran/cetak_kartu/<?php echo $pendaftar['no_daftar']; ?>" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Kartu</a>
            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->

         
          <!-- /.box -->
    </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Sekolah Sebelumnya</a></li>
              <li><a href="#timeline" data-toggle="tab">Alamat Siswa</a></li>
              <li><a href="#settings" data-toggle="tab">Informasi Orangtua</a></li>
              <li><a href="#prestasi" data-toggle="tab">Bidang Prestasi</a></li>
              <li><a href="#uploadfoto" data-toggle="tab">Upload Foto</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
					<table class="table table-striped">
						<tr>
							<td>NPSN</td>
							<td>:</td>
							<td><?php echo $pendaftar['npsn']; ?></td>
						
						</tr>
						<tr>
							<td>Nama Sekolah</td>
							<td>:</td>
							<td><?php echo $pendaftar['asalsekolah']; ?></td>
						
						</tr>
						<tr>
							<td>Jenjang</td>
							<td>:</td>
							<td><?php echo $pendaftar['jenjang']; ?></td>
						
						</tr>
						<tr>
							<td>Alamat Sekolah</td>
							<td>:</td>
							<td><?php echo $pendaftar['alamatsekolah']; ?></td>
						
						</tr>
						<tr>
							<td>Kabupaten/Kota</td>
							<td>:</td>
							<td><?php echo $pendaftar['kotasekolah']; ?></td>
						
						</tr>
						<tr>
							<td>No. SKHUN</td>
							<td>:</td>
							<td><?php echo $pendaftar['noskhu']; ?></td>
						
						</tr>
					</table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
					<table class="table table-striped">
						<tr>
							<td>Kp/Jalan</td>
							<td>:</td>
							<td><?php echo $pendaftar['alamatsiswa']; ?></td>
						
						</tr>
						<tr>
							<td>RT/RW</td>
							<td>:</td>
							<td><?php echo $pendaftar['rtrw']; ?></td>
						
						</tr>
						<tr>
							<td>Provinsi</td>
							<td>:</td>
							<td><?php echo $pendaftar['provinsi']; ?></td>
						
						</tr>
						<tr>
							<td>Kabupaten / Kota</td>
							<td>:</td>
							<td><?php echo $pendaftar['kota']; ?></td>
						
						</tr>
						<tr>
							<td>Kecamatan</td>
							<td>:</td>
							<td><?php echo $pendaftar['kecamatan']; ?></td>
						
						</tr>
						<tr>
							<td>Kelurahan</td>
							<td>:</td>
							<td><?php echo $pendaftar['kelurahan']; ?></td>
						
						</tr>
					</table>
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
					<table class="table table-striped">
						<tr>
							<td>NIK Ayah</td>
							<td>:</td>
							<td><?php echo $pendaftar['nikayah']; ?></td>
						
						</tr>
						<tr>
							<td>Nama Ayah</td>
							<td>:</td>
							<td><?php echo $pendaftar['namaayah']; ?></td>
						
						</tr>
						<tr>
							<td>Pendidikan Ayah</td>
							<td>:</td>
							<td><?php echo $pendaftar['pddayah']; ?></td>
						
						</tr>
						<tr>
							<td>Pekerjaan Ayah</td>
							<td>:</td>
							<td><?php echo $pendaftar['pekerjaanayah']; ?></td>
						
						</tr>
						<tr>
							<td>NIK Ibu</td>
							<td>:</td>
							<td><?php echo $pendaftar['nikibu']; ?></td>
						
						</tr>
						<tr>
							<td>Nama Ibu</td>
							<td>:</td>
							<td><?php echo $pendaftar['namaibu']; ?></td>
						
						</tr>
						<tr>
							<td>Pendidikan Ibu</td>
							<td>:</td>
							<td><?php echo $pendaftar['pddibu']; ?></td>
						
						</tr>
						<tr>
							<td>Pekerjaan Ibu</td>
							<td>:</td>
							<td><?php echo $pendaftar['pekerjaanibu']; ?></td>
						
						</tr>
						<tr>
							<td>Penghasilan Keluarga</td>
							<td>:</td>
							<td><?php echo $pendaftar['penghasilan']; ?></td>
						
						</tr>
					</table>
              </div>
			   <div class="tab-pane" id="prestasi">
					<table class="table table-striped">
						<tr>
							<td>Bidang Prestasi</td>
							<td>:</td>
							<td><?php echo $pendaftar['bidangprestasi']; ?></td>
						
						</tr>
						<tr>
							<td>Tingkat Prestasi</td>
							<td>:</td>
							<td><?php echo $pendaftar['tingkatprestasi']; ?></td>
						
						</tr>
						<tr>
							<td>Pendidikan Ayah</td>
							<td>:</td>
							<td><?php echo $pendaftar['pddayah']; ?></td>
						
						</tr>
						<tr>
							<td>Peringkat</td>
							<td>:</td>
							<td><?php echo $pendaftar['peringkatprestasi']; ?></td>
						
						</tr>
						<tr>
							<td>Tahun</td>
							<td>:</td>
							<td><?php echo $pendaftar['tahun']; ?></td>
						
						</tr>
					
					</table>
              </div>
			  <div class="tab-pane" id="uploadfoto">
					<div class="panel panel-default">
						<div class="panel-heading"><b>Form Upload Foto</b></div>
						<div class="panel-body">
							<form action="<?php echo base_url(); ?>santri/upload_fotoadmin" method="post" enctype="multipart/form-data">
								  <table class="table table-striped">
									   <tr>
										  <td style="width:15%;">File Foto</td>
										  <td>
											  <div class="col-sm-6">
												  <input type="file" name="filefoto" class="form-control">
												  <input type="hidden" name="filelama" value="<?php echo $pendaftar['foto']; ?>" class="form-control">
												  <input type="hidden" name="nisn" value="<?php echo $pendaftar['nisn']; ?>" class="form-control">
												  <input type="hidden" name="no_daftar" value="<?php echo $pendaftar['no_daftar']; ?>" class="form-control">
											  </div>
										  </td>
									   </tr>

										<tr>
											<td colspan="2">
												<input type="submit" class="btn btn-success" value="Simpan">
												<button type="reset" class="btn btn-default">Batal</button>
											</td>
										</tr>
									</table>
							  </form>
						  </div>
					</div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>