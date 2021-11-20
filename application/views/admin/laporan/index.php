<div class="x_panel tile fixed_height_180">
    <div class="x_content">
        <h3>Data Laporan Beasiswa</h3>
        <br>
        <form action="<?=site_url('admin/laporan/show')?>" method="get">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Pilih Beasiswa</label>
                    <select name="beasiswa" id="" class="form-control">
                        <option value="0">Beasiswa Unggulan</option>
                        <option value="1">Beasiswa Indonesia Timur</option>
                        <option value="2">Beasiswa Prestasi</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label>Pilih Tahun</label>
                    <select name="tahun" id="" class="form-control" required>
                        <?php 
                            for ($i=2020; $i <= date('Y') ; $i++) { 
                                echo "<option>".$i."</option>";
                            }
                        
                        
                        ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                <label>Pilih Fakultas</label>
                    <select name="fakultas" id="fakultas" class="form-control">
                    <?php foreach($fakultas as $row): ?>
                        <option value="<?=$row->id?>"><?=$row->fakultas?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label>Keterangan</label>
                    <select name="ket" id="" class="form-control">
                        <option>Lulus</option>
                        <option>Tidak Lulus</option>
                    </select>
                </div>
                <div class="col-md-2" style="margin-top: 30px;">
                    <input type="submit" class="btn btn-success btn-sm" value="Lihat">
                </div>
            </div>
        </form>
        <div class="clearfix"></div>
    </div>
</div>
<?php if(isset($_GET['beasiswa']) && isset($_GET['tahun'])):?>
    <div class="x_panel tile">
    <div class="x_content">
        <h3>Data Beasiswa</h3>
        <br><br>
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th width="200">Nama Lengkap</th>
                        <th width="200">Fakultas</th>
                        <th width="200">Email</th>
                        <th width="30">Preferensi</th>
                        <th width="50">Rank</th>
                        <th width="200">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($beasiswa as $item):
                    ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$item->nama_user;?><br><br><a href="<?=site_url('admin/laporan/detail/'.$item->user_id)?>" class="btn btn-primary btn-sm">lihat detail</a></td>
                        <td><?=$item->fak;?></td>
                        <td><?=$item->email;?></td>
                        <td><?=$item->preferensi;?></td>
                        <td><?=$item->ranking;?></td>
                        <td><?=$item->status?></td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php endif;?>  