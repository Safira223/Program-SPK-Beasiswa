<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
    <form action="<?php echo site_url('pendaftar/data_seminar/update/'.$id) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Seminar" <?php echo ($data_seminar->kategori == "Seminar")?"selected":''; ?> >Seminar</option>
                        <option value="Pelatihan" <?php echo ($data_seminar->kategori == "Pelatihan")?"selected":''; ?>>Pelatihan</option>
                        <option value="Workshop" <?php echo ($data_seminar->kategori == "Workshop")?"selected":''; ?>>Workshop</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('jenis') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>" 
                        value="<?php echo isset($data_seminar->judul)?$data_seminar->judul:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('judul') ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Penyelenggara</label>
                    <input type="text" name="penyelenggara" class="form-control <?php echo form_error('penyelenggara') ? 'is-invalid':'' ?>" 
                        value="<?php echo isset($data_seminar->penyelenggara)?$data_seminar->penyelenggara:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('penyelenggara') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Skala</label>
                    <select name="scala" class="form-control" required>
                        <option value="Internasional" <?php echo($data_seminar->scala == "Internasional")?"selected":''; ?>>Internasional</option>
                        <option value="Nasional" <?php echo($data_seminar->scala == "Nasional")?"selected":''; ?>>Nasional</option>
                        <option value="Provinsi" <?php echo($data_seminar->scala == "Provinsi")?"selected":''; ?>>Provinsi</option>
                        <option value="Regional" <?php echo($data_seminar->scala == "Regional")?"selected":''; ?>>Regional</option>
                        <option value="Institusi" <?php echo($data_seminar->scala == "Institusi")?"selected":''; ?>>Institusi</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('scala') ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                    value="<?php echo isset($data_seminar->tahun)?$data_seminar->tahun:'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun') ?>
                    </div>
                </div>
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
                    <u><a href="<?php echo base_url('assets/sertifikat seminar/'.$data_seminar->sertifikat) ?>" target="_blank">Klik disini</a></u>
                    <label>untuk lihat sertifikat</label>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
            <a href="<?php echo site_url('pendaftar/data_seminar')?>" class="btn btn-sm btn-success">Kembali</a>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>
