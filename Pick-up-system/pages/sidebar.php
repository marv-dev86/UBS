<?php 

echo '    

    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    Menu
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Ninja Dashboard </a>
                    <div id="submenu-1" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">New Pick Up</a>
                                <div id="submenu-1-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="manualPickup.php">Manual</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Scan</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pickuplist.php">Pick Up List</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="dashboard-sales.html">Sales</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                <div id="submenu-1-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-user-circle"></i>My UTZ Account</a>
                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="userprofile.php"> My Profile </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pickuprequest.php">Request a Pick Up</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="pages/carousel.html">Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/listgroup.html">List Group</a>
                            </li> -->
                            
                        </ul>
                    </div>
                </li>
               
               
                
            </ul>
        </div>
    </nav>
</div>
</div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
';


?>