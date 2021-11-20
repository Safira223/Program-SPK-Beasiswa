
<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Nama Lengkap Ayah</label>
                    <input type="text" name="nama_lengkap_ayah" class="form-control <?php echo form_error('nama_lengkap_ayah') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->nama_lengkap_ayah) ? $data_ortu->nama_lengkap_ayah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap_ayah') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="ktp">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control <?php echo form_error('pekerjaan_ayah') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->pekerjaan_ayah) ? $data_ortu->pekerjaan_ayah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('pekerjaan_ayah') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>No Tlp Ayah</label>
                    <input type="text" name="no_tlp_ayah" class="form-control <?php echo form_error('no_tlp_ayah') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->no_tlp_ayah) ? $data_ortu->no_tlp_ayah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_tlp_ayah') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>KTP Ayah</label>
                    <input type="file" name="ktp_ayah" class="form-control <?php echo form_error('ktp_ayah') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->ktp_ayah) ? $data_ortu->ktp_ayah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ktp_ayah') ?>
                    </div>
                    <?php if(!empty($data_ortu->ktp_ayah)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_ortu->ktp_ayah)?>"><?=$data_ortu->ktp_ayah?></a></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Nama Lengkap Ibu</label>
                    <input type="text" name="nama_lengkap_ibu" class="form-control <?php echo form_error('nama_lengkap_ibu') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->nama_lengkap_ibu) ? $data_ortu->nama_lengkap_ibu : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap_ibu') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="ktp">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control <?php echo form_error('pekerjaan_ibu') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->pekerjaan_ibu) ? $data_ortu->pekerjaan_ibu : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('pekerjaan_ibu') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>No Tlp Ibu</label>
                    <input type="text" name="no_tlp_ibu" class="form-control <?php echo form_error('no_tlp_ibu') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->no_tlp_ibu) ? $data_ortu->no_tlp_ibu : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_tlp_ibu') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>KTP Ibu</label>
                    <input type="file" name="ktp_ibu" class="form-control <?php echo form_error('ktp_ibu') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->ktp_ibu) ? $data_ortu->ktp_ibu : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ktp_ibu') ?>
                    </div>
                    <?php if(!empty($data_ortu->ktp_ibu)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_ortu->ktp_ibu)?>"><?=$data_ortu->ktp_ibu?></a></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Nama Lengkap Wali</label>
                    <input type="text" name="nama_lengkap_wali" class="form-control <?php echo form_error('nama_lengkap_wali') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->nama_lengkap_wali) ? $data_ortu->nama_lengkap_wali : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lengkap_wali') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="ktp">Pekerjaan Wali</label>
                    <input type="text" name="pekerjaan_wali" class="form-control <?php echo form_error('pekerjaan_wali') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->pekerjaan_wali) ? $data_ortu->pekerjaan_wali : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('pekerjaan_wali') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>No Tlp Wali</label>
                    <input type="text" name="no_tlp_wali" class="form-control <?php echo form_error('no_tlp_wali') ? 'is-invalid':'' ?>" value="<?=!empty($data_ortu->no_tlp_wali) ? $data_ortu->no_tlp_wali : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('no_tlp_wali') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>KTP Wali</label>
                    <input type="file" name="ktp_wali" class="form-control <?php echo form_error('ktp_wali') ? 'is-invalid':'' ?>" value="<?php echo !empty($data_ortu->ktp_wali) ? $data_ortu->ktp_wali : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ktp_wali') ?>
                    </div>
                    <?php if(!empty($data_ortu->ktp_wali)) {?>
                    <span><a href="<?php echo base_url('assets/images/ktp wali/'.$data_ortu->ktp_wali)?>"><?php echo $data_ortu->ktp_wali?></a></span>
                    <?php } ?>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>