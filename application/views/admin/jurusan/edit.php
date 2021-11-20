<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>Form Edit Program Studi</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php echo $this->session->flashdata('message') ?>
            <form action="<?php echo site_url('admin/jurusan/edit/'.$jurusan->id) ?>" method="post">
                <input type="hidden" value="<?php echo $jurusan->fakultas_id?>" name="fakultas_id">
                <input type="hidden" value="<?php echo $jurusan->id?>" name="id">
                <div class="form-group">
                    <label for="jurusan">Nama Program Studi</label>
                    <input  type="text" class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>" name="jurusan" value="<?php echo $jurusan->jurusan?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('jurusan') ?>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?php echo site_url('admin/jurusan/show/'.$jurusan->fakultas_id)?>" class="btn btn-success btn-sm">Kembali</a>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>