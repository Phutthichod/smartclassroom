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
        <?php include("sidebarsubject.php"); ?>
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
                                <div class="card">
                                    <div class="card-header card-bg text-primary">
                                        รายวิชา
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-12 mb-4">
                                <div class="card border-left-primary card-color-three shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="font-weight-bold  text-uppercase mb-1">รายวิชา</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">1 วิชา</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">library_books</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-12 mb-4">
                                <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addsub" style="cursor:pointer;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="font-weight-bold  text-uppercase mb-1">เพิ่มรายวิชาใหม่
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">+1 วิชา</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">add_circle</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-table py-3">
                                <h6 class="m-0 font-weight-bold text-primary">รายชื่อวิชาในระบบ</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="รหัสวิชา: activate to sort column descending" style="width: 18px;">รหัสวิชา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ชื่อวิชา: activate to sort column ascending" style="width: 109px;">ชื่อวิชา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 46px;">หลักสูตร</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 46px;">สถานะ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 36px;">จัดการ</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">รหัสวิชา</th>
                                                            <th rowspan="1" colspan="1">ชื่อวิชา</th>
                                                            <th rowspan="1" colspan="1">หลักสูตร</th>
                                                            <th rowspan="1" colspan="1">สถานะ</th>
                                                            <th rowspan="1" colspan="1">จัดการ</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">02204271</td>
                                                            <td>Object-Oriented Programming</td>
                                                            <td>วศ.บ. วิศวกรรมคอมพิวเตอร์</td>
                                                            <td style="text-align:center;">
                                                                <input type="checkbox" checked data-toggle="toggle" data-on="เปิด" data-off="ปิด" data-onstyle="success" data-offstyle="danger" data-size="small">
                                                            </td>
                                                            <td style="text-align:center;">
                                                                <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('02204271','Object-Oriented Programming')"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="delfunction('02204271','Object-Oriented Programming')"><i class="far fa-trash-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ########################################start Model edit#######################################-->
                        <div id="modaleditsub" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action="processeditsubject.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:rgb(238, 204, 11)">
                                        <h4 class="modal-title" style="color:white">แก้ไขรายวิชา</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>รหัสวิชา:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="idsubject_e" name="idsubject_e" placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อวิชา:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="namesubject_e" name="namesubject_e" placeholder="กรุณากรอกชื่อวิชา">
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>หลักสูตร</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <select class="form-control" id="course_e" name="course_e">
                                                        <option>วศ.บ. วิศวกรรมคอมพิวเตอร์</option>
                                                        <option>วศ.บ. วิศวกรรมเครื่องกล</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- ########################################start Model add#######################################-->
                        <div id="modaladdsub" class="modal fade">

                            <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">เพิ่มรายวิชา</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>รหัสวิชา:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="idsubject" name="idsubject" placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อวิชา:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="namesubject" name="namesubject" placeholder="กรุณากรอกชื่อวิชา">
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>หลักสูตร</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <select class="form-control" id="course_e" name="course_e">
                                                        <option>-</option>
                                                        <option>วศ.บ. วิศวกรรมคอมพิวเตอร์</option>
                                                        <option>วศ.บ. วิศวกรรมเครื่องกล</option>
                                                    </select> </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- ########################################start Model delect#######################################-->
                        <div id="modaldelsub" class="modal fade">

                            <form class="modal-dialog modal-lg" method="post" action="processdelsubject.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>รหัสวิชา:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="idsubject_d" name="idsubject" disabled=true; placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อวิชา:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="namesubject_d" name="namesubject" disabled=true; placeholder="กรุณากรอกชื่อวิชา">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>

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
    <?php include("../main/footer.php"); ?>
</body>

</html>
<script>
    $(".table").DataTable();
    $(document).ready(function() {
        console.log("ready!");
        $("#addsub").on('click', function() {
            $("#modaladdsub").modal('show');
        });
    });

    function editfunction(ids, name) {
        $("#modaleditsub").modal('show');
        $('#idsubject_e').val(ids);
        $('#namesubject_e').val(name);
    }

    function delfunction(ids, name) {
        $("#modaldelsub").modal('show');
        $('#idsubject_d').val(ids);
        $('#namesubject_d').val(name);
    }
</script>