<!DOCTYPE html>
<html>

<head>
    <!--############################### start header ############################### -->
    <div>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
        <!----fullcalendar src------->
        <link href='packages/core/main.css' rel='stylesheet' />
        <link href='packages/daygrid/main.css' rel='stylesheet' />
        <link href='packages/timegrid/main.css' rel='stylesheet' />
        <link href='packages/list/main.css' rel='stylesheet' />
        <script src='packages/core/main.js'></script>
        <script src='packages/interaction/main.js'></script>
        <script src='packages/daygrid/main.js'></script>
        <script src='packages/timegrid/main.js'></script>
        <script src='packages/list/main.js'></script>
        <!--------fullcalendar src-------------------->
        <!---momement.js----->
        <script src="js/moment.js"></script>
        <script src="js/momenttimezone.js"></script>
        <!---------------------vue swatch------------>
        <link rel="stylesheet" href="https://unpkg.com/vue-swatches/dist/vue-swatches.min.css">
        <script src="https://unpkg.com/vue-swatches"></script>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="css/customize.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- เสริม -->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </div>
    <!--############################### end header ############################### -->
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!--start Sidebar -->
        <!--############################### start Sidebar ############################### -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
                </div><br><br>
                <div class="sidebar-brand-text ">SMART<sup>CLASSROOM</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>หน้าแรก</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--  <div class="sidebar-heading">
                ผู้ใช้
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class='material-icons '>person</i>
                    <span>ผู้ใช้งาน</span>
                </a>
                <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการผู้ใช้งาน:</h6>
                        <a class="collapse-item " href="users/userlist.php">รายชื่อผู้ใช้</a>
                        <a class="collapse-item " href="users/userposition.php">ตำแหน่ง</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='material-icons'>date_range</i>
                    <span>ปฏิทิน</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการปฏิทิน:</h6>
                        <a class="collapse-item " href="">ปฏิทินวันหยุด</a>
                        <a class="collapse-item" href="calendar/edu_calendar.php">ปฏิทินปีการศึกษา</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#room" aria-expanded="true"
                    aria-controls="collapseUtilities">
                    <i class='material-icons'>home</i>
                    <span>ห้อง</span>
                </a>
                <div id="room" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการห้อง:</h6>
                        <a class="collapse-item " href="room/room.php">ห้อง</a>
                        <a class="collapse-item" href='room/roomtype.php'>ชนิดห้อง</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#acess" aria-expanded="true"
                    aria-controls="collapseUtilities">
                    <i class='material-icons'>create</i>
                    <span>อุปกรณ์</span>
                </a>
                <div id="acess" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการอุปกรณ์:</h6>
                        <a class="collapse-item " href='tools/tool.php'>อุปกรณ์</a>
                        <a class="collapse-item" href='tools/tooltype.php'>ชนิดอุปกรณ์</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subject"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='material-icons'>import_contacts</i>
                    <span>รายวิชา</span>
                </a>
                <div id="subject" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการวิชา:</h6>
                        <a class="collapse-item " href='subject/course.php'>หลักสูตร</a>
                        <a class="collapse-item" href='subject/subject.php'>รายวิชา</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - logout -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class='material-icons'>meeting_room</i>
                    <span>ออกจากระบบ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!--############################### end Sidebar ############################### -->
        <!--end Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: #dbe0ff6b;">
                <!--############################### start Topbar ############################### -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul>
                        <div class="text-left text-primary" style="padding-top:20px;">
                            <h5>ระบบบริหารจัดการห้องเรียนอัจฉริยะ</h5>
                        </div>
                    </ul>
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">น.ส. สวยเด่น เป็นสง่า<br><span
                                        style="color: tomato">Student</span></span>
                                <img class="img-profile rounded-circle" src="img/profile.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!--############################### end Topbar ############################### -->
                <!-- #################### start Content #################### -->
                <div class="container-fluid">
                    <div class="container">
                        <h1>ข่าวสาร </h1>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- #################### end Content #################### -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- ########### footer ########### -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- เสริม -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>

</html>