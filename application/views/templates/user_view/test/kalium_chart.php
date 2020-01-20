<html>

<head>
    ayam
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/Chart.min.css">
</head>

<body>
    <h1> kok konyol sampean</h1>
    <canvas id="pie-chart"></canvas>
    <canvas id="pie-pie"></canvas>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/Chart.min.js"></script>

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
                title: {
                    display: true,
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

            var ctx = document.getElementById("pie-chart").getContext('2d');
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
                    display: true,
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

            var ctx = document.getElementById("pie-pie").getContext('2d');
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