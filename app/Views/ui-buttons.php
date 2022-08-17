<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

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

                <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Default Buttons</h4>
                                        <p class="card-title-desc">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                                            <button type="button" class="btn btn-light waves-effect">Light</button>
                                            <button type="button" class="btn btn-success waves-effect waves-light">Success</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">Info</button>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">Warning</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Danger</button>
                                            <button type="button" class="btn btn-dark waves-effect waves-light">Dark</button>
                                            <button type="button" class="btn btn-link waves-effect">Link</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Outline Buttons</h4>
                                        <p class="card-title-desc">Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light">Primary</button>
                                            <button type="button" class="btn btn-outline-light waves-effect">Light</button>
                                            <button type="button" class="btn btn-outline-success waves-effect waves-light">Success</button>
                                            <button type="button" class="btn btn-outline-info waves-effect waves-light">Info</button>
                                            <button type="button" class="btn btn-outline-warning waves-effect waves-light">Warning</button>
                                            <button type="button" class="btn btn-outline-danger waves-effect waves-light">Danger</button>
                                            <button type="button" class="btn btn-outline-dark waves-effect waves-light">Dark</button>
                                            <button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Rounded Buttons</h4>
                                        <p class="card-title-desc">Use class <code>.btn-rounded</code> for button round border.</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Primary</button>
                                            <button type="button" class="btn btn-light btn-rounded waves-effect">Light</button>
                                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Success</button>
                                            <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                                            <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light">Warning</button>
                                            <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Danger</button>
                                            <button type="button" class="btn btn-dark btn-rounded waves-effect waves-light">Dark</button>
                                            <button type="button" class="btn btn-link btn-rounded waves-effect">Link</button>
                                            <button type="button" class="btn btn-secondary btn-rounded waves-effect waves-light">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Soft Background Buttons</h4>
                                        <p class="card-title-desc">Add <code>.btn-soft-*</code> class with <code>.btn-*</code> color button for a Soft background buttons.</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary btn-soft-primary waves-effect waves-light">Primary</button>
                                            <button type="button" class="btn btn-success btn-soft-success waves-effect waves-light">Success</button>
                                            <button type="button" class="btn btn-info btn-soft-info waves-effect waves-light">Info</button>
                                            <button type="button" class="btn btn-warning btn-soft-warning waves-effect waves-light">Warning</button>
                                            <button type="button" class="btn btn-danger btn-soft-danger waves-effect waves-light">Danger</button>
                                            <button type="button" class="btn btn-dark btn-soft-dark waves-effect waves-light">Dark</button>
                                            <button type="button" class="btn btn-secondary btn-soft-secondary waves-effect waves-light">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Buttons with Icon</h4>
                                        <p class="card-title-desc">Add icon in button.</p>

                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                                Primary <i class="uil uil-arrow-right ms-2"></i> 
                                            </button>
                                            <button type="button" class="btn btn-success waves-effect waves-light">
                                                <i class="uil uil-check me-2"></i> Success
                                            </button>
                                            <button type="button" class="btn btn-warning waves-effect waves-light">
                                                <i class="uil uil-exclamation-triangle me-2"></i> Warning
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                <i class="uil uil-exclamation-octagon me-2"></i> Danger
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Buttons Sizes</h4>
                                        <p class="card-title-desc">Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.
                                        </p>
        
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Large button</button>
                                            <button type="button" class="btn btn-light btn-lg waves-effect waves-light">Large button</button>
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Small button</button>
                                            <button type="button" class="btn btn-light btn-sm waves-effect waves-light">Small button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Buttons Width</h4>
                                        <p class="card-title-desc">Add <code>.w-xs</code>, <code>.w-sm</code>, <code>.w-md</code> and <code> .w-lg</code> class for additional buttons width.
                                        </p>
        
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary w-xs waves-effect waves-light">Xs</button>
                                            <button type="button" class="btn btn-danger w-sm waves-effect waves-light">Small</button>
                                            <button type="button" class="btn btn-warning w-md waves-effect waves-light">Medium</button>
                                            <button type="button" class="btn btn-success w-lg waves-effect waves-light">Large</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Button Tags</h4>
                                        <p class="card-title-desc">The <code class="highlighter-rouge">.btn</code>
                                            classes are designed to be used with the <code
                                                    class="highlighter-rouge">&lt;button&gt;</code> element.
                                            However, you can also use these classes on <code
                                                    class="highlighter-rouge">&lt;a&gt;</code> or <code
                                                    class="highlighter-rouge">&lt;input&gt;</code> elements (though
                                            some browsers may apply a slightly different rendering).</p>
        
                                        <div class="d-flex flex-wrap gap-2">
                                            <a class="btn btn-primary waves-effect waves-light" href="#" role="button">Link</a>
                                            <button class="btn btn-success waves-effect waves-light" type="submit">Button</button>
                                            <input class="btn btn-info" type="button" value="Input">
                                            <input class="btn btn-danger" type="submit" value="Submit">
                                            <input class="btn btn-warning" type="reset" value="Reset">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Toggle States</h4>
                                        <p class="card-title-desc">Add <code class="highlighter-rouge">data-bs-toggle="button"</code>
                                            to toggle a button’s <code class="highlighter-rouge">active</code>
                                            state. If you’re pre-toggling a button, you must manually add the <code
                                                    class="highlighter-rouge">.active</code> class
                                            <strong>and</strong> <code
                                                    class="highlighter-rouge">aria-pressed="true"</code> to the
                                            <code class="highlighter-rouge">&lt;button&gt;</code>.
                                        </p>
        
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="button" aria-pressed="false">
                                                Single toggle
                                            </button>
            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Block Buttons</h4>
                                        <p class="card-title-desc">Create block level buttons—those that
                                            span the full width of a parent—by adding <code
                                                    class="highlighter-rouge"> gap-2</code>.</p>
        
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary btn-lg waves-effect waves-light mb-1">Block level button</button>
                                            <button type="button" class="btn btn-light btn-sm waves-effect waves-light">Block level button</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Checkbox & Radio Buttons</h4>
                                        <p class="card-title-desc">Bootstrap’s <code
                                                class="highlighter-rouge">.button</code> styles can be applied to
                                            other elements, such as <code class="highlighter-rouge">
                                                &lt;label&gt;</code>s, to provide checkbox or radio style button
                                            toggling. Add <code
                                                    class="highlighter-rouge">data-bs-toggle="buttons"</code> to a
                                            <code class="highlighter-rouge">.btn-group</code> containing those
                                            modified buttons to enable toggling in their respective styles.</p>

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" checked>
                                                    <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>
                                                  
                                                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                    <label class="btn btn-primary" for="btncheck2">Checkbox 2</label>
                                                  
                                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                    <label class="btn btn-primary" for="btncheck3">Checkbox 3</label>
                                                  </div>
                                            </div>


                                            <div class="col-xl-6">
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                    <label class="btn btn-light" for="btnradio1">Radio 1</label>
                                                  
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                    <label class="btn btn-light" for="btnradio2">Radio 2</label>
                                                  
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                                    <label class="btn btn-light" for="btnradio3">Radio 3</label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                    
                                        <h4 class="card-title">Button Group</h4>
                                        <p class="card-title-desc">Wrap a series of buttons with <code class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code>.</p>
                                    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex flex-wrap gap-2">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-primary">Left</button>
                                                        <button type="button" class="btn btn-primary">Middle</button>
                                                        <button type="button" class="btn btn-primary">Right</button>
                                                    </div>
                                    
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="javascript:void(0);" class="btn btn-outline-primary active" aria-current="page">Left</a>
                                                        <a href="javascript:void(0);" class="btn btn-outline-primary">Middle</a>
                                                        <a href="javascript:void(0);" class="btn btn-outline-primary">Right</a>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="col-md-6">
                                                <div class="d-flex flex-wrap gap-3 mt-4 mt-md-0">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-light"><i class="bx bx-menu-alt-right"></i></button>
                                                        <button type="button" class="btn btn-light"><i class="bx bx-menu"></i></button>
                                                        <button type="button" class="btn btn-light"><i class="bx bx-menu-alt-left"></i></button>
                                                    </div>
                                    
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-outline-secondary"><i
                                                                class="bx bx-menu-alt-right"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bx-menu"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary"><i class="bx bx-menu-alt-left"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Button Toolbar</h4>
                                        <p class="card-title-desc">Combine sets of button groups into
                                            button toolbars for more complex components. Use utility classes as
                                            needed to space out groups, buttons, and more.</p>
        
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-light">1</button>
                                                <button type="button" class="btn btn-light">2</button>
                                                <button type="button" class="btn btn-light">3</button>
                                                <button type="button" class="btn btn-light">4</button>
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-light">5</button>
                                                <button type="button" class="btn btn-light">6</button>
                                                <button type="button" class="btn btn-light">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-light">8</button>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Button Group Sizing</h4>
                                        <p class="card-title-desc">Instead of applying button sizing
                                            classes to every button in a group, just add <code
                                                    class="highlighter-rouge">.btn-group-*</code> to each <code
                                                    class="highlighter-rouge">.btn-group</code>, including each one
                                            when nesting multiple groups.</p>
        
                                        <div class="d-flex flex-wrap gap-3 align-items-center">
                                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-primary">Left</button>
                                                <button type="button" class="btn btn-primary">Middle</button>
                                                <button type="button" class="btn btn-primary">Right</button>
                                            </div>
            
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-light">Left</button>
                                                <button type="button" class="btn btn-light">Middle</button>
                                                <button type="button" class="btn btn-light">Right</button>
                                            </div>
            
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-danger">Left</button>
                                                <button type="button" class="btn btn-danger">Middle</button>
                                                <button type="button" class="btn btn-danger">Right</button>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3 align-items-center mt-3">
                                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-primary">Left</button>
                                                <button type="button" class="btn btn-outline-primary">Middle</button>
                                                <button type="button" class="btn btn-outline-primary">Right</button>
                                            </div>
            
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-dark">Left</button>
                                                <button type="button" class="btn btn-outline-dark">Middle</button>
                                                <button type="button" class="btn btn-outline-dark">Right</button>
                                            </div>
            
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-danger">Left</button>
                                                <button type="button" class="btn btn-outline-danger">Middle</button>
                                                <button type="button" class="btn btn-outline-danger">Right</button>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vertical Variation</h4>
                                        <p class="card-title-desc">Make a set of buttons appear vertically
                                            stacked rather than horizontally. Split button dropdowns are not
                                            supported here.</p>
        
                                        <div class="d-flex flex-wrap gap-3 align-items-center">
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-light">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-light dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-light">Button</button>
                                            </div>
                                        
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
                                                <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                                                <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                                                <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                                                <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<script src="assets/js/app.js"></script>

</body>

</html>