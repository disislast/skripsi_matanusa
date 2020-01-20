<!-- Upload Modal nitrogen-->
<div class="modal fade" id="uploadModalNitrogen" tabindex="-1" role="dialog" aria-labelledby="uploadModalNitrogen" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="uploadModalNitrogen">Upload Data Nitrogen</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form -->
            <?php echo form_open_multipart('Nitrogen/save') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" required autofocus class="form-control" id="namafile" name="namafile" placeholder="nama file">
                </div>
                <div class="form-group">
                    <input type="text" required autofocus class="form-control datepicker" id='tanggaldata' name="tanggaldata" placeholder="tanggal pengambilan data">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileupload" name="fileupload">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div>
                    <p>klik "Upload" untuk melanjutkan</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success' type='submit'>Save</button>
            </div>
            <?php echo form_close(); ?>
            <!-- endform -->
        </div>
    </div>
</div>

<div class="modal fade" id="editNitrogen" tabindex="-1" role="dialog" aria-labelledby="editNitrogen" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editNitrogen">Edit Data Nitrogen</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Form -->
            <?php echo form_open_multipart('Nitrogen/ubah_data') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" required autofocus class="form-control" id="namafilen" name="namafile" placeholder="nama file">
                </div>
                <div class="form-group">
                    <input type="text" required autofocus class="form-control datepicker" id='tanggaldatan' name="tanggaldata" placeholder="tanggal pengambilan data">
                    <input type="hidden" name="id" class="form-control" id="idn" required readonly>
                </div>
                <div>
                    <p>klik "save" untuk melanjutkan</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button class='btn btn-success' type='submit'>Save</button>
            </div>
            <?php echo form_close(); ?>
            <!-- endform -->
        </div>
    </div>
</div>
<!-- end of upload modal -->