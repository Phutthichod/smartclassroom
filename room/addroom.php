<!DOCTYPE html>
<html>
 
<head>
    <!-- ########### header ########### -->
    <?php include("../main/header.php"); ?>
</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!--start Sidebar -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
                </div><br><br>
                <div class="sidebar-brand-text ">SMART<sup>CLASSROOM</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
             <li class="nav-item active">
                <a class="nav-link" href="index.html">
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class='material-icons '>person</i>
                    <span>ผู้ใช้งาน</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการผู้ใช้งาน:</h6>
                        <a class="collapse-item" href="buttons.html">รายชื่อผู้ใช้</a>
                        <a class="collapse-item" href="cards.html">ตำแหน่ง</a>
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
                        <a class="collapse-item " href="utilities-color.html">ปฏิทินวันหยุด</a>
                        <a class="collapse-item" href="utilities-border.html">ปฏิทินปีการศึกษา</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#room"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='material-icons'>home</i>
                    <span>ห้อง</span>
                </a>
                <div id="room" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการห้อง:</h6>
                        <a class="collapse-item " href="utilities-color.html">ห้อง</a>
                        <a class="collapse-item" href="utilities-border.html">ชนิดห้อง</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#acess"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='material-icons'>create</i>
                    <span>อุปกรณ์</span>
                </a>
                <div id="acess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการอุปกรณ์:</h6>
                        <a class="collapse-item " href="utilities-color.html">อุปกรณ์</a>
                        <a class="collapse-item" href="utilities-border.html">ชนิดอุปกรณ์</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subject"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='material-icons'>import_contacts</i>
                    <span>รายวิชา</span>
                </a>
                <div id="subject" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">การจัดการวิชา:</h6>
                        <a class="collapse-item " href="utilities-color.html">หลักสูตร</a>
                        <a class="collapse-item" href="utilities-border.html">รายวิชา</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - logout -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
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
        <!--end Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: #dbe0ff6b;">
                <!-- start Topbar -->
                <?php include("../main/topbar.php"); ?>
                <!-- end Topbar -->
                <!-- #################### start Content #################### -->
                <div class="container-fluid">

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card text-primary" >
                                    <div class="card-header card-bg">
                                        เพิ่มห้อง
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-12 mb-4">
                                <div class="row">
                                    <div class="col-xl-12 col-12">
                                        <div class="card text-primary">
                                            <div class="card-header card-bg">
                                                รูปห้อง
                                            </div>
                                            <div class="card-body">

                                                <div class="box">
                                                    <img src="../img/room.jpg" width="250"height="200" >
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-12 col-12 mb-4">
                                        <div class="card text-primary">
                                           
                                            <div class="card-body">
                                                <div class="row mt-3">

                                                    <div class="col-xl-12 col-12" style="color:#6C8BA3">
                                                        <input type="file" id="input_upload" style="display:none" />
                                                        <button type="button" id="btn_upload" class="btn btn-info btn-sm form-control mb-3">เพิ่มรูปห้อง</button>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-12 mb-4">
                                <div class="card  mb-4">
                                    <form method="post" action='del_ty_add.php'>
                                        <div class="card-body">
                                            <div class="row mb-4" >
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>หมายเลขห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__r" name="username__r"
                                                        placeholder="กรุณากรอกเลขห้อง">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__n_r"
                                                        name="username__n_r" placeholder="กรุณากรอกชื่อห้อง">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อย่อห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__n_r"
                                                        name="username__n_r" placeholder="กรุณากรอกชื่อย่อ">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ตึก:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__n_r"
                                                        name="username__n_r" placeholder="กรุณากรอกตึก">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชั้น:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__n_r"
                                                        name="username__n_r" placeholder="กรุณากรอกชั้น">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>วิทยาเขต:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="username__n_r"
                                                        name="username__n_r" placeholder="กรุณากรอกวิทยาเขต">
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <div class="card-header card-header-table py-3">
                                                    <a href="#" class="btn btn-primary btn-icon-split" id="addsub">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-flag"></i>
                                                        </span>
                                                        <span class="text">กดเพิ่มชนิดห้อง</span>
                                                    </a>
                                                </div>
        
                                                <div class="table-responsive">
                                                    <div class="row">
                                                    </div>
        
                                                    <table class=' table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                                        <thead>
                                                            <tr>
                                                                <th style='text-align:center;'>ชนิดห้อง</th>
                                                                <th style='text-align:center;'>จำนวนสมาชิก</th>
                                                                <th style='text-align:center;'>สืทธิ์การใช้งาน</th>
                                                                <th style='text-align:center;'>จัดการ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style='text-align:center;'>ห้องแลป</td>
                                                                <td style='text-align:center;'>1000</td>
                                                                <td style='text-align:center;'><button type='button'
                                                                        id='btn_comfirm'
                                                                        class='btn btn-danger btn-sm btn-circle'>T</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-success btn-sm btn-circle'>S</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-success btn-sm btn-circle'>P</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-danger btn-sm btn-circle'>O</button>
                                                                </td>
                                                                <td style='text-align:center;'>
                                                                    <button type='button' class='btn btn-warning btn-sm '
                                                                        onclick="editf('124','1','1000','0','1','1','0')"><i
                                                                            class='fas fa-edit'></i></button>
        
                                                                    <button type='button' onclick="delf('124','ห้องแลป')"
                                                                        class='btn btn-danger btn-sm'><i
                                                                            class='far fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style='text-align:center;'>ห้องเรียน</td>
                                                                <td style='text-align:center;'>100</td>
                                                                <td style='text-align:center;'><button type='button'
                                                                        id='btn_comfirm'
                                                                        class='btn btn-success btn-sm btn-circle'>T</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-success btn-sm btn-circle'>S</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-danger btn-sm btn-circle'>P</button><button
                                                                        type='button' id='btn_comfirm'
                                                                        class='btn btn-danger btn-sm btn-circle'>O</button>
                                                                </td>
                                                                <td style='text-align:center;'>
                                                                    <button type='button' class='btn btn-warning btn-sm '
                                                                        onclick="editf('122','2','100','1','1','0','0')"><i
                                                                            class='fas fa-edit'></i></button>
        
                                                                    <button type='button' onclick="delf('122','ห้องเรียน')"
                                                                        class='btn btn-danger btn-sm'><i
                                                                            class='far fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
        
                                                        </tbody>
                                                    </table>
        
                                                </div>
                                            </div>
        
        
                                            <div>
                                                <div class="card-header card-header-table py-3" id="addequipment">
                                                    <a href="#" class="btn btn-primary btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-flag"></i>
                                                        </span>
                                                        <span class="text">กดเพิ่มอุปกรณ์</span>
                                                    </a>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="row">
                                                    </div>
        
                                                    <table class=" table-bordered shadow" id="dataTable" width="100%"
                                                        cellspacing="0">
        
                                                        <thead style="background-color: style= #aaf7fa6b">
                                                            <tr>
                                                                <th style='text-align:center;'>อุปกรณ์</th>
                                                                <th style='text-align:center;'>จำนวนอุปกรณ์</th>
                                                                <th style='text-align:center;'>จัดการ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style='text-align:center;'>โปรเจคเตอร์</td>
                                                                <td style='text-align:center;'>88</td>
                                                                <td style='text-align:center;'>
                                                                    <button type='button' class='btn btn-warning btn-sm '
                                                                        onclick="edit_eq('13','2','88')"><i
                                                                            class='fas fa-edit'></i></button>
        
                                                                    <button type='button' onclick="del_eq('13','โปรเจคเตอร์')"
                                                                        class='btn btn-danger btn-sm'><i
                                                                            class='far fa-trash-alt'></i></button>
                                                                </td>
                                                            </tr>
        
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a> <button type="submit" class="btn btn-success"
                                                        name="submit">ยืนยัน</button></a>
                                                        <a class='nav-link' href='room.php'><button type="button" class="btn btn-danger"
                                                        onclick="del_ty_all()">ยกเลิก</button></a>
                                            </div>
        
                                        </div>
                                    </form>
        
                                </div>
                            </div>    
                            <!--######################################################################-->
                        <div id="modaladdsub" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action='insertinfo.php'>
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">Add Type Room</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">


                                                    <select class="form-control" id="room_type" name="room_type">
                                                        <option>-->กรุณาเลือก<--</option> <option value='1'>ห้องแลป
                                                        </option>
                                                        <option value='2'>ห้องเรียน</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>จำนวนคนที่รองรับ:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" name='num' max="350" min="0" class="form-control"
                                                        placeholder="กรุณากรอกจำนวนคนที่รองรับ">
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-xl-3 col-12 text-right">
                                                    <span>สิทธิ์การเข้าถึง</span>
                                                </div>
                                                <div class="col-xl-9 col-12">

                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch1' value='1'>แอดมิน
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch2' value='1'>อาจารย์
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch3' value='1'>เจ้าหน้าที่
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch4' value='1'>นิสิต
                                                    </label>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submit">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                        <!--######################################################################-->
                        <div id="modaleditsub" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action="edit_room_type.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">แก้ไขชนิดห้อง</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <input type="hidden" name="id" id="id">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">


                                                    <select class="form-control" id="room_type2" name="room_type">
                                                        <option>-->กรุณาเลือก<--</option> <option value='1'>ห้องแลป
                                                        </option>
                                                        <option value='2'>ห้องเรียน</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>จำนวนคนที่รองรับ:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" max="350" min="0" class="form-control" id="num"
                                                        name="num" placeholder="กรุณากรอกจำนวนคนที่รองรับ">
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-xl-3 col-12 text-right">
                                                    <span>สิทธิ์การเข้าถึง</span>
                                                </div>
                                                <div class="col-xl-9 col-12">

                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch1' id="ch1" value='1'>แอดมิน
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch2' id="ch2" value='1'>อาจารย์
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch3' id="ch3" value='1'>เจ้าหน้าที่
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox" name='ch4' id="ch4" value='1'>นิสิต
                                                    </label>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!--######################################################################-->
                        <div id="modaldelsub" class="modal fade">

                            <form class="modal-dialog modal-lg" method="post" action="del_room_type.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <input type="hidden" name="id_d" id="id_d">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="namesubject_d"
                                                        name="namesubject" disabled=true;
                                                        placeholder="กรุณากรอกชื่อวิชา">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--**********************************edit*********************************-->
                        <div id="modaladd_eq" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action='insert_equipment.php'>
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">Add equipment</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>อุปกรณ์:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">


                                                    <select class="form-control" id="name_eq" name="name_eq">
                                                        <option>-->กรุณาเลือก<--</option> <option value='1'>คอมพิวเตอร์
                                                        </option>
                                                        <option value='2'>โปรเจคเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>จำนวนอุปกรณ์:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" name='num_eq' max="350" min="0"
                                                        class="form-control" placeholder="กรุณากรอกจำนวนคนที่รองรับ">
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submit">ยืนยัน</button>
                                        <a class='nav-link' href='room.html'> <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button></a>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!--************************************************************************-->
                        <div id="modaledit_eq" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action="edit_equipment.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">แก้ไขอุปกรณ์</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <input type="hidden" name="id_eq" id="id_eq">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>อุปกรณ์:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">


                                                    <select class="form-control" id="name_eq_2" name="name_eq_2">
                                                        <option>-->กรุณาเลือก<--</option> <option value='1'>คอมพิวเตอร์
                                                        </option>
                                                        <option value='2'>โปรเจคเตอร์</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>จำนวนอุปกรณ์:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" max="350" min="0" class="form-control"
                                                        id="num_eq_2" name="num_eq_2"
                                                        placeholder="กรุณากรอกจำนวนอุปกรณ์">
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success"
                                            name="submitedit_eq">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!--*************************************delete*********************************-->
                        <div id="modaldel_eq" class="modal fade">

                            <form class="modal-dialog modal-lg" method="post" action="del_room_eq.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <input type="hidden" name="id_d" id="id_eq_d">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>อุปกรณ์</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="name_eq_d" name="name"
                                                        disabled=true; placeholder="กรุณากรอกชื่อวิชา">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--*************************************delete*********************************-->
                        <div id="modaldel_ty_all" class="modal fade">
                            <form class="modal-dialog modal-lg" method="post" >
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการออก</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <a class='nav-link' href='room.html'></a><button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button></a>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--*************************************delete*********************************-->
                        <div id="modaldel_ty_add" class="modal fade">
                            <form class="modal-dialog modal-lg" method="post" action="del_ty_add.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการเพื่มห้อง</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        </div>

                    </div>

                </div>
                <!-- #################### end Content #################### -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- ########### footer ########### -->
    <?php include("../main/footer.php"); ?>
