<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
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
                        <form action="<?php echo site_url('login/forgotpassword')?>" method="post">
                            <div class="image">
                                <div align="center">
                                    <img src="<?php echo base_url('assets/images/gmail.png')?>"  width= "150px" id="logo">
                                </div>
                            </div>
                                    <h4 class="text-center"><i>Reset Password</i></h4><br>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-block" value="Check">
                                    </div>
                            </form>
                                </div>
                        </div>
                </div>
            </div>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/bootstrap-4.4.1/js/bootstrap.min.js')?>"></script>
</body>
</html>