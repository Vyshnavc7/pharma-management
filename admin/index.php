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
    <?php include('includes/mainheader.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="padding-left: 0px;">
      <!-- partial:partials/_sidebar.html -->
      <?php include('includes/leftbar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">

              <h4 class="font-weight-bold text-dark">Hi, welcome ADMIN</h4>
              <a href="logout.php">Logout(signed in as ADMIN)</a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card m-4">
              <div class="row flex-grow">
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
        <?php include('includes/footerr.php'); ?>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>

</html>