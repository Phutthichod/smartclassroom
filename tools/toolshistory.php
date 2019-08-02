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
                                <div class="card text-primary">
                                    <div class="card-header card-bg">
                                        ประวัติการใช้อุปกรณ์
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
                                                รูปอุปกรณ์
                                            </div>
                                            <div class="card-body">
                                                <div class="box">
                                                    <img src="../img/power.png" width="310" alt="" class="box-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-8 col-12 mb-4">
                                <div class="card text-primary">
                                    <div class="card-header card-bg">
                                        รายละเอียดอุปกรณ์
                                    </div>
                                    <div class="card-body" style="color:#6C8BA3">
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ชื่ออุปกรณ์</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="rank" value="เครื่องสำรองไฟฟ้า" disabled=true;>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ชื่อย่อ</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="firstname" value="ไฟฟ้า" disabled=true;>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>รหัสครุภัณฑ์</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="lastname" value="7440-056" disabled=true;>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ชนิด</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="mail" value="เครื่องใช้ไฟฟ้า" disabled=true;>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ห้องที่มีอุปกรณ์</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="mail" value="E8405" disabled=true;>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-table py-3">
                                <h6 class="m-0 font-weight-bold text-primary">ประวัติการใช้อุปกรณ์</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="วันที่เริ่ม: activate to sort column descending" style="width: 18px;">วันที่เริ่ม</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="วันที่สิ้นสุด: activate to sort column ascending" style="width: 18px;">วันที่สิ้นสุด </th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ระยะเวลา: activate to sort column ascending" style="width: 36px;">ระยะเวลา</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ห้อง: activate to sort column ascending" style="width: 36px;">ห้อง</th>
                                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หมายเหตุ: activate to sort column ascending" style="width: 100px;">หมายเหตุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>20/05/62</td>
                                                            <td>20/06/62</td>
                                                            <td>1 เดือน</td>
                                                            <td>E8406</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21/06/62</td>
                                                            <td>26/06/62</td>
                                                            <td>6 วัน</td>
                                                            <td>E8401</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="paginate_button page-item next disabled">
                                    <button class="w3-btn w3-green w3-border w3-border-green w3-text-white w3-round-large float-right" onClick="window.location.href='./tool.php'">กลับไปยังหน้าอุปกรณ์</button>
                                </div>
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
</script>