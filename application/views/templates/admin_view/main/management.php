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
            <div>
                <!-- Button trigger modal -->
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalNitrogen">
                    Upload data
                </a>
            </div>
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
                                    <td><?php if ($n['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Nitrogen/aktif/' . $n['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($n['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editNitrogen" onclick="editN(<?php echo $n['id'] ?>)" class="btn btn-warning btn-sm 
                                        <?php if ($n['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Nitrogen/delete_data/' . $n['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($n['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalFosfor">
                    Upload data
                </button>
            </div>
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
                                    <td><?php if ($p['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Fosfor/aktif/' . $p['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($p['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editFosfor" onclick="editP(<?php echo $p['id'] ?>)" class="btn btn-warning btn-sm
                                        <?php if ($p['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Fosfor/delete_data/' . $p['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($p['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalKalium">
                    Upload data
                </button>
            </div>
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
                                    <td><?php if ($k['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Kalium/aktif/' . $k['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($k['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editKalium" onclick="editK(<?php echo $k['id'] ?>)" class="btn btn-warning btn-sm
                                        <?php if ($k['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Kalium/delete_data/' . $k['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($k['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalMagnesium">
                    Upload data
                </button>
            </div>
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
                                    <td><?php if ($mg['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Magnesium/aktif/' . $mg['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($mg['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editMagnesium" onclick="editMg(<?php echo $mg['id'] ?>)" class="btn btn-warning btn-sm 
                                        <?php if ($mg['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Magnesium/delete_data/' . $mg['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($mg['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalKalsium">
                    Upload data
                </button>
            </div>
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
                            <?php foreach ($kalsium as $ca) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $ca['namafile']; ?></td>
                                    <td><?= $ca['tanggal']; ?></td>
                                    <td><?php if ($ca['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Kalsium/aktif/' . $ca['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($ca['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editKalsium" onclick="editCa(<?php echo $ca['id'] ?>)" class="btn btn-warning btn-sm
                                        <?php if ($ca['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Kalsium/delete_data/' . $ca['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($ca['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModalSulfur">
                    Upload data
                </button>
            </div>
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
                            <?php foreach ($sulfur as $s) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $s['namafile']; ?></td>
                                    <td><?= $s['tanggal']; ?></td>
                                    <td><?php if ($s['status'] == 1) {
                                                echo 'aktif';
                                            } else {
                                                echo 'tidak aktif';
                                            } ?>
                                    </td>
                                    <td>
                                        <a href="#" data-url="<?php echo site_url('Sulfur/aktif/' . $s['id']) ?>" class="btn btn-success btn-sm confirm_active
                                        <?php if ($s['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">aktifkan</a>
                                        <a href="#" data-toggle="modal" data-target="#editSulfur" onclick="editS(<?php echo $s['id'] ?>)" class="btn btn-warning btn-sm 
                                        <?php if ($s['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">edit</a>
                                        <a href="#" data-url="<?php echo site_url('Sulfur/delete_data/' . $s['id']) ?>" class="btn btn-danger btn-sm confirm_delete
                                        <?php if ($s['status'] == 1) {
                                                echo 'disabled';
                                            } else {
                                                echo 'active';
                                            } ?>" role="button" aria-pressed="true">delete</a>
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