<?php

    require_once('header.php');
    require_once('sidebar.php');

?>

       


     <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <!--
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Blank Pageheader </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Manual Pick Up Registration</h5>
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Acount Name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Type something" class="form-control">
                                            </div>
                                        </div>                 
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Weight on arrival</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="Min 6 chars." class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Number of received Bags</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="Max 6 chars." class="form-control">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Length</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">                      
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">UTZ Pick Up ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required=""  placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Courrier Pick Up ID</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Value</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input required="" type="number" min="6" max="100" placeholder="Number between 6 - 100" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Processed by</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-pattern="" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Timestamp</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-pattern="" placeholder="dd:hh:mm:ss" class="form-control" disabled> 
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Equal To</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input id="pass2" type="password" required="" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="col-sm-4 col-lg-3">
                                                <input type="password" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password" class="form-control">
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-sm-right">Min check</label>
                                            <div class="col-sm-6">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck1" name="ck1" type="checkbox" data-parsley-multiple="groups" value="bar" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Option 1</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck2" name="ck2" type="checkbox" data-parsley-multiple="groups" value="bar2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Option 2</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck3" name="ck3" type="checkbox" data-parsley-multiple="groups" value="bar3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">Option 3</span>
                                                    </label>
                                                    <div id="error-container1"></div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Pick Up Type</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <select name="pickupType" id="pickupType" class="form-control">
                                                    <option value="credit">Credit</option>
                                                    <option value="paid">Paid</option>

                                                </select>
                                            </div>

                                        </div>
 
                                       
                                       
                                       
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Days on transit</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="number" type="number" required="" placeholder="Enter only numbers" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Total</label>
                                            <div class="input-group mb-3 col-12 col-sm-8 col-lg-6">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input type="text" class="form-control">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Upload Picture</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input  type="file" required=""  class="form-control">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                </div>
            </div>
        <?php require_once('footer.php') ?>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>