<?php
foreach ($biaya_daftar as $biaya) {
?>
    <div class="container">
            <form action="<?php echo base_url('psb/update_biaya'); ?>" method="post" class="form-horizontal">  
                <div class="form-group">
                    <input type="hidden" name='id_biaya_daftar' required='true' value="<?php echo $biaya->id_biaya_daftar; ?>">
                    <div class="form-group">
                        <label class="col-sm-2" style="width: 100%;">Nominal</label>
                        <div class="col-xs-3" style="width: 20%;"><input type="text" class="form-control" name='nominal' required='true' value="<?php echo $biaya->nominal; ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2" style="width: 100%;">Nama Bank</label>
                        <div class="col-xs-3" style="width: 40%;"><input type="text" class="form-control" name='nama_bank' required='true' value="<?php echo $biaya->nama_bank; ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2" style="width: 100%;">No Rekening</label>
                        <div class="col-xs-3" style="width: 20%;"><input type="text" class="form-control" name='norek' required='true' value="<?php echo $biaya->no_rekening; ?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2" style="width: 100%;">Atas Nama</label>
                        <div class="col-xs-3" style="width: 30%;"><input type="text" class="form-control" name='an' required='true' value="<?php echo $biaya->atas_nama; ?>"></div>
                    </div>
                     <div class="form-group">
                    <label class="col-sm-2" style="width: 100%;">Jenjang</label>
                    <div class="col-xs-3" style="width: 20%;">
                        <select name='jenjang' class="form-control" required="true">
                            <option value="">Pilih</option>
                            <option value="RA" <?php if ($biaya->jenjang=="RA"){ echo "selected"; } ?>>RA</option>
                            <option value="SDIT" <?php if ($biaya->jenjang=="SDIT"){ echo "selected"; } ?>>SDIT</option>
							 <option value="SMP" <?php if ($biaya->jenjang=="SMP"){ echo "selected"; } ?>>SMP</option>
                            <option value="SMA" <?php if ($biaya->jenjang=="SMA"){ echo "selected"; } ?>>SMA</option>
                            <option value="SMKIT TLM" <?php if ($biaya->jenjang=="SMKIT TLM"){ echo "selected"; } ?>>SMKIT TLM</option>
                            <option value="SMKIT TB" <?php if ($biaya->jenjang=="SMKIT TB"){ echo "selected"; } ?>>SMKIT TB</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-sm-2" style="width: 100%;">Status</label>
                        <div class="col-xs-3" style="width: 30%;">
                            <select class="form-control select2 " style="width: 40%;" name='status' required='true'>
                                <option value=''>---Pilih---</option>
                                <option value='on' <?php if ($biaya->status=="on"){ echo "selected"; } ?>>ON</option>
                                <option value='off' <?php if ($biaya->status=="off"){ echo "selected"; } ?>>OFF</option>
                            </select>
                        </div> 
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary" onclick="javascript: return confirm('Apakah Anda Yakin Akan Menyimpan Data Ini?')">Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                </div>
        </form>
    </div>

<?php
} 
?>