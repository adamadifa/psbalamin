<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Data Gelombang Pendaftaran</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
        <?php echo anchor('gelombang/inputgelombang','<i class="fa fa-plus"></i> Tambah Data Gelombang',array('class'=>'btn btn-sm btn-danger')) ?>
        <br><br>
        <table class="table table-condensed table-hover">


            <tr>
                <th>NO</th>
                <th>Tahun Ajaran</th>
                <th>Gelombang</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Tanggal Test</th>
                <th>Biaya Daftar</th>
                <th>Aksi</th>

            </tr>

            <?php
            $no=1;
            foreach ($listgelombang->result() as $r){

            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r->tahun_ajaran; ?></td>
                <td><?php echo $r->gelombang; ?></td>
                <td><?php echo $r->tgl_mulai; ?></td>
                <td><?php echo $r->tgl_selesai; ?></td>
                <td><?php echo $r->tgl_test; ?></td>
                <td><?php echo $r->biaya_daftar; ?></td>
                <td>
                    <?php echo anchor('gelombang/edit_gel/'.$r->id_gel,'<i class="fa fa-edit"></i>',array('class'=>'btn btn-xs btn-primary')); ?>
                    <?php echo anchor('gelombang/hapus_gel/'.$r->id_gel,'<i class="fa fa-trash-o"></i>',array('class'=>'btn btn-xs btn-danger')); ?>
                </td>

            </tr>
            <?php
            $no++;
            }
            ?>

        </table>
    </div>
    <div class="box-footer">
          Footer
    </div>
</div>
