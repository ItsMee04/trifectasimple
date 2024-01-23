<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="@if (request()->route()->uri == 'dashboard') active @endif">
                            <a href="/dashboard"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Master Data</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="
                            @if (request()->route()->uri == 'identitas' ||
                                    request()->route()->uri == 'profesi' ||
                                    request()->route()->uri == 'kontak' ||
                                    request()->route()->uri == 'kategori') active subdrop @endif">
                                <i data-feather="server"></i><span>Refrensi</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/identitas"
                                        class="@if (request()->route()->uri == 'identitas' || request()->route()->uri == 'edit-identitas/{id}') active @endif">Identitas</a></li>
                                <li><a href="/profesi"
                                        class="@if (request()->route()->uri == 'profesi' || request()->route()->uri == 'edit-profesi/{id}') active @endif">Profesi</a></li>
                                <li><a href="/kontak" class="@if (request()->route()->uri == 'kontak' || request()->route()->uri == 'edit-kontak/{id}') active @endif">Kontak</a>
                                </li>
                                <li><a href="/kategori"
                                        class="@if (request()->route()->uri == 'kategori' || request()->route()->uri == 'edit-kontak/{id}') active @endif">Kategori</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="
                            @if (request()->route()->uri == 'produk' ||
                                    request()->route()->uri == 'edit-produk/{id}' ||
                                    request()->route()->uri == 'produk-detail/{id}' ||
                                    request()->route()->uri == 'scanbarcode') active subdrop @endif"><i
                                    data-feather="box"></i><span>Produk Barang</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/produk" class="@if (request()->route()->uri == 'produk' ||
                                        request()->route()->uri == 'edit-produk/{id}' ||
                                        request()->route()->uri == 'produk-detail/{id}') active @endif">Produk
                                        Barang</a></li>
                                <li><a href="/scanbarcode" class="@if (request()->route()->uri == 'scanbarcode') active @endif">Scan
                                        Barcode</a></li>
                            </ul>
                        </li>
                        <li><a href="/suplier" class="@if (request()->route()->uri == 'suplier' || request()->route()->uri == 'edit-suplier/{id}') active @endif"><i
                                    data-feather="codepen"></i><span>Suplier</span></a></li>
                        <li><a href="/customer" class="@if (request()->route()->uri == 'customer' || request()->route()->uri == 'edit-customer/{id}') active @endif"><i
                                    data-feather="users"></i><span>Customer</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="
                            @if (request()->route()->uri == 'karyawan' ||
                                    request()->route()->uri == 'edit-karyawan/{id}' ||
                                    request()->route()->uri == 'users' ||
                                    request()->route()->uri == 'edit-users/{id}' ||
                                    request()->route()->uri == 'kontak' ||
                                    request()->route()->uri == 'edit-kontak/{id}') active subdrop @endif"><i
                                    data-feather="users"></i><span>Manage Users</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/karyawan"
                                        class="@if (request()->route()->uri == 'karyawan' || request()->route()->uri == 'edit-karyawan/{id}') active @endif">Karyawan </a></li>
                                <li><a href="/users" class="@if (request()->route()->uri == 'users') active @endif">Users
                                        Karyawan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i
                                    data-feather="shopping-cart"></i><span>Transaksi</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/cart-transaksi">Cart Transaksi</a></li>
                                <li><a href="transferlist.html">Data Transaksi</a></li>
                            </ul>
                        </li>
                        <li><a href="invoicereport.html"><i data-feather="file-text"></i><span>Invoices</span></a></li>
                        <li><a href="/pos"><i data-feather="hard-drive"></i><span>POS</a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Products</h6>
                    <ul>
                        <li><a href="productlist.html"><i data-feather="box"></i><span>Products</span></a></li>
                        <li><a href="addproduct.html"><i data-feather="plus-square"></i><span>Create Product</span></a>
                        </li>
                        <li><a href="categorylist.html"><i data-feather="codepen"></i><span>Category</span></a></li>
                        <li><a href="brandlist.html"><i data-feather="tag"></i><span>Brands</span></a></li>
                        <li><a href="subcategorylist.html"><i data-feather="speaker"></i><span>Sub Category</span></a>
                        </li>
                        <li><a href="barcode.html"><i data-feather="align-justify"></i><span>Print Barcode</span></a>
                        </li>
                        <li><a href="importproduct.html"><i data-feather="minimize-2"></i><span>Import
                                    Products</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li><a href="saleslist.html"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li><a href="invoicereport.html"><i data-feather="file-text"></i><span>Invoices</span></a></li>
                        <li><a href="salesreturnlists.html"><i data-feather="copy"></i><span>Sales Return</span></a>
                        </li>
                        <li><a href="quotationList.html"><i data-feather="save"></i><span>Quotation</span></a></li>
                        <li><a href="pos.html"><i data-feather="hard-drive"></i><span>POS</a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="shuffle"></i><span>Transfer</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist.html">Transfer List</a></li>
                                <li><a href="importtransfer.html">Import Transfer </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="corner-up-left"></i><span>Return</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="salesreturnlist.html">Sales Return</a></li>
                                <li><a href="purchasereturnlist.html">Purchase Return</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Purchases</h6>
                    <ul>
                        <li><a href="purchaselist.html"><i data-feather="shopping-bag"></i><span>Purchases</span></a>
                        </li>
                        <li><a href="importpurchase.html"><i data-feather="minimize-2"></i><span>Import
                                    Purchases</span></a></li>
                        <li><a href="purchaseorderreport.html"><i data-feather="file-minus"></i><span>Purchase
                                    Order</span></a></li>
                        <li><a href="purchasereturnlist.html"><i data-feather="refresh-cw"></i><span>Purchase
                                    Return</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-text"></i><span>Expense</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist.html">Expenses</a></li>
                                <li><a href="expensecategory.html">Expense Category</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li><a href="customerlist.html"><i data-feather="user"></i><span>Customers</span></a></li>
                        <li><a href="supplierlist.html"><i data-feather="users"></i><span>Suppliers</span></a></li>
                        <li><a href="userlist.html"><i data-feather="user-check"></i><span>Users</span></a></li>
                        <li><a href="storelist.html"><i data-feather="home"></i><span>Stores</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li><a href="salesreport.html"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a>
                        </li>
                        <li><a href="purchaseorderreport.html"><i data-feather="pie-chart"></i><span>Purchase
                                    report</span></a></li>
                        <li><a href="inventoryreport.html"><i data-feather="credit-card"></i><span>Inventory
                                    Report</span></a></li>
                        <li><a href="invoicereport.html"><i data-feather="file"></i><span>Invoice Report</span></a>
                        </li>
                        <li><a href="purchasereport.html"><i data-feather="bar-chart"></i><span>Purchase
                                    Report</span></a></li>
                        <li><a href="supplierreport.html"><i data-feather="database"></i><span>Supplier
                                    Report</span></a></li>
                        <li><a href="customerreport.html"><i data-feather="pie-chart"></i><span>Customer
                                    Report</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="users"></i><span>Manage Users</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newuser.html">New User </a></li>
                                <li><a href="userlists.html">Users List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i
                                    data-feather="shield"></i><span>Authentication</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="signin.html">Log in</a></li>
                                <li><a href="signup.html">Register</a></li>
                                <li><a href="forgetpassword.html">Forgot Password</a></li>
                                <li><a href="resetpassword.html">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error
                                    Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="countrieslist.html">Countries</a></li>
                                <li><a href="statelist.html">States</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blankpage.html"><i data-feather="file"></i><span>Blank Page</span> </a>
                        </li>
                        <li>
                            <a href="components.html"><i data-feather="pen-tool"></i><span>Components</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">UI Interface</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="layers"></i><span>Elements</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="ribbon.html">Ribbon</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="drag-drop.html">Drag & Drop</a></li>
                                <li><a href="rangeslider.html">Range Slider</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="toastr.html">Toastr</a></li>
                                <li><a href="text-editor.html">Text Editor</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="scrollbar.html">Scrollbar</a></li>
                                <li><a href="spinner.html">Spinner</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="lightbox.html">Lightbox</a></li>
                                <li><a href="stickynote.html">Sticky Note</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i><span>Charts</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="database"></i><span>Icons</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="edit"></i><span>Forms</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html">Form Mask </a></li>
                                <li><a href="form-validation.html">Form Validation </a></li>
                                <li><a href="form-select2.html">Form Select2 </a></li>
                                <li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="columns"></i><span>Tables</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="generalsettings.html">General Settings</a></li>
                                <li><a href="emailsettings.html">Email Settings</a></li>
                                <li><a href="paymentsettings.html">Payment Settings</a></li>
                                <li><a href="currencysettings.html">Currency Settings</a></li>
                                <li><a href="grouppermissions.html">Group Permissions</a></li>
                                <li><a href="taxrates.html">Tax Rates</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="signin.html"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
