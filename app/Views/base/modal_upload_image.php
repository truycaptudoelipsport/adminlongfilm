<style>
    .dz-remove {
        margin: 5px;
    }
    .dz-progress{
        background: none !important;
    }
    .dz-error-message {
        bottom : 170px;
        top : none !important;
    }
</style>
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Tải hình ảnh </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body " >
                <div>
                    <form action="<?=base_url('page/fileUpload')?>" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted uil uil-cloud-upload"></i>
                            </div>
                            <h4>Chọn hình ảnh cần tải lên.</h4>
                        </div>
                        <!-- CSRF token -->
                        <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                        <input type="hidden" class="name_file" name="file_name" value="<?= $file_name ?>" />
                    </form>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light" id="uploadFile">Upload</button>
                    </div>
                </div>
            </div>
            <div class="modal-body" >
                <div>
                        <div class="needsclick">
                            <h4>Hình ảnh đã tải </h4>
                        </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="<?= base_url('assets/libs/dropzone/min/dropzone.min.js') ?>"></script>
<script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone",{
            addRemoveLinks: true,
            autoProcessQueue: false,
            maxFilesize: 2, // 2 mb
            acceptedFiles: ".jpeg,.jpg,.png,.pdf",
        });
        $('#uploadFile').click(function(){
            myDropzone.processQueue();
        });
        myDropzone.on("sending", function(file, xhr, formData) {
            // CSRF Hash
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash
            formData.append(csrfName, csrfHash);

        });
        myDropzone.on("success", function(file, response) {
            $('.txt_csrfname').val(response.token);
            if(response.success == 0){ // Error
                alert(response.error);
            }
            if(response.success == 2){
                alert(response.message);
            }
        });


</script>
