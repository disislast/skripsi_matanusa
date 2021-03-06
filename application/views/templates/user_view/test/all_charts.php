<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MATANUSA</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- styles for Chartjs-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Chart.min.css">
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
                        <h6 class="collapse-header">sekunder:</h6>
                        <a class="collapse-item" href="<?= base_url('openmap/magnesium'); ?>">Magnesium(Mg)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/kalsium'); ?>">Kalsium(Ca)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/sulfur'); ?>">Sulfur(S)</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Manage
            </div> -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
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
                    <h2 class="h2 mb-1 text-gray-800">testing</h2>

                    <!-- Pie Chart baris 1 -->
                    <div class="row">
                        <!-- nitrogen chart -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram Nitrogen</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="nitrogen-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- end nitrogen chart -->
                        </div>
                        <!-- chart fosfor -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram fosfor</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="fosfor-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end kalium chart -->
                    </div>
                    <!-- Pie Chart -->
                    <!-- Pie Chart baris 2 -->
                    <div class="row">
                        <!-- kalium chart -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram Kalium</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="kalium-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- end kalium chart -->
                        </div>
                        <!-- chart magnesium -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram magnesium</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="magnesium-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end magnesium chart -->
                    </div>
                    <!-- Pie Chart -->
                    <!-- Pie Chart baris 3 -->
                    <div class="row">
                        <!-- kalium chart -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram Kalsium</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="kalsium-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- end kalium chart -->
                        </div>
                        <!-- chart magnesium -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Diagram sulfur</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="sulfur-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end magnesium chart -->
                    </div>
                    <!-- Pie Chart -->

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

    <!-- script core for chartjs plugins -->
    <script src="<?= base_url('assets/'); ?>js/Chart.min.js"></script>

    <!-- load data geojson -->
    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/nitrogen_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var deffop = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.n_mean < 2.3)
                        deff++
                    else if (e.properties.n_mean >= 2.3 && e.properties.n_mean < 2.4)
                        deffop++
                    else if (e.properties.n_mean >= 2.4 && e.properties.n_mean <= 2.8)
                        optimal++
                    else if (e.properties.n_mean > 2.8 && e.properties.n_mean <= 3)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, deffop, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#f1c40f",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: false,
                    text: "Nitrogen"
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("nitrogen-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'D-O', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>

    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/fosfor_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.p_mean < 0.14)
                        deff++
                    else if (e.properties.p_mean >= 0.14 && e.properties.p_mean < 0.18)
                        optimal++
                    else if (e.properties.p_mean >= 0.18 && e.properties.p_mean <= 0.25)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: false,
                    text: "Nitrogen"
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("fosfor-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>

    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/kalium_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var deffop = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.k_mean < 0.75)
                        deff++
                    else if (e.properties.k_mean >= 0.75 && e.properties.k_mean < 0.9)
                        deffop++
                    else if (e.properties.k_mean >= 0.9 && e.properties.k_mean <= 1.2)
                        optimal++
                    else if (e.properties.k_mean > 1.2 && e.properties.k_mean <= 1.6)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, deffop, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#f1c40f",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("kalium-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'D-O', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>

    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/magnesium_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var deffop = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.mg_mean < 0.2)
                        deff++
                    else if (e.properties.mg_mean >= 0.2 && e.properties.mg_mean < 0.25)
                        deffop++
                    else if (e.properties.mg_mean >= 0.25 && e.properties.mg_mean <= 0.4)
                        optimal++
                    else if (e.properties.mg_mean > 0.4 && e.properties.mg_mean <= 0.7)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, deffop, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#f1c40f",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("magnesium-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'D-O', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>


    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/kalsium_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var deffop = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.ca_mean < 0.25)
                        deff++
                    else if (e.properties.ca_mean >= 0.25 && e.properties.ca_mean < 0.5)
                        deffop++
                    else if (e.properties.ca_mean >= 0.5 && e.properties.ca_mean <= 0.75)
                        optimal++
                    else if (e.properties.ca_mean > 0.75 && e.properties.ca_mean <= 1)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, deffop, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#f1c40f",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("kalsium-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'D-O', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>

    <script>
        var object1;
        $.getJSON("<?= base_url(); ?>assets/geojson/sulfur_2019.geojson", function(json) {
            var object1 = json;
            var deff = 0
            var deffop = 0
            var optimal = 0
            var optexs = 0
            var exs = 0

            function countbad() {
                object1.features.forEach(e => {
                    if (e.properties.s_mean < 0.2)
                        deff++
                    else if (e.properties.s_mean >= 0.2 && e.properties.s_mean < 0.24)
                        deffop++
                    else if (e.properties.s_mean >= 0.25 && e.properties.s_mean <= 0.35)
                        optimal++
                    else if (e.properties.s_mean > 0.35 && e.properties.s_mean <= 6)
                        optexs++
                    else
                        exs++
                })
            }
            countbad();

            var data = [{
                data: [deff, deffop, optimal, optexs, exs],
                backgroundColor: [
                    "#c0392b",
                    "#f1c40f",
                    "#4cd137",
                    "#2980b9",
                    "#8904b1"

                ],
                borderColor: "#000000"
            }];

            var options = {
                tooltips: {
                    enabled: true
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            };

            var ctx = document.getElementById("sulfur-chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: data,
                    labels: ['D', 'D-O', 'O', 'O-E', 'E']
                },
                options: options
            });
        });
    </script>

</body>

</html>