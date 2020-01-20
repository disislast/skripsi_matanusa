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

<!-- script core for map leaflet and plugins -->
<script src="<?= base_url('assets/'); ?>leaflet/leaflet.js"></script>
<script src="<?= base_url('assets/'); ?>leaflet/leaflet.ajax.min.js"></script>
<script src="<?= base_url('assets/'); ?>leaflet/leaflet.mousecoordinate.min.js"></script>

<!-- script leaflet for this web -->
<script src="<?= base_url('assets/'); ?>leaflet/baseMap.js"></script>
<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";

    // get color depending on dry mass value
    <?php
    if ($map['alias'] == 'n') {
        echo "function getColor(nitrogen) {
        return nitrogen >= 3 ? '#8904b1' :
        nitrogen >= 2.8 ? '#2980b9' :
        nitrogen >= 2.4 ? '#4cd137' :
        nitrogen >= 2.3 ? '#f1c40f' :
        nitrogen >= 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    } elseif ($map['alias'] == 'p') {
        echo "function getColor(fosfor) {
        return fosfor > 0.25 ? '#8904b1' :
        fosfor > 0.19 ? '#2980b9' :
        fosfor > 0.14 ? '#4cd137' :
        fosfor > 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    } elseif ($map['alias'] == 'k') {
        echo "function getColor(kalium) {
        return kalium >= 1.6 ? '#8904b1' :
        kalium >= 1.2 ? '#2980b9' :
        kalium >= 0.9 ? '#4cd137' :
        kalium >= 0.75 ? '#f1c40f' :
        kalium >= 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    } elseif ($map['alias'] == 'mg') {
        echo "function getColor(magnesium) {
        return magnesium >= 0.7 ? '#8904b1' :
        magnesium >= 0.4 ? '#2980b9' :
        magnesium >= 0.25 ? '#4cd137' :
        magnesium >= 0.2 ? '#f1c40f' :
        magnesium >= 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    } elseif ($map['alias'] == 'ca') {
        echo "function getColor(kalsium) {
        return kalsium >= 1 ? '#8904b1' :
        kalsium >= 0.75 ? '#2980b9' :
        kalsium >= 0.5 ? '#4cd137' :
        kalsium >= 0.25 ? '#f1c40f' :
        kalsium >= 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    } elseif ($map['alias'] == 's') {
        echo "function getColor(sulfur) {
        return sulfur >= 0.6 ? '#8904b1' :
        sulfur >= 0.35 ? '#2980b9' :
        sulfur >= 0.25 ? '#4cd137' :
        sulfur >= 0.2 ? '#f1c40f' :
        sulfur >= 0 ? '#c0392b' :
        '#bdc3c7';
        }";
    }
    ?>
    var geojsonLayer = new L.GeoJSON.AJAX(base_url + "/assets/geojson/<?php if ($map['alias'] == 'n') {
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
                                                                        } ?>/<?= $map['url']; ?>", {
        style: function(feature) {
            p = feature.properties.<?= $map['alias']; ?>_mean;
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
                    var mean = feature.properties.<?= $map['alias']; ?>_mean.toFixed(3)
                    map.fitBounds(e.target.getBounds())
                    geojsonLayer.bindPopup('<br> Grid id : ' + feature.properties.grid.toString() +
                        '<br>kadar nutrisi (% bk) : ' + mean.toString() +
                        '<br>easting : ' + feature.properties.xcoord.toString() +
                        '<br>northing : ' + feature.properties.ycoord.toString()
                    )
                }
            });;
        }
    });

    geojsonLayer.addTo(map);
    geojsonLayer.on('data:loaded', function() {
        map.fitBounds(geojsonLayer.getBounds());
    });

    // Legend add
    var legend = L.control({
        position: 'bottomright'
    });

    legend.onAdd = function(map) {

        var div = L.DomUtil.create('div', 'info legend'),
            <?php
            if ($map['alias'] == 'n') {
                echo 'grades = [0, 2.30, 2.40, 2.80, 30],';
            } elseif ($map['alias'] === 'p') {
                echo 'grades = [0, 0.14, 0.19, 0.25],';
            } elseif ($map['alias'] === 'k') {
                echo 'grades = [0, 0.75, 0.90, 1.20, 1.60],';
            } elseif ($map['alias'] === 'mg') {
                echo 'grades = [0, 0.20, 0.25, 0.40, 0.70],';
            } elseif ($map['alias'] === 'ca') {
                echo 'grades = [0, 0.25, 0.50, 0.75, 1.00],';
            } elseif ($map['alias'] === 's') {
                echo 'grades = [0, 0.20, 0.25, 0.35, 0.60],';
            }
            ?>
        labels = [];

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