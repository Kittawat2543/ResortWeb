<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-new fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <ul>
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="../../assets/pic/luk.png" class="img-fluid" style="width: 2000px;"></a>
                    </div>
                </li>
            </ul>

            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="waves-effect" href="../dashboard/index.php"> <i class="fad fa-cash-register"
                                style="margin-right: 30px; font-size:25px;"></i>Dashboard</a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r" href="../rooms/index.php"><i
                                class="fad fa-box-full" style="font-size:25px; margin-right:20px;"></i> Booking Room</a>
                    </li>


                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fad fa-file-invoice"
                                style="margin-right: 30px; font-size:30px; padding-right:-4px;"></i> Receipt
                            <i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="../bill/index.php" class="waves-effect">Bill</a>
                                </li>
                                <li><a href="../transactions/" class="waves-effect">Transaction</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fad fa-user-alt mr-3"
                                style="font-size:25px; margin-right:20px; padding-right:5px;"></i> Management
                            <i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul class="list-unstyled">
                                <li><a href="../employee/index.php" class="waves-effect">Employee</a>
                                </li>
                                <li><a href="../employee/add.php" class="waves-effect">Add Employee</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn ml-5">
            <h1>FN Resort Management</h1>
        </div>
        <ul class="nav navbar-n av nav-flex-icons ml-auto">
            <!-- <li class="nav-item">
                <a class="nav-link"><i class="fas fa-comments"></i> <span
                        class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="../../logout.php"><i class="fad fa-sign-out-alt"></i> <span
                        class="clearfix d-none d-sm-inline-block">Logout</span></a>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->