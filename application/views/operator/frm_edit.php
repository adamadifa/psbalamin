<div class="col-sm-8">
<?php echo form_open('operator/editoperator'); ?>
<?php echo form_hidden('operator_id',$operator['operator_id']); ?>
<table class="table table-bordered table-sm" >
    
    <tr>
        <td>Nama Lengkap</td>
        <td><?php echo form_input('nama_lengkap',$operator['nama_lengkap'],array('Placeholder'=>'Nama Lengkap','class'=>'form-control')); ?></td>
        
    </tr>
    <tr>
        <td>Username</td>
        <td><?php echo form_input('username',$operator['username'],array('Placeholder'=>'Username','class'=>'form-control')); ?></td>
        
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo form_password('password',$operator['password'],array('Placeholder'=>'Password','class'=>'form-control')); ?></td>
        
    </tr>
    <tr>
        <td colspan="2" align="right">
         <?php echo anchor('operator','Batal',array('class'=>'btn btn-danger')); ?>
         <?php echo form_submit('submit','Simpan',array('class'=>'btn btn-primary')); ?>
            
        
        </td>
    </tr>
    
    
</table>



<?php echo form_close(); ?>
</div>