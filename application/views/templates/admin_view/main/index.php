<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $h2; ?></h2>
    <div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Panduan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <p>
                        Kelapa sawit merupakan salah satu komoditas pertanian yang sangat diminati di Indonesia. Kelapa sawit merupakan salahsatu komoditas pertanian yang memiliki peranan penting pada sektor perekonomian. Kelapa sawit sendiri merupakan produk andalan Indonesia sebagai sumber devisa non migas. Kelapa sawit mampu untuk menciptakan lapangan kerja dan meningkatkan kesejahteraan masyarakat pada tiap proses pengolahannya untuk menjadi minyak kelapa sawit(Soetrisno et al. 1991). Di bandingkan dengan produk pertanian lainnya, kelapa sawit memiliki luas lahan perkebunan terbesar yang mencapai 10,75 juta hektar pada tahun 2015 (BPS 2016). Luas lahan kelapa sawit terus bertabah hingga mencapai 14,04 juta hektar pada tahun 2017 dan diperkirakan akan terus meningkat pada tahun berikutnya. Precission agriculture diharapkan dapat meningkatkan produksi kelapa sawit tanpa melakukan ekstensifikasi sehingga produktivitas per satuan lahan dapat dicapai
                    </p>
                    <ul>
                        1.Melakukan pengambilan data
                    </ul>
                    <ul>
                        2.Melakukan stiching data
                    </ul>
                    <ul>
                        3.Melakukan index calculator dengan model yang telah disediakan
                    </ul>
                    <ul>
                        4.Download Base polygon
                    </ul>
                    <ul>
                        5.buka hasil stiching dan polygon dan lakukan raster calculator
                    </ul>
                    <ul>
                        6.save as geojson
                    </ul>
                    <p>
                    </p>
                    File dasar polygon
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#downloadBaseModal">download</button>
                </div>
            </div>
        </div>
        <!-- end table -->
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="downloadBaseModal" tabindex="-1" role="dialog" aria-labelledby="downloadBaseModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="downloadBaseModal">Edit Data Nitrogen</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form -->
            <?php echo form_open_multipart('Downloadfile/download_base') ?>
            <div class="modal-body">
                <div>
                    <p>klik "download" untuk melanjutkan</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success' type='submit'>download</button>
            </div>
            <?php echo form_close(); ?>
            <!-- endform -->
        </div>
    </div>
</div>