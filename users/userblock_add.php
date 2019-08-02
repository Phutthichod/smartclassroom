<<!DOCTYPE html>
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
                      <h5>บล็อคผู้ใช้</h5>
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
                          รูปโปรไฟล์
                        </div>
                        <div class="card-body">

                          <div class="box">
                            <img src="../img/profile.jpg" alt="" class="box-img">
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <br>

                </div>

                <div class="col-xl-8 col-12 mb-4">
                  <div class="card text-primary">
                    <div class="card-header card-bg">
                      รายละเอียดบัญชี
                    </div>
                    <div class="card-body" style="color:#6C8BA3">
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>คำนำหน้า</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                            <label class="form-check-label" for="exampleCheck1">นาย</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                            <label class="form-check-label" for="exampleCheck1">นาง</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                            <label class="form-check-label" for="exampleCheck1">นางสาว</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>ชื่อ</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="firstname" value="สวยเด่น" disabled>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>นามสกุล</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="lastname" value="เป็นสง่า" disabled>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>รหัสนิสิต</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="firstname" value="6120501224" disabled>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>อีเมล์</span>
                        </div>
                        <div class="col-xl-4 col-12">
                          <input type="text" class="form-control" id="mail" value="S19158" disabled>
                        </div>
                        <div class="col-xl-5 col-12">

                          <select class="form-control" id="type_mail" disabled>
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
                          <span>เบอร์โทรศัพท์</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" name="textfield" value="0969841857" onkeypress=check_number(); disabled>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>ชื่อบัญชี</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="username" value="Torfun" disabled>
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-xl-8 col-12 mb-4">
                  <div class="card text-primary">
                    <div class="card-header card-bg">
                      รายละเอียดการบล็อค
                    </div>
                    <div class="card-body" style="color:#6C8BA3">
                      <div class="row mb-4 ">
                        <div class="col-xl-3 col-12 text-right">
                          <span>เริ่ม</span>
                        </div>
                        <div class="col-xl-4 col-12 ">
                          <input type="text" class="form-control" id="start" value="">
                        </div>
                        <span>เวลา</span>
                        <div class="col-xl-4 col-12 ">
                          <input type="text" class="form-control" id="time_start" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>สิ้นสุด</span>
                        </div>
                        <div class="col-xl-4 col-12">
                          <input type="text" class="form-control" id="start" value="">
                        </div>
                        <span>เวลา</span>
                        <div class="col-xl-4 col-12">
                          <input type="text" class="form-control" id="time_start" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>ระยะเวลา</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" name="textfield">
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                          <span>หมายเหตุ</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="username">
                        </div>
                      </div>

                      <div class="row mb-4">
                        <div class="col-xl-12 col-12 text-right">
                          <button type="button" class="btn btn-success " onclick="return confirm('Are you sure?')" data-dismiss="modal">ยืนยัน</button>
                          <button type="button" class="btn btn-danger " onclick="window.location.href='userblock.php'" data-dismiss="modal">ยกเลิก</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
    $('#modalRemoveUserType').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })

    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).ready(function() {
      console.log("ready!");
      $("#btn_delete").click(function() {
        swal({
          title: "ยืนยันการลบ ",
          icon: "warning",
          buttons: ["ยกเลิก", "ยืนยัน"],
        });
      });
      $("#btn_delete1").click(function() {
        swal({
          title: "ยืนยันการลบ ",
          icon: "warning",
          buttons: ["ยกเลิก", "ยืนยัน"],
        });
      });
      $("#btn_delete2").click(function() {
        swal({
          title: "ยืนยันการลบ ",
          icon: "warning",
          buttons: ["ยกเลิก", "ยืนยัน"],
        });
      });

    });
  </script>