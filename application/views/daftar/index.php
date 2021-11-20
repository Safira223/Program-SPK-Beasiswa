<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Daftar</title>
    <link href="<?=base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap-4.4.1/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/images/android-chrome-512x512.png');?>" rel="shortcut icon" >
    <style>
        body {
            background-color: #45B39D;
        }
        .col-md-4 {
            margin: 0 auto;
        }
        .wrap {
            margin-top: 50px;
        }
        .card{
            border-radius: 0%;
        }
        .image {
            margin-bottom: 30px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="col-md-4">
            <?php echo $this->session->flashdata('message') ?>
            <div class="card p-4 shadow mb-3">
                <div class="card-body">
                     <form action="<?php echo site_url('daftar')?>" method="post" enctype="multipart/form-data">
                                <div class="image">
                                    <div align="center">
                                    <img src="<?php echo base_url('assets/images/document.png')?>"  width= "150px" id="logo">
                                    </div>
                                </div>
                                    <h4 class="text-center"><i>Daftar</i></h4><br>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Beasiswa</label>
                                        <select name="jenis_beasiswa" class="form-control" required>
                                            <option>-- Pilihan --</option>
                                            <option value="0">Beasiswa Unggulan</option>
                                            <option value="1">Beasiswa Indonesia Timur</option>
                                            <option value="2">Beasiswa Prestasi</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>Pertanyaan Keamanan</label>
                                        <select name="pertanyaan" class="form-control" required>
                                            <option>Apa makanan favorit anda?</option>
                                            <option>Tempat apa yang ingin anda kunjungi?</option>
                                            <option>Apa cita-cita anda?</option>
                                        </select>
                                        <input type="text" name="jawaban" class="form-control <?php echo form_error('jawaban') ? 'is-invalid':'' ?>" placaholder="Jawaban" required>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jawaban') ?>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Sign Up">
                                    </div>
                            </form>
                            <span><p>Sudah punya akun? <a href="<?php echo site_url('login')?>">Login</a></p></span>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/bootstrap-4.4.1/js/bootstrap.min.js')?>"></script>
</body>
</html>