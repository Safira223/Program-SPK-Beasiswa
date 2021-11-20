<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
    <form action="<?php echo site_url('pendaftar/data_prestasi/update/'.$id) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Jenis Prestasi</label>
                    <select name="jenis" class="form-control" required>
                        <option value="Akademik" <?php echo ($data_prestasi->jenis == "Akademik")?"selected":''; ?> >Akademik</option>
                        <option value="Non Akademik" <?php echo ($data_prestasi->jenis == "Non Akademik")?"selected":''; ?>>Non Akademik</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('jenis') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Nama Lomba</label>
                    <input type="text" name="nama_lomba" class="form-control <?php echo form_error('nama_lomba') ? 'is-invalid':'' ?>" 
                        value="<?php echo isset($data_prestasi->nama_lomba)?$data_prestasi->nama_lomba:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lomba') ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tingkat Kejuaraan</label>
                    <select name="tingkat_kejuaraan" class="form-control" required>
                        <option value="Internasional" <?php echo($data_prestasi->tingkat_kejuaraan == "Internasional")?"selected":''; ?>>Internasional</option>
                        <option value="Nasional" <?php echo($data_prestasi->tingkat_kejuaraan == "Nasional")?"selected":''; ?>>Nasional</option>
                        <option value="Provinsi" <?php echo($data_prestasi->tingkat_kejuaraan == "Provinsi")?"selected":''; ?>>Provinsi</option>
                        <option value="Regional" <?php echo($data_prestasi->tingkat_kejuaraan == "Regional")?"selected":''; ?>>Regional</option>
                        <option value="Institusi" <?php echo($data_prestasi->tingkat_kejuaraan == "Institusi")?"selected":''; ?>>Institusi</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('tingkat_kejuaraan') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Peringkat</label>
                    <select name="peringkat" class="form-control" required>
                        <option value="1" <?php echo($data_prestasi->peringkat == "1")?"selected":''; ?>>1</option>
                        <option value="2" <?php echo($data_prestasi->peringkat == "2")?"selected":''; ?>>2</option>
                        <option value="3" <?php echo($data_prestasi->peringkat == "3")?"selected":''; ?>>3</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('peringkat') ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>"
                    value="<?php echo isset($data_prestasi->tempat)?$data_prestasi->tempat:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tempat') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                    value="<?php echo isset($data_prestasi->tahun)?$data_prestasi->tahun:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Sertifikat</label>
                    <input type="file" name="sertifikat" class="form-control <?php echo form_error('sertifikat') ? 'is-invalid':'' ?>" 
                    value="<?php echo !empty($data_prestasi->sertifikat) ? $data_prestasi->sertifikat : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('sertifikat') ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <u><a href="<?php echo base_url('assets/sertifikat prestasi/'.$data_prestasi->sertifikat) ?>" target="_blank">Klik disini</a></u>
                    <label>untuk lihat sertifikat</label>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
            <a href="<?php echo site_url('pendaftar/data_prestasi')?>" class="btn btn-sm btn-success">Kembali</a>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>
