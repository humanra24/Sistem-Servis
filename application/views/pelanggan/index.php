<h2><?= $judul; ?></h2>

<!-- <a href="<?= base_url(); ?>pelanggan/tambah" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Tambah </a>

<br> -->
<!-- <br> -->

<div class="table-responsive">

    <table class="table table-striped" id="tabel">
        <thead>
            <tr>
                <th>No</th>
                <th>No Pelanggan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telephone(WA)</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($GetAll as $get) : ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $get['kode'] . $get['id']; ?></td>
                    <td><?= $get['nama']; ?></td>
                    <td><?= $get['email']; ?></td>
                    <td><?= $get['telp']; ?></td>
                    <td><?= $get['alamat']; ?></td>
                    <td>
                        <!-- <a href="<?= base_url(); ?>pelanggan/ubah/<?= $get['id']; ?>" class="btn"><i class="fas fa-edit" style="color: green"></i></a> -->
                        <a href="<?= base_url(); ?>pelanggan/hapus/<?= $get['id']; ?>" class="btn" onclick="return confirm('Apakah data ini ingin dihapus ?')"><i class="fas fa-trash" style="color: red"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php if ($this->session->flashdata('hapus_P')) : ?>
    <script>
        alert('Data Pelanggan Berhasil Dihapus');
    </script>
<?php endif; ?>