<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
    <link href="<?=base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap-4.4.1/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/images/android-chrome-512x512.png');?>" rel="shortcut icon" >
    <style>
        .logo img {
            margin-top:100px;
            margin-bottom: 30px;
            width:150px;
        }
        .logo-beasiswa {
            margin-top:90px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="logo">
                    <img src="<?=base_url('assets/images/logo.png')?>" alt="">
                </div>
                <h3>Pendaftaran Beasiswa</h3>
                <h3>Universitas Esa Unggul</h3>
                <br>
                <h5><i>Welcome, sobat unggul!</i></h5>
                <br>
                <a href="<?=site_url('daftar')?>" class="btn btn-primary">Daftar</a>
                <a href="<?=site_url('login')?>" class="btn btn-success">Login</a>
            </div>
            <div class="col-md-5">
                <div class="logo-beasiswa">
                    <img src="<?=base_url('assets/images/scholarship.png')?>" alt="" width="500px">
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/bootstrap-4.4.1/js/bootstrap.min.js')?>"></script>
</body>
</html>