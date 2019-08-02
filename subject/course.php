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
        <?php include("sidebarcourse.php"); ?>
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
                                                <div class="font-weight-bold  text-uppercase mb-1">หลักสูตร</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> 2 หลักสูตร</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">library_books</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-12 mb-4">
                                <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addcourse" style="cursor:pointer;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="font-weight-bold  text-uppercase mb-1">เพิ่มหลักสูตรใหม่
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">+1 หลักสูตร</div>
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
                                <h6 class="m-0 font-weight-bold text-primary">รายชื่อหลักสูตรในระบบ</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTableCourse" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <colgroup>
                                                        <col width="35%">
                                                        <col width="20%">
                                                        <col span="2" width="10%">
                                                        <col width="15%">
                                                    </colgroup>
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="รหัสวิชา: activate to sort column descending" style="width: 109px;">หลักสูตร</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ชื่อวิชา: activate to sort column ascending" style="width: 109px;">ชื่อย่อหลักสูตร</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 109px;">ปีที่เริ่ม</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 46px;">ปีที่สิ้นสุด</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 46px;">หมายเหตุ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 46px;">จัดการ</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>

                                                            <th rowspan="1" colspan="1">หลักสูตร</th>
                                                            <th rowspan="1" colspan="1">ชื่อย่อหลักสูตร</th>
                                                            <th rowspan="1" colspan="1">ปีที่เริ่ม</th>
                                                            <th rowspan="1" colspan="1">ปีที่สิ้นสุด</th>
                                                            <th rowspan="1" colspan="1">หมายเหตุ</th>
                                                            <th rowspan="1" colspan="1">จัดการ</th>

                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td>วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเครื่องกล</td>
                                                            <td>วศ.บ. วิศวกรรมเครื่องกล</td>
                                                            <td style="text-align:center;">2560</td>
                                                            <td style="text-align:center;">2565</td>
                                                            <td>-</td>
                                                            <td style="text-align:center;">
                                                                <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเครื่องกล','วศ.บ. วิศวกรรมเครื่องกล','2560','2565','-')"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมเครื่องกล')"><i class="far fa-trash-alt"></i></button>
                                                            </td>

                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td>วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์</td>
                                                            <td>วศ.บ. วิศวกรรมคอมพิวเตอร์</td>
                                                            <td style="text-align:center;">2560</td>
                                                            <td style="text-align:center;">2565</td>
                                                            <td>-</td>
                                                            <td style="text-align:center;">
                                                                <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์','วศ.บ. วิศวกรรมคอมพิวเตอร์','2560','2565','-')"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('วิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์')"><i class="far fa-trash-alt"></i></button>
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
                        <!-- start Model -->
                        <!-- ################################### modal edit course ################################### -->
                        <div id="modaleditcourse" class="modal fade">
                            <form class="modal-dialog modal-lg " action='#' method="POST">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:rgb(238, 204, 11)">
                                        <h4 class="modal-title" style="color:white">แก้ไขหลักสูตร</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อหลักสูตร :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="namecourse" id="namecourse" placeholder="กรุณากรอกชื่อหลักสูตร" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อย่อหลักสูตร :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="initialscourse" id="initialscourse" placeholder="กรุณากรอกชื่อย่อหลักสูตร" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ปีที่เริ่ม-สิ้นสุดหลักสูตร :</span>
                                                </div>
                                                <div>
                                                    <span>เริ่ม</span>
                                                </div>
                                                <div class="col-lg-2 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="start_time" id="start_time" placeholder="เริ่ม" required maxlength="4">
                                                </div>
                                                <div>
                                                    <span>สิ้นสุด</span>
                                                </div>
                                                <div class="col-lg-2 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="end_time" id="end_time" placeholder="สิ้นสุด" required maxlength="4">
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>หมายเหตุ :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="note" id="note" placeholder="หมายเหตุ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="ยืนยัน">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- ################################### modal add course ################################### -->
                        <div id="modaladdcourse" class="modal fade">
                            <form action="#" class="modal-dialog modal-lg " method="POST">

                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#3E49BB">
                                        <h4 class="modal-title" style="color:white">เพิ่มหลักสูตร</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อหลักสูตร :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="namecourse" placeholder="กรุณากรอกชื่อหลักสูตร" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อย่อหลักสูตร :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="initialscourse" placeholder="กรุณากรอกชื่อย่อหลักสูตร" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ปีที่เริ่ม-สิ้นสุดหลักสูตร :</span>
                                                </div>
                                                <div>
                                                    <span>เริ่ม</span>
                                                </div>
                                                <div class="col-lg-2 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="start_time" placeholder="เริ่ม" required maxlength="4">
                                                </div>
                                                <div>
                                                    <span>สิ้นสุด</span>
                                                </div>
                                                <div class="col-lg-2 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="end_time" placeholder="สิ้นสุด" required maxlength="4">
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>หมายเหตุ :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="note" placeholder="หมายเหตุ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="ยืนยัน">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- ################################### modal delete course ################################### -->
                        <div id="modaldeletecourse" class="modal fade">
                            <form action="#" class="modal-dialog modal-lg " method="POST">

                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(219, 22, 22);">
                                        <h4 class="modal-title" style="color:white">ยืนยันการลบหลักสูตร</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชื่อหลักสูตร :</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="namecourse_delete" placeholder="กรุณากรอกชื่อหลักสูตร" disabled=true; required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="ยืนยัน">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <!-- end Model -->
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

        $("#addcourse").click(function() {
            $("#modaladdcourse").modal();
        });

    });

    function editfunction(name, initials, start, end, note) {
        $("#modaleditcourse").modal('show');
        $('#namecourse').val(name);
        $('#initialscourse').val(initials);
        $('#start_time').val(start);
        $('#end_time').val(end);
        $('#note').val(note);
    }

    function deletefunction(name) {
        $("#modaldeletecourse").modal('show');
        $('#namecourse_delete').val(name);

    }
</script>