<div style="height:60px;"> </div>
<div class="container col-xl-8 mt-3">
	<div class="card">
		<div class="card-header">
			<span style="font-size: 25px; color: Dodgerblue;">
				<a href="<?= base_url(); ?>home/#servis" style="text-decoration:none"><i class="fas fa-arrow-left">
					</i> </a>
			</span>
			<a href="<?= base_url(); ?>home/tagihan/<?= $servis['id']; ?>" class="float-right">tagihan</a>
			&nbsp;
			<span style="font-size: 25px;">
				Detail
			</span>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="">Kode </label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?= $servis['kode'] . $servis['id']; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Tanggal daftar</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?= $servis['tgl_masuk']; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Tanggal Selesai</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?php if ($servis['tgl_selesai'] == '') {
									echo "-";
								}else{
									echo $servis['tgl_selesai'];
								} ; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Jenis</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?= $servis['jns']; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Merk</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?= $servis['merk']; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Seri</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name=""
						value="<?= $servis['seri']; ?>">
				</div>

				<label class="col-sm-4 col-form-label" for="">Kerusakan</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<?php foreach ($rusak as $rusak) :?>
							<?= $rusak['kerusakan']; ?>
							<br>
						<?php endforeach; ?>
							
				</div>

				<label class="col-sm-4 col-form-label" for="">Status</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name="" value="<?php if ($servis['status'] == 'succ') {
            echo 'selesai diservis (Segera ambil barang servisan)';
        }elseif ($servis['status'] == 'pend'){
            echo 'Menunggu barang (Segera antar barang servisan)';
        }elseif ($servis['status'] == 'fail'){
            echo 'Gagal (Barang Servisan Tidak bisa Diservis)';
        }elseif ($servis['status'] == 'acc'){
            echo 'Telah terima Barang untuk diservis';
        } ?>">
				</div>
			</div>
		</div>
	</div>
