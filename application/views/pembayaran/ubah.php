<div class="row mt-1">
	<div class="col-md-3"></div>
	<div class="col-md-6">

		<div class="container">


			<div class="card">
				<div class="card-header">
					<a href="<?= base_url(); ?>pembayaran" style="font-size: 20px;"><i
							class="fas fa-arrow-left"></i></a>
					&nbsp;
					<span style="font-size: 20px;">
						<?= $judul; ?>
					</span>

				</div>
				<div class="card-body">
					<form action="<?= base_url(); ?>pembayaran/P_ubah" method="post">
						<input type="hidden" name="id" value="<?= $tampil['id']; ?>">

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="no">No Servis</label>
							<div class="col-sm-8">
								<input type="text" readonly class="form-control" required name="servis"
									value="<?=  $tampil['kode'] . $tampil['id']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="no">No Servis</label>
							<div class="col-sm-8">
								<input type="text" readonly class="form-control" required name="servis"
									value="SV<?= $tampil['id_tb_servis']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jenis">Ganti | harga</label>
							<div class="col-sm-8">
								<?php foreach ($tampilan as $hasil1) : ?>
								<?= $hasil1['ganti']; ?> &nbsp;|&nbsp; <?= $hasil1['hrg']; ?>
								<br>
								<?php endforeach; ?>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="telp">Jasa Servis</label>
							<div class="col-sm-8">
								<input type="number" readonly class="form-control" required name="jsServis"
									value="<?= $tampil['js_servis']; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>
<!-- 
						<button type="submit" class="btn btn-primary float-right"><span
								style="font-size: 15px; color: white;"> <i class="fas fa-plus"> ubah </i>
							</span></button> -->

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
