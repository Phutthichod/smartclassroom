<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div><br><br>
        <div class="sidebar-brand-text ">SMART<sup>CLASSROOM</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="../index.php">
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
    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class='material-icons '>person</i>
            <span>ผู้ใช้งาน</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">การจัดการผู้ใช้งาน:</h6>
                <a class="collapse-item " href="../users/userlist.php">รายชื่อผู้ใช้</a>
                <a class="collapse-item" href="../users/userposition.php">ตำแหน่ง</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#calendarnav" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class='material-icons'>home</i>
            <span>ปฏิทิน</span>
        </a>
        <div id="calendarnav" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">การจัดการห้อง:</h6>
                <a class="collapse-item " href="#">ปฏิทินวันหยุด</a>
                <a class="collapse-item active" href='edu_calendar.php'>ปฏิทินปีการศึกษา</a>
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
                <a class="collapse-item " href="../room/room.php">ห้อง</a>
                <a class="collapse-item" href='../room/roomtype.php'>ชนิดห้อง</a>
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
                <a class="collapse-item " href='../tools/tool.php'>อุปกรณ์</a>
                <a class="collapse-item" href='../tools/tooltype.php'>ชนิดอุปกรณ์</a>
            </div>
        </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subject" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class='material-icons'>import_contacts</i>
            <span>รายวิชา</span>
        </a>
        <div id="subject" class="collapse " aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">การจัดการวิชา:</h6>
                <a class="collapse-item " href='../subject/course.php'>หลักสูตร</a>
                <a class="collapse-item " href='../subject/subject.php'>รายวิชา</a>
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