<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi SPKita</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
</head>

<body class="bgLogin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi SPKita</h1>
                                    <hr>
                                </div>
                                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                                <form action="<?= base_url('/register/auth'); ?>" method="post">
                                    <div class="form-group">
                                        <div class="inputWithIcon">
                                            <input type="text" name="nama" autofocus autocomplete="off" class="form-control form-control-user" placeholder="Nama Lengkap" required>
                                            <i class="fa fa-list fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <div class="inputWithIcon">
                                            <input type="text" name="email" autofocus autocomplete="off" class="form-control form-control-user" placeholder="Email" required>
                                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <div class="inputWithIcon">
                                            <input type="text" name="username" autofocus autocomplete="off" class="form-control form-control-user" placeholder="Username" required>
                                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <div class="form-group">
                                            <div class="inputWithIcon">
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                            </div>
                                            <div class="inputWithIcon">
                                                <input type="password" class="form-control form-control-user" name="repassword" placeholder="Ulangi Password" required>
                                                <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                            </div>

                                            <button type="submit" class="btn btn-light text-light buttonlogin">Register</button>

                                            <div>
                                                <label class="inforeg">Sudah punya akun? <a href="<?= base_url(); ?>/login">Login
                                                        Sekarang</a></label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/custom-alert.js"></script>
</body>

</html>