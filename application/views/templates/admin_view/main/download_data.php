<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $h2; ?></h2>
    <!-- table Nitrogen -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Nitrogen</h6>
        </div>
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-lg-8 table-responsive">
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
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#downloadModal">download</button>
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


    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#downloadModal">
        Download data
    </button>
-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Download Modal-->
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Download Data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">klik "download" untuk memulai download</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" type="submit" value="Submit" href="<?= base_url('download'); ?>">download</a>
            </div>
        </div>
    </div>
</div>