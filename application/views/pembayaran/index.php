<h2><?= $judul; ?></h2>
<a href="<?= base_url(); ?>pembayaran/tambah" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Tambah
</a>

<br>
<br>

<div class="table-responsive">
	<table class="table table-striped" id="tabel">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>No Bayar </th>
				<th>No Servis</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
                foreach ($bayar as $byr) : ?>
			<tr>
				<th><?= $no++; ?></th>
				<td><?php $tgl = $byr['tgl'];;
                            $tgl = date('H:m:s d-m-Y ', strtotime($tgl));
                            echo $tgl;?></td>
				<td><?= $byr['kode'] . $byr['id']; ?></td>
				<td>SV<?= $byr['id_tb_servis']; ?></td>
				<td>
					<?php if ($byr['status'] == 'sudah') : ?>
					<i class="fas fa-check-circle" style="font-size: 20px; color: blue"></i>
					<a href="<?= base_url(); ?>pembayaran/print_penj/<?= $byr['id']; ?>" target="_blank"> <i
							class="fas fa-print" style="font-size: 20px;"></i></a>
					<?php elseif ($byr['status'] == 'belum') : ?>

					<form action="<?= base_url(); ?>pembayaran/status/<?= $byr['id']; ?>" method="post">
						<input type="hidden" name="idBYR" value="<?= $byr['id']; ?>">
						<input type="hidden" name="idS" value="<?= $byr['id_tb_servis']; ?>">

						<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Servis Akan Dibayar?')">bayar</button>

						<a class="btn" href="<?= base_url(); ?>pembayaran/ubah/<?= $byr['id']; ?>"><i class="fas fa-info"
							style=" color: green; font-size: 20px;"></i></a>

						<a onclick="return confirm('Apakah data ini ingin dihapus ?')" class="btn" href="<?= base_url(); ?>pembayaran/hapus/<?= $byr['id']; ?>"><i class="fas fa-trash"
							style=" color: red; font-size: 20px;"></i></a>

					</form>

					<?php endif; ?>
				</td>

			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php if ($this->session->flashdata('bayar')) : ?>
<script>
	alert('Tambah Pembayaran Berhasil');

</script>
<?php elseif ($this->session->flashdata('sudah')) : ?>
<script>
	alert(' Pembayaran Berhasil dibayar');

</script>
<?php elseif ($this->session->flashdata('ubah')) : ?>
<script>
	alert(' Pembayaran Berhasil diubah');

</script>
<?php elseif ($this->session->flashdata('hapus')) : ?>
<script>
	alert(' Pembayaran Berhasil dihapus');

</script>
<?php endif; ?>
