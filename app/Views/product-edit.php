<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>
    <link href="<?= base_url("assets/libs/dropzone/min/dropzone.min.css") ?>" rel="stylesheet" type="text/css" />
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
                                                <div class="col-12">
                                                    <div class="tab-content position-relative" id="v-pills-tabContent">
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
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab">
                                                                <img src="<?= base_url('assets/images/product/img-1.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                        </div>
                                                        <div class="col-3">
                                                            <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab">
                                                                <img src="<?= base_url('assets/images/product/img-2.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                        </div>
                                                        <div class="col-3">
                                                            <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab">
                                                                <img src="<?= base_url('assets/images/product/img-3.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                        </div>
                                                        <div class="col-3">
                                                            <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab">
                                                                <img src="<?= base_url('assets/images/product/img-6.png')?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-7" data-id="1" id="table-1">
                                        <a class="btn btn-outline-secondary btn-sm edit " title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <div class="mt-4 mt-xl-3 ps-xl-4">
                                            <h4  data-field="name" class="font-size-20 mb-3">Film Xuất khẩu nước ngoài</h4>
                                            <div class="text-muted">
                                                <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                                            </div>

                                            <h5 class="mt-4 pt-2"><del class="text-muted me-2">$280</del>$260 <span class="text-danger font-size-14 ms-2">- 20 % Off</span></h5>

                                            <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular</p>

                                            <div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mt-3">

                                                            <h5 class="font-size-14">Specification :</h5>
                                                            <ul class="list-unstyled product-desc-list text-muted">
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> High Quality</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Leather</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All Sizes available</li>
                                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4 Different Color</li>
                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mt-3">
                                                            <h5 class="font-size-14">Services :</h5>
                                                            <ul class="list-unstyled product-desc-list text-muted">
                                                                <li><i class="uil uil-exchange text-primary me-1 font-size-16"></i> 10 Days Replacement</li>
                                                                <li><i class="uil uil-bill text-primary me-1 font-size-16"></i> Cash on Delivery available</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">

                                                    <h5 class="font-size-14 mb-3"><i class="uil uil-location-pin-alt font-size-20 text-primary align-middle me-2"></i> Delivery location</h5>

                                                    <div class="d-inline-flex">

                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Enter Delivery pincode ">

                                                            <button class="btn btn-light" type="button">Check</button>

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
                                                                            <img src="assets/images/product/img-1.png" alt="" class="avatar-md">
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark">
                                                                        <div class="product-color-item">
                                                                            <img src="assets/images/product/img-2.png" alt="" class="avatar-md">
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple">
                                                                        <div class="product-color-item">
                                                                            <img src="assets/images/product/img-3.png" alt="" class="avatar-md">
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
                                                            <img src="assets/images/product/img-6.png" alt="" class="img-fluid mx-auto d-block">
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
<script src="<?= base_url('assets/libs/dropzone/min/dropzone.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js')?>"></script>
<script src="<?= base_url('assets/libs/table-edits/build/table-edits.min.js')?>"></script>

<script>
    $(function() {
        var pickers = {};
        $('.edits-product #table-1').editable({
            edit: function(values) {
                $(".edit i", this).removeClass('fa-pencil-alt').addClass('fa-save').attr('title', 'Save');
            },
            save: function(values) {
                $(".edit i", this).removeClass('fa-save').addClass('fa-pencil-alt').attr('title', 'Edit');
                if(this in pickers) {
                    pickers[this].destroy();
                    delete pickers[this];
                }
            },
            cancel: function(values) {
                $(".edit i", this).removeClass('fa-save').addClass('fa-pencil-alt').attr('title', 'Edit');
                if(this in pickers) {
                    pickers[this].destroy();
                    delete pickers[this];
                }
            }
        });
    });


</script>

</body>

</html>