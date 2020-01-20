<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $h2; ?></h2>

    <!-- Pie Chart baris 1 -->
    <div class="row">
        <!-- nitrogen chart -->
        <div class="col-xl-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Diagram Nitrogen (<?= $nitrogen['namafile']; ?>), <?= $nitrogen['tanggal']; ?></h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Diagram fosfor (<?= $fosfor['namafile']; ?>), <?= $fosfor['tanggal']; ?></h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Diagram Kalium (<?= $kalium['namafile']; ?>), <?= $kalium['tanggal']; ?></h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Diagram magnesium (<?= $magnesium['namafile']; ?>), <?= $magnesium['tanggal']; ?></h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Diagram Kalsium (<?= $kalsium['namafile']; ?>), <?= $kalsium['tanggal']; ?></h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Diagram sulfur (<?= $sulfur['namafile']; ?>), <?= $sulfur['tanggal']; ?></h6>
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