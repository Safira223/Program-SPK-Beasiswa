<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>Form Tambah Program Studi</h2>
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
            <form action="<?php echo site_url('admin/jurusan/show/'.$id) ?>" method="post">
                <input type="hidden" value="<?php echo $id?>" name="fakultas_id">
                <div class="form-group">
                    <label for="jurusan">Nama Program Studi</label>
                    <input type="text" class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>" name="jurusan">
                    <div class="invalid-feedback">
                        <?php echo form_error('jurusan') ?>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?=site_url('admin/fakultas')?>" class="btn btn-success btn-sm">Kembali</a>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="x_panel tile">
        <div class="x_title">
            <h2>List Program Studi</h2>
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
                            <th>Nama Program Studi</th>
                            <th width="100">Act</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($jurusan as $item):
                        ?>
                        <tr>
                            <th><?php echo $no++;?></th>
                            <th><?php echo$item->jurusan;?></th>
                            <th>
                                <a href="<?php echo site_url('admin/jurusan/edit/'.$item->id)?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo site_url('admin/jurusan/delete/'.$item->id)?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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