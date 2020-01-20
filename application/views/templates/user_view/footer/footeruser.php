</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lanjutkan Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">klik "Logout" untuk keluar dari halaman ini</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>


<!-- datepicker script -->
<script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/'); ?>locales/bootstrap-datepicker.id.min.js"></script>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            language: "id",
            todayHighlight: true,
        });
    });
</script>
<script src="<?= base_url('assets/'); ?>js/sweetalert.min.js"></script>
<script>
    // Hapus
    $(document).ready(function() {
        $('.confirm_delete').on('click', function() {

            var delete_url = $(this).attr('data-url');

            swal({
                title: "Hapus Data",
                text: "Yakin ingin menghapus ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FA041B",
                confirmButtonText: "Hapus !",
                cancelButtonText: "Batalkan",
                closeOnConfirm: false
            }, function() {
                window.location.href = delete_url;
            });

            return false;
        });
    });

    /* aktif */
    $(document).ready(function() {
        $('.confirm_active').on('click', function() {

            var aktif_url = $(this).attr('data-url');

            swal({
                title: "Aktifkan Peta",
                text: "Ingin Mengaktifkan ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FA041B",
                confirmButtonText: "Aktifkan",
                cancelButtonText: "Batalkan",
                closeOnConfirm: false
            }, function() {
                window.location.href = aktif_url;
            });

            return false;
        });
    });

    //Edit
    function editN(id) {
        $.ajax({
            url: "<?php echo site_url('Nitrogen/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafilen').val(result['namafile']);
                $('#tanggaldatan').val(result['tanggal']);
                $('#idn').val(result['id']);
            }
        });
    }

    function editP(id) {
        $.ajax({
            url: "<?php echo site_url('Fosfor/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafilep').val(result['namafile']);
                $('#tanggaldatap').val(result['tanggal']);
                $('#idp').val(result['id']);
            }
        });
    }

    function editK(id) {
        $.ajax({
            url: "<?php echo site_url('Kalium/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafilek').val(result['namafile']);
                $('#tanggaldatak').val(result['tanggal']);
                $('#idk').val(result['id']);
            }
        });
    }

    function editMg(id) {
        $.ajax({
            url: "<?php echo site_url('Magnesium/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafilemg').val(result['namafile']);
                $('#tanggaldatamg').val(result['tanggal']);
                $('#idmg').val(result['id']);
            }
        });
    }

    function editCa(id) {
        $.ajax({
            url: "<?php echo site_url('Kalsium/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafileca').val(result['namafile']);
                $('#tanggaldataca').val(result['tanggal']);
                $('#idca').val(result['id']);
            }
        });
    }

    function editS(id) {
        $.ajax({
            url: "<?php echo site_url('Sulfur/edit'); ?>",
            type: "post",
            dataType: 'json',
            data: {
                id: id
            },
            cache: false,
            success: function(result) {
                $('#namafiles').val(result['namafile']);
                $('#tanggaldatas').val(result['tanggal']);
                $('#ids').val(result['id']);
            }
        });
    }
</script>

</body>

</html>