
<div class="x_panel tile">
    <div class="x_content">
        <h3>Data Pendaftar Beasiswa</h3>
        <br>
        <form action="" method="get">
            <div class="form-group row">
                <div class="col-md-4 mb-3">
                    <label>Pilih Beasiswa</label>
                    <select name="beasiswa" id="" class="form-control">
                        <option value="0">Beasiswa Unggulan</option>
                        <option value="1">Beasiswa Indonesia Timur</option>
                        <option value="2">Beasiswa Prestasi</option>
                    </select>
                </div>
                <div class="col-md-3" style="margin-top: 30px;">
                    <input type="submit" class="btn btn-success btn-sm" value="Lihat">
                </div>
            </div>
        </form>
        <br>
       <?php if (isset($_GET['beasiswa'])): ?>
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="10">No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($pendaftar as $item):
                    ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$item->nama_user;?></td>
                        <td><?=$item->email;?></td>
                        <td>
                            <a href="<?=site_url('admin/pendaftar/detail/'.$item->user_id)?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="<?=site_url('admin/pendaftar/deleteAll/'.$item->user_id)?>" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
       <?php endif;?>
        <div class="clearfix"></div>
    </div>
</div>