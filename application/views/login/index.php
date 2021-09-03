<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- end bootstrap -->

    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/images/logo.png">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontAwesome/css/all.css">
    <!-- end fontAwesome -->

</head>

<body class="bg-primary">
    <div class="row">
        <div class="col-sm-12 my-5">

            <div class="container col-sm-8">

                <div class="card">
                    <div class="card-body p-5">

                        <div class="form-inline">
                            <div class="col-md-7">
                                <center>
                                    <img src="<?= base_url() ?>assets/images/ELS.png" width="300px" alt="...">
                                </center>
                            </div>
                            <div class="col-lg-5">

                                <?php if ($this->session->flashdata('flash')) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <center>
                                            <strong><?= $this->session->flashdata('flash'); ?></strong>
                                        </center>
                                    </div>
                                <?php endif; ?>

                                <form action="<?= base_url(); ?>login/aksi_login" method="post">
                                    <div class="form-inline">
                                        <label for="email" class="form-label" style="font-size: 20px"><i class="fas fa-user"></i></label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="email" required class="form-control col-sm-10" name="email" placeholder="Masukan Alamat Email...">
                                    </div>

                                    <br>

                                    <div class="form-inline">
                                        <label for="inputPassword3" class="form-label" style="font-size: 20px"><i class="fas fa-lock"></i></label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="password" required class="form-control col-sm-10" name="password" placeholder="Masukan Password...">
                                    </div>

                                    <br>

                                    <br>

                                    <button type="submit" class="btn btn-primary btn-block">Login</button>


                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>login/lupa_password">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>login/daftar">Buat Akun!</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php if ($this->session->flashdata('Daftar')) : ?>
        <script>
            alert('Berhasil Daftar');
        </script>
    <?php endif; ?>

    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>