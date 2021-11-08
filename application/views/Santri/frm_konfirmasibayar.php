<form action="<?php echo base_url(); ?>pendaftaran/konfirmasi_bayar" method="POST">
<table class="table table-striped">
	<input type="hidden" value="<?php echo $santri['no_daftar'] ?>" name="no_daftar">
    <tr>
        
		<td width="300px">NISN</td>
        <td width="5px">:</td>
        <td><?php echo $santri['nisn']; ?></td>
    </tr>
    <tr>
        <td width="300px">Nama Lengkap</td>
        <td width="5px">:</td>
        <td><?php echo $santri['nama_lengkap']; ?></td>
    </tr>
	<tr>
        <td width="300px">Dari Bank</td>
        <td width="5px">:</td>
        <td><div class="col-md-5"><input type="text" name="daribank" class="form-control"></div></td>
    </tr>
	<tr>
        <td width="300px">No. Rekening</td>
        <td width="5px">:</td>
        <td><div class="col-md-8"><input type="text" name="norek" class="form-control"></div></td>
    </tr>
	<tr>
        <td width="300px">Nama Pemilik Rekening</td>
        <td width="5px">:</td>
        <td><div class="col-md-8"><input type="text" name="namapemilik" class="form-control"></div></td>
    </tr>
	<tr>
        <td width="300px">Ke Bank</td>
        <td width="5px">:</td>
        <td><div class="col-md-5"><input type="text" name="bank_tujuan" class="form-control"></div></td>
    </tr>
	
	<tr>
        <td width="300px">Jumlah Yang Harus Dibayar</td>
        <td width="5px">:</td>
        <td><b><?php echo number_format($gel['biaya_daftar'],0,',','.'); ?></b><input type="hidden" value="<?php echo $gel['biaya_daftar']; ?>" name="jmlbayar"></td>
    </tr>
	<tr>
        <td width="300px">Tanggal Bayar</td>
        <td width="5px">:</td>
        <td><div class="col-md-5"><input type="text" id="single_cal1" name="tglbayar" class="form-control"></div></td>
    </tr>
	<tr>
        <td colspan="3"><input type="submit" name="submit" value="Konfirmasi Pembayaran" class="btn btn-success"></td>
       
    </tr>
    

</table>
</form>
