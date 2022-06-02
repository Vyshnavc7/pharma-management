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
                <span class="menu-title">MEDICINE</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-add.php">Add New Medicine</a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="inventory-view.php">Manage Medicine</a></li>
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
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="purchase-add.php">Add New Purchase</a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="purchase-view.php">Manage Purchase</a></li>
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
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="employee-add.php">Add New Employees</a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="employee-view.php">Manage Employees</a></li>
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
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="customer-add.php">Add Customers</a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="customer-view.php">Manage Customers</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="sales-view.php">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">Sales Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a style="border-top: solid;" class="nav-link" href="salesitems-view.php">
                <i class="icon-pie-graph menu-icon"></i>
                <span class="menu-title">Sold Products Details</span>
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
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="stockreport.php">Medicine:Low stock </a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="expiryreport.php"> Medicine Expiry </a></li>
                    <li class="nav-item"> <a style="border-top: inset;" class="nav-link" href="salesreport.php"> Transaction Report </a></li>

                </ul>
            </div>

        </li>
    </ul>
</nav>