
<?php $pendidikan = ''; $pendidikan_tuju = ''; $kampus_pilihan = '';?>
<?php !empty($data_pendidikan->pendidikan_terakhir) ? $pendidikan = $data_pendidikan->pendidikan_terakhir : $pendidikan; ?>
<?php !empty($data_pendidikan->pendidikan_tuju) ? $pendidikan_tuju = $data_pendidikan->pendidikan_tuju : $pendidikan_tuju; ?>
<?php !empty($data_pendidikan->kampus_pilihan) ? $kampus_pilihan = $data_pendidikan->kampus_pilihan : $kampus_pilihan; ?>
<div class="x_panel tile">
    <div class="x_content">
    <?php echo $this->session->flashdata('message') ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>Pendidikan Terakhir</label>
                    <select name="pendidikan_terakhir" class="form-control" required id="">
                        <option <?= $pendidikan == 'SMK/MK' ? 'selected' : ''  ?>>SMK/MK</option>
                        <option <?= $pendidikan == 'D3' ? 'selected' : ''  ?>>D3</option>
                        <option <?= $pendidikan == 'D4' ? 'selected' : ''  ?>>D4</option>
                        <option <?= $pendidikan == 'S1' ? 'selected' : ''  ?>>S1</option>
                        <option <?= $pendidikan == 'S2' ? 'selected' : ''  ?>>S2</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('pendidikan_terakhir') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Nama Instansi</label>
                    <input type="text" name="nama_instansi" class="form-control <?php echo form_error('nama_instansi') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->nama_instansi) ? $data_pendidikan->nama_instansi : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_instansi') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Program Studi</label>
                    <input type="text" name="program_studi" class="form-control <?php echo form_error('program_studi') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->program_studi) ? $data_pendidikan->program_studi : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('program_studi') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Tahun Kelulusan</label>
                    <input type="text" name="tahun_lulus" class="form-control <?php echo form_error('tahun_lulus') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->tahun_lulus) ? $data_pendidikan->tahun_lulus : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun_lulus') ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-3">
                    <label>UN / IPK</label>
                    <input type="text" name="nilai" class="form-control <?php echo form_error('nilai') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->nilai) ? $data_pendidikan->nilai : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nilai') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Pendidikan yang dituju</label>
                    <select name="pendidikan_tuju" class="form-control" required id="">
                        <option <?= $pendidikan_tuju == 'D3' ? 'selected' : ''  ?>>D3</option>
                        <option <?= $pendidikan_tuju == 'D4' ? 'selected' : ''  ?>>D4</option>
                        <option <?= $pendidikan_tuju == 'S1' ? 'selected' : ''  ?>>S1</option>
                        <option <?= $pendidikan_tuju == 'S2' ? 'selected' : ''  ?>>S2</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('pendidikan_tuju') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Kampus Pilihan</label>
                    <select name="kampus_pilihan" class="form-control" required id="">
                        <option <?= $kampus_pilihan == 'Kebon Jeruk' ? 'selected' : ''  ?>>Kebon Jeruk</option>
                        <option <?= $kampus_pilihan == 'Citra Raya' ? 'selected' : ''  ?>>Citra Raya</option>
                        <option <?= $kampus_pilihan == 'Harapan Indah' ? 'selected' : ''  ?>>Harapan Indah</option>
                        <option <?= $kampus_pilihan == 'Gading Serpong' ? 'selected' : ''  ?>>Gading Serpong</option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo form_error('kampus_pilihan') ?>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Fakultas</label>
                    <select name="fakultas" id="fakultas" class="form-control">
                        <option value="0">Pilih</option>
                    <?php foreach($fakultas as $row): ?>
                        <option value="<?=$row->id?>"><?=$row->fakultas?></option>
                    <?php endforeach; ?>
                    </select>
                    <?php if(!empty($data_pendidikan->nm_fakultas)) {?>
                    <span><?=$data_pendidikan->nm_fakultas?></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label>Program Studi 1</label>
                    <select class="form-control" name="prodi_1" id="prodi_1">
                        <option value="">Pilih Program Studi 1</option>
                        <!-- <?php foreach ($jurusan as $key => $value) { ?>
                            <option value="<?= $value->id ?>"><?= $value->jurusan ?></option>
                        <?php } ?> -->
                    </select>
                    <?php if(!empty($data_pendidikan->ajurusan)) {?>
                    <span><?=$data_pendidikan->ajurusan?></span>
                    <?php } ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Program Studi 2</label>
                    <select class="form-control" name="prodi_2" id="prodi_2">
                        <option value="">Pilih Program Studi 2</option>
                    </select>
                    <?php if(!empty($data_pendidikan->bjurusan)) {?>
                    <span><?=$data_pendidikan->bjurusan?></span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 mb-3">
                    <label>Rapot</label>
                    <input type="file" name="rapot" class="form-control <?php echo form_error('rapot') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->rapot) ? $data_pendidikan->rapot : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('rapot') ?>
                    </div>
                    <?php if(!empty($data_pendidikan->rapot)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_pendidikan->rapot)?>"><?=$data_pendidikan->rapot?></a></span>
                    <?php } ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Ijazah</label>
                    <input type="file" name="ijazah" class="form-control <?php echo form_error('ijazah') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->ijazah) ? $data_pendidikan->ijazah : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('ijazah') ?>
                    </div>
                    <?php if(!empty($data_pendidikan->ijazah)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_pendidikan->ijazah)?>"><?=$data_pendidikan->ijazah?></a></span>
                    <?php } ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>SKHUN</label>
                    <input type="file" name="skhun" class="form-control <?php echo form_error('skhun') ? 'is-invalid':'' ?>" value="<?=!empty($data_pendidikan->skhun) ? $data_pendidikan->skhun : ''?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('skhun') ?>
                    </div>
                    <?php if(!empty($data_pendidikan->skhun)) {?>
                    <span><a href="<?=base_url('assets/ktp/'.$data_pendidikan->skhun)?>"><?=$data_pendidikan->skhun?></a></span>
                    <?php } ?>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Simpan</button>
        </form>        
        <div class="clearfix"></div>
    </div>
</div>