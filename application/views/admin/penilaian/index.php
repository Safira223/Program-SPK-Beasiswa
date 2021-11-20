<?php if($code == 200){ ?>
<div class="x_panel tile">
    <div class="x_title">
        <h3>Penilaian Alternatif</h3>
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
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Pendaftar</th>
                        <?php foreach($kriteria as $k): ?>
                            <th><?=$k->nama_kriteria?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($nilai_alternatif as $key => $value):
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach($value as $val): ?>
                            <th><?=$val?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="x_panel tile">
    <div class="x_title">
        <h3>Normalisasi</h3>
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
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Pendaftar</th>
                        <?php foreach($kriteria as $k): ?>
                            <th><?=$k->nama_kriteria?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($normalisasi_1 as $key => $value):
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach($value as $val): ?>
                            <th><?=$val?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Pendaftar</th>
                        <?php foreach($kriteria as $k): ?>
                            <th><?=$k->nama_kriteria?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($normalisasi as $key => $value):
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach($value as $val): ?>
                            <th><?=$val?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="x_panel tile">
    <div class="x_title">
        <h3>Normalisasi Terbobot</h3>
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
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Pendaftar</th>
                        <?php foreach($kriteria as $k): ?>
                            <th><?=$k->nama_kriteria?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($normalisasi_terbobot as $key => $value):
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach($value as $val): ?>
                            <th><?=$val?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="x_panel tile">
    <div class="x_title">
        <h3>Matriks Solusi Ideal</h3>
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
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <?php foreach($kriteria as $k): ?>
                            <th><?=$k->nama_kriteria?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($ideal as $key => $value):
                    ?>
                    <tr>
                        <td><?=$key?></td>
                        <?php foreach($value as $val): ?>
                            <th><?=$val?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="x_panel tile">
    <div class="x_title">
        <h3>Hasil Akhir</h3>
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
                        <th>Nama Pendaftar</th>
                        <th>Fakultas</th>
                        <th>Positif</th>
                        <th>Negatif</th>
                        <th>Preferensi</th>
                        <th>Rank</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($total as $key => $value):
                    ?>
                    <tr>
                        <?php $ex = explode('_',$key)?>
                        <td><?=$key?></td>
                        <td><?=$value['fakultas']?></td>
                        <td><?=$value['positif']?></td>
                        <td><?=$value['negatif']?></td>
                        <td><?=$value['preferensi']?></td>
                        <td><?=$no++;?></td>
                        <td>
                        <select name="label" class="form-control label_input" data-data_id="<?=$ex[0]?>">
                            <option value="0">Pilih</option>
                            <option value="TIDAK LULUS">Tidak Lulus</option>
                            <option value="LULUS">Lulus</option>
                        </select>
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Simpan</button>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?=site_url('admin/penilaian/simpan')?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="beasiswa" id="" value="<?=$_GET['beasiswa']?>">
                        <h3>Apakah anda yakin?</h3>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-sm">Ya! Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </form>
            </div>
            </div>

    </div>
    </div>
</div>
<div id="message" style="display:none;"> 
        <h1>Mohon tunggu sebentar...</h1> 
    </div> 
<?php }elseif($code == 400) { ?>

<div class="x_panel tile fixed_height_320">
    <div class="x_content">
        <?php echo $this->session->flashdata('message');?>
        <h4>Tidak ada pendaftar atau data pendaftar minimal 3 orang untuk mendapatkan hasil</h4>
        
        <div class="clearfix"></div>
    </div>
</div>
<?php }
?>
