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

    <!-- styles for map-->
    <link href="<?= base_url('assets/'); ?>leaflet/leaflet.css" rel="stylesheet">
    <style type="text/css">
        #mapid {
            height: 540px;
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            text-align: left;
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 1;
        }
    </style>
    <link href="<?= base_url('assets/'); ?>leaflet/leaflet.mousecoordinate.css" rel="stylesheet">
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
                        <h6 class="collapse-header">Essenstial:</h6>
                        <a class="collapse-item" href="<?= base_url('openmap'); ?>">Natrium(N)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/fosfor'); ?>">Fosfor(P)</a>
                        <a class="collapse-item" href="<?= base_url('openmap/kalium'); ?>">Kalium(K)</a>
                        <h6 class="collapse-header">Non Essenstial:</h6>
                        <a class="collapse-item" href="<?= base_url('openmap/magnesium'); ?>">Mangan(Mg)</a>
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
                        <h6 class="collapse-header">Essenstial:</h6>
                        <a class="collapse-item" href="<?= base_url('opentable'); ?>">Natrium(N)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/fosfor'); ?>">Fosfor(P)</a>
                        <a class="collapse-item" href="<?= base_url('opentable/kalium'); ?>">Kalium(K)</a>
                        <h6 class="collapse-header">Non Essenstial:</h6>
                        <a class="collapse-item" href="<?= base_url('opetable/magnesium'); ?>">Mangan(Mg)</a>
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
                    <h2 class="h2 mb-1 text-gray-800"><?= $h2; ?></h2>

                    <!-- map -->
                    <div id="mapid"></div>
                    <!-- end map -->

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

    <!-- script core for map leaflet and plugins -->
    <script src="<?= base_url('assets/'); ?>leaflet/leaflet.js"></script>
    <script src="<?= base_url('assets/'); ?>leaflet/leaflet.ajax.min.js"></script>
    <script src="<?= base_url('assets/'); ?>leaflet/proj4.js"></script>
    <script src="<?= base_url('assets/'); ?>leaflet/proj4leaflet.js"></script>
    <script src="<?= base_url('assets/'); ?>leaflet/leaflet.mousecoordinate.min.js"></script>

    <!-- script leaflet for this web -->
    <script src="<?= base_url('assets/'); ?>leaflet/baseMap.js"></script>
    <script type="text/javascript">
        var base_url = "<?= base_url(); ?>";

        // get color depending on dry mass value
        function getColor(kalium) {
            return kalium >= 1.6 ? '#8904b1' :
                kalium >= 1.2 ? '#2980b9' :
                kalium >= 0.9 ? '#4cd137' :
                kalium >= 0.75 ? '#f1c40f' :
                kalium >= 0 ? '#c0392b' :
                '#bdc3c7';
        }

        var geojsonLayer = new L.GeoJSON.AJAX(base_url + "/assets/geojson/kalium_2019.geojson", {
            style: function(feature) {
                p = feature.properties.k_mean;
                return {
                    fillColor: getColor(p),
                    fillOpacity: 0.8,
                    color: "black",
                    dashArray: '3',
                    weight: 1,
                    opacity: 0.7
                }
            },
            onEachFeature: function(feature, layer) {
                layer.on({
                    mouseover: function(e) {
                        e.target.setStyle({
                            fillOpacity: 0.8,
                            dashArray: '',
                            weight: 2,
                            opacity: 1
                        });
                        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                            e.target.bringToFront();
                        }
                    },
                    mouseout: function(e) {
                        geojsonLayer.resetStyle(e.target);
                    },
                    click: function(e) {
                        var mean = feature.properties.k_mean.toFixed(3)
                        map.fitBounds(e.target.getBounds())
                        geojsonLayer.bindPopup('<br> Grid id : ' + feature.properties.grid.toString() +
                            '<br>kadar nutrisi (% bk) : ' + mean.toString() +
                            '<br>easting : ' + feature.properties.xcoord.toString() +
                            '<br>northing : ' + feature.properties.ycoord.toString()
                        )
                    }
                });
            }
        });
        geojsonLayer.bindPopup(function(feature) {
            return feature.properties.fosfor_mea;
        });
        geojsonLayer.addTo(map);
        geojsonLayer.on('data:loaded', function() {
            map.fitBounds(geojsonLayer.getBounds());
        });
        // testing

        /* testing */
        // control that shows state info on hover
        /* var info = L.control();

        info.onAdd = function(map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };

        info.update = function(feature) {
            this._div.innerHTML = '<h4>Density of Makronutrient</h4>' + (feature ?
                '<b>' + feature.properties.id + '</b><br />' + feature.properties.fosfor_mea + ' people / mi<sup>2</sup>' :
                'Hover over a state');
        };

        info.addTo(map); */

        // legend add
        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 0.75, 0.90, 1.20, 1.60],
                labels = [],
                from, to;

            for (var i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];

                labels.push(
                    '<i style="background:' + getColor(from + 0.01) + '"></i> ' +
                    from + (to ? '&ndash;' + to : '+') + ' (% bk)'
                );
            }

            div.innerHTML = labels.join('<br>');
            return div;
        };

        legend.addTo(map);
    </script>

</body>

</html>