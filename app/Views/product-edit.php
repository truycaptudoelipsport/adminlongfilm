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

    </style>
</head>

<?= $this->include('partials/body') ?>

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
                <form action="#" method="post" class="edits-product">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="product-detail">
                                            <div class="row">
                                                <div class="col-12" style="position: relative;">
                                                    <div class="upload-image-center" >
                                                        <img  src="<?= base_url("assets/images/upload/other/cloud.png")?>">
                                                    </div>
                                                    <div class="tab-content position-relative" id="v-pills-tabContent" >
                                                        <div class="product-wishlist">
                                                            <a href="#">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </a>
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
                                               $giagiam =  round(($product_detail["giasp"] - $product_detail["giagiam"]) * 100 / $product_detail["giasp"])
                                            ?>
                                            <h5 class="mt-4 pt-2 editable" data-cid="giagiam" >
                                                <del class="text-muted me-2 editable" data-cid="giagiam">
                                                    <?= $product_detail["giagiam"]?></del> </h5>
                                                <span class="editable" data-cid="giasp"><?= $product_detail["giasp"] ?></span>
                                                <span class="text-danger font-size-14 ms-2"> Giảm ( <?= $product_detail["giagiam"] ? $giagiam : 0 ?> %) </span>


                                            <div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <h5 class="font-size-14">Nổi bật :</h5>
                                                            <ul class="list-unstyled product-desc-list text-muted">
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Không Nhăn</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Xuất xứ Hàn Quốc</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Chống trầy</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Dễ vệ sinh</li>
                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <h5 class="font-size-14">Dịch vụ : </h5>
                                                            <ul class="list-unstyled product-desc-list text-muted">
                                                                <li><i class="uil uil-exchange text-primary me-1 font-size-16"></i> 10 ngày dùng thử</li>
                                                                <li><i class="uil uil-bill text-primary me-1 font-size-16"></i> Bảo hành trọn đời </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-8">
                                                        <div class="product-desc-color mt-3">
                                                            <h5 class="font-size-14">Colors :</h5>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray">
                                                                        <div class="product-color-item">
                                                                            <img src="<?= base_url('assets/images/product/img-1.png') ?>" alt="" class="avatar-md">
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark">
                                                                        <div class="product-color-item">
                                                                            <img src="<?= base_url('assets/images/product/img-2.png') ?>" alt="" class="avatar-md">
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple">
                                                                        <div class="product-color-item">
                                                                            <img src="<?= base_url('assets/images/product/img-3.png') ?>" alt="" class="avatar-md">
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" class="text-primary border-0 p-1">
                                                                        2 + Colors
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-sm-4">
                                                        <div class="mt-3">
                                                            <h5 class="font-size-14 mb-3">Select Sizes :</h5>

                                                            <div class="d-inline-flex">
                                                                <select class="form-select w-sm">
                                                                    <option value="1">3</option>
                                                                    <option value="2">4</option>
                                                                    <option value="3">5</option>
                                                                    <option value="4">6</option>
                                                                    <option value="5" selected>7</option>
                                                                    <option value="6">8</option>
                                                                    <option value="7">9</option>
                                                                    <option value="8">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-3">Product description: </h5>
                                    <div class="product-desc">
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="desc-tab" data-bs-toggle="tab" href="#desc" role="tab">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="specifi-tab" data-bs-toggle="tab" href="#specifi" role="tab">Specifications</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content border border-top-0 p-4">
                                            <div class="tab-pane fade" id="desc" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2">
                                                        <div>
                                                            <img src="<?= base_url('assets/images/product/img-6.png')?>" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9 col-md-10">
                                                        <div class="text-muted p-2">
                                                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular</p>
                                                            <p>Everyone realizes why a new common language would be desirable, one could refuse to pay expensive translators.</p>
                                                            <p>It will be as simple as occidental in fact.</p>

                                                            <div>
                                                                <ul class="list-unstyled product-desc-list text-muted">
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Sed ut perspiciatis omnis iste</li>
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Neque porro quisquam est</li>
                                                                    <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Quis autem vel eum iure</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table table-nowrap mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 20%;">Category</th>
                                                            <td>Shoes</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Brand</th>
                                                            <td>Nike</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Color</th>
                                                            <td>Gray</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Quality</th>
                                                            <td>High</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Material</th>
                                                            <td>Leather</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
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
                </form>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<?= $this->include('basejquery/edit-table') ?>
<script src="<?= base_url('assets/js/app.js')?>"></script>
<?= $this->include('base/modal_upload_image') ?>
<script>

    $("#v-pills-tabContent").hover(
        function() {
            $('#v-pills-tabContent .upload-image-center').show();
        }, function() {
            $('#v-pills-tabContent .upload-image-center').hide();
        }
    );
    $(".upload-image-center").click(
        function () {
            $('.bs-example-modal-xl').modal('show');
        }
    );
</script>
</body>

</html>