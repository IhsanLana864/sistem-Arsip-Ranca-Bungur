<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-start">

            <div class="col-lg-5 left-side">

                <div class="card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Masuk</h1>
                                        <p class="text-secondary mb-4">Masukkan email dan kata sandi untuk masuk</p>
                                    </div>

                                    <?php if ($message = $this->session->flashdata('message')) : ?>
                                        <?= $message ?>
                                        <?php $this->session->unset_userdata('message'); ?>
                                    <?php endif; ?>


                                    <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user rounded" id="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna" value="<?= set_value('nama_pengguna'); ?>">
                                            <?= form_error('nama_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user rounded" id="kata_sandi" name="kata_sandi" placeholder="Kata Sandi">
                                            <?= form_error('kata_sandi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block rounded">
                                            Login
                                        </button>
                                    </form>
                                    <!-- <div class="text-center">
                                    <p class="small text-dark">Belum punya akun? <a href="<?= base_url('auth/registration'); ?>">Buat Akun!</a></p>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>