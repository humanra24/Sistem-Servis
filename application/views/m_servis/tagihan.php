<div style="height:60px;"> </div>
<div class="container col-xl-6 mt-3">
	<div class="card">
		<div class="card-header">
			<span style="">
				<form action="<?= base_url(); ?>home/detail" method="post">
				<input type="hidden" name="id" value="<?= $id; ?>">
					<button type="submit" class="btn" style=" font-size: 25px;color: Dodgerblue;"><i class="fas fa-arrow-left">
						</i> </button>
						&nbsp;
			</span>
			<span style="font-size: 25px;">
				Tagihan
			</span>
				</form>
				
		</div>
		<div class="card-body">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="">kode </label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<input type="text" disabled class="form-control-plaintext" id="" name="kode" value="SV<?= $id; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for=""> ganti | harga </label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<?php foreach ($tagih as $tagih) : ?>
					<?= $tagih['ganti']; ?> &nbsp; | &nbsp; <?= $tagih['hrg']; ?>
					<br>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for=""> jasa servis</label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<?php if (isset($tagih2['js_servis'])) {
						echo $tagih2['js_servis'];
					} ?>
					<br>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for=""> Total </label>
				<div class="col-sm-1 col-form-label">:</div>
				<div class="col-sm-7">
					<?php foreach ($tagih1 as $tagih1) {
					$js = $tagih1['js_servis'];
				$tot[] = $tagih1['hrg'];
				$tot1 = array_sum($tot);
			}
			if (isset($tot1)) {
			
			$jum = $tot1 + $js;
			echo $jum;
		}?>
				</div>
			</div>
		</div>
	</div>
