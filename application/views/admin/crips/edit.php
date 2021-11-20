<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>Himpunan Form Edit</h2>
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
            <form action="<?php echo site_url('admin/crips/edit/'.$crips->crips_id) ?>" method="post">
                <input type="hidden" value="<?=$crips->kriteria_id?>" name="kriteria_id">
                <input type="hidden" value="<?=$crips->crips_id?>" name="id">
                <div class="form-group">
                    <label for="nama_crips">Nama</label>
                    <input class="form-control <?php echo form_error('nama_crips') ? 'is-invalid':'' ?>" type="text" name="nama_crips" value="<?=$crips->nama_crips?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_crips') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <select name="keterangan" id="" class="form-control" required>
                        <option <?=$crips->keterangan == 'Sangat Baik' ? 'selected' : ''?>>Sangat Baik</option>
                        <option <?=$crips->keterangan == 'Baik' ? 'selected' : ''?>>Baik</option>
                        <option <?=$crips->keterangan == 'Cukup' ? 'selected' : ''?>>Cukup</option>
                        <option <?=$crips->keterangan == 'Kurang' ? 'selected' : ''?>>Kurang</option>
                        <option <?=$crips->keterangan == 'Sangat Kurang' ? 'selected' : ''?>>Sangat Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('keterangan') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input class="form-control <?php echo form_error('bobot') ? 'is-invalid':'' ?>" type="number" name="bobot" value="<?=$crips->bobot?>"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('bobot') ?>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Save</button>
                <a href="<?=site_url('admin/crips/show/'.$crips->kriteria_id)?>" class="btn btn-sm btn-success">Kembali</a>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>