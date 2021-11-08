  <div class="panel panel-default">
    <div class="panel-heading"><b>Form Upload Foto</b></div>
        <div class="panel-body">
            <form action="<?php echo base_url(); ?>santri/upload_foto" method="post" enctype="multipart/form-data">
                  <table class="table table-striped">
                       <tr>
                          <td style="width:15%;">File Foto</td>
                          <td>
                              <div class="col-sm-6">
                                  <input type="file" name="filefoto" class="form-control">
                                  <input type="hidden" name="filelama" value="<?php echo $santri['foto']; ?>" class="form-control">
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
