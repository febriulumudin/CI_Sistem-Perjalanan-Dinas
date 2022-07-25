<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SIMPENAS - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="template/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="template/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="template/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        body {
            background: linear-gradient(to right, #5B86E5, #36D1DC);
        }
    </style>

</head>

<body class="authentication-bg">
    <div class="account-pages pt-sm-5">
        <div class="container">
            <div class="text-center">
                <img width="155px" src="<?= base_url('/logo/dinas.png') ?>">
                <h1 style="color:white;"> <strong>SIMPENAS</strong> </h1>
                <h4 style="color:white;">Sistem Informasi Monitoring Perjalanan Dinas</h4>
                <h4 style="color:white;">Pendidikan Jawa Timur</h4>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-3 auth-login" style="border-bottom-right-radius:30px; border-top-left-radius:30px;">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h3 class="text-primary"><strong>Masuk</strong></h3>
                            </div>
                            <div class="p-2 mt-3">

                                <?php
                                //Pesan 
                                if (session()->getFlashdata('Pesan')) {
                                    echo '<div class="alert alert-danger"  style="margin-left:15px; margin-right: 15px; border-radius:10px;" role="alert">';
                                    echo session()->getFlashdata('Pesan');
                                    echo '</div>';
                                }
                                ?>

                                <?php echo form_open('index/cek_login'); ?>
                                <div class="form-group">
                                    <label for="username" class="text-white">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="userpassword" class="text-white">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div class="mt-3">
                                    <a href="/pegawai" class="btn btn-primary w-sm waves-effect waves-ligh">Pegawai</a>
                                    <button class="btn btn-primary w-sm waves-effect waves-ligh float-right" type="submit">Masuk</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 mb-5 text-center">
                        <p class="text-gray">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Informatika Unesa, Surabaya &nbsp;<i class="fa fa-heart text-danger animat"></i>
                        </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="template/libs/jquery/jquery.min.js"></script>
    <script src="template/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="template/libs/metismenu/metisMenu.min.js"></script>
    <script src="template/libs/simplebar/simplebar.min.js"></script>
    <script src="template/libs/node-waves/waves.min.js"></script>
    <script src="template/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="template/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <script src="template/libs/toastr/build/toastr.min.js"></script>
    <script src="template/js/pages/toastr.init.js"></script>
    <script src="template/js/print-text.js"></script>

    <script src="template/js/app.js"></script>
</body>

</html>