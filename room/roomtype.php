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
        <?php include("sidebarRoomtype.php"); ?>
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
                                        ชนิดห้อง
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
                                                <div class="font-weight-bold  text-uppercase mb-1">ชนิดห้องทั้งหมด</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">4 ชนิด</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">home</i>
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
                                                <div class="font-weight-bold  text-uppercase mb-1">เพิ่มชนิดห้อง
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">+1 ชนิด</div>
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
                                <h6 class="m-0 font-weight-bold text-primary">ชนิดของห้อง</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="รหัสวิชา: activate to sort column descending" style="width: 45px;">ชนิดห้อง</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ชื่อวิชา: activate to sort column ascending" style="width: 18px;">ชื่อย่อ</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 110px;">รายละเอียด</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 36px;">จัดการ</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">ชนิดห้อง</th>
                                                            <th rowspan="1" colspan="1">ชื่อย่อ</th>
                                                            <th rowspan="1" colspan="1">รายละเอียด</th>
                                                            <th rowspan="1" colspan="1">จัดการ</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">ห้องเรียน</td>
                                                            <td>CR</td>
                                                            <td>-</td>
                                                            <td style="text-align:center;">
                                                                <button type="button" class="btn btn-warning btn-sm " onclick="edit_function('ห้องเรียน','CR','-')"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm" onclick="del_function('ห้องเรียน','CR','-')"><i class="far fa-trash-alt"></i></button>
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
                        <div id="modal_editsub" class="modal fade">

                            <form class="modal-dialog modal-lg " method="post" action="processeditsubject.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:rgb(238, 204, 11)">
                                        <h4 class="modal-title" style="color:white">แก้ไขชนิดห้อง</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="type_ed" name="type_ed" placeholder="กรุณากรอกชนิดห้อง" maxlength="8">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ซื่อย่อ:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="initials_ed" name="initials_ed" placeholder="กรุณากรอกชื่อย่อ">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>รายละเอียด:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="description_ed" name="description_ed" placeholder="กรุณากรอกรายละเอียด">
                                                </div>
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
                                        <h4 class="modal-title" style="color:white">เพิ่มชนิดห้อง</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">

                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกชนิดห้อง" maxlength="8">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ซื่อย่อ:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="initials_add" name="initials_add" placeholder="กรุณากรอกชื่อย่อ">
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>รายละเอียด:</span>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="description_add" name="description_add" placeholder="กรุณากรอกรายละเอียด">
                                                </div>

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
                        <div id="modal_delsub" class="modal fade">
                            <form class="modal-dialog modal-lg" method="post" action="processdelsubject.php">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#fa3636">
                                        <h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
                                    </div>
                                    <div class="modal-body" id="addModalBody">
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                                    <span>ชนิดห้อง:</span>
                                                </div>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" id="type_del" name="type_del" disabled=true; placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
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

    function edit_function(type, initials, description) {
        $("#modal_editsub").modal('show');
        $('#type_ed').val(type);
        $('#initials_ed').val(initials);
        $('#description_ed').val(description);
    }

    function del_function(type) {
        $("#modal_delsub").modal('show');
        $('#type_del').val(type);

    }
</script>