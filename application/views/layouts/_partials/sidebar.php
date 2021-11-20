<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <?php if ($this->session->userdata('user_logged')->role == 0): ?>
            <li><a href="<?php echo site_url('admin/home') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a><i class="fa fa-ellipsis-h"></i> Master <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('admin/pendaftar/show')?>">Pendaftar</a></li>
                    <li><a href="<?php echo site_url('admin/fakultas')?>">Fakultas</a></li>
                    <li><a href="<?php echo site_url('admin/kriteria')?>">Kriteria</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('admin/penilaian?beasiswa=0') ?>"><i class="fa fa-newspaper-o"></i> Beasiswa Unggulan</a></li>
            <li><a href="<?php echo site_url('admin/penilaian?beasiswa=1') ?>"><i class="fa fa-newspaper-o"></i> Beasiswa Indonesia Timur</a></li>
            <li><a href="<?php echo site_url('admin/penilaian?beasiswa=2') ?>"><i class="fa fa-newspaper-o"></i> Beasiswa Prestasi</a></li>
            <li><a href="<?php echo site_url('admin/laporan/show') ?>"><i class="fa fa-book"></i> Laporan</a></li>
            <?php endif; ?>
            <?php if ($this->session->userdata('user_logged')->role == 1): ?>
            <li><a href="<?php echo site_url('pendaftar/home') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('pendaftar/data_diri') ?>"><i class="fa fa-user"></i> Data Diri</a></li>
            <li><a href="<?php echo site_url('pendaftar/data_ortu') ?>"><i class="fa fa-users"></i> Data Orang Tua</a></li>
            <li><a href="<?php echo site_url('pendaftar/data_pendidikan') ?>"><i class="fa fa-graduation-cap"></i> Data Pendidikan</a></li>
            <li><a href="<?php echo site_url('pendaftar/data_prestasi') ?>"><i class="fa fa-trophy"></i> Data Prestasi</a></li>
            <li><a href="<?php echo site_url('pendaftar/data_seminar') ?>"><i class="fa fa-certificate"></i> Data Seminar</a></li>
            <?php endif; ?>
            
            <!-- <li><a href="<?php echo site_url('message') ?>"><i class="fa fa-envelope"></i> Message</a></li> -->
        </ul>
    </div>
</div>