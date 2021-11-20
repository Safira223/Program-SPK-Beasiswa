<div class="col-md-6">
        <div class="x_panel tile">
            <div class="x_title">
                <h2>Form Tambah Fakultas</h2>
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
                <form action="<?php echo site_url('admin/fakultas/add') ?>" method="post">
                    <div class="form-group">
                        <label for="fakultas">Nama Fakultas</label>
                        <input type="text" class="form-control <?php echo form_error('fakultas') ? 'is-invalid':'' ?>" name="fakultas">
                        <div class="invalid-feedback">
                            <?php echo form_error('fakultas') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm">Simpan</button>
                    <a href="<?php echo site_url('admin/fakultas')?>" class="btn btn-success btn-sm ">Kembali</a>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>