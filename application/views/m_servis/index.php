<div id="servis">
	<div style="height:60px;"> </div>

	<div style="background-color :lightgray;">
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">

				<div class="container">

					<h1>Servis</h1>
					<hr>

					<form action="<?= base_url(); ?>home/tambah" method="post">

						<input type="hidden" name="id" value="<?= $id['idMax'] + 1 ?>">
						<input type="hidden" name="kode" value="SV">
						<input type="hidden" readonly class="form-control" name="userId"
							value="<?= $this->session->userdata("id"); ?>">

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="no">No Servis</label>
							<div class="col-sm-4">
								<input type="text" readonly class="form-control" name="no"
									value="SV<?= $id['idMax'] + 1; ?>">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="tgl">Tanggal</label>
							<div class="col-sm-8">
								<input type="text" readonly class="form-control" name="tgl"
									value="<?= date('d-M-Y'); ?>">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="jns">jenis Barang</label>
							<div class="col-sm-8">
								<select name="jns" class="form-control" id="" required>
									<option value="">-- Pilih Jenis Barang --</option>
									<option value="Laptop">Laptop</option>
									<option value="Printer">Printer</option>
								</select>
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"><?= form_error('jns') ?></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="merk">Merek</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" required name="merk" value="<?php if (isset($merk)) {
                                                                                        echo $merk;
                                                                                    } ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"><?= form_error('merk') ?></small>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label" for="seri">Seri/Model</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" required name="seri" id="seri" value="<?php if (isset($seri)) {
                                                                                                    echo $seri;
                                                                                                } ?>">
							</div>
							<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<small class="form-text text-danger"><?= form_error('seri') ?></small>
							</div>
						</div>

						<div class="form-group row control-group">
							<input id="idf" value="1" type="hidden" />
							<label class="col-sm-4 col-form-label" for="kerusakan">Kerusakan</label>
							<div class="col-sm-6">
								<input id="idf" value="1" type="hidden" />
								<input type="text" name="kerusakan[]" required id="kerusakan" class="form-control"
									value="">
							</div>
							<div class="col-sm-2 ">
								<button type="button" class="btn btn-success" onclick="tambahHobi(); return false;"><i class="fas fa-plus"></i></button>
							</div>
						</div>
						<div class="form-group row control-group">
							<input id="idf" value="1" type="hidden" />
							<label class="col-sm-4 col-form-label" for="kerusakan"></label>
							<div class="col-sm-6">

								<div id="divHobi"></div>
							</div>
							<div class="col-sm-2 ">
							</div>
						</div>
						<button type="submit" class="btn btn-primary float-right"><span
								style="font-size: 15px; color: white;">
								<i class="fas fa-plus"> Servis </i>
							</span></button>

					</form>
				</div>
			</div>

		</div>
		<br>
	</div>
</div>

<!-- <?php if ($this->session->flashdata('servis')) : ?>
<script>
	alert('Daftar Servis Berhasil');

</script>
<?php endif; ?> -->


<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>


<script language="javascript">
	function tambahHobi() {
		var idf = document.getElementById("idf").value;
		var stre;
		stre = "<p id='srow" + idf +
			"'> <input type='text' name='kerusakan[]' required id='kerusakan' class='form-control' value='<?php if (isset($kerusakan)) { echo $kerusakan;} ?>'> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" +
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

