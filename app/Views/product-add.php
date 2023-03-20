<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>
    <link href="<?= base_url("assets/libs/dropzone/min/dropzone.min.css") ?>" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .editable {
            padding: 10px;

            display: inline-block;
        }

        /* this class is handled by Editable */
        .is-modified {
            background: #bff;
        }

        /* this class is handled by Editable */
        .is-editing {
            background: #bfb;
            outline: none;
        }
        .upload-image-center {
            position: absolute;
            top: 50%;
            left: 58%;
            transform: translate(-50%, -50%);
            z-index: 10;
            opacity: 0.4;
        }
        .upload-image-center img{
            width: 50%;
        }
        .image-cloud-upload{
            display: none;
        }

    </style>
</head>

<?= $this->include('partials/body') ?>
<!-- file_name_product -->


<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?= $page_title ?>
                   <?php echo form_open(base_url('product/update') ,array('class' =>"edits-product",'enctype' =>'multipart/form-data' , 'method' =>'post')); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="product-detail">
                                            <div class="row">
                                                <?php $product_detail["image"] = unserialize($product_detail["image"]);if(($product_detail["image"]) != null)
                                                {?>
                                                    <div id="v-pills-tabContent" class="col-12" style="position: relative;">
                                                        <div class="upload-image-center" >
                                                            <img class="image-cloud-upload" src="<?= base_url("assets/images/upload/other/cloud.png")?>">
                                                        </div>
                                                        <div class="tab-content position-relative" id="v-pills-tabContent" >
                                                            <div class="tab-pane fade show active" id="product-0" role="tabpanel">
                                                                <div class="product-img">
                                                                    <img src="<?= base_url(reset($product_detail["image"]))?>" alt="" class="img-fluid mx-auto d-block" data-zoom="<?= base_url(reset($product_detail["image"]))?>">
                                                                </div>
                                                            </div>
                                                            <?php foreach ($product_detail["image"] as $key_image => $value_image) {
                                                                ?>
                                                            <div class="tab-pane fade " id="product-<?= $key_image ?>" role="tabpanel">
                                                                <div class="product-img">
                                                                    <img src="<?= base_url($value_image)?>" onerror="ImgError(this)" alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="nav row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <?php foreach ($product_detail["image"] as $key_image => $value_image) {
                                                                ?>
                                                            <a class="nav-link col-3" id="product-<?= $key_image ?>-tab" data-bs-toggle="pill" href="#product-<?= $key_image ?>" role="tab" style="position: relative;display: block;">
                                                                <img src="<?= base_url($value_image)?>" onerror="ImgError(this)" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                <i class="fas fa-window-close"  data-idimage="<?= $key_image ?>" style="position: absolute;top: 0;right: 0;color: red"></i>
                                                            </a>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }else{ ?>
                                                <div class="col-12" style="position: relative;">
                                                    <div class="upload-image-center" >
                                                        <img  class="image-cloud-upload" src="<?= base_url("assets/images/upload/other/cloud.png")?>">
                                                    </div>
                                                    <div class="tab-content position-relative" id="v-pills-tabContent" >
                                                        <div class="upload-image-center" >
                                                            <img class="image-cloud-upload" src="<?= base_url("assets/images/upload/other/cloud.png")?>">
                                                        </div>
                                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="<?= base_url('assets/images/product/img-1.png')?>" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="<?= base_url('assets/images/product/img-2.png')?>" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="<?= base_url('assets/images/product/img-3.png')?>" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                            <div class="product-img">
                                                                <img src="<?= base_url('assets/images/product/img-6.png')?>" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="nav row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active col-3" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab">
                                                            <img src="<?= base_url('assets/images/product/img-1.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>
                                                        <a class="nav-link col-3" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab">
                                                            <img src="<?= base_url('assets/images/product/img-2.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>


                                                        <a class="nav-link col-3" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab">
                                                            <img src="<?= base_url('assets/images/product/img-3.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>


                                                        <a class="nav-link col-3" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab">
                                                            <img src="<?= base_url('assets/images/product/img-6.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                        </a>

                                                    </div>
                                                </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-7" data-id="1" id="table-1">
                                        <div class="mt-4 mt-xl-3 ps-xl-4">

                                            <h4 data-field="name" class="font-size-20 mb-3 editable " data-cid="tensp"><?= $product_detail["tensp"] ?></h4>
                                            <div class="text-muted">
                                                <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                                            </div>
                                            <?php
                                                if($product_detail["giasp"] > 0) {
                                                    $giagiam = round(($product_detail["giasp"] - $product_detail["giagiam"]) * 100 / $product_detail["giasp"]);
                                                }
                                            ?>
                                                 <span class="mt-4 pt-2 editable " data-cid="giagiam" >
                                                    <del class="text-muted me-2 " ><?= number_format($product_detail["giagiam"])?></del>
                                                 </span>
                                                <h5 class="editable " data-cid="giasp" ><?= number_format($product_detail["giasp"]) ?></h5>
                                                <span class="text-danger font-size-14 ms-2"> Giảm ( <?= $product_detail["giagiam"] ? $giagiam : 0 ?> %) </span>


                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mt-3">
                                                            <textarea class="form-control" id="productdesc" name="description" rows="5" placeholder="Nhập mô tả sản phẩm"><?php $product_detail["description"] ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="product-desc-color mt-3">
                                                            <h5 class="font-size-14">Màu sắc :</h5>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                        <div class="product-color-item">
                                                                            <input type="color" id="favcolor" name="favcolor" value="<?= ($product_detail["favcolor"]) ? $product_detail["favcolor"] : "#FFFFFF"?>">
                                                                        </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="product-desc-color mt-3">
                                                            <h5 class="font-size-14">Hiện trang chủ :</h5>
                                                            <div class="form-check form-switch form-switch-md">
                                                                <input name="home" type="checkbox" class="form-check-input" id="show_home" <?php if($product_detail["home"]==1) echo "checked"?>>
                                                                <label class="form-check-label" for="customSwitchsizemd">Hiện</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="product-desc-color mt-3">
                                                            <h5 class="font-size-14">Sản phẩm HOT :</h5>
                                                            <div class="form-check form-switch form-switch-md">
                                                                <input name="hot" type="checkbox" class="form-check-input" id="product_hot" <?php if($product_detail["hot"]==1) echo "checked"?> >
                                                                <label class="form-check-label" for="customSwitchsizemd">Có</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <h5 class="font-size-14">Xác nhận</h5>
                                                    <div class="col-lg-12">
                                                        <div class="d-flex flex-wrap gap-3 mt-3">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Cập nhật</button>
                                                            <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-3">Mô tả sản phẩm : </h5>
                                    <div class="product-desc">
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="content-tab" data-bs-toggle="tab" href="#content" role="tab">Nội dung </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="specifi-tab" data-bs-toggle="tab" href="#specifi" role="tab">Thông số kỹ thuật</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content border border-top-0 p-4">
                                            <div class="tab-pane fade" id="content" role="tabpanel">
                                                <div class="row">
                                                    <textarea class="form-control" id="content_tiny" name="content" rows="10" placeholder="Nội dung sản phẩm"><?= ($product_detail["content"]) ? $product_detail["content"] : ""?></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="specifi" role="tabpanel"`>
                                                <div class="table-responsive">
                                                    <table class="table table-nowrap mb-0">
                                                        <tbody id="product_des_tec">

                                                        </tbody>
                                                    </table>
                                                    <a class="btn btn-mini btn-success" id="add_tech" onclick="addInput();">
                                                        <i class="fas fa-clone"></i> Thêm thuộc tính
                                                    </a>
                                                    <textarea hidden id="pro_tech_info" name="pro_tech_info"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?= form_close('')?>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->
</div>
<div class="modal fade staticBackdrop"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Xác nhận xóa </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="<?= base_url("product/remove_image") ?>" method="GET" id="image_form_delete">
            <div class="modal-body">
                Bạn có chắc muốn xóa ?
                    <input id="product_id"  name="product_id" type="hidden" value="<?= $product_detail["id"] ?>">
                    <input id="id_image" name="id_image" type="hidden" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" form="image_form_delete"  class="btn btn-primary">Xác nhận</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- END layout-wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('basejquery/edit-table') ?>
<script src="<?= base_url('assets/libs/tinymce/tinymce.min.js')?>"></script>
<script src="<?= base_url('assets/js/pages/form-editor.init.js')?>"></script>
<script src="<?= base_url('assets/js/app.js')?>"></script>
<script src="<?= base_url('assets/js/base/help-function.js')?>"></script>
<script>

    $("#v-pills-tabContent").hover(
        function() {
            $('#v-pills-tabContent .image-cloud-upload').show();
        }, function() {
            $('#v-pills-tabContent .image-cloud-upload').hide();
        }
    );
    $(".upload-image-center").click(
        function () {
            $('.bs-example-modal-xl').modal('show');
        }
    );
    $(".fa-window-close").click(
        function () {
            $('#id_image').val($(this).attr("data-idimage"));
            $('.staticBackdrop').modal('show');
        }
    );
    function ImgError(source){
        var base_url = window.location.origin;
        source.src = base_url+"/uploads/404_image.jpg";
        source.onerror = "";
        return true;
    }
    function remove(ele) {
        $(ele).closest('tr').remove();
    }
    function addInput() {
        let parent = $('#product_des_tec'),
            count = parent.children().length + 1;
        let hmtl = '<tr><th class="editable" contenteditable="true" >Chống nắng (UV)</th>' +
            '<td class="editable" contenteditable="true" style="display: table-cell" >98%</td> ' +
            '<td><a onclick="remove(this);return false" href="#"><i style="color: darkred;font-size: large" class="fas fa-trash-alt"></i></a>\n' +
            '</td></tr>';
        parent.append(hmtl);
    }
    $(".edits-product").submit(function () {
        var value = $("#product_des_tec").html();
        $("#pro_tech_info").val(value);
    })
</script>
</body>

</html>