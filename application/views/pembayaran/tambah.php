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
					<form action="<?= base_url(); ?>pembayaran/simpan" method="post">
						<input type="hidden" name="id" value="<?= $id; ?>">
						<input type="hidden" name="idS" value="<?= $idS; ?>">

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="no">No Servis</label>
							<div class="col-sm-6">
								<input type="text" readonly class="form-control" required name="servis"
									value="<?= $kodeS . $idS; ?>">
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-primary" id="btnServis" data-toggle="modal"
									data-target="#tampilServis"><i class="fas fa-search-plus"></i></button>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="Nama">No Pelanggan</label>
							<div class="col-sm-8">
								<input type="text" readonly class="form-control" required name="pelanggan"
									value="<?= $kodeP . $idP; ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jenis">Ganti</label>
							<input id="idf" value="1" type="hidden" />
							<div class="col-sm-6">
								<input type="text" class="form-control" required name="ganti[]">
								<input type="number" class="form-control" required name="hrgSpare[]"
									placeholder="harga">
							</div>
							<div class="col-sm-2 ">
								<button type="button" class="btn btn-success"
									onclick="tambahHobi(); return false;"><i class="fas fa-plus"></i></button>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>



						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jenis"></label>
							<div class="col-sm-6">

								<div id="divHobi"></div>

							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="telp">Jasa Servis</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" required name="jsServis" value="">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"></small>
							</div>
						</div>

						<button type="submit" class="btn btn-primary float-right"><span
								style="font-size: 15px; color: white;"> <i class="fas fa-plus"> Tambah </i>
							</span></button>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>


<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>


<script language="javascript">
	function tambahHobi() {
		var idf = document.getElementById("idf").value;
		var stre;
		stre = "<p id='srow" + idf +
			"'> <input type='text' class='form-control' required name='ganti[]' ><input type='number' class='form-control' required name='hrgSpare[]' placeholder='harga'> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" +
			idf + "\"); return false;'>Hapus</a> </p>";
		$("#divHobi").append(stre);
		idf = (idf - 1) + 2;
		document
			.getElementById("idf").value = idf;
	}

	function hapusElemen(idf) {
		$(idf).remove();
	}

</script>



<!-- Modal lihat Brg -->
<div class="modal fade" id="tampilServis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Servis</h5>
			</div>
			<div class="modal-body">
				<table class="table table-bordered table-striped" id="tabel">
					<thead>
						<tr class="table-secondary">
							<th scope="col">No</th>
							<th scope="col">No Servis</th>
							<th scope="col">No Pelanggan</th>
							<th scope="col">Aksi</th>
						</tr>

					</thead>
					<tbody>
						<?php $no = 1;
                        foreach ($servis as $srv) : ?>
						<tr>
							<th><?= $no++ ?></th>
							<td><?= $srv['kodeS'] .  $srv['idS']; ?></td>
							<td><?= $srv['kodeP'] .  $srv['idP']; ?></td>
							<td>
								<form action="" method="post">
									<input type="hidden" name="idSPil" value="<?= $srv['idS']; ?>">
									<input type="hidden" name="kodeSPil" value="<?= $srv['kodeS']; ?>">
									<input type="hidden" name="idPPil" value="<?= $srv['idP']; ?>">
									<input type="hidden" name="kodePPil" value="<?= $srv['kodeP']; ?>">
									<button type="submit" onsubmit="form" class="btn btn-success"><i
											class="fas fa-arrow-circle-down"> pilih </i> </span></button>
								</form>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php if ($this->session->flashdata('ada')) : ?>
<script>
	alert('Kode Servis Sudah Ada');

</script>
<?php endif; ?>
