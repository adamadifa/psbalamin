<?php echo anchor('operator/inputoperator','Tambah Data',array('class'=>'btn btn-sm btn-danger')); ?>
<hr>
<table class="table table-striped table-sm" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Useraname</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no=1;
        foreach ($operator->result() as $r){ 
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $r->nama_lengkap; ?></td>
            <td><?php echo $r->username; ?></td>
            <td><?php echo $r->password; ?></td>
            <td>
                <?php echo anchor('operator/editoperator/'.$r->operator_id,'Edit',array('class'=>'btn btn-sm btn-success')) ?>
                <?php echo anchor('operator/hapusoperator/'.$r->operator_id,'Hapus',array('class'=>'btn btn-sm btn-danger')) ?>
                
            </td>
        </tr>
        <?php 
        $no++;
        } ?>
    </tbody>
</table>