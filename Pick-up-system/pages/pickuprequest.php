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
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">My Pick up Address</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputUserName">Country</label>
                                            <select name="countryFrom" id="countryfrom" class="custom-select">
                                                <option value="default" selected>Choose Country</option>
                                                <option value="Guatemala">Guatemala</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">City</label>
                                            <select name="cityFrom" id="cityFrom" class="custom-select">
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Sacatepequez">Sacatepequez</option>
                                                <option value="Quetzaltenango">Quetzaltenango</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Province</label>
                                            <select name="provinceFrom" id="provinceFrom" class="custom-select">
                                                <option value="" selected>Find your province</option>
                                                <option value=""> Province1</option>
                                                <option value=""> Province2</option>
                                                <option value=""> Province3</option>
                                                <option value=""> Province4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Village</label>
                                            <select name="villageFrom" id="villageFrom" class="custom-select">
                                                <option value="" selected>Find your Village</option>
                                                <option value="">Village</option>
                                                <option value="">Village</option>
                                                <option value="">Village</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class="col-sm-6 col-lg-12">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Save</button>
                                                    <button class="btn btn-space btn-secondary">Clear</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->

                        <!-- basic form  2-->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">My Package Info</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform2" data-parsley-validate="">
                                        <div class="form-group">
                                                <label for="inputUserName">Number of Packages</label>
                                                <input id="bags" type="text" name="bags"  required="" placeholder="Number of bags,boxes,packages" autocomplete="off" class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                                <label for="inputUserName">Estimated Weight</label>
                                                <input id="weight" type="text" name="weight"  required="" placeholder="kg" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                               <div class="row">
                                                   <div class="col-4">
                                                   <label for="inputUserName">Estimated Long</label>
                                                    <input id="width" type="text" name="width"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                   </div>

                                                   <div class="col-4">
                                                   <label for="inputUserName">Estimated High</label>
                                                    <input id="height" type="text" name="height"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                   </div>

                                                   <div class="col-4">
                                                   <label for="inputUserName">Estimated Thick</label>
                                                    <input id="thick" type="text" name="thick"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                   </div>

                                               </div>
                                        </div>

                                        <h5 class="card-header">My Contact</h5>

                                        <div class="form-group">
                                                <label for="inputUserName">Name</label>
                                                <input id="contactName" type="text" name="contactName"  required="" placeholder="Contact Person" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                                <label for="inputUserName">Contact Phone </label>
                                                <input id="contactPhone" type="text" name="contactPhone"  required="" placeholder="phone" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                                <label for="inputUserName">Contact Email </label>
                                                <input id="contactEmail" type="text" name="contactEmail"  required="" placeholder="Email" autocomplete="off" class="form-control">
                                        </div>

                                        <div class="form-group">
                                                <label for="inputUserName"> Prefered date and time to pick up </label>
                                              <div class="row">

                                                    <div class="col-6">
                                                        <label for="inputUserName">Day</label>
                                                        <input id="width" type="date" name="width"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                    </div>

                                                    <div class="col-6">
                                                        <label for="inputUserName">Estimated High</label>
                                                         <input id="height" type="time" name="height"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                    </div>

                                                    <!-- <div class="col-4">
                                                            <label for="inputUserName">Estimated Thick</label>
                                                            <input id="thick" type="text" name="thick"  required="" placeholder="cm" autocomplete="off" class="form-control">

                                                    </div> -->

                                              </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class="col-12 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Request Pickup</button>
                                                    <button class="btn btn-space btn-secondary">Clear</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form 2 -->
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