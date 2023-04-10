<?=form_open('dosen/save', array('id'=>'formdosen'), array('method'=>'add'));?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form <?=$subjudul?></h3>
        <div class="box-tools pull-right">
            <a href="<?=base_url()?>dosen" class="btn btn-sm btn-flat btn-warning">
                <i class="fa fa-arrow-left"></i> Batal
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label for="nama_dosen">Nama Lowongan</label>
                    <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Lowongan">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="requirements">Requirements</label>
                    <textarea name="requirements" id="requirements" cols="30" rows="10"></textarea>
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian / Department</label>
                    <select name="bagian" id="bagian" class="form-control select2" style="width: 100%!important">
                        <option value="" disabled selected>Pilih Bagian / Department</option>
                        <?php foreach ($bagian as $row) : ?>
                            <option value="<?=$row->id_bagian?>"><?=$row->nama_bagian?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="help-block"></small>
                </div>
                <div class="form-group pull-right">
                    <button type="reset" class="btn btn-flat btn-default">
                        <i class="fa fa-rotate-left"></i> Reset
                    </button>
                    <button type="submit" id="submit" class="btn btn-flat bg-purple">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?=form_close();?>

<script src="<?=base_url()?>assets/dist/js/app/master/lowongan/add.js"></script>