<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= lang('Files.Menu') ?></li>

                <li>
                    <a href="/">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('product') ?>">
                        <i class="fas fa-store"></i>
                        <span>Sản Phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span><?= lang('Files.Layouts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Vertical') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="<?= base_url('layouts-dark-sidebar') ?>"><?= lang('Files.Dark Sidebar') ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Horizontal') ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="<?= base_url('layouts-horizontal') ?>"><?= lang('Files.Horizontal') ?></a></li>
                                <li><a href="<?= base_url('layouts-hori-topbar-dark') ?>"><?= lang('Files.Dark Topbar') ?></a></li>
                                <li><a href="<?= base_url('layouts-hori-boxed-width') ?>"><?= lang('Files.Boxed Width') ?></a></li>
                                <li><a href="<?= base_url('layouts-hori-preloader') ?>"><?= lang('Files.Preloader') ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Apps') ?></li>

                <li>
                    <a href="<?= base_url('calendar') ?>" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span><?= lang('Files.Calendar') ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('chat') ?>" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span class="badge rounded-pill bg-warning float-end"><?= lang('Files.New') ?></span>
                        <span><?= lang('Files.Chat') ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span><?= lang('Files.Ecommerce') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('ecommerce-products') ?>"><?= lang('Files.Products') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-product-detail') ?>"><?= lang('Files.Product Detail') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-orders') ?>"><?= lang('Files.Orders') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-customers') ?>"><?= lang('Files.Customers') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-cart') ?>"><?= lang('Files.Cart') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-checkout') ?>"><?= lang('Files.Checkout') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-shops') ?>"><?= lang('Files.Shops') ?></a></li>
                        <li><a href="<?= base_url('ecommerce-add-product') ?>"><?= lang('Files.Add Product') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-envelope"></i>
                        <span><?= lang('Files.Email') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('email-inbox') ?>"><?= lang('Files.Inbox') ?></a></li>
                        <li><a href="<?= base_url('email-read') ?>"><?= lang('Files.Read Email') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-invoice"></i>
                        <span><?= lang('Files.Invoices') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('invoices-list') ?>"><?= lang('Files.Invoice List') ?></a></li>
                        <li><a href="<?= base_url('invoices-detail') ?>"><?= lang('Files.Invoice Detail') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book-alt"></i>
                        <span><?= lang('Files.Contacts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('contacts-grid') ?>"><?= lang('Files.User Grid') ?></a></li>
                        <li><a href="<?= base_url('contacts-list') ?>"><?= lang('Files.User List') ?></a></li>
                        <li><a href="<?= base_url('contacts-profile') ?>"><?= lang('Files.Profile') ?></a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Pages') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span><?= lang('Files.Authentication') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('auth-login') ?>"><?= lang('Files.Login') ?></a></li>
                        <li><a href="<?= base_url('auth-register') ?>"><?= lang('Files.Register') ?></a></li>
                        <li><a href="<?= base_url('auth-recoverpw') ?>"><?= lang('Files.Recover Password') ?></a></li>
                        <li><a href="<?= base_url('auth-lock-screen') ?>"><?= lang('Files.Lock Screen') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-alt"></i>
                        <span><?= lang('Files.Utility') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('pages-starter')?>"><?= lang('Files.Starter Page') ?></a></li>
                        <li><a href="<?= base_url('pages-maintenance') ?>"><?= lang('Files.Maintenance') ?></a></li>
                        <li><a href="<?= base_url('pages-comingsoon') ?>"><?= lang('Files.Coming Soon') ?></a></li>
                        <li><a href="<?= base_url('pages-timeline') ?>"><?= lang('Files.Timeline') ?></a></li>
                        <li><a href="<?= base_url('pages-faqs') ?>"><?= lang('Files.FAQs') ?></a></li>
                        <li><a href="<?= base_url('pages-pricing') ?>"><?= lang('Files.Pricing') ?></a></li>
                        <li><a href="<?= base_url('pages-404') ?>"><?= lang('Files.Error') ?> 404</a></li>
                        <li><a href="<?= base_url('pages-500') ?>"><?= lang('Files.Error') ?> 500</a></li>
                    </ul>
                </li>

                <li class="menu-title"><?= lang('Files.Components') ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span><?= lang('Files.UI Elements') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('ui-alerts')?>"><?= lang('Files.Alerts') ?></a></li>
                        <li><a href="<?= base_url('ui-buttons')?>"><?= lang('Files.Buttons') ?></a></li>
                        <li><a href="<?= base_url('ui-cards')?>"><?= lang('Files.Cards') ?></a></li>
                        <li><a href="<?= base_url('ui-carousel')?>"><?= lang('Files.Carousel') ?></a></li>
                        <li><a href="<?= base_url('ui-dropdowns')?>"><?= lang('Files.Dropdowns') ?></a></li>
                        <li><a href="<?= base_url('ui-grid')?>"><?= lang('Files.Grid') ?></a></li>
                        <li><a href="<?= base_url('ui-images')?>"><?= lang('Files.Images') ?></a></li>
                        <li><a href="<?= base_url('ui-lightbox')?>"><?= lang('Files.Lightbox') ?></a></li>
                        <li><a href="<?= base_url('ui-modals')?>"><?= lang('Files.Modals') ?></a></li>
                        <li><a href="<?= base_url('ui-offcanvas')?>"><?= lang('Files.Offcanvas') ?></a></li>
                        <li><a href="<?= base_url('ui-rangeslider')?>"><?= lang('Files.Range Slider') ?></a></li>
                        <li><a href="<?= base_url('ui-session-timeout')?>"><?= lang('Files.Session Timeout') ?></a></li>
                        <li><a href="<?= base_url('ui-progressbars')?>"><?= lang('Files.Progress Bars') ?></a></li>
                        <li><a href="<?= base_url('ui-placeholders')?>"><?= lang('Files.Placeholders') ?></a></li>
                        <li><a href="<?= base_url('ui-sweet-alert')?>"><?= lang('Files.Sweet-Alert') ?></a></li>
                        <li><a href="<?= base_url('ui-tabs-accordions')?>"><?= lang('Files.Tabs & Accordions') ?></a></li>
                        <li><a href="<?= base_url('ui-typography')?>"><?= lang('Files.Typography') ?></a></li>
                        <li><a href="<?= base_url('ui-toasts')?>"><?= lang('Files.Toasts') ?></a></li>
                        <li><a href="<?= base_url('ui-video')?>"><?= lang('Files.Video') ?></a></li>
                        <li><a href="<?= base_url('ui-general')?>"><?= lang('Files.General') ?></a></li>
                        <li><a href="<?= base_url('ui-colors')?>"><?= lang('Files.Colors') ?></a></li>
                        <li><a href="<?= base_url('ui-rating')?>"><?= lang('Files.Rating') ?></a></li>
                        <li><a href="<?= base_url('ui-notifications')?>"><?= lang('Files.Notifications') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="uil-shutter-alt"></i>
                        <span class="badge rounded-pill bg-info float-end">6</span>
                        <span><?= lang('Files.Forms') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('form-elements')?>"><?= lang('Files.Basic Elements') ?></a></li>
                        <li><a href="<?= base_url('form-validation')?>"><?= lang('Files.Validation') ?></a></li>
                        <li><a href="<?= base_url('form-advanced')?>"><?= lang('Files.Advanced Plugins') ?></a></li>
                        <li><a href="<?= base_url('form-editors')?>"><?= lang('Files.Editors') ?></a></li>
                        <li><a href="<?= base_url('form-uploads')?>"><?= lang('Files.File Upload') ?></a></li>
                        <li><a href="<?= base_url('form-xeditable')?>"><?= lang('Files.Xeditable') ?></a></li>
                        <li><a href="<?= base_url('form-repeater')?>"><?= lang('Files.Repeater') ?></a></li>
                        <li><a href="<?= base_url('form-wizard')?>"><?= lang('Files.Wizard') ?></a></li>
                        <li><a href="<?= base_url('form-mask')?>"><?= lang('Files.Mask') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-list-ul"></i>
                        <span><?= lang('Files.Tables') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('tables-basic')?>"><?= lang('Files.Bootstrap Basic') ?></a></li>
                        <li><a href="<?= base_url('tables-datatable')?>"><?= lang('Files.Datatables') ?></a></li>
                        <li><a href="<?= base_url('tables-responsive')?>"><?= lang('Files.Responsive') ?></a></li>
                        <li><a href="<?= base_url('tables-editable')?>"><?= lang('Files.Editable') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-chart"></i>
                        <span><?= lang('Files.Charts') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('charts-apex')?>"><?= lang('Files.Apex') ?></a></li>
                        <li><a href="<?= base_url('charts-chartjs')?>"><?= lang('Files.Chartjs') ?></a></li>
                        <li><a href="<?= base_url('charts-flot')?>"><?= lang('Files.Flot') ?></a></li>
                        <li><a href="<?= base_url('charts-knob')?>"><?= lang('Files.Jquery Knob') ?></a></li>
                        <li><a href="<?= base_url('charts-sparkline')?>"><?= lang('Files.Sparkline') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-streering"></i>
                        <span><?= lang('Files.Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('icons-unicons')?>"><?= lang('Files.Unicons') ?></a></li>
                        <li><a href="<?= base_url('icons-boxicons')?>"><?= lang('Files.Boxicons') ?></a></li>
                        <li><a href="<?= base_url('icons-materialdesign')?>"><?= lang('Files.Material Design') ?></a></li>
                        <li><a href="<?= base_url('icons-dripicons')?>"><?= lang('Files.Dripicons') ?></a></li>
                        <li><a href="<?= base_url('icons-fontawesome')?>"><?= lang('Files.Font Awesome') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-location-point"></i>
                        <span><?= lang('Files.Maps') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('maps-google')?>"><?= lang('Files.Google') ?></a></li>
                        <li><a href="<?= base_url('maps-vector')?>"><?= lang('Files.Vector') ?></a></li>
                        <li><a href="<?= base_url('maps-leaflet')?>"><?= lang('Files.Leaflet') ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-share-alt"></i>
                        <span><?= lang('Files.Multi Level') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);"><?= lang('Files.Level') ?> 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow"><?= lang('Files.Level') ?> 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"><?= lang('Files.Level') ?> 2.1</a></li>
                                <li><a href="javascript: void(0);"><?= lang('Files.Level') ?> 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->