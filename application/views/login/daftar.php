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

    <div class="container col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" action="<?= base_url(); ?>login/simpan" method="post">

                                <input type="hidden" name="id" value="<?= $id['idMax'] + 1; ?>">

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="namaD" placeholder="Nama Depan" value="<?php if (isset($namaD)) {
                                                                                                                                                                            echo $namaD;
                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="namaB" placeholder="Nama Belakang" value="<?php if (isset($namaB)) {
                                                                                                                                                                            echo $namaB;
                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="form-text text-danger"><?= form_error('namaD') ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="form-text text-danger"><?= form_error('namaB') ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="WA" class="form-control form-control-user" id="exampleInputEmail" name="telp" placeholder="No Telp. / WA" value="<?php if (isset($telp)) {
                                                                                                                                                                        echo $telp;
                                                                                                                                                                    } ?>">
                                    <small class="form-text text-danger"><?= form_error('telp') ?></small>
                                    <?php if ($cekTelp) : ?>
                                        <div style="color: red;"> <small><?= 'Telp. Sudah ada' ?> </small> </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <textarea name="alamat" class="form-control form-control-user" id="alamat" rows="2" placeholder="Alamat"><?php if (isset($alamat)) {
                                                                                                                                                    echo $alamat;
                                                                                                                                                } ?></textarea>
                                    <small class="form-text text-danger"><?= form_error('alamat') ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Email Address" value="<?php if (isset($email)) {
                                                                                                                                                                            echo $email;
                                                                                                                                                                        } ?>">
                                    <small class="form-text text-danger"><?= form_error('email') ?></small>
                                    <?php if ($cekEmail) : ?>
                                        <div style="color: red;"> <small><?= 'Email Sudah Ada'; ?> </small> </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="pass" placeholder="Password">
                                        <small class="form-text text-danger"><?= form_error('pass') ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="rePass" placeholder="Repeat Password">
                                        <small class="form-text text-danger"><?= form_error('rePass') ?></small>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <?php if ($this->session->flashdata('pass')) : ?>
                                        <div style="color: red;"> <small><?= $this->session->flashdata('pass'); ?> </small> </div>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url(); ?>">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>