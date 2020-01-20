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

<!-- script core for chartjs plugins -->
<script src="<?= base_url('assets/'); ?>js/Chart.min.js"></script>

<!-- load data geojson -->
<script>
    var object1;
    $.getJSON("<?= base_url(); ?>assets/geojson/1nitrogen/<?= $nitrogen['url']; ?>", function(json) {
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
    $.getJSON("<?= base_url(); ?>assets/geojson/2fosfor/<?= $fosfor['url']; ?>", function(json) {
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
    $.getJSON("<?= base_url(); ?>assets/geojson/3kalium/<?= $kalium['url']; ?>", function(json) {
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
    $.getJSON("<?= base_url(); ?>assets/geojson/4magnesium/<?= $magnesium['url']; ?>", function(json) {
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
    $.getJSON("<?= base_url(); ?>assets/geojson/5kalsium/<?= $kalsium['url']; ?>", function(json) {
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
    $.getJSON("<?= base_url(); ?>assets/geojson/6sulfur/<?= $sulfur['url']; ?>", function(json) {
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