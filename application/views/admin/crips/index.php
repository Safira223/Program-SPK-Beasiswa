<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>Himpunan Form</h2>
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
            <form action="<?php echo site_url('admin/crips/show/'.$id) ?>" method="post">
                <input type="hidden" value="<?=$id?>" name="kriteria_id">
                <div class="form-group">
                    <label for="nama_crips">Nama</label>
                    <input class="form-control <?php echo form_error('nama_crips') ? 'is-invalid':'' ?>" type="text" name="nama_crips"/>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_crips') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <select name="keterangan" id="" class="form-control" required>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                        <option>Kurang</option>
                        <option>Sangat Kurang</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('keterangan') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input class="form-control <?php echo form_error('bobot') ? 'is-invalid':'' ?>" type="number" name="bobot"/>
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
<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>Himpunan List</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Bobot</th>
                            <th width="100">Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($crips as $item):
                        ?>
                        <tr>
                            <th><?=$no++;?></th>
                            <th><?=$item->nama_crips;?></th>
                            <th><?=$item->keterangan;?></th>
                            <th><?=$item->bobot;?></th>
                            <th>

                                <a href="<?=site_url('admin/crips/edit/'.$item->crips_id)?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="<?=site_url('admin/crips/delete/'.$item->crips_id)?>" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>