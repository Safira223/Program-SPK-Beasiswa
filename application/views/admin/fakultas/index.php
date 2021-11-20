<div class="col-md-12">
        <div class="x_panel tile">
            <div class="x_title">
                <h2>Tambah Fakultas <a href="<?php echo site_url("admin/fakultas/add")?>" class="fa fa-plus"></a> </h2>
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
                                <th width="10">Kode</th>
                                <th>Nama Fakultas</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach($fakultas as $item):
                            ?>
                            <tr>
                                <th>F<?php echo $no++;?></th>
                                <th><?php echo $item->fakultas;?></th>
                                <th>
                                    <a href="<?php echo site_url('admin/jurusan/show/'.$item->id)?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo site_url('admin/fakultas/edit/'.$item->id)?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo site_url('admin/fakultas/delete/'.$item->id)?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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