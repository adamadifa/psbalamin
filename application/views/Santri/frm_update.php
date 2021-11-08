
<form class="form-horizontal" method="post" action = "<?php echo base_url(); ?>santri/editdaftar">
    <div class="box-body">

        <h4 style="color:#3c8dbc"><b>A. Data Peserta Didik</b></h4>
        <hr>
        <div class="form-group">
              <label class="col-sm-2 control-label" >NISN</label>
               <div class="col-sm-4">
                     <input type="text"  class="form-control" name="nisn" value="<?php echo $santri['nisn']; ?>" readonly placeholder="ex. 9931371065" >
               </div>
				

        </div>
        <div class="form-group">

            <label class="col-sm-2 control-label">Nama Lengkap</label>
             <div class="col-sm-6">
                   <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $santri['nama_lengkap']; ?>" placeholder="Nama Lengkap" >
             </div>

        </div>
        <div class="form-group">

            <label class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-5">
                 <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $santri['tempat_lahir']; ?>" placeholder="Tempat Lahir">
           </div>


        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $santri['tgl_lahir']; ?>" placeholder="ex. 1993-07-16" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
             </div>
        </div>

        <div class="form-group">
             <label class="col-sm-2 control-label">Jenis Kelamin</label>
             <div class="col-sm-6">

                 
                   <label>
                      <input type="radio" name="jk" value="L" class="flat-red form-control" <?php if($jk=="L"){ echo "checked";} ?>>Laki Laki
                   </label>
                    <label>
                      <input type="radio" name="jk" value="P" class="flat-red form-control" <?php if($jk=="P"){ echo "checked";} ?>> Perempuan
                   </label>
             </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Anak Ke</label>
             <div class="col-sm-2">

                   <input type="text" name="anakke" value="<?php echo substr($santri['anakke'],0,1); ?>" class="form-control"   placeholder="Anak Ke">
             </div>

              <div class="col-sm-2">

                   <input type="text" name="dari" value="<?php echo substr($santri['anakke'],-1); ?>" class="form-control"  placeholder="Dari">
             </div>
             <label>Bersaudara</label>

        </div>

         <div class="form-group">
              <label class="col-sm-2 control-label">No. KK</label>
               <div class="col-sm-6">

                     <input type="text" name="nokk" value="<?php echo $santri['nokk']; ?>" class="form-control"  placeholder="ex. 322XXXXXXXXXXXXXX">
               </div>

        </div>
         <div class="form-group">
              <label class="col-sm-2 control-label">Hobi</label>
               <div class="col-sm-6">
                     <input type="text"  name="hobi" value="<?php echo $santri['hobi']; ?>" class="form-control"   placeholder="Hobi">
               </div>


        </div>
        <div class="form-group">
              <label  class="col-sm-2 control-label">Cita Cita</label>
              <div class="col-sm-6">

                   <input type="text" name="citacita" value="<?php echo $santri['citacita']; ?>" class="form-control"  placeholder="Cita Cita">
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">No HP</label>
             <div class="col-sm-6">

                   <input type="text" class="form-control" name="nohp" value="<?php echo $santri['nohp']; ?>" placeholder="ex. 0853222211XXX" >
             </div>

        </div>
        <br>
        <h4 style="color:#3c8dbc"><b>B. Alamat Siswa</b></h4>
        <hr>
        <div class="form-group">
            <label class="col-sm-2 control-label">Kp/Jalan</label>
             <div class="col-sm-5">

                   <input type="text" name="jalan" value="<?php echo $santri['alamatsiswa']; ?>" class="form-control"  placeholder="Jln...">
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">RT/RW</label>
            <div class="col-sm-3">
                 <input type="text" name="rtrw" value="<?php echo $santri['rtrw']; ?>" class="form-control"  placeholder="00/00">
           </div>


        </div>
        <div class="form-group">
             <label class="col-sm-2 control-label">Provinsi</label>
             <div class="col-sm-5">


                  <select class="form-control" id="provinsi" name="provinsi">
                      
					  
					  <option value="<?php echo $id_prov; ?>"><?php echo $prov; ?></option>
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
                      <option value="<?php echo $id_kota; ?>"><?php echo $kota; ?></option>
                  </select>
              </div>
          </div>
           <div class="form-group">
                <label class="col-sm-2 control-label">Kecamatan</label>
                <div class="col-sm-3">
                    <select class="form-control" id="kecamatan" name="kecamatan">
                        <option value="<?php echo $id_kec; ?>"><?php echo $kec; ?></option>

                    </select>
               </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Kelurahan</label>
               <div class="col-sm-3">
                    <select class="form-control" id="kelurahan-desa" name="kelurahan">
                        <option value="<?php echo $id_kelurahan; ?>"><?php echo $kelurahan; ?></option>
                    </select>
                </div>
            </div>


        <div class="form-group">
           <label  class="col-sm-2 control-label">Jarak ke Sekolah</label>
           <div class="col-sm-6">

                <label>
                    <input type="radio"  name="jarak" value="<1 Km" class="flat-red form-control" <?php if($santri['jarak']=="<1 Km"){ echo "checked";} ?>> <1 Km
                </label>
                <label>
                    <input type="radio" name="jarak" value="1-3 Km" class="flat-red form-control" <?php if($santri['jarak']=="1-3 Km"){ echo "checked";} ?>> 1-3 Km
                </label>
                <label>
                    <input type="radio" name="jarak" value="3-5 Km" class="flat-red form-control" <?php if($santri['jarak']=="3-5 Km"){ echo "checked";} ?>> 3-5 Km
                </label>
                <label>
                    <input type="radio" name="jarak" value="5-10 Km" class="flat-red form-control" <?php if($santri['jarak']=="5-10 Km"){ echo "checked";} ?>> 5-10 Km
                </label>
                <label>
                    <input type="radio" name="jarak" value="5-10 Km" class="flat-red form-control" <?php if($santri['jarak']==">10 Km"){ echo "checked";} ?>> >10 Km
                </label>
           </div>

        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Alat Transportasi</label>
           <div class="col-sm-10">

                <label>
                    <input type="radio" name="transportasi" value="Jalan Kaki" class="flat-red form-control" <?php if($santri['transportasi']=="Jalan Kaki"){ echo "checked";} ?>> Jalan Kaki
                </label>
                <label>
                    <input type="radio" name="transportasi" value="Sepeda" class="flat-red form-control" <?php if($santri['transportasi']=="Sepeda"){ echo "checked";} ?>> Sepeda
                </label>
                <label>
                    <input type="radio" name="transportasi" value="Sepeda Motor" class="flat-red form-control" <?php if($santri['transportasi']=="Sepeda Motor"){ echo "checked";} ?>> Sepeda Motor
                </label>
                <label>
                    <input type="radio" name="transportasi" value="Mobil Pribadi" class="flat-red form-control" <?php if($santri['transportasi']=="Mobil Pribadi"){ echo "checked";} ?>> Mobil Pribadi
                </label>
                <label>
                    <input type="radio" name="trasnportasi" value="Antar Jemput Sekolah" class="flat-red form-control" <?php if($santri['transportasi']=="Antar Jemput Sekolah"){ echo "checked";} ?>> Antar Jemput Sekolah
                </label>
                <label>
                    <input type="radio" name="transportasi" value="Angkutan Umum" class="flat-red form-control" <?php if($santri['transportasi']=="Angkutan Umum"){ echo "checked";} ?>> Angkutan Umum
                </label>
                <label>
                    <input type="radio" name="transportasi" value="lainnya" class="flat-red form-control" <?php if($santri['transportasi']=="lainnya"){ echo "checked";} ?>> Lainnya
                </label>
           </div>

        </div>
        <h4 style="color:#3c8dbc"><b>C. Data Sekolah Sebelumnya</b></h4>
        <hr>
        <div class="form-group">
           <label class="col-sm-2 control-label">Jenjang</label>
           <div class="col-sm-10">

                <label>
                    <input type="radio" name="jenjang" value="SD" class="flat-red form-control" <?php if($santri['jenjang']=="SD"){ echo "checked";} ?>> SD
                </label>
                <label>
                    <input type="radio" name="jenjang" value="MI" class="flat-red form-control" <?php if($santri['jenjang']=="MI"){ echo "checked";} ?>> MI
                </label>
                <label>
                    <input type="radio" name="jenjang" value="SLB" class="flat-red form-control" <?php if($santri['jenjang']=="SLB"){ echo "checked";} ?>> SLB
                </label>
                <label>
                    <input type="radio" name="jenjang" value="Paket A" class="flat-red form-control" <?php if($santri['jenjang']=="Paket A"){ echo "checked";} ?>> Paket A
                </label>
                <label>
                    <input type="radio" name="jenjang" value="Ulya" class="flat-red form-control" <?php if($santri['jenjang']=="Ulya"){ echo "checked";} ?>> >Ulya
                </label>
           </div>

        </div>
        <div class="form-group">
           <label class="col-sm-2 control-label">Status</label>
           <div class="col-sm-10">

                <label>
                    <input type="radio" name="statusekolah" value="Negeri" class="flat-red form-control" <?php if($santri['status']=="Negeri"){ echo "checked";} ?>> Negeri
                </label>
                <label>
                    <input type="radio" name="statusekolah" value="Swasta" class="flat-red form-control" <?php if($santri['status']=="Swasta"){ echo "checked";} ?>> Swasta
                </label>

           </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama Sekolah</label>
             <div class="col-sm-5">

                   <input type="text" name="asalsekolah" value="<?php echo $santri['asalsekolah'] ?>" class="form-control"  placeholder="Nama Sekolah">
             </div>


        </div>
        <div class="form-group">
              <label class="col-sm-2 control-label">NPSN</label>
              <div class="col-sm-4">

                   <input type="text" name="npsn" value="<?php echo $santri['npsn'] ?>" class="form-control" placeholder="NPSN">
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Sekolah</label>
             <div class="col-sm-8">

                  <textarea class="form-control" name="alamatsekolah"><?php echo $santri['alamatsekolah'] ?> </textarea>
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Kabupaten / Kota</label>
            <div class="col-sm-4">

                 <input type="text" name="kabsekolah" value="<?php echo $santri['kotasekolah'] ?>" class="form-control"  placeholder="Kabupaten / Kota">
           </div>
         </div>
        <div class="form-group">

                 <label class="col-sm-2 control-label">No. SKHUN</label>
                <div class="col-sm-6">

                      <input type="text" class="form-control" name="noskhu" value="<?php echo $santri['noskhu']; ?>" placeholder="Nama Lengkap" >
                </div>


        </div>
        <br>
        <h4 style="color:#3c8dbc"><b>D. Informasi Orangtua</b></h4>
        <hr>


        <div class="form-group">
            <label class="col-sm-2 control-label">NIK Ayah</label>
             <div class="col-sm-4">

                   <input type="text" name="nikayah" value="<?php echo $santri['nikayah']; ?>" class="form-control"  placeholder="NIK Ayah">
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama Ayah</label>
            <div class="col-sm-6">

                 <input type="text" name="namaayah" value="<?php echo $santri['namaayah']; ?>" class="form-control"  placeholder="Nama Ayah">
           </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pendidikan Ayah</label>
           <div class="col-sm-8">

                <label>
                    <input type="radio" name="pddayah" value="SD" class="flat-red form-control"  <?php if($santri['pddayah']=="SD"){ echo "checked";} ?>> SD
                </label>
                <label>
                    <input type="radio" name="pddayah" value="SMP" class="flat-red form-control" <?php if($santri['pddayah']=="SMP"){ echo "checked";} ?>> SMP
                </label>
                <label>
                    <input type="radio" name="pddayah" value="SMA" class="flat-red form-control" <?php if($santri['pddayah']=="SMA"){ echo "checked";} ?>> SMA
                </label>
                <label>
                    <input type="radio" name="pddayah" value="D1" class="flat-red form-control" <?php if($santri['pddayah']=="D1"){ echo "checked";} ?>> D1
                <label>
                    <input type="radio" name="pddayah" value="D2" class="flat-red form-control" <?php if($santri['pddayah']=="D2"){ echo "checked";} ?>> D2
                </label>
                 <label>
                    <input type="radio" name="pddayah" value="D3" class="flat-red form-control" <?php if($santri['pddayah']=="D3"){ echo "checked";} ?>> D3
                </label>
                 <label>
                    <input type="radio" name="pddayah" value="D4" class="flat-red form-control" <?php if($santri['pddayah']=="D4"){ echo "checked";} ?>> D4
                </label>
                 <label>
                    <input type="radio" name="pddayah" value="S1" class="flat-red form-control" <?php if($santri['pddayah']=="S1"){ echo "checked";} ?>> S1
                </label>
                 <label>
                    <input type="radio" name="pddayah" value="S2" class="flat-red form-control" <?php if($santri['pddayah']=="S2"){ echo "checked";} ?>> S2
                </label>
                 <label>
                    <input type="radio" name="pddayah" value="S3" class="flat-red form-control" <?php if($santri['pddayah']=="S3"){ echo "checked";} ?>> S3
                </label>
           </div>

        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Pekerjaan Ayah</label>
           <div class="col-sm-10">

                <label>
                    <input type="radio" name="pekerjaanayah" value="Tidak Bekerja" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Tidak Bekerja"){ echo "checked";} ?> > Tidak Bekerja
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Pensiunan / Alm" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Pensiunan / Alm"){ echo "checked";} ?> > Pensiunan / Alm
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="PNS" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="PNS"){ echo "checked";} ?>> PNS
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="TNI / Polri" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="TNI / Polri"){ echo "checked";} ?>> TNI / Polri
                <label>
                    <input type="radio" name="pekerjaanayah" value="Guru / Dosen" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Guru / Dosen"){ echo "checked";} ?>> Guru / Dosen
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Pegawai Swasta" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Pegawai Swasta"){ echo "checked";} ?>> Pegawai Swasta
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Wiraswasta" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Wiraswasta"){ echo "checked";} ?>> Wiraswasta
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Pengacara" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Pengacara"){ echo "checked";} ?>> Pengacara
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Seniman" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Seniman"){ echo "checked";} ?>> Seniman
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Dokter" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Dokter"){ echo "checked";} ?>> Dokter
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Pilot" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Pilot"){ echo "checked";} ?>> Pilot
                </label>

                <label>
                    <input type="radio" name="pekerjaanayah" value="Pedagang" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Pedagang"){ echo "checked";} ?>> Pedagang
                </label>
                 <label>
                    <input type="radio" name="pekerjaanayah" value="Tani/Ternak" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Tani/Ternak"){ echo "checked";} ?>> Tani/Ternak
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Nelayan" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Nelayan"){ echo "checked";} ?>> Nelayan
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Buruh" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Buruh"){ echo "checked";} ?>> Buruh
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Sopir" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Sopir"){ echo "checked";} ?>> Sopir
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Politikus" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Politikus"){ echo "checked";} ?>> Politikus
                </label>
                <label>
                    <input type="radio" name="pekerjaanayah" value="Lainnya" class="flat-red form-control" <?php if($santri['pekerjaanayah']=="Lainnya"){ echo "checked";} ?>> Lainnya
                </label>
           </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">NIK Ibu</label>
             <div class="col-sm-6">

                   <input type="text"  name="nikibu"  value="<?php echo $santri['nikibu']; ?>" class="form-control"  placeholder="NIK Ibu">
             </div>

        </div>
        <div class="form-group">
              <label class="col-sm-2 control-label">Nama Ibu</label>
              <div class="col-sm-6">
                   <input type="text" name="namaibu" value="<?php echo $santri['namaibu']; ?>" class="form-control"  placeholder="Nama Ibu">
             </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Pendidikan Ibu</label>
             <div class="col-sm-10">

                  <label>
                      <input type="radio" name="pddibu" value="SD" class="flat-red form-control" <?php if($santri['pddibu']=="SD"){ echo "checked";} ?> > SD
                  </label>
                  <label>
                      <input type="radio" name="pddibu" value="SMP" class="flat-red form-control" <?php if($santri['pddibu']=="SMP"){ echo "checked";} ?>> SMP
                  </label>
                  <label>
                      <input type="radio" name="pddibu" value="SMA" class="flat-red form-control" <?php if($santri['pddibu']=="SMA"){ echo "checked";} ?>> SMA
                  </label>
                  <label>
                      <input type="radio" name="pddibu" value="D1" class="flat-red form-control" <?php if($santri['pddibu']=="D1"){ echo "checked";} ?>> D1
                  <label>
                      <input type="radio" name="pddibu" value="D2" class="flat-red form-control" <?php if($santri['pddibu']=="D2"){ echo "checked";} ?>> D2
                  </label>
                   <label>
                      <input type="radio" name="pddibu" value="D3" class="flat-red form-control" <?php if($santri['pddibu']=="D3"){ echo "checked";} ?>> D3
                  </label>
                   <label>
                      <input type="radio" name="pddibu" value="D4" class="flat-red form-control" <?php if($santri['pddibu']=="D4"){ echo "checked";} ?>> D4
                  </label>
                   <label>
                      <input type="radio" name="pddibu" value="S1" class="flat-red form-control" <?php if($santri['pddibu']=="S1"){ echo "checked";} ?>> S1
                  </label>
                   <label>
                      <input type="radio" name="pddibu" value="S2" class="flat-red form-control" <?php if($santri['pddibu']=="S2"){ echo "checked";} ?>> S2
                  </label>
                   <label>
                      <input type="radio" name="pddibu" value="S3" class="flat-red form-control" <?php if($santri['pddibu']=="S3"){ echo "checked";} ?>> S3
                  </label>
             </div>

        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Pekerjaan Ibu</label>
             <div class="col-sm-10">
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Ibu Rumah Tangga" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Ibu Rumah Tangga"){ echo "checked";} ?>> Ibu Rumah Tangga
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Pensiunan / Alm" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Pensiunan / Alm"){ echo "checked";} ?>> Pensiunan / Alm
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="PNS" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="PNS"){ echo "checked";} ?> > PNS
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="TNI / Polri" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="TNI / Polri"){ echo "checked";} ?>> TNI / Polri
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Guru / Dosen" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Guru / Dosen"){ echo "checked";} ?>> Guru / Dosen
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Pegawai Swasta" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Pegawai Swasta"){ echo "checked";} ?>> Pegawai Swasta
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Wiraswasta" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Wiraswasta"){ echo "checked";} ?>> Wiraswasta
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Pengacara" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Pengacara"){ echo "checked";} ?>> Pengacara
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Seniman" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Seniman"){ echo "checked";} ?>> Seniman
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Dokter" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Dokter"){ echo "checked";} ?>> Dokter
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Pilot" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Pilot"){ echo "checked";} ?>> Pilot
                 </label>

                 <label>
                     <input type="radio" name="pekerjaanibu" value="Pedagang" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Pedagang"){ echo "checked";} ?>> Pedagang
                 </label>
                  <label>
                     <input type="radio" name="pekerjaanibu" value="Tani/Ternak" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Tani/Ternak"){ echo "checked";} ?>> Tani/Ternak
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Nelayan" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Nelayan"){ echo "checked";} ?>> Nelayan
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Buruh" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Buruh"){ echo "checked";} ?>> Buruh
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Sopir" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Sopir"){ echo "checked";} ?>> Sopir
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Politikus" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Politikus"){ echo "checked";} ?>> Politikus
                 </label>
                 <label>
                     <input type="radio" name="pekerjaanibu" value="Lainnya" class="flat-red form-control" <?php if($santri['pekerjaanibu']=="Lainnya"){ echo "checked";} ?>> Lainnya
                 </label>
             </div>

        </div>
        <div class="form-group">
             <label class="col-sm-2 control-label">Penghasilan</label>
             <div class="col-sm-10">

                  <label>
                      <input type="radio" name="penghasilan" value="<= 500.000" class="flat-red form-control"  <?php if($santri['penghasilan']=="<= 500.000"){ echo "checked";} ?>> <= 500.000
                  </label>
                  <label>
                      <input type="radio" name="penghasilan" value="500.000-1000.000" class="flat-red form-control" <?php if($santri['penghasilan']=="500.000-1000.000"){ echo "checked";} ?>> 500.000-1000.000
                  </label>
                  <label>
                      <input type="radio" name="penghasilan" value="1000.000-2000.000" class="flat-red form-control" <?php if($santri['penghasilan']=="1000.000-2000.000"){ echo "checked";} ?>> 1000.000-2000.000
                  </label>
                  <label>
                      <input type="radio" name="penghasilan" value="2000.000-3000.000" class="flat-red form-control" <?php if($santri['penghasilan']=="2000.000-3000.000"){ echo "checked";} ?>> 2000.000-3000.000
                  <label>
                      <input type="radio" name="penghasilan" value="3000.000-5000.000" class="flat-red form-control" <?php if($santri['penghasilan']=="3000.000-5000.000"){ echo "checked";} ?>> 3000.000-5000.000
                  </label>
                   <label>
                      <input type="radio" name="penghasilan" value=">5000.0000" class="flat-red form-control" <?php if($santri['penghasilan']==">5000.000"){ echo "checked";} ?>>>5000.000
                  </label>

             </div>

        </div>
        <h4 style="color:#3c8dbc"><b>E. Prestasi</b></h4>
        <hr>
        <div class="form-group">
           <label class="col-sm-2 control-label">Bidang Prestasi</label>
           <div class="col-sm-10">

                <label>
                    <input type="radio" name="bidangprestasi" value="Akademik" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Akademik"){ echo "checked";} ?>> Akademik
                </label>
                <label>
                    <input type="radio" name="bidangprestasi" value="Keagamaan" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Keagamaan"){ echo "checked";} ?>> Keagamaan
                </label>
                <label>
                    <input type="radio" name="bidangprestasi" value="Teknologi" class="flat-red form-control"  <?php if($santri['bidangprestasi']=="Teknologi"){ echo "checked";} ?>> Teknologi
                </label>
                <label>
                    <input type="radio" name="bidangprestasi" value="Olahraga" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Olahraga"){ echo "checked";} ?>> Olahraga
                <label>
                    <input type="radio" name="bidangprestasi" value="Pramuka" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Pramuka"){ echo "checked";} ?>> Pramuka
                </label>
                 <label>
                    <input type="radio" name="bidangprestasi" value="KIR" class="flat-red form-control" <?php if($santri['bidangprestasi']=="KIR"){ echo "checked";} ?>> KIR
                </label>
                 <label>
                    <input type="radio" name="bidangprestasi" value="Kesenian" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Kesenian"){ echo "checked";} ?>> Kesenian
                </label>
                 <label>
                    <input type="radio" name="bidangprestasi" value="Pidato Bahasa Asing" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Pidato Bahasa Asing"){ echo "checked";} ?>> Pidato Bahasa Asing
                </label>
                 <label>
                    <input type="radio" name="bidangprestasi" value="Lainnya" class="flat-red form-control" <?php if($santri['bidangprestasi']=="Lainnya"){ echo "checked";} ?>> Lainnya
                </label>

           </div>

        </div>
        <div class="form-group">
             <label class="col-sm-2 control-label">Tingkat Prestasi</label>
             <div class="col-sm-10">

                  <label>
                      <input type="radio" name="tingkatprestasi" value="Kabupaten/Kota" class="flat-red form-control" <?php if($santri['tingkatprestasi']=="Kabupaten/Kota"){ echo "checked";} ?>> Kabupaten/Kota
                  </label>
                  <label>
                      <input type="radio" name="tingkatprestasi" value="Provinsi" class="flat-red form-control" <?php if($santri['tingkatprestasi']=="Provinsi"){ echo "checked";} ?>> Provinsi
                  </label>
                  <label>
                      <input type="radio" name="tingkatprestasi" value="Nasional" class="flat-red form-control" <?php if($santri['tingkatprestasi']=="Nasional"){ echo "checked";} ?>> Nasional
                  </label>
                  <label>
                      <input type="radio" name="tingkatprestasi" value="Internasional" class="flat-red form-control" <?php if($santri['tingkatprestasi']=="Internasional"){ echo "checked";} ?>> Internasional
                  </label>

             </div>

        </div>
        <div class="form-group">
             <label class="col-sm-2 control-label">Peringkat</label>
             <div class="col-sm-10">

                  <label>
                      <input type="radio" name="peringkat" value="Juara I" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara I"){ echo "checked";} ?>> Juara I
                  </label>
                  <label>
                      <input type="radio" name="peringkat" value="Juara II" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara II"){ echo "checked";} ?>> Juara II
                  </label>
                  <label>
                      <input type="radio" name="peringkat" value="Juara III" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara III"){ echo "checked";} ?>> Juara III
                  </label>
                  <label>
                      <input type="radio" name="peringkat" value="Juara Harapan I" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara Harapan I"){ echo "checked";} ?>> Juara Harapan I
                  </label>
                  <label>
                      <input type="radio" name="peringkat" value="Juara Harapan II" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara Harapan II"){ echo "checked";} ?>> Juara Harapan II
                  </label>
                  <label>
                      <input type="radio" name="peringkat" value="Juara Harapan III" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara Harapan III"){ echo "checked";} ?>> Juara Harapan III
                  </label>
                 <label>
                      <input type="radio" name="peringkat" value="Juara favorit" class="flat-red form-control" <?php if($santri['peringkatprestasi']=="Juara favorit"){ echo "checked";} ?>> Juara favorit
                  </label>

             </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tahun</label>
             <div class="col-sm-4">

                   <input type="text" name="tahun" value="<?php echo $santri['tahun']; ?>" class="form-control"  placeholder="Tahun">
             </div>

        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
