<div class="col-sm-8">

    <?php echo form_open('barang/editbarang'); ?>
    <?php echo form_hidden('barang_id',$getbarang['barang_id']); ?>
    <table class="table table-bordered table-sm" >
   
        <tr> <td>Nama Barang</td><td><?php echo form_input('nama_barang',$getbarang['nama_barang'],array('class'=>'form-control ')); ?></td>   </tr>
        <tr> <td>Kategori Barang</td>
            <td>
                <select name="kategori_id" class="form-control">
                    
                    <?php
                        foreach ($pilkat->result() as $r) {

                            echo "<option value='$r->kategori_id'";
                            
                            echo $getbarang['kategori_id']==$r->kategori_id?'selected':'';
                            echo ">$r->nama_kategori</option>";


                        }

                    ?>

                </select>

            </td>  
       </tr>
       <tr> <td>Harga Barang</td><td><?php echo form_input('harga_barang',$getbarang['harga'],array('class'=>'form-control','style'=>'text-align:right')); ?></td>   </tr>
       <tr>
           
           <td colspan="2" style="text-align: right">
               <?php echo anchor('barang','Batal',array('class'=>'btn btn-danger')); ?>
               <?php echo form_submit('submit','Simpan',array('class'=>'btn btn-primary')); ?>
               
           
           
           </td>
       </tr>   

 
    
    
    </table>
    <?php echo form_close(); ?>
</div>