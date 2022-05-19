<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pharma Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div style="background-color: #3b3a3a;" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a style="color:  white;" class="navbar-brand brand-logo" href="#">PHARMA</a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <strong>
          <p class="mb-0 font-weight-normal float-left dropdown-header"> ADMIN DASHBOARD</p>
        </strong>


        <ul class="navbar-nav navbar-nav-right">


          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>

            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                <i class="icon-head"></i> Profile
              </a>
              <a href="logout.php" class="dropdown-item preview-item">
                <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav style="background-color: #3b3a3a;" class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="images/faces/pharm1.png">
          </div>
          <div class="user-name">
            Pharma Management
          </div>
          <div class="user-designation">
            Admin
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="index.php">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-add.php">Add New Medicine</a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-view.php">Manage Inventory</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Suppliers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="supplier-add.php">Add New Supplier</a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="supplier-view.php">Manage Suppliers</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Stock Purchase</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Purchase</a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Purchase</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Employees</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Employees</a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Employees</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Customers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/buttons.html">Add New Customers</a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/ui-features/typography.html">Manage Customers</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="sales-view.php">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Sales Invoice Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="salesitems-view.php">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Sold Products Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="pos1.php">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Add New Sale</span>
            </a>
          </li>

          <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/login.html">Medicine:Low stock </a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/login-2.html"> Medicine Expiry </a></li>
                <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="pages/samples/register.html"> Transaction Report </a></li>

              </ul>
            </div>

          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>

            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">New Sale</h4>
                      <a href="pos1.php" title="Add New Sale">
                        <img style="padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" src="images/meds/carticon1.png" alt="Add New Sale">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Medicine Inventory</h4>
                      <a href="inventory-view.php" title="View Inventory">
                        <img src="images/meds/inventory.png" style="    padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" alt="Inventory">
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4 ">
              <div class="row flex-grow ">
                <div class="col-sm-12 grid-margin stretch-card ">
                  <div class="card ">
                    <div class="card-body">
                      <h4 class="card-title">Manage Employees</h4>
                      <a href="employee-view.php" title="View Employees">
                        <img src="images/meds/emp.png" style="    padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" alt="Employees List">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Sales Report</h4>
                      <a href="salesreport.php" title="View Transactions">
                        <img src="images/meds/moneyicon.png" style="    padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" alt="Transactions List">
                      </a>
                    </div>
                  </div>
                </div>
                

              </div>
            </div>

            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4 ">
              <div class="row flex-grow ">
                <div class="col-lg-12 grid-margin stretch-card ">
                  <div class="card ">
                    <div class="card-body">
                      <h4 class="card-title">Low Stock Alert</h4>
                      <a href="stockreport.php" title="View Employees">
                        <img src="images/meds/alert.png" style="    padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" alt="Employees List">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Sales Report</h4>
                      <a href="salesreport.php" title="View Transactions">
                        <img src="images/meds/moneyicon.png" style="    padding-left: 52px;width: 65%;height: 80%;padding-top: 29px;" alt="Transactions List">
                      </a>
                    </div>
                  </div>
                </div> -->
                

              </div>
            </div>

          </div>


          <!-- <div class="row">
            <div class="col-xl-9 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Top Sellers</h4>
                  <div class="table-responsive mt-3">
                    <table class="table table-header-bg">
                      <thead>
                        <tr>
                          <th>
                            Country
                          </th>
                          <th>
                            Revenue
                          </th>
                          <th>
                            Vs Last Month
                          </th>
                          <th>
                            Goal Reached
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-us mr-2" title="us" id="us"></i> United States
                          </td>
                          <td>
                            $911,200
                          </td>
                          <td>
                            <div class="text-success"><i class="icon-arrow-up mr-2"></i>+60%</div>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                25%
                              </div>
                            </div>
                          </td>

                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-at mr-2" title="us" id="at"></i> Austria
                          </td>
                          <td>
                            $821,600
                          </td>
                          <td>
                            <div class="text-danger"><i class="icon-arrow-down mr-2"></i>-40%</div>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                50%
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <i class="flag-icon flag-icon-fr mr-2" title="us" id="fr"></i> France
                          </td>
                          <td>
                            $323,700
                          </td>
                          <td>
                            <div class="text-success"><i class="icon-arrow-up mr-2"></i>+40%</div>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                10%
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <i class="flag-icon flag-icon-de mr-2" title="us" id="de"></i> Germany
                          </td>
                          <td>
                            $833,205
                          </td>
                          <td>
                            <div class="text-danger"><i class="icon-arrow-down mr-2"></i>-80%</div>
                          </td>
                          <td>
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                70%
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="pb-0">
                            <i class="flag-icon flag-icon-ae mr-2" title="ae" id="ae"></i> united arab emirates
                          </td>
                          <td class="pb-0">
                            $232,243
                          </td>
                          <td class="pb-0">
                            <div class="text-success"><i class="icon-arrow-up mr-2"></i>+80%</div>
                          </td>
                          <td class="pb-0">
                            <div class="row">
                              <div class="col-sm-10">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                0%
                              </div>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Overall rating</h4>
                  <div class="d-flex">
                    <div>
                      <h4 class="text-dark font-weight-bold mb-2 mr-2">4.3</h4>
                    </div>
                    <div>
                      <select id="over-all-rating" name="rating" autocomplete="off">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                  <p class="mb-4">Based on 186 reviews</p>
                  <div class="row">
                    <div class="col-sm-2 pr-0">
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">5</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 pl-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="progress progress-lg mt-1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          80%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-2 pr-0">
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">4</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 pl-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="progress progress-lg mt-1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          45%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-2 pr-0">
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">3</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 pl-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="progress progress-lg mt-1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          30%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-2 pr-0">
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">2</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 pl-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="progress progress-lg mt-1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          8%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-2 pr-0">
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">5</div>
                        </div>
                        <div>
                          <i class="fa fa-star text-warning"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-9 pl-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <div class="progress progress-lg mt-1">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 1%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-2 p-lg-0">
                          1%
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <p class="mb-2 mt-3 mb-3 text-dark font-weight-bold">Rating by category</p>
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">4.3</div>
                        </div>
                        <div class="mr-2">
                          <i class="fa fa-star text-warning"></i>
                        </div>
                        <div>
                          <p>Work/Management</p>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div>
                          <div class="text-dark font-weight-bold mb-2 mr-2">3.5</div>
                        </div>
                        <div class="mr-2">
                          <i class="fa fa-star text-warning"></i>
                        </div>
                        <div>
                          <p>Salary/Culture</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between ">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Pharma
              2022</span>

          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>