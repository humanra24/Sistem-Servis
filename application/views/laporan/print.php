<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<!-- end bootstrap -->

	<style>
		hr {
			border-width: 3px;
		}

	</style>

</head>

<body>

	<center>
	<h2>EL'S COMPUTER</h2>
	Jl. C. Simanjuntak No.38, Terban, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55223
	<hr color="black" border="10px">
		<h4>LAPORAN SERVIS</h4>

		<?php $tgldari = $dari;
                            $tgldari1 = date('d-m-Y', strtotime($tgldari));

                            $tglsampai = $sampai;
                            $tglsampai1 = date('d-m-Y', strtotime($tglsampai));

 if ($dari != null && $sampai != null) {
    echo $tgldari1; 
    echo " - ";
    echo $tglsampai1; 
}else{
    echo "Semua Servis";
}?>
	</center>
	<br>




	<div class="table-responsive">
		<table class="table table-bordered" id="tabel">
			<thead>
				<tr bgcolor="lightgray">
					<th>No</th>
					<th>Tanggal</th>
					<th>Kode Servis</th>
					<th>Kode Pengguna</th>
					<th>Total</th>
				</tr>

			</thead>
			<tbody>
				<?php
            $no = 1;
            foreach ($laporan as $lapor) : ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?php $tgl = $lapor['tgl_selesai'];
                            $tgl = date('H:m:s d-m-Y', strtotime($tgl));
                            echo $tgl;?></td>
					<td>SV<?= $lapor['id']; ?></td>
					<td>PL<?= $lapor['id_tb_pengguna']; ?></td>
					<td><?= $lapor['tot']; ?></td>
				</tr>
				<?php endforeach ?>
				<tr bgcolor="lightgray">
					<td colspan = "4">Total</td>
					<td><?php foreach ($laporan1 as $l) {
							$total[] = $l['tot'];
							$tot = array_sum($total);
						}
						if (isset($tot)) {
							echo $tot;
						}
						?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>


	<div class="row">
		<div class="col-sm-9"></div>
		<center>
			<table>
				<tr>
					<td>Yogyakarta,
						<?php
							function tanggal_indonesia($tanggal){
								$bulan = array (
								1 =>   'Januari',
								'Februari',
								'Maret',
								'April',
								'Mei',
								'Juni',
								'Juli',
								'Agustus',
								'September',
								'Oktober',
								'November',
								'Desember'
								);
								
								$pecahkan = explode('-', $tanggal);
								
								// variabel pecahkan 0 = tanggal
								// variabel pecahkan 1 = bulan
								// variabel pecahkan 2 = tahun
								return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
							}

							echo tanggal_indonesia(date('Y-m-d')); // Hasilnya menampilkan format tanggal 11 Oktober 2017
					?>
					</td>
				</tr>
				<tr>
					<td align="center">Admin</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td align="center"><?= $nama['nama']; ?></td>
				</tr>
		</center>
		</table>
	</div>
	<!-- <script>
		print();

	</script> -->

</body>

</html>
