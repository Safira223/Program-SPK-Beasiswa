<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option>Seminar</option>
                        <option>Pelatihan</option>
                        <option>Workshop</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('kategori') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"">
                    <div class="invalid-feedback">
                        <?php echo form_error('judul') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Penyelenggara</label>
                    <input type="text" name="penyelenggara" class="form-control <?php echo form_error('penyelenggara') ? 'is-invalid':'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('penyelenggara') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Skala</label>
                    <select name="scala" class="form-control" required id="">
                        <option>International</option>
                        <option>Nasional</option>
                        <option>Provinsi</option>
                        <option>Regional</option>
                        <option>Institusi</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('scala') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Sertifikat</label>
                    <input type="file" name="sertifikat" class="form-control <?php echo form_error('sertifikat') ? 'is-invalid':'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('sertifikat') ?>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>
<div class="x_panel tile">
    <div class="x_content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kategori</th>
                        <th>Skala</th>
                        <th>Penyelenggara</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Sertifikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_seminar as $row): ?>
                        <tr>
                            <td><?=$row->kategori?></td>
                            <td><?=$row->scala?></td>
                            <td><?=$row->penyelenggara?></td>
                            <td><?=$row->judul?></td>
                            <td><?=$row->tahun?></td>
                            <td><a href="<?=base_url('assets/sertifikat seminar/'.$row->sertifikat)?>"><?=$row->sertifikat?></a></td>
                            <td>
                                <a href="<?=site_url('pendaftar/data_seminar/update/'.$row->seminar_id)?>" class="btn btn-sm btn-warning edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=site_url('pendaftar/data_seminar/delete/'.$row->seminar_id)?>" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>