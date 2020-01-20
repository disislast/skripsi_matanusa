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

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- script core for datatable and plugins -->
<script src="<?= base_url('assets/'); ?>js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.print.min.js"></script>

<!-- load data geojson -->
<script>
    var base_url = "<?= base_url(); ?>"

    $(document).ready(function() {
        $('#table').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "ajax": {
                "url": base_url + "assets/geojson/<?php if ($map['alias'] == 'n') {
                                                        echo "1nitrogen";
                                                    } elseif ($map['alias'] == 'p') {
                                                        echo "2fosfor";
                                                    } elseif ($map['alias'] == 'k') {
                                                        echo '3kalium';
                                                    } elseif ($map['alias'] == 'mg') {
                                                        echo '4magnesium';
                                                    } elseif ($map['alias'] == 'ca') {
                                                        echo '5kalsium';
                                                    } elseif ($map['alias'] == 's') {
                                                        echo '6sulfur';
                                                    } ?>/<?= $map['url']; ?>",
                "dataSrc": "features"
            },
            "columns": [{
                title: "grid",
                data: "properties.grid"
            }, {
                title: "xcoord",
                data: "properties.xcoord",
                "searchable": false,
                "orderable": false
            }, {
                title: "ycoord",
                data: "properties.ycoord",
                "searchable": false,
                "orderable": false
            }, {
                title: "kandungan (%bk)",
                data: "properties.<?= $map['alias']; ?>_mean",
                "searchable": false,
                "orderable": false,
                "render": function(data, type, full) {
                    return parseFloat(data).toFixed(3);
                }
            }, {
                title: "klasifikasi",
                data: "properties.<?= $map['alias']; ?>_mean",
                "orderable": false,
                <?php
                if ($map['alias'] == 'n') {
                    echo '"render": function(data, type, full) {
                        if (data < 2.3) {
                            return "D";
                        } else if (data >= 2.3 && data < 2.4) {
                            return "D-O";
                        } else if (data >= 2.4 && data <= 2.8) {
                            return "O";
                        } else if (data > 2.8 && data <= 3) {
                            return "O-E"
                        } else if (data > 3) {
                            return "E"
                        }
                    }';
                } elseif ($map['alias'] === 'p') {
                    echo '"render": function(data, type, full) {
                        if (data < 0.14) {
                            return "D";
                        } else if (data >= 0.14 && data < 0.18) {
                            return "O";
                        } else if (data >= 0.18 && data <= 0.25) {
                            return "O-E"
                        } else if (data > 0.25) {
                            return "E"
                        }
                    }';
                } elseif ($map['alias'] === 'k') {
                    echo '"render": function(data, type, full) {
                        if (data < 0.75) {
                            return "D";
                        } else if (data >= 0.75 && data < 0.9) {
                            return "D-O";
                        } else if (data >= 0.9 && data <= 1.2) {
                            return "O";
                        } else if (data > 1.2 && data <= 1.6) {
                            return "O-E"
                        } else if (data > 1.6) {
                            return "E"
                        }
                    }';
                } elseif ($map['alias'] === 'mg') {
                    echo '"render": function(data, type, full) {
                        if (data < 0.2) {
                            return "D";
                        } else if (data >= 0.2 && data < 0.25) {
                            return "D-O";
                        } else if (data >= 0.25 && data <= 0.4) {
                            return "O";
                        } else if (data > 0.4 && data <= 0.7) {
                            return "O-E"
                        } else if (data > 0.7) {
                            return "E"
                        }
                    }';
                } elseif ($map['alias'] === 'ca') {
                    echo '"render": function(data, type, full) {
                        if (data < 0.25) {
                            return "D";
                        } else if (data >= 0.25 && data < 0.5) {
                            return "D-O";
                        } else if (data >= 0.5 && data <= 0.75) {
                            return "O";
                        } else if (data > 0.75 && data <= 1) {
                            return "O-E"
                        } else if (data > 1) {
                            return "E"
                        }
                    }';
                } elseif ($map['alias'] === 's') {
                    echo '"render": function(data, type, full) {
                        if (data < 0.2) {
                            return "D";
                        } else if (data >= 0.2 && data < 0.25) {
                            return "D-O";
                        } else if (data >= 0.25 && data <= 0.35) {
                            return "O";
                        } else if (data > 0.35 && data <= 0.6) {
                            return "O-E"
                        } else if (data > 0.6) {
                            return "E"
                        }
                    }';
                }
                ?>
            }]
        });
    });
</script>

</body>

</html>