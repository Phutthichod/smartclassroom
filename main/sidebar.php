<!--############################### start Sidebar ############################### -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Smart<sub>Classroom</sub></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-1">

    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-2' aria-expanded='true' aria-controls='link-2'>
            <i class='material-icons '>person</i>
            <span>การจัดการผู้ใช้</span>
        </a>
        <div id='link-2' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div id="accordionSidebar">
                    <a class='nav-link' href='../users/userlist.php'>รายชื่อผู้ใช้</a>
                    <a class='nav-link' href='../users/userposition.php'>ตำแหน่ง</a>
                </div>

            </div>
        </div>
    </li>
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-1' aria-expanded='true' aria-controls='link-1'>
            <i class='material-icons'>date_range</i>
            <span>การจัดการปฏิทิน</span>
        </a>
        <div id='link-1' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div id="accordionSidebar">
                    <a class='nav-link' href='holiday.php'>ปฏิทินวันหยุด</a>
                    <a class='nav-link' href='../calender/edu_calendar.php'>ปฏิทินปีการศึกษา</a>

                </div>

            </div>
        </div>
    </li>
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-5' aria-expanded='true' aria-controls='link-2'>
            <i class='material-icons'>home</i>
            <span>การจัดการห้อง</span>
        </a>
        <div id='link-5' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div id="accordionSidebar">
                    <a class='nav-link' href='../room/room.php'>ห้อง</a>
                    <a class='nav-link' href='../room/roomtype.php'>ชนิดห้อง</a>
                </div>

            </div>
        </div>
    </li>
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-3' aria-expanded='true' aria-controls='link-2'>
            <i class='material-icons'>create</i>
            <span>การจัดการอุปกรณ์</span>
        </a>
        <div id='link-3' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div id="accordionSidebar">
                    <a class='nav-link' href='../tools/tool.php'>อุปกรณ์</a>
                    <a class='nav-link' href='../tools/tooltype.php'>ชนิดอุปกรณ์</a>
                </div>

            </div>
        </div>
    </li>
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-4' aria-expanded='true' aria-controls='link-2'>
            <i class='material-icons'>import_contacts</i>
            <span>การจัดการรายวิชา</span>
        </a>
        <div id='link-4' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div id="accordionSidebar">
                    <a class='nav-link' href='../subject/course.php'>หลักสูตร</a>
                    <a class='nav-link' href='../subject/subject.php'>รายวิชา</a>
                </div>

            </div>
        </div>
    </li>
    <li class='nav-item'>
        <a class='nav-link' href='#'>
            <i class='material-icons'>meeting_room</i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class=" text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!--############################### end Sidebar ############################### -->