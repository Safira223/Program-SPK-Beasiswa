<div class="col-md-6">
        <div class="x_panel tile">
            <div class="x_title">
                <h2>Kriteriaa Form Edit</h2>
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
                <form action="<?php echo site_url('admin/kriteria/edit',$kriteria->kriteria_id) ?>" method="post">
                    <input type="hidden" name="id" value="<?=$kriteria->kriteria_id?>">
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input class="form-control <?php echo form_error('nama_kriteria') ? 'is-invalid':'' ?>" type="text" name="nama_kriteria" value="<?=$kriteria->nama_kriteria?>" />
                        <div class="invalid-feedback">
                            <?php echo form_error('nama_kriteria') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="attribut">Attribut</label>
                        <select name="attribut" id="" class="form-control" required>
                            <option <?=$kriteria->attribut == 'Benefit' ? 'selected' : ''?>>Benefit</option>
                            <option <?=$kriteria->attribut == 'Cost' ? 'selected' : ''?>>Cost</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('attribut') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot</label>
                        <input class="form-control <?php echo form_error('bobot') ? 'is-invalid':'' ?>" type="number" name="bobot" value="<?=$kriteria->bobot?>"/>
                        <div class="invalid-feedback">
                            <?php echo form_error('bobot') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm">Save</button>
                    <a href="<?=site_url('admin/kriteria')?>" class="btn btn-sm btn-success">Kembali</a>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>