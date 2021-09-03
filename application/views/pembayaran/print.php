<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $judul; ?></title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<!-- end bootstrap -->

	<style type="text/css">
		body {
			width: 100%;
			height: 100%;
			margin: 0mm;
			padding: 0mm;
			background-color: white;
			font: 10pt "Times New Roman";
		}



		.page {
			width: 58mm;
			padding: 0mm;
			margin: 0mm auto;
			border: 1px #D3D3D3 solid;
			background: white;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

		}

		hr {
			border: 1px dashed;
		}

	</style>
</head>

<body>

	<div class="page">
		<center>
			<h3>Els Computer</h3>
		</center>

		<center>
			<table>
				<?php foreach ($bayar as $b) : ?>
				<tr>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td><?php $tgl = $b['tgl'];;
                            $tgl = date('H:m:s', strtotime($tgl));
                            echo $tgl;?>
					</td>
					<td></td>

					<td>
						<?php $tgl = $b['tgl'];;
                            $tgl = date('d-m-Y ', strtotime($tgl));
                            echo $tgl;?>
					</td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>Kode : <?= $b['kode'] . $b['id']; ?></td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
				</tr>
				<?php foreach ($detail as $detail) : ?>
				<tr>
					<td>Ganti</td>
					<td>:</td>
					<td> <?= $detail['ganti']; ?></td>
				</tr>

				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><?= $detail['hrg']; ?></td>
				</tr>
				<?php endforeach; ?>
				<tr>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>Jasa</td>
					<td>:</td>
					<td><?= $b['js_servis']; ?></td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>:</td>
					<td>
						<?php foreach ($detail1 as $detail1) {
				$tot[] = $detail1['hrg'];
				$tot1 = array_sum($tot);
			}
			$jum = $tot1 + $b['js_servis'];
			echo $jum;?>
			</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</center>
		<br>
		<br>
		<br>
		<br>
		<label for="" class="ml-4">( <?= $nama['nama']; ?> )</label>
		<label for="" class="mr-4 float-right">( <?= $namaAdmin['nama']; ?> )</label>
		<br>
		<center>
			Terimakasih Telah Berkunjung
		</center>
	</div>

	<script>
		print();

	</script>

</body>

</html>
