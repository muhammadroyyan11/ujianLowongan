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
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input autofocus="autofocus" onfocus="this.select()" type="number" id="nip" class="form-control" name="nip" placeholder="NIP">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="nama_dosen">Nama</label>
                    <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="email">Email HRD</label>
                    <input type="text" class="form-control" name="email" placeholder="Email Dosen">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="email">Password Akun</label>
                    <input type="password" class="form-control" name="password" placeholder="Email Dosen">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="email">Password Akun</label>
                    <input type="password" class="form-control" name="passconf" placeholder="Email Dosen">
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

<script src="<?=base_url()?>assets/dist/js/app/master/dosen/add.js"></script>