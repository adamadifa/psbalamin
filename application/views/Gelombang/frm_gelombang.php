<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Data Gelombang </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">

        <form class="form-horizontal" method="post" action = "<?php echo base_url(); ?>gelombang/inputgelombang">
            <div class="box-body">


                <div class="form-group">

                  <label class="col-sm-2 control-label">Gelombang</label>
                   <div class="col-sm-2">
                        <input type="text"  class="form-control" name="gelombang" required>
                   </div>


                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Mulai</label>
                    <div class="col-sm-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="tgl_mulai" class="form-control pull-right" id="single_cal1" required>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Berakhir</label>
                    <div class="col-sm-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="tgl_selesai" class="form-control pull-right" id="single_cal2" required>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Test</label>
                    <div class="col-sm-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="tgl_test" class="form-control pull-right" id="single_cal3" required>
                        </div>
                    </div>

                </div>
				<div class="form-group">

                  <label class="col-sm-2 control-label">Biaya Daftar</label>
                   <div class="col-sm-2">
                        <input type="text"  class="form-control" name="biaya_daftar" required>
                   </div>


                </div>
                <div class="form-group">

                  <label class="col-sm-2 control-label">Tahun Ajaran</label>
                   <div class="col-sm-2">
                        <input type="text"  class="form-control" name="tahunajaran" required>
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
