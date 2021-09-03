<div class="row mt-1">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <div class="container">


            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url(); ?>pelanggan" style="font-size: 20px;"><i class="fas fa-arrow-left"></i></a>
                    &nbsp;
                    <span style="font-size: 20px;">
                        <?= $judul; ?>
                    </span>

                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>pelanggan/ubahan" method="post">

                        <input type="hidden" name="id" id="id" value="<?= $pel['id']; ?>">

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="no">No Pelanggan</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" name="no" value="<?= $pel['kode'] . $pel['id']; ?>">
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="Nama">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" value="<?= $pel['nama']; ?>">
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="jenis">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" value="<?= $pel['email']; ?>">
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="telp">Telephone(WA)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="telp" value="<?= $pel['telp']; ?>">
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                            <div class="col-sm-8">
                                <textarea name="alamat" id="alamat" class="form-control" rows="2"><?= $pel['alamat']; ?></textarea>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <small class="form-text text-danger"></small>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success float-right"><span style="font-size: 15px; color: white;"> <i class="fas fa-edit"> Ubah </i> </span></button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>