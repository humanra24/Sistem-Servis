<div class="row" style="height:200px">
    <div class="col-sm-1"></div>
    <div class="col-sm-4 mt-5" style="background:lightgreen; border-radius: 10px;">
    <h3>
    <strong>Servis Terakhir</strong>
    <br>
    <br>
    <?= $servis['kode'] . $servis['id']; ?>
    </h3>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4 mt-5" style="background:lightblue; border-radius: 10px;">
    <h3>
    <strong>Pembayaran Terakhir</strong>
    <br>
    <br>
    <?= $pembayaran['kode'] . $pembayaran['id']; ?>
    </h3>
    </div>
</div>

<?php if ($this->session->flashdata('ubah')) : ?>
<script>
	alert('ubah profil berhasil');

</script>
<?php elseif ($this->session->flashdata('ubahPass')) : ?>
<script>
	alert('Password berhasil dirubah');

</script>
<?php endif; ?>
