<div class="col-md-12">
        <div class="x_panel tile">
            <div class="x_title">
                <h2>Kriteria <a href="<?=site_url("admin/kriteria/add")?>" class="fa fa-plus"></a> </h2>
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
                                <th>Nama Kriteria</th>
                                <th>Attribut</th>
                                <th>Bobot</th>
                                <th width="100">Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach($kriteria as $item):
                            ?>
                            <tr>
                                <th>C<?=$no++;?></th>
                                <th><?=$item->nama_kriteria;?></th>
                                <th><?=$item->attribut;?></th>
                                <th><?=$item->bobot;?></th>
                                <th>
                                    <a href="<?=site_url('admin/crips/show/'.$item->kriteria_id)?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="<?=site_url('admin/kriteria/edit/'.$item->kriteria_id)?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?=site_url('admin/kriteria/delete/'.$item->kriteria_id)?>" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
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