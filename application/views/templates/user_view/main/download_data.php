<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $h2; ?></h2>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <!-- table Nitrogen -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Nitrogen</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($nitrogen as $n) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $n['namafile']; ?></td>
                                    <td><?= $n['tanggal']; ?></td>
                                    <td><?= $n['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_datan/' . $n['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table Nitrogen -->
    <!-- table Fosfor -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Fosfor</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($fosfor as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['namafile']; ?></td>
                                    <td><?= $p['tanggal']; ?></td>
                                    <td><?= $p['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_datap/' . $p['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table Fosfor -->
    <!-- table Kalsium -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kalium</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kalium as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $k['namafile']; ?></td>
                                    <td><?= $k['tanggal']; ?></td>
                                    <td><?= $k['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_datak/' . $k['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table Kalsium -->
    <!-- table magnesium -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Magnesium</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($magnesium as $mg) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $mg['namafile']; ?></td>
                                    <td><?= $mg['tanggal']; ?></td>
                                    <td><?= $mg['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_datamg/' . $mg['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table magnesium -->
    <!-- table kalsium -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kalsium</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">File</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kalsium as $ca) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $ca['namafile']; ?></td>
                                    <td><?= $ca['tanggal']; ?></td>
                                    <td><?= $ca['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_dataca/' . $ca['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table kalsium -->
    <!-- table sulfur -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Sulfur</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama data</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">File</th>
                                <th scope="col">Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($sulfur as $s) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $s['namafile']; ?></td>
                                    <td><?= $s['tanggal']; ?></td>
                                    <td><?= $s['url']; ?></td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Downloadfile/download_datas/' . $s['id']) ?>" class="btn btn-primary btn-sm confirm_download active" role="button" aria-pressed="true">Download</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end table sulfur -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->