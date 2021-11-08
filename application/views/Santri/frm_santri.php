<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Formulir Pendaftaran Calon Santri Tingkat </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">

        
		<form class="form-horizontal" method="post" action = "<?php echo base_url(); ?>santri/inputsantri">
			
			<div class="box-body">
				<input type="hidden" name="tingkat" value="<?php echo $this->uri->segment(3);  ?>">	
				<input type="hidden" name="id_gel"  value="<?php echo $gel['id_gel'];  ?>">	
				<input type="hidden"   name="biaya_daftar"  value="<?php echo $gel['biaya_daftar'];  ?>">	
				<h4 style="color:#3c8dbc"><b>A. Data Peserta Didik</b></h4>
				<hr>
				<div class="form-group">
					  <label class="col-sm-2 control-label" >NISN</label>
					   <div class="col-sm-4">
							 <input type="text"  class="form-control" name="nisn"   placeholder="ex. 9931371065" >
					   </div>
					   
					    <div class="col-sm-4">
							 <input type="text"  class="form-control" name="tgl_daftar"   value="<?php echo date("Y-m-d"); ?>" id="single_cal1" >
					   </div>


				</div>
				<div class="form-group">

					<label class="col-sm-2 control-label">Nama Lengkap</label>
					 <div class="col-sm-6">
						   <input type="text" class="form-control" name="nama_lengkap"  placeholder="Nama Lengkap" >
					 </div>

				</div>
				<div class="form-group">

					<label class="col-sm-2 control-label">Tempat Lahir</label>
					<div class="col-sm-5">
						 <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
				   </div>


				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="tgl_lahir"  placeholder="ex. 1993-07-16" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
					 </div>
				</div>

				<div class="form-group">
					 <label class="col-sm-2 control-label">Jenis Kelamin</label>
					 <div class="col-sm-6">

						 
						   <label>
							  <input type="radio" name="jk" value="L" class="flat-red form-control">Laki Laki
						   </label>
							<label>
							  <input type="radio" name="jk" value="P" class="flat-red form-control"> Perempuan
						   </label>
					 </div>

				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Anak Ke</label>
					 <div class="col-sm-2">

						   <input type="text" name="anakke"  class="form-control"   placeholder="Anak Ke">
					 </div>

					  <div class="col-sm-2">

						   <input type="text" name="dari"  class="form-control"  placeholder="Dari">
					 </div>
					 <label>Bersaudara</label>

				</div>

				 <div class="form-group">
					  <label class="col-sm-2 control-label">No. KK</label>
					   <div class="col-sm-6">

							 <input type="text" name="nokk" class="form-control"  placeholder="ex. 322XXXXXXXXXXXXXX">
					   </div>

				</div>
				 <div class="form-group">
					  <label class="col-sm-2 control-label">Hobi</label>
					   <div class="col-sm-6">
							 <input type="text"  name="hobi"  class="form-control"   placeholder="Hobi">
					   </div>


				</div>
				<div class="form-group">
					  <label  class="col-sm-2 control-label">Cita Cita</label>
					  <div class="col-sm-6">

						   <input type="text" name="citacita"  class="form-control"  placeholder="Cita Cita">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">No HP</label>
					 <div class="col-sm-6">

						   <input type="text" class="form-control" name="nohp"  placeholder="ex. 0853222211XXX" >
					 </div>

				</div>
				<br>
				<h4 style="color:#3c8dbc"><b>B. Alamat Siswa</b></h4>
				<hr>
				<div class="form-group">
					<label class="col-sm-2 control-label">Kp/Jalan</label>
					 <div class="col-sm-5">

						   <input type="text" name="jalan" class="form-control"  placeholder="Jln...">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">RT/RW</label>
					<div class="col-sm-3">
						 <input type="text" name="rtrw"  class="form-control"  placeholder="00/00">
				   </div>


				</div>
				<div class="form-group">
					 <label class="col-sm-2 control-label">Provinsi</label>
					 <div class="col-sm-5">


						  <select class="form-control" id="provinsi" name="provinsi">
							  
							  
							  <option value="">Pilih Provinsi</option>
							  <?php
							  foreach ($provinsi->result_array() as $prov) {
							  echo "<option value='$prov[id]'>$prov[name]</option>";
							  }
							  ?>
						  </select>
					 </div>
				 </div>
				 <div class="form-group">
					  <label class="col-sm-2 control-label">Kabupaten/kota</label>
					  <div class="col-sm-5">

						  <select class="form-control" id="kabupaten-kota" name="kabupaten">
							  <option value="">-- Pilih Kabupaten / Kota --</option>
						  </select>
					  </div>
				  </div>
				   <div class="form-group">
						<label class="col-sm-2 control-label">Kecamatan</label>
						<div class="col-sm-3">
							<select class="form-control" id="kecamatan" name="kecamatan">
								<option value="">Pilih Kecamatan</option>

							</select>
					   </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-2 control-label">Kelurahan</label>
					   <div class="col-sm-3">
							<select class="form-control" id="kelurahan-desa" name="kelurahan">
								<option value="">-- Pilih Kelurahan --</option>
							</select>
						</div>
					</div>


				<div class="form-group">
				   <label  class="col-sm-2 control-label">Jarak ke Sekolah</label>
				   <div class="col-sm-6">

						<label>
							<input type="radio"  name="jarak" value="<1 Km" class="flat-red form-control" > <1 Km
						</label>
						<label>
							<input type="radio" name="jarak" value="1-3 Km" class="flat-red form-control" > 1-3 Km
						</label>
						<label>
							<input type="radio" name="jarak" value="3-5 Km" class="flat-red form-control" > 3-5 Km
						</label>
						<label>
							<input type="radio" name="jarak" value="5-10 Km" class="flat-red form-control" > 5-10 Km
						</label>
						<label>
							<input type="radio" name="jarak" value="5-10 Km" class="flat-red form-control"> >10 Km
						</label>
				   </div>

				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Alat Transportasi</label>
				   <div class="col-sm-10">

						<label>
							<input type="radio" name="transportasi" value="Jalan Kaki" class="flat-red form-control"> Jalan Kaki
						</label>
						<label>
							<input type="radio" name="transportasi" value="Sepeda" class="flat-red form-control"> Sepeda
						</label>
						<label>
							<input type="radio" name="transportasi" value="Sepeda Motor" class="flat-red form-control"> Sepeda Motor
						</label>
						<label>
							<input type="radio" name="transportasi" value="Mobil Pribadi" class="flat-red form-control"> Mobil Pribadi
						</label>
						<label>
							<input type="radio" name="transportasi" value="Antar Jemput Sekolah" class="flat-red form-control"> Antar Jemput Sekolah
						</label>
						<label>
							<input type="radio" name="transportasi" value="Angkutan Umum" class="flat-red form-control"> Angkutan Umum
						</label>
						<label>
							<input type="radio" name="transportasi" value="lainnya" class="flat-red form-control"> Lainnya
						</label>
				   </div>

				</div>
				<h4 style="color:#3c8dbc"><b>C. Data Sekolah Sebelumnya</b></h4>
				<hr>
				<div class="form-group">
				   <label class="col-sm-2 control-label">Jenjang</label>
				   <?php
				   
						if($this->uri->segment(3)==1){
				   ?>
				   <div class="col-sm-10">

						<label>
							<input type="radio" name="jenjang" value="SD" class="flat-red form-control" > SD
						</label>
						<label>
							<input type="radio" name="jenjang" value="MI" class="flat-red form-control" > MI
						</label>
						<label>
							<input type="radio" name="jenjang" value="SLB" class="flat-red form-control"> SLB
						</label>
						<label>
							<input type="radio" name="jenjang" value="Paket A" class="flat-red form-control"> Paket A
						</label>
						<label>
							<input type="radio" name="jenjang" value="Ulya" class="flat-red form-control"> >Ulya
						</label>
				   </div>
				   <?php
				   
						}else{
				   
				   ?>
				    <div class="col-sm-10">

						<label>
							<input type="radio" name="jenjang" value="SMP" class="flat-red form-control" > SMP
						</label>
						<label>
							<input type="radio" name="jenjang" value="MTs" class="flat-red form-control" > MTs
						</label>
						<label>
							<input type="radio" name="jenjang" value="Paket B" class="flat-red form-control"> Paket B
						</label>
						
				   </div>
				   <?php
				   
						}
					?>

				</div>
				<div class="form-group">
				   <label class="col-sm-2 control-label">Status</label>
				   <div class="col-sm-10">

						<label>
							<input type="radio" name="statusekolah" value="Negeri" class="flat-red form-control"> Negeri
						</label>
						<label>
							<input type="radio" name="statusekolah" value="Swasta" class="flat-red form-control"> Swasta
						</label>

				   </div>

				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Sekolah</label>
					 <div class="col-sm-5">

						   <input type="text" name="asalsekolah" class="form-control"  placeholder="Nama Sekolah">
					 </div>


				</div>
				<div class="form-group">
					  <label class="col-sm-2 control-label">NPSN</label>
					  <div class="col-sm-4">

						   <input type="text" name="npsn"  class="form-control" placeholder="NPSN">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Alamat Sekolah</label>
					 <div class="col-sm-8">

						  <textarea class="form-control" name="alamatsekolah"></textarea>
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Kabupaten / Kota</label>
					<div class="col-sm-4">

						 <input type="text" name="kabsekolah" class="form-control"  placeholder="Kabupaten / Kota">
				   </div>
				 </div>
				<div class="form-group">

						<label class="col-sm-2 control-label">No. SKHUN</label>
						<div class="col-sm-6">

							  <input type="text" class="form-control" name="noskhu"  placeholder="No. SKHUN" >
						</div>


				</div>
				<br>
				<h4 style="color:#3c8dbc"><b>D. Informasi Orangtua</b></h4>
				<hr>


				<div class="form-group">
					<label class="col-sm-2 control-label">NIK Ayah</label>
					 <div class="col-sm-4">

						   <input type="text" name="nikayah"  class="form-control"  placeholder="NIK Ayah">
					 </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Ayah</label>
					<div class="col-sm-6">

						 <input type="text" name="namaayah"  class="form-control"  placeholder="Nama Ayah">
				   </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label">Pendidikan Ayah</label>
				   <div class="col-sm-8">

						<label>
							<input type="radio" name="pddayah" value="SD" class="flat-red form-control"> SD
						</label>
						<label>
							<input type="radio" name="pddayah" value="SMP" class="flat-red form-control"> SMP
						</label>
						<label>
							<input type="radio" name="pddayah" value="SMA" class="flat-red form-control"> SMA
						</label>
						<label>
							<input type="radio" name="pddayah" value="D1" class="flat-red form-control"> D1
						<label>
							<input type="radio" name="pddayah" value="D2" class="flat-red form-control"> D2
						</label>
						 <label>
							<input type="radio" name="pddayah" value="D3" class="flat-red form-control"> D3
						</label>
						 <label>
							<input type="radio" name="pddayah" value="D4" class="flat-red form-control"> D4
						</label>
						 <label>
							<input type="radio" name="pddayah" value="S1" class="flat-red form-control"> S1
						</label>
						 <label>
							<input type="radio" name="pddayah" value="S2" class="flat-red form-control"> S2
						</label>
						 <label>
							<input type="radio" name="pddayah" value="S3" class="flat-red form-control"> S3
						</label>
				   </div>

				</div>

				<div class="form-group">
				  <label class="col-sm-2 control-label">Pekerjaan Ayah</label>
				   <div class="col-sm-10">

						<label>
							<input type="radio" name="pekerjaanayah" value="Tidak Bekerja" class="flat-red form-control" > Tidak Bekerja
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Pensiunan / Alm" class="flat-red form-control"> Pensiunan / Alm
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="PNS" class="flat-red form-control"> PNS
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="TNI / Polri" class="flat-red form-control"> TNI / Polri
						<label>
							<input type="radio" name="pekerjaanayah" value="Guru / Dosen" class="flat-red form-control"> Guru / Dosen
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Pegawai Swasta" class="flat-red form-control"> Pegawai Swasta
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Wiraswasta" class="flat-red form-control"> Wiraswasta
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Pengacara" class="flat-red form-control"> Pengacara
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Seniman" class="flat-red form-control"> Seniman
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Dokter" class="flat-red form-control"> Dokter
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Pilot" class="flat-red form-control"> Pilot
						</label>

						<label>
							<input type="radio" name="pekerjaanayah" value="Pedagang" class="flat-red form-control"> Pedagang
						</label>
						 <label>
							<input type="radio" name="pekerjaanayah" value="Tani/Ternak" class="flat-red form-control"> Tani/Ternak
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Nelayan" class="flat-red form-control"> Nelayan
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Buruh" class="flat-red form-control"> Buruh
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Sopir" class="flat-red form-control"> Sopir
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Politikus" class="flat-red form-control"> Politikus
						</label>
						<label>
							<input type="radio" name="pekerjaanayah" value="Lainnya" class="flat-red form-control"> Lainnya
						</label>
				   </div>

				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">NIK Ibu</label>
					 <div class="col-sm-6">

						   <input type="text"  name="nikibu" class="form-control"  placeholder="NIK Ibu">
					 </div>

				</div>
				<div class="form-group">
					  <label class="col-sm-2 control-label">Nama Ibu</label>
					  <div class="col-sm-6">
						   <input type="text" name="namaibu" class="form-control"  placeholder="Nama Ibu">
					 </div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Pendidikan Ibu</label>
					 <div class="col-sm-10">

						  <label>
							  <input type="radio" name="pddibu" value="SD" class="flat-red form-control"> SD
						  </label>
						  <label>
							  <input type="radio" name="pddibu" value="SMP" class="flat-red form-control"> SMP
						  </label>
						  <label>
							  <input type="radio" name="pddibu" value="SMA" class="flat-red form-control"> SMA
						  </label>
						  <label>
							  <input type="radio" name="pddibu" value="D1" class="flat-red form-control"> D1
						  <label>
							  <input type="radio" name="pddibu" value="D2" class="flat-red form-control"> D2
						  </label>
						   <label>
							  <input type="radio" name="pddibu" value="D3" class="flat-red form-control"> D3
						  </label>
						   <label>
							  <input type="radio" name="pddibu" value="D4" class="flat-red form-control"> D4
						  </label>
						   <label>
							  <input type="radio" name="pddibu" value="S1" class="flat-red form-control"> S1
						  </label>
						   <label>
							  <input type="radio" name="pddibu" value="S2" class="flat-red form-control"> S2
						  </label>
						   <label>
							  <input type="radio" name="pddibu" value="S3" class="flat-red form-control"> S3
						  </label>
					 </div>

				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Pekerjaan Ibu</label>
					 <div class="col-sm-10">
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Ibu Rumah Tangga" class="flat-red form-control"> Ibu Rumah Tangga
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Pensiunan / Alm" class="flat-red form-control"> Pensiunan / Alm
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="PNS" class="flat-red form-control"> PNS
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="TNI / Polri" class="flat-red form-control"> TNI / Polri
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Guru / Dosen" class="flat-red form-control"> Guru / Dosen
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Pegawai Swasta" class="flat-red form-control"> Pegawai Swasta
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Wiraswasta" class="flat-red form-control"> Wiraswasta
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Pengacara" class="flat-red form-control"> Pengacara
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Seniman" class="flat-red form-control"> Seniman
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Dokter" class="flat-red form-control"> Dokter
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Pilot" class="flat-red form-control"> Pilot
						 </label>

						 <label>
							 <input type="radio" name="pekerjaanibu" value="Pedagang" class="flat-red form-control"> Pedagang
						 </label>
						  <label>
							 <input type="radio" name="pekerjaanibu" value="Tani/Ternak" class="flat-red form-control"> Tani/Ternak
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Nelayan" class="flat-red form-control"> Nelayan
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Buruh" class="flat-red form-control"> Buruh
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Sopir" class="flat-red form-control"> Sopir
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Politikus" class="flat-red form-control"> Politikus
						 </label>
						 <label>
							 <input type="radio" name="pekerjaanibu" value="Lainnya" class="flat-red form-control"> Lainnya
						 </label>
					 </div>

				</div>
				<div class="form-group">
					 <label class="col-sm-2 control-label">Penghasilan</label>
					 <div class="col-sm-10">

						  <label>
							  <input type="radio" name="penghasilan" value="<= 500.000" class="flat-red form-control" > <= 500.000
						  </label>
						  <label>
							  <input type="radio" name="penghasilan" value="500.000-1000.000" class="flat-red form-control"> 500.000-1000.000
						  </label>
						  <label>
							  <input type="radio" name="penghasilan" value="1000.000-2000.000" class="flat-red form-control"> 1000.000-2000.000
						  </label>
						  <label>
							  <input type="radio" name="penghasilan" value="2000.000-3000.000" class="flat-red form-control"> 2000.000-3000.000
						  <label>
							  <input type="radio" name="penghasilan" value="3000.000-5000.000" class="flat-red form-control"> 3000.000-5000.000
						  </label>
						   <label>
							  <input type="radio" name="penghasilan" value=">5000.0000" class="flat-red form-control">>5000.000
						  </label>

					 </div>

				</div>
				<h4 style="color:#3c8dbc"><b>E. Prestasi</b></h4>
				<hr>
				<div class="form-group">
				   <label class="col-sm-2 control-label">Bidang Prestasi</label>
				   <div class="col-sm-10">

						<label>
							<input type="radio" name="bidangprestasi" value="Akademik" class="flat-red form-control" > Akademik
						</label>
						<label>
							<input type="radio" name="bidangprestasi" value="Keagamaan" class="flat-red form-control"> Keagamaan
						</label>
						<label>
							<input type="radio" name="bidangprestasi" value="Teknologi" class="flat-red form-control" > Teknologi
						</label>
						<label>
							<input type="radio" name="bidangprestasi" value="Olahraga" class="flat-red form-control"> Olahraga
						<label>
							<input type="radio" name="bidangprestasi" value="Pramuka" class="flat-red form-control" > Pramuka
						</label>
						 <label>
							<input type="radio" name="bidangprestasi" value="KIR" class="flat-red form-control"> KIR
						</label>
						 <label>
							<input type="radio" name="bidangprestasi" value="Kesenian" class="flat-red form-control"> Kesenian
						</label>
						 <label>
							<input type="radio" name="bidangprestasi" value="Pidato Bahasa Asing" class="flat-red form-control"> Pidato Bahasa Asing
						</label>
						 <label>
							<input type="radio" name="bidangprestasi" value="Lainnya" class="flat-red form-control"> Lainnya
						</label>

				   </div>

				</div>
				<div class="form-group">
					 <label class="col-sm-2 control-label">Tingkat Prestasi</label>
					 <div class="col-sm-10">

						  <label>
							  <input type="radio" name="tingkatprestasi" value="Kabupaten/Kota" class="flat-red form-control"> Kabupaten/Kota
						  </label>
						  <label>
							  <input type="radio" name="tingkatprestasi" value="Provinsi" class="flat-red form-control"> Provinsi
						  </label>
						  <label>
							  <input type="radio" name="tingkatprestasi" value="Nasional" class="flat-red form-control"> Nasional
						  </label>
						  <label>
							  <input type="radio" name="tingkatprestasi" value="Internasional" class="flat-red form-control"> Internasional
						  </label>

					 </div>

				</div>
				<div class="form-group">
					 <label class="col-sm-2 control-label">Peringkat</label>
					 <div class="col-sm-10">

						  <label>
							  <input type="radio" name="peringkat" value="Juara I" class="flat-red form-control"> Juara I
						  </label>
						  <label>
							  <input type="radio" name="peringkat" value="Juara II" class="flat-red form-control"> Juara II
						  </label>
						  <label>
							  <input type="radio" name="peringkat" value="Juara III" class="flat-red form-control"> Juara III
						  </label>
						  <label>
							  <input type="radio" name="peringkat" value="Juara Harapan I" class="flat-red form-control"> Juara Harapan I
						  </label>
						  <label>
							  <input type="radio" name="peringkat" value="Juara Harapan II" class="flat-red form-control"> Juara Harapan II
						  </label>
						  <label>
							  <input type="radio" name="peringkat" value="Juara Harapan III" class="flat-red form-control"> Juara Harapan III
						  </label>
						 <label>
							  <input type="radio" name="peringkat" value="Juara favorit" class="flat-red form-control"> Juara favorit
						  </label>

					 </div>

				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Tahun</label>
					 <div class="col-sm-4">

						   <input type="text" name="tahun" class="form-control"  placeholder="Tahun">
					 </div>

				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>


    </div>
    <div class="box-footer">
          Footer
    </div>
</div>
