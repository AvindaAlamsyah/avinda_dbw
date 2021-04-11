<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Pengajuan</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('asset/'); ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('asset/'); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('asset/'); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('asset/'); ?>vendor/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

    <!-- Main CSS-->
    <link href="<?php echo base_url('asset/'); ?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- Header -->
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url('asset/'); ?>images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?php echo base_url('pengajuan'); ?>">
                                <i class="far fa-file-text"></i>Pengajuan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url("asset/") ?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url('pengajuan'); ?>">
                                <i class="far fa-file-text"></i>Pengajuan</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section_content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <i class="fas fa-user fa-2x"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('nama'); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <i class="fas fa-user fa-3x"></i>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $this->session->userdata('nama'); ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $this->session->userdata('username'); ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Akun</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url("login/logout"); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- End Header -->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap m-b-35">
                                    <h2 class="title-1">Pengajuan</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#modal_tambah">
                                        <i class="zmdi zmdi-plus"></i>tambah data</button>
                                </div>
                                <div class="au-card">
                                    <table id="tabel_pengajuan" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Keterangan</th>
                                                <th>Tgl. Mulai</th>
                                                <th>Tgl. Selesai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 Colorib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        <!-- Modal Tambah -->
        <div id="modal_tambah" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah Pengajuan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form name="form_tambah" id="form_tambah" type="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tambah_barang">Keterangan</label>
                                <div class="controls">
                                    <input name="tambah_keterangan" id="tambah_keterangan" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tambah_password">Tgl. Mulai</label>
                                <div class="controls">
                                    <input name="tambah_mulai" id="tambah_mulai" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tambah_nama">Tgl. Selesai</label>
                                <div class="controls">
                                    <input name="tambah_selesai" id="tambah_selesai" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-simpan">Simpan</button>
                            <button type="reset" data-dismiss="modal" class="btn btn-inverse btn-batal">Batal</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END Modal Tambah -->

        <!-- modal loading -->
        <div id="modal_loading" data-backdrop="static" data-keyboard="false" class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center"> <strong>Tunggu sebentar yaaa....</strong>
                        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- END modal loading -->

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('asset/'); ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('asset/'); ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('asset/'); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('asset/'); ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url('asset/'); ?>vendor/datatables/datatables.min.js">
    </script>
    <script src="<?php echo base_url(); ?>asset/vendor/jquery-validation-1.19.1/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/vendor/jquery-validation-1.19.1/dist/localization/messages_id.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>asset/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/toast-master/js/jquery.toast.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('asset/'); ?>js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel_pengajuan').DataTable();
        });

        $('#tabel_pengajuan').DataTable({
            'ajax': {
                'url': "<?php echo base_url('pengajuan/ambil_sesuai') ?>",
                'method': "GET"
            },
            'columns': [{
                    'data': "keterangan"
                },
                {
                    'data': "tgl_mulai_cuti"
                },
                {
                    'data': "tgl_selesai_cuti"
                },
                {
                    'data': "status"
                }
            ],
            responsive: true
        });

        //simpan data barang
        $('form[name="form_tambah"]').validate({
            rules: {
                tambah_keterangan: {
                    required: true
                },
                tambah_mulai: {
                    required: true
                },
                tambah_selesai: {
                    required: true
                }
            },
            lang: "id",
            submitHandler: function(form) {
                $('#modal_loading').modal('show');
                $.ajax({
                    url: "<?php echo base_url('pengajuan/tambah_data') ?>",
                    type: "POST",
                    dataType: "JSON",
                    data: $(form).serialize(),
                    success: function(data) {
                        $("#modal_tambah").modal("hide");
                        $("#form_tambah").trigger("reset");
                        $('#modal_loading').modal('hide');
                        $('#tabel_pengajuan').DataTable().ajax.reload();
                        $.toast({
                            heading: "Sukses",
                            text: 'Pengajuan berhasil disimpan',
                            position: 'bottom-left',
                            loader: true,
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        $('#modal_loading').modal("hide");
                        Swal.fire({
                            title: "Oops...",
                            text: errorMessage,
                            type: "error",
                            footer: "Harap hubungi developer untuk penanganan error."
                        });
                    }
                });
            }
        })
    </script>

</body>

</html>
<!-- end document-->