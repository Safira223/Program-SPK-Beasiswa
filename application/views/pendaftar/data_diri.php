
<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->nama_lengkap) ? $data_diri->nama_lengkap : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="ktp">No Identitas / E-KTP</label>
                    <input type="text" name="ktp" class="form-control <?php echo form_error('ktp') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->ktp) ? $data_diri->ktp : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ktp') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control <?php echo form_error('foto') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->foto) ? $data_diri->foto : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('foto') ?>
                    </div>
                    <?php if(!empty($data_diri->foto)) {?>
                    <span><a href="<?=base_url('assets/foto/'.$data_diri->foto)?>"><?=$data_diri->foto?></a></span>
                    <?php } ?>
                </div>
                <div class="col-md-3 mb-3">
                    <label>KTP</label>
                    <input type="file" name="ktp_img" class="form-control <?php echo form_error('ktp_img') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->ktp_img) ? $data_diri->ktp_img : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ktp_img') ?>
                    </div>
                    <?php if(!empty($data_diri->ktp_img)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_diri->ktp_img)?>"><?=$data_diri->ktp_img?></a></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->tempat_lahir) ? $data_diri->tempat_lahir : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tempat_lahir') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->tanggal_lahir) ? $data_diri->tanggal_lahir : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tanggal_lahir') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Kartu Keluarga</label>
                    <input type="file" name="kk" class="form-control <?php echo form_error('kk') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->kk) ? $data_diri->kk : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('kk') ?>
                    </div>
                    <?php if(!empty($data_diri->kk)) {?>
                    <span><a href="<?=base_url('assets/kk/'.$data_diri->kk)?>"><?=$data_diri->kk?></a></span>
                    <?php } ?>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Akta Lahir</label>
                    <input type="file" name="akta_lahir" class="form-control <?php echo form_error('akta_lahir') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->akta_lahir) ? $data_diri->akta_lahir : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('akta_lahir') ?>
                    </div>
                    <?php if(!empty($data_diri->akta_lahir)) {?>
                    <span><a href="<?=base_url('assets/akta_lahir/'.$data_diri->akta_lahir)?>"><?=$data_diri->akta_lahir?></a></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Agama</label>
                    <select name="agama"  class="form-control" required>
                        <?php $agama = ''; $jk = ''; $status = '';?>
                        <?php !empty($data_diri->agama) ? $agama = $data_diri->agama : $agama ?>
                        <option <?=$agama == 'Islam' ? 'selected' : ''?>>Islam</option>
                        <option <?=$agama == 'Protestan' ? 'selected' : ''?>>Protestan</option>
                        <option <?=$agama == 'Katolik' ? 'selected' : ''?>>Katolik</option>
                        <option <?=$agama == 'Hindu' ? 'selected' : ''?>>Hindu</option>
                        <option <?=$agama == 'Buddha' ? 'selected' : ''?>>Buddha</option>
                        <option <?=$agama == 'Khonghucu' ? 'selected' : ''?>>Khonghucu</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('tempat_lahir') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Jenis Kelamin</label>
                    <?php !empty($data_diri->jk) ? $jk = $data_diri->jk : $jk ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-laki" <?=$jk == 'Laki-laki' ? 'checked' : ''?>>
                    <label class="form-check-label" for="exampleRadios1">
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan" <?=$jk == 'Perempuan' ? 'checked' : ''?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Perempuan
                    </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status"  class="form-control" required>
                        <?php !empty($data_diri->status) ? $status = $data_diri->status : $status ?>
                        <option <?=$status == 'Menikah' ? 'selected' : ''?>>Menikah</option>
                        <option <?=$status == 'Belum Menkah' ? 'selected' : ''?>>Belum Menikah</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Alamat Sesuai Identitas</label>
                    <input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->alamat) ? $data_diri->alamat : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Kota / Kabupaten</label>
                    <input type="text" name="kota_kabupaten" class="form-control <?php echo form_error('kota_kabupaten') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->kota_kabupaten) ? $data_diri->kota_kabupaten : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('kota_kabupaten') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="form-control <?php echo form_error('provinsi') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->provinsi) ? $data_diri->provinsi : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('provinsi') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control <?php echo form_error('kode_pos') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->kode_pos) ? $data_diri->kode_pos : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('kode_pos') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>No. Hp</label>
                    <input type="text" name="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->no_hp) ? $data_diri->no_hp : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_hp') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>No. Tlp Rumah</label>
                    <input type="text" name="no_tlp_rumah" class="form-control <?php echo form_error('no_tlp_rumah') ? 'is-invalid':'' ?>" value="<?=!empty($data_diri->no_tlp_rumah) ? $data_diri->no_tlp_rumah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_tlp_rumah') ?>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>