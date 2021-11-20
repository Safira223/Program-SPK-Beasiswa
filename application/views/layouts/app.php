<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('layouts/_partials/head'); ?>
    </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>Beasiswa UEU</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                        <img src="<?php echo base_url('assets/images/user-log.png') ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?=$this->session->userdata('user_logged')->nama_user?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />

                    <!-- sidebar menu -->
                    <?php $this->load->view('layouts/_partials/sidebar'); ?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings')?>">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=site_url('login/logout')?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

        <!-- top navigation -->
        <?php $this->load->view('layouts/_partials/topnav'); ?>
        <!-- /top navigation -->
            
        <!-- page content -->
        <div class="right_col" role="main">
            <?php
                if ($folder == "./") {
                    $this->load->view("./home");
                }else {
                    $this->load->view('./'.$folder.'/'.$content);
                }
            ?>
            <!-- dsaj -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
            <?php $this->load->view('layouts/_partials/footer'); ?>
        <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?=base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?=base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- Chart.js -->
    <script src="<?=base_url('assets/vendors/Chart.js/dist/Chart.min.js')?>"></script>
    <!-- gauge.js -->
    <script src="<?=base_url('assets/vendors/gauge.js/dist/gauge.min.js')?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?=base_url('assets/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Skycons -->
    <script src="<?=base_url('assets/vendors/skycons/skycons.js')?>"></script>
    <!-- Flot -->
    <script src="<?=base_url('assets/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?=base_url('assets/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?=base_url('assets/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?=base_url('assets/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?=base_url('assets/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?=base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?=base_url('assets/vendors/DateJS/build/date.js')?>"></script>
    <!-- JQVMap -->
    <script src="<?=base_url('assets/vendors/jqvmap/dist/jquery.vmap.js')?>"></script>
    <script src="<?=base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
    <script src="<?=base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
     <!-- Datatables -->
    <script src="<?=base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('assets/vendors/pdfmake/build/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('assets/vendors/sweetalert/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/jquery.blockUI.js')?>"></script>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('assets/build/js/custom.min.js')?>"></script>

    <script>
        (function($){
            $('.label_input').change(function() { 
                $.blockUI({ message: $('#message') });
                const data_id = $(this).data("data_id");
                const label = $(this).val();
                $.ajax({
                    url: '<?=site_url('admin/penilaian/')?>changelabel?data_id=' + data_id + '&label=' + label,
                    type: 'get'
                })
                .done(function(response) {
                    swal({
                        title: "Sukses",
                        text: response.message,
                        icon: "success"
                    });
                    $.unblockUI();
                })
            });
            $('.hapus').on('click',function(){
                swal({
                title: "Apa anda yakin??",
                text: "Data yang telah dihapus tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                        $.ajax({
                        url: $(this).attr('href'),
                        success:function(){
                            swal("Data berhasil dihapus", {
                            icon: "success",
                            }).then((willDelete) => {
                                location.reload();
                            });

                        }
                    });
                } else {
                    swal("Data aman!");
                }
                });
                return false;
            });
            $('#fakultas').on('change', function() {
                $.ajax({
                    url: "<?=site_url('pendaftar/data_pendidikan/getJurusan')?>",
                    type: "GET",
                    data: { fakultas_id: $(this).val() },
                    success: function(html){
                        $('#prodi_1').empty()
                        $('#prodi_2').empty()
                        $('#prodi_1').append('<option value="">Pilih Program Studi 1</option>')
                        $('#prodi_2').append('<option value="">Pilih Program Studi 2</option>')
                        $.each(html.data, function(key, item) {
                            console.log(html)
                            $('#prodi_1').append('<option value="'+item.id+'">'+item.jurusan+'</option>')
                            $('#prodi_2').append('<option value="'+item.id+'">'+item.jurusan+'</option>')
                        })
                    }
                });
            }) 
            <?php if(isset($data)){ ?>
            var datab = []
            color = ['rgba(255, 255, 0, 1 )',
					'rgba(143, 188, 143, 1)',
					'rgba(192, 192, 192, 1)',
					'rgba(152, 251, 152, 1)',
					'rgba(255, 99, 71, 1)',
					'rgba(255, 165, 0, 1)',
					'rgba(224, 255, 255, 1)',
					'rgba(221, 160, 221, 1)',
					'rgba(54, 162, 235, 0.4)',
					'rgba(210, 180, 140, 1)']

            var barChartData = {
            labels: <?= (isset($month))?$month:1; ?>,
            datasets: [
                <?php foreach($data as $key => $val): ?>
                    {
                        label: '<?=$val['label']?>',
                        backgroundColor: color[<?=$key?>],
                        borderColor: color[<?=$key?>],
                        borderWidth: 1,
                        data: <?=json_encode($val['data'])?>
                    },
                <?php endforeach; ?>
                ]

            };

            var ctx = document.getElementById('canvas').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                responsive: true,
                legend: {
                position: 'top',
                },
                title: {
                display: true,
                text: 'Grafik Presentase Pendaftar Beasiswa'
                }
                }
            });
        <?php } ?>

        })(jQuery); 
    </script>
	
  </body>
</html>
