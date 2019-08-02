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
        <?php include("../main/sidebar.php"); ?>
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
                                        ชนิดอุปกรณ์
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2 card-color-three">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">

                                            <div class="col mr-2">

                                                <div class="text-xs font-weight-bold =text-uppercase mb-1">
                                                    <h5>ชนิดอุปกรณ์ทั้งหมด</h5>
                                                </div>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h4>4 ชนิด</h4>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">build</i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2 card-color-two" id="addtoolType" style="cursor:pointer">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1 ">
                                                    <h5>เพิ่มชนิดอุปกรณ์</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h4>+1 ชนิด</h4>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <i class="material-icons icon-big">add_circle</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <!-- DataTales toolType -->
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-table py-3">
                                <h6 class="m-0 font-weight-bold text-primary">ชนิดของอุปกรณ์</h6>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ชื่อชนิดอุปกรณ์</th>
                                                <th>ชื่อย่อ</th>
                                                <th>รายละเอียด</th>
                                                <th>คำสั่ง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>เครื่องอัลตร้าซาวด์</td>
                                                <td>Ultrasound</td>
                                                <td>ตรวจวินิจฉัยทางการแพทย์โดยใช้คลื่นเสียงความถี่สูงจับภาพอวัยวะหรือส่วนต่าง ๆ</td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('เครื่องอัลตร้าซาวด์','Ultrasound','ตรวจวินิจฉัยทางการแพทย์โดยใช้คลื่นเสียงความถี่สูงจับภาพอวัยวะหรือส่วนต่าง ๆ')"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('เครื่องอัลตร้าซาวด์')"><i class="far fa-trash-alt"></i></button>
                                                </td>

                                            <tr>
                                                <td>เครื่องตรวจนับเม็ดเลือด</td>
                                                <td>Auto Hematology Analyzer</td>
                                                <td>ครื่องตรวจนับเซลล์เม็ดเลือดใช้ในการวินิจฉัยโรคเลือดและโรคอื่นๆอีกหลายชนิด</td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('เครื่องตรวจนับเม็ดเลือด','Auto Hematology Analyzer','เครื่องตรวจนับเซลล์เม็ดเลือดใช้ในการวินิจฉัยโรคเลือดและโรคอื่นๆอีกหลายชนิด')"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('เครื่องตรวจนับเม็ดเลือด')"><i class="far fa-trash-alt"></i></button>
                                                </td>

                                            <tr>
                                                <td>วัสดุเย็บแผล</td>
                                                <td>Suture</td>
                                                <td>ใช้เย็บแผลตามลักษณะของแผล</td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('วัสดุเย็บแผล','Suture','ใช้เย็บแผลตามลักษณะของแผล')"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('วัสดุเย็บแผล')"><i class="far fa-trash-alt"></i></button>
                                                </td>

                                            <tr>
                                                <td>เครื่องวัดความดันโลหิต สำหรับสัตว์</td>
                                                <td>Pet Doppler</td>
                                                <td>ใช้ตรวจวัดความดันโลหิตของสัตว์</td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning btn-sm " onclick="editfunction('เครื่องวัดความดันโลหิต สำหรับสัตว์','Pet Doppler','ใช้ตรวจวัดความดันโลหิตของสัตว์')"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="deletefunction('เครื่องวัดความดันโลหิต สำหรับสัตว์')"><i class="far fa-trash-alt"></i></button>
                                                </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- The Modal -->
                <!-- #################################################################################################################  -->
                <div class="modal fade" id="modaladdtoolType">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="bg-primary modal-header">
                                <h4 class="modal-title" style="color:white">เพิ่มชนิดของอุปกรณ์</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ชื่อชนิดอุปกรณ์ </label>
                                        <input type="text" class="form-control" id="recipient-name" placeholder="กรุณากรอกชื่อชนิดอุปกรณ์">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">ชื่อย่อ </label>
                                        <input type="text" class="form-control" id="recipient-name" placeholder="กรุณากรอกชื่อย่อของชนิดอุปกรณ์">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">รายละเอียด </label>
                                        <textarea class="form-control" id="message-text" placeholder="กรุณากรอกรายละเอียด"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">เพิ่ม</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- #################################################################################################################  -->
                <div class="modal fade" id="modalRemovetoolType">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="bg-danger modal-header">
                                <h4 class="modal-title" style="color:white">ยืนยันการลบชนิดอุปกรณ์</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <input type="text" class="form-control" id="delete_typetool" disabled=true; required>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">ยืนยัน</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- #################################################################################################################  -->
                <div class="modal fade" id="modalChangetoolType">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="background-color:rgb(238, 204, 11)">
                                <h4 class="modal-title" style="color:white">แก้ไขชนิดอุปกรณ์</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ชนิดของอุปกรณ์ </label>
                                        <input type="text" class="form-control" name="nametype" id="nametype" placeholder="กรุณากรอกชื่อชนิดอุปกรณ์" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="short-name" class="col-form-label">ชื่อย่อ </label>
                                        <input type="text" class="form-control" name="shortnametype" id="shortnametype" placeholder="กรุณากรอกชื่อย่อของชนิดอุปกรณ์" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">รายละเอียด</label>
                                        <textarea type="text" class="form-control" name="note" id="note" placeholder="กรุณากรอกรายละเอียด"></textarea>
                                    </div>

                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">ยืนยัน</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
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
    $(document).ready(function() {
        $("#addtoolType").click(function() {
            $("#modaladdtoolType").modal();
        });
    });

    function editfunction(name, initials, note) {
        $("#modalChangetoolType").modal('show');
        $('#nametype').val(name);
        $('#shortnametype').val(initials);
        $('#note').val(note);
    }

    function deletefunction(name) {
        $("#modalRemovetoolType").modal('show');
        $('#delete_typetool').val(name);

    }
</script>