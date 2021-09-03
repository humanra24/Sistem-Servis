<h2><?= $judul; ?></h2>
<!-- <a href="<?= base_url(); ?>servis/tambah" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Tambah </a>
<br> -->

<div class="float-right">

	<i class="fas fa-minus" style="font-size: 20px;"></i> Menunggu &nbsp;
	<i class="fas fa-sign-in-alt" style="font-size: 20px; color: green"></i> Terima &nbsp;
	<i class="fas fa-check-circle" style="font-size: 20px; color: blue"></i> Berhasil &nbsp;
	<i class="far fa-handshake" style="font-size: 20px; color: Orange"></i> Sudah Bayar &nbsp;
	<i class="fas fa-times-circle" style="font-size: 20px; color: red"></i> Tidak Bisa
</div>

<br>
<br>

<div class="table-responsive">
	<table class="table table-striped" id="tabel">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal daftar</th>
				<th>Tanggal Selesai</th>
				<th>No Servis</th>
				<th>id Pelanggan</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $no = 1;
            foreach ($servis as $ser) : ?>
			<tr>
				<th><?= $no++ ?></th>
				<td><?php $tgl = $ser['tgl_masuk'];;
							$tgl = date(' H:m:s d-m-Y', strtotime($tgl)); $ser['tgl_masuk'];
							echo $tgl;
							?>
							</td>
				<td><?php $tgl = $ser['tgl_selesai'];;
                            $tgl = date(' H:m:s d-m-Y', strtotime($tgl));
				 		if ($ser['tgl_selesai'] == null) {
						echo 'belum selesai';
						}else {
							echo $tgl; 
						}?></td>

				<td><?= $ser['kodeS'] . $ser['idS']; ?></td>
				<td><?= $ser['kodeP'] . $ser['idP']; ?></td>
				<td>
					<?php if ($ser['status'] == 'succ') : ?>
					<i class="fas fa-check-circle" style="font-size: 20px; color: blue"></i>
					<?php elseif ($ser['status'] == 'pend') : ?>
					<i class="fas fa-minus" style="font-size: 20px;"></i>
					<?php elseif ($ser['status'] == 'acc') : ?>
					<i class="fas fa-sign-in-alt" style="font-size: 20px; color: green"></i>
					<?php elseif ($ser['status'] == 'terima') : ?>
					<i class="far fa-handshake" style="font-size: 20px; color: orange"></i>
					<?php else : ?>
					<i class="fas fa-times-circle" style="font-size: 20px; color: red"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if ($ser['status'] !== 'terima') : ?>
					<a title="ubah" href="<?= base_url(); ?>servis/ubahStatus/<?= $ser['idS']; ?>"><i
							class="fas fa-edit" style=" color: green; font-size: 20px;"></i></a>
					&nbsp;
					<a title="hapus" onclick="return confirm('Apakah data ini ingin dihapus ?')"
						href="<?= base_url(); ?>servis/hapus/<?= $ser['idS']; ?>"><i class="fas fa-trash"
							style="font-size: 20px; color: red;"></i></a>
					<?php endif; ?>
					&nbsp;
					<a title="detail" href="<?= base_url(); ?>servis/detail/<?= $ser['idS']; ?>"><i class="fas fa-info"
							style=" color: blue; font-size: 20px;"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php if ($this->session->flashdata('ubah')) : ?>
	<script>
		alert('Data Berhasil dirubah');

	</script>
	<?php elseif ($this->session->flashdata('ubahStatus')) : ?>
	<script>
		alert('Status Berhasil dirubah');

	</script>
	<?php elseif ($this->session->flashdata('hapus')) : ?>
	<script>
		alert('Data Berhasil dihapus');

	</script>
	<?php endif; ?>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
