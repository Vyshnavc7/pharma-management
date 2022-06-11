

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div style="background-color: #000000;" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a style="color:  white;" class="navbar-brand brand-logo" href="#">PHARMA</a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <strong>
            <a href="index.php">
                <p class="mb-0 font-weight-normal float-left dropdown-header"> CUSTOMER <strong> <?php echo $cname;?> | ID : <?php echo $cid1; ?> </strong> DASHBOARD</p>
            </a>
        </strong>
        
        <div style="width: 74%;" class="text-right">
            
            <?php echo "<a class='btn btn-link m-3' href=profile.php?cid=" . $cid1 . ">My Profile</a>"; ?>
            <a href="pos2.php"><button class="btn btn-link ">View orders</button></a>
        </div>




        <!-- <ul class="navbar-nav navbar-nav-right">


            <li class="nav-item dropdown d-flex mr-4 ">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="icon-cog"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
                    <a class="dropdown-item preview-item">
                        <i class="icon-head"></i> Profile
                    </a>
                    <a href="logout1.php" class="dropdown-item preview-item">
                        <i class="icon-inbox"></i> Logout
                    </a>
                </div>
            </li>

        </ul> -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>