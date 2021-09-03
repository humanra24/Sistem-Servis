<div class="row mt-1">

    <div class="col-md-3"></div>
    <div class="col-md-6">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <a href="<?= base_url(); ?>servis" style="font-size: 20px;"><i class="fas fa-arrow-left"></i></a>
                    &nbsp;
                    <span style="font-size: 20px;">
                        <?= $judul; ?>
                    </span>

                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>servis/ubahan" method="post">
                        <div class="form-group row">
                            <input type="hidden" class="form-control" readonly name="id" value="<?= $servis['idS']; ?>">
                            <label class="col-sm-4 col-form-label" for="servis">Id Servis</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" readonly name="id servis" value="<?= $servis['kodeS'] . $servis['idS']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="servis">Status</label>                            
                            <div class="col-sm-2">
                                <input type="radio" name="status" id="status" value="acc"><i class="fas fa-sign-in-alt" style="font-size: 30px; color: green"></i>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="status" id="status" value="succ"><i class="fas fa-check-circle" style="font-size: 30px; color: blue"></i>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="status" id="status" value="fail"><i class="fas fa-times-circle" style="font-size: 30px; color: red"></i>
                            </div>
                        </div>

                        
                        <a href="<?= base_url(); ?>servis/ubah/<?= $servis['idS']; ?>">Ubah beberapa</a>
                        <br>
                        <br>

                        <button type="submit" class="btn btn-success btn-block">Ubah</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>