</body>

</html>
<script>
    $(".table").DataTable();
	
    $("#btn_upload").click(function () {
        $("#input_upload").click();
    });

    $("#btn_info").click(function () {
        $("body").append(infoModal);
        $("#infoModal").modal('show');
    });

    $("#btn_pass").click(function () {
        $("body").append(passModal);
        $("#passModal").modal('show');
    });
</script>
</script>
<script>
    $(".table").DataTable();
    // $( document ).ready(function() {

    //     $('#addUser').click(function(){
    //         console.log('fffff')
    //     });
    // });
    $(document).ready(function () {
        console.log("ready!");
        $("#addsub").click(function () {
            $("#modaladdsub").modal('show');
        });
        $("#addequipment").click(function () {
            $("#modaladd_eq").modal('show');
        });


        $('.editbtn').on('click', function () {

        });
    });
    function editf(id, id_t, num, licT, licS, licP, licO) {
        $("#modaleditsub").modal('show');
        $('#id').val(id);
        $('#room_type2').val(id_t);
        $('#num').val(num);
        $('#ch1').val(licT);
        $('#ch2').val(licS);
        $('#ch3').val(licP);
        $('#ch4').val(licO);
    }
    function delf(id, name) {
        $("#modaldelsub").modal('show');
        $('#id_d').val(id);
        $('#namesubject_d').val(name);

    }
    function edit_eq(id, id_t, num) {
        $("#modaledit_eq").modal('show');
        $('#id_eq').val(id);
        $('#name_eq_2').val(id_t);
        $('#num_eq_2').val(num);

    }
    function del_eq(id, name) {
        $("#modaldel_eq").modal('show');
        $('#id_eq_d').val(id);
        $('#name_eq_d').val(name);

    }
    function del_ty_all() {
        $("#modaldel_ty_all").modal('show');
    }
    function del_ty_add() {
        $("#modaldel_ty_add").modal('show');
    }
    function openAttachment() {
        document.getElementById('attachment').click();
    }

    function fileSelected(input) {
        document.getElementById('btnAttachment').value = "File: " + input.files[0].name
    }



</script>
