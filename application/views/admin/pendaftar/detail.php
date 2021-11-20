
<div class="x_panel tile">
    <div class="x_content">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">DATA DIRI</a></li>
            <li><a data-toggle="tab" href="#menu1">DATA ORANGTUA</a></li>
            <li><a data-toggle="tab" href="#menu2">DATA PENDIDIKAN</a></li>
            <li><a data-toggle="tab" href="#menu3">DATA PRESTASI</a></li>
            <li><a data-toggle="tab" href="#menu4">DATA SEMINAR</a></li>
        </ul>
        <br>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h4 class="text-center"><strong>DATA DIRI</strong></h4><br>
                <div class="table-responsive">
                    <table class="" width="63%;">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->nama_lengkap) ? $data_diri->nama_lengkap : '-' ?></td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->ktp) ? $data_diri->ktp : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>:</td>
                            <td><?php echo $data_diri->tempat_lahir.", ".date('d F Y',strtotime($data_diri->tanggal_lahir))?></td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->agama) ? $data_diri->agama : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->jk) ? $data_diri->jk : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->status) ? $data_diri->status : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->alamat) ? $data_diri->alamat : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Kota / Kabupaten</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->kabupaten_kota) ? $data_diri->kabupaten_kota: '-' ?></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->provinsi) ? $data_diri->provinsi : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Kode Pos</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->kode_pos) ? $data_diri->kode_pos : '-' ?></td>
                        </tr>
                        <tr>
                            <th>No. HP</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->no_hp) ? $data_diri->no_hp : '-' ?></td>
                        </tr>
                        <tr>
                            <th>No. Telp</th>
                            <td>:</td>
                            <td><?php echo !empty($data_diri->no_tlp_rumah) ? $data_diri->no_tlp_rumah : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/foto/'.$data_diri->foto)?>"><?php echo !empty($data_diri->foto) ? $data_diri->foto : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Foto KTP</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/ktp/'.$data_diri->ktp_img)?>"><?php echo !empty($data_diri->ktp_img) ? $data_diri->ktp_img : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Kartu Keluarga</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/kk/'.$data_diri->kk)?>"><?php echo !empty($data_diri->kk) ? $data_diri->kk : '-' ?></td>
                        </tr>
                        <tr>
                            <th>Akta Kelahiran</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/akta/'.$data_diri->akta_lahir)?>"><?php echo !empty($data_diri->akta_lahir) ? $data_diri->akta_lahir : '-' ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h4 class="text-center"><strong>DATA ORANG TUA</strong></h4><br>
                <h6>A. Data Ayah</h6>
                <div class="table-responsive">
                    <table class="" width="30%;">
                        <tr>
                            <th>Nama Ayah</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->nama_lengkap_ayah) ? $data_ortu->nama_lengkap_ayah : '-'?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ayah</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->pekerjaan_ayah) ? $data_ortu->pekerjaan_ayah : '-'?></td>
                        </tr>
                        <tr>
                            <th>No. Telp Ayah</th>
                            <td>:</td>
                            <td><?=!empty($data_ortu->no_tlp_ayah) ? $data_ortu->no_tlp_ayah : '-'?></td>
                        </tr>
                        <tr>
                            <th>KTP Ayah</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/ktp ayah/'.$data_ortu->ktp_ayah)?>"><?php echo $data_ortu->ktp_ayah?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <h6>B. Data Ibu</h6>
                <div class="table-responsive">
                    <table class="" width="31%;">
                        <tr>
                            <th>Nama Ibu</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->nama_lengkap_ibu) ? $data_ortu->nama_lengkap_ibu : '-'?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Ibu</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->pekerjaan_ibu) ? $data_ortu->pekerjaan_ibu : '-'?></td>
                        </tr>
                        <tr>
                            <th>No. Telp Ibu</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->no_tlp_ibu) ? $data_ortu->no_tlp_ibu : '-'?></td>
                        </tr>
                        <tr>
                            <th>KTP Ibu</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/ktp ibu/'.$data_ortu->ktp_ibu)?>"><?php echo $data_ortu->ktp_ibu?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <h6>C. Data Wali</h6>
                <div class="table-responsive">
                    <table class="" width="21%;">
                        <tr>
                            <th>Nama Wali</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->nama_lengkap_wali) ? $data_ortu->nama_lengkap_wali : '-'?></td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Wali</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->pekerjaan_wali) ? $data_ortu->pekerjaan_wali : '-'?></td>
                        </tr>
                        <tr>
                            <th>No. Tlp Wali</th>
                            <td>:</td>
                            <td><?php echo !empty($data_ortu->no_tlp_wali) ? $data_ortu->no_tlp_wali : '-'?></td>
                        </tr>
                        <tr>
                            <th>KTP Wali</th>
                            <td>:</td>
                            <td><a href="<?php echo base_url('assets/ktp wali/'.$data_ortu->ktp_wali)?>"><?php echo $data_ortu->ktp_wali?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h4 class="text-center"><strong>DATA PENDIDIKAN</strong></h4><br>
                <div class="table-responsive">
                    <table class="" width="23%">
                        <tr>
                            <th>Pendidikan Terakhir</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->pendidikan_terakhir) ? $data_pendidikan->pendidikan_terakhir : '-'?></td>
                        </tr>
                        <tr>
                            <th>Nama Instansi</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->nama_instansi) ? $data_pendidikan->nama_instansi : '-'?></td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->program_studi) ? $data_pendidikan->program_studi : '-'?></td>
                        </tr>
                        <tr>
                            <th>Tahun Lulus</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->tahun_lulus) ? $data_pendidikan->tahun_lulus : '-'?></td>
                        </tr>
                        <tr>
                            <th>UN / IPK</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->nilai) ? $data_pendidikan->nilai : '-'?></td>
                        </tr>
                        <tr>
                            <th>Pendidikan yang dituju</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->pendidikan_tuju) ? $data_pendidikan->pendidikan_tuju : '-'?></td>
                        </tr>
                        <tr>
                            <th>Kampus Pilihan</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->kampus_pilihan) ? $data_pendidikan->kampus_pilihan : '-'?></td>
                        </tr>
                        <tr>
                            <th>Fakultas</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->fakultas) ? $data_pendidikan->fakultas : '-'?></td>
                        </tr>
                        <tr>
                            <th>Program Studi 1</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->ajurusan) ? $data_pendidikan->ajurusan : '-'?></td>
                        </tr>
                        <tr>
                            <th>Program Studi 2</th>
                            <td>:</td>
                            <td><?=!empty($data_pendidikan->bjurusan) ? $data_pendidikan->bjurusan : '-'?></td>
                        </tr>
                        <tr>
                            <th>Rapot</th>
                            <td>:</td>
                            <td><a href="<?=base_url('assets/rapot/'.$data_pendidikan->rapot)?>"><?=!empty($data_pendidikan->rapot) ? $data_pendidikan->rapot : '-'?></td>
                        </tr>
                        <tr>
                            <th>Ijazah</th>
                            <td>:</td>
                            <td><a href="<?=base_url('assets/ijazah/'.$data_pendidikan->ijazah)?>"><?=!empty($data_pendidikan->ijazah) ? $data_pendidikan->ijazah : '-'?></td>
                        </tr>
                        <tr>
                            <th>SKHUN</th>
                            <td>:</td>
                            <td><a href="<?=base_url('assets/skhun/'.$data_pendidikan->skhun)?>"><?=!empty($data_pendidikan->skhun) ? $data_pendidikan->skhun : '-'?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h4 class="text-center"><strong>DATA PRESTASI</strong></h4><br>
                <?php foreach($data_prestasi as $item): ?>
                    <div class="table-responsive">
                        <table class="" width="50%">
                            <tr>
                                <th>Jenis Prestasi</th>
                                <td>:</td>
                                <td><?=!empty($item->jenis) ? $item->jenis : '-'?></td>
                            </tr>
                            <tr>
                                <th>Nama Lomba</th>
                                <td>:</td>
                                <td><?=!empty($item->nama_lomba) ? $item->nama_lomba : '-'?></td>
                            </tr>
                            <tr>
                                <th>Tingkat Kejuaraan</th>
                                <td>:</td>
                                <td><?=!empty($item->tingkat_kejuaraan) ? $item->tingkat_kejuaraan : '-'?></td>
                            </tr>
                            <tr>
                                <th>Peringkat</th>
                                <td>:</td>
                                <td><?=!empty($item->peringkat) ? $item->peringkat : '-'?></td>
                            </tr>
                            <tr>
                                <th>Tempat</th>
                                <td>:</td>
                                <td><?=!empty($item->tempat) ? $item->tempat : '-'?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>:</td>
                                <td><?=!empty($item->tahun) ? $item->tahun : '-'?></td>
                            </tr>
                            <tr>
                                <th>Sertifikat</th>
                                <td>:</td>
                                <td><a href="<?=base_url('assets/sertifikat prestasi/'.$item->sertifikat)?>"><?=!empty($item->sertifikat) ? $item->sertifikat : '-'?></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h4 class="text-center"><strong>DATA SEMINAR</strong></h4><br>
                <?php foreach($data_seminar as $item): ?>
                    <div class="table-responsive">
                        <table class="" width="50%">
                            <tr>
                                <th>Kategori</th>
                                <td>:</td>
                                <td><?=!empty($item->kategori) ? $item->kategori : '-'?></td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>:</td>
                                <td><?=!empty($item->judul) ? $item->judul : '-'?></td>
                            </tr>
                            <tr>
                                <th>Penyelenggara</th>
                                <td>:</td>
                                <td><?=!empty($item->penyelenggara) ? $item->penyelenggara : '-'?></td>
                            </tr>
                            <tr>
                                <th>Skala</th>
                                <td>:</td>
                                <td><?=!empty($item->scala) ? $item->scala : '-'?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>:</td>
                                <td><?=!empty($item->tahun) ? $item->tahun : '-'?></td>
                            </tr>
                            <tr>
                                <th>Sertifikat</th>
                                <td>:</td>
                                <td><a href="<?=base_url('assets/sertifikat seminar/'.$item->sertifikat)?>"><?=!empty($item->sertifikat) ? $item->sertifikat : '-'?></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>