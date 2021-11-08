<form class="form-horizontal" method="post" action = "<?php echo base_url(); ?>pendaftaran/<?php echo $act; ?>">
    <div class="box-body">

      <div class="form-group">
         <div class="col-sm-4">
              <label>NISN</label>
				
               <input type="text"  class="form-control" name="nisn"  placeholder="ex. 9931371065" required>
               <input type="hidden"  class="form-control" name="no_terakhir" value="<?php echo $nomor_terakhir; ?>"  placeholder="ex. 9931371065" required>
         </div>


      </div>
      <div class="form-group">
         <div class="col-sm-6">
              <label for="exampleInputEmail1">Nama Lengkap</label>
               <input type="text" class="form-control" name="nama_lengkap"  placeholder="Nama Lengkap" required>
         </div>

      </div>
      <div class="form-group">
         <div class="col-sm-5">
              <label>Tempat Lahir</label>
               <input type="text" class="form-control" name="tempat_lahir"  placeholder="Tempat Lahir" required>
         </div>
          <div class="col-sm-4">
              <label>Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" placeholder="ex. 1993-07-16" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask required>
         </div>

      </div>
      <div class="form-group">
         <div class="col-sm-6">
             <label for="exampleInputEmail1">Jenis Kelamin</label>
               <label>
                  <input type="radio" name="jk" value="L" class="flat-red form-control" checked> Laki Laki
               </label>
                <label>
                  <input type="radio" name="jk" value="P" class="flat-red form-control"> Perempuan
               </label>
         </div>

      </div>
      <div class="form-group">
         <div class="col-sm-4">
              <label>Password</label>
               <input type="password"  class="form-control" name="password"  placeholder="***********" required>
         </div>


      </div>
      <div class="form-group">
         <div class="col-sm-4">

               <input type="hidden"  value="<?php echo $gel['id_gel']; ?>" class="form-control" name="id_gel"  placeholder="***********" required>
               <input type="hidden"  value="<?php echo $tingkat; ?>" class="form-control" name="tingkat"  placeholder="***********" required>

         </div>


      </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="submit" class="btn btn-lg btn-danger">Daftar</button>
    </div>
</form>
