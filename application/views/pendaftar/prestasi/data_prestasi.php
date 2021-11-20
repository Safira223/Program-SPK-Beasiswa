<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Jenis Prestasi</label>
                    <select name="jenis" class="form-control" required>
                        <option>Akademik</option>
                        <option>Non Akademik</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('jenis') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Nama Lomba</label>
                    <input type="text" name="nama_lomba" class="form-control <?php echo form_error('nama_lomba') ? 'is-invalid':'' ?>"">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_lomba') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tingkat Kejuaraan</label>
                    <select name="tingkat_kejuaraan" class="form-control" required id="">
                        <option>International</option>
                        <option>Nasional</option>
                        <option>Provinsi</option>
                        <option>Regional</option>
                        <option>Institusi</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('tingkat_kejuaraan') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Peringkat</label>
                    <select name="peringkat" class="form-control" required id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('peringkat') ?>
                    </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tempat') ?>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
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
                        <th>Jenis</th>
                        <th>Nama Lomba</th>
                        <th>Tingkat Kejuaraan</th>
                        <th>Peringkat</th>
                        <th>Tempat</th>
                        <th>Tahun</th>
                        <th>Sertifikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_prestasi as $row): ?>
                        <tr>
                            <td><?=$row->jenis?></td>
                            <td><?=$row->nama_lomba?></td>
                            <td><?=$row->tingkat_kejuaraan?></td>
                            <td><?=$row->peringkat?></td>
                            <td><?=$row->tempat?></td>
                            <td><?=$row->tahun?></td>
                            <td><a href="<?=base_url('assets/sertifikat prestasi/'.$row->sertifikat)?>"><?=$row->sertifikat?></a></td>
                            <td>
                                <a href="<?=site_url('pendaftar/data_prestasi/update/'.$row->prestasi_id)?>" class="btn btn-sm btn-warning edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=site_url('pendaftar/data_prestasi/delete/'.$row->prestasi_id)?>" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>