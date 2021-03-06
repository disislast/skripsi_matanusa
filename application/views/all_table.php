<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- styles for datatable-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/buttons.bootstrap4.min.css">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#homeModal">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-1">MATANUSA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span><strong>Nutrients</strong></span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Primer:</h6>
                        <a class="collapse-item" href="<?= base_url('openmap'); ?>">Nitrogen(N)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/fosfor'); ?>">Fosfor(P)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/kalium'); ?>">Kalium(K)</a>
                        <h6 class="collapse-header">Sekunder:</h6>
                        <a class="collapse-item" href="<?= base_url('openmap/magnesium'); ?>">Magnesium(Mg)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/kalsium'); ?>">Kalsium(Ca)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/sulfur'); ?>">Sulfur(S)</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Primer:</h6>
                        <a class="collapse-item" href="<?= base_url('opentable'); ?>">Nitrogen(N)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/fosfor'); ?>">Fosfor(P)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/kalium'); ?>">Kalium(K)</a>
                        <h6 class="collapse-header">Sekunder:</h6>
                        <a class="collapse-item" href="<?= base_url('opentable/magnesium'); ?>">Magnesium(Mg)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/kalsium'); ?>">Kalsium(Ca)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/sulfur'); ?>">Sulfur(S)</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h2 class="h3 mb-4 text-gray-800"><?= $map['nama_nutrisi']; ?></h2>

                    <!-- table -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel <?= $map['nama_nutrisi']; ?> (<?= $map['namafile'] ?>), tanggal: <?= $map['tanggal']; ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-hover" width="100%" cellspacing="0"></table>
                            </div>
                        </div>
                    </div>
                    <!-- end table -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ingin meninggalkan halaman?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">pilih "login" untuk masuk kedalam website</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth'); ?>">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- homepage Modal-->
    <div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ingin meninggalkan halaman?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">pilih "ya" untuk kembali ke halaman awal</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">tidak</button>
                    <a class="btn btn-primary" href="<?= base_url('homepage'); ?>">ya</a>
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