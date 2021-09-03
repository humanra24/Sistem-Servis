</div>
</div>

<script src="<?= base_url() ?>assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<!-- end bootstrap -->

<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function() {
        $("#tgl").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
</script>

<script type="text/javascript" src="<?= base_url() ?>assets/DataTables/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tabel').DataTable();
    });
</script>

</body>

</html>