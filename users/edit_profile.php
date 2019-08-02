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
        <?php include("sidebarprofile.php"); ?>
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
                        <div class="col-xl-center col-12 mb-4">
                            <div class="card text-primary">
                                <div class="card-header card-bg">
                                    รายละเอียดบัญชี
                                </div>
                                <div class="card-body" style="color:#6C8BA3">
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>คำนำหน้า *</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                                <label class="form-check-label" for="exampleCheck1">นาย</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                <label class="form-check-label" for="exampleCheck1">นาง</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                <label class="form-check-label" for="exampleCheck1">นางสาว</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>ชื่อ *</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <input type="text" class="form-control" id="username" value="สวยเด่น" placeholder="กรุณากรอกชื่อ" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>นามสกุล *</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <input type="text" class="form-control" id="username" value="เป็นสง่า" placeholder="กรุณากรอกคำนำหน้านามสกุล" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>รหัสนิสิต</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <input type="text" class="form-control" id="idstudent" value="6120501234" disabled=true;>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>อีเมล์</span>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                            <input type="text" class="form-control" id="mail" value="S19158">
                                        </div>
                                        <div class="col-xl-5 col-12">

                                            <select class="form-control" id="type_mail">
                                                <option>@hotmail.com</option>
                                                <option>@hotmail.co.th</option>
                                                <option>@outlook.com</option>
                                                <option>@outlook.co.th</option>
                                                <option>@gmail.com</option>
                                                <option>@ku.th</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>เบอร์โทรศัพท์ *</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <input type="text" class="form-control" onkeypress=check_number(); value="0969841857" placeholder="กรุณากรอกเบอร์โทร" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>ชื่อบัญชี</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <input type="text" class="form-control" id="username" value="Torfun" disabled=true;>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>สิทธิ์การเข้าถึง</span>
                                        </div>
                                        <div class="col-xl-9 col-12">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                                <label class="form-check-label" for="exampleCheck1">ผู้บริหารระบบ</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                <label class="form-check-label" for="exampleCheck1">อาจาร์ย+เจ้าหน้าที่</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                                <label class="form-check-label" for="exampleCheck1">นิสิต</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                <label class="form-check-label" for="exampleCheck1">บุคลลภายนอก</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <span onclick="confirm_click();">
                                            <a title="save tools" href="profile.php">
                                                <i class="btn btn-success">บันทึก</i></a></span>
                                        <button type="button" class="btn btn-danger" onclick="window.location.href='profile.php'">ยกเลิก</button>
                                    </div>
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
    function confirm_click() {
        return confirm("Are you sure ?");
    }

    function check_number() {
        num = event.keyCode
        if (num != 13 && (num < 48) || (num > 57)) {
            event.returnValue = false;
        }
    }
</script